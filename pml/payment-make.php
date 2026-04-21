<?php

ini_set('display_errors', 1);
error_reporting(E_ERROR | E_PARSE);
error_reporting(-1);

require '../composer/vendor/autoload.php';

// Set your X-API-KEY with the API key from the Customer Area.
$client = new \Adyen\Client();
$client->setEnvironment(\Adyen\Environment::LIVE, '5ab730a2fa05896b-simedarby');
$client->setXApiKey('AQErhmfxJo7HYxNCw0m/n3Q5qf3Ve4JACLdLSmdP3A4y85a74wiqfMPxcrsa9xDBXVsNvuR83LVYjEgiTGAH-615697PlkM2EKKZd7MWzBqQ4vZx9LdnD17KRQ0yryeQ=-(QJrEg9ug3?:+g8k');
$service = new \Adyen\Service\Checkout($client);

$paymentMethod = !empty($_POST['paymentData']) ? strip_tags(trim($_POST['paymentData'])) : '';
$uid = !empty($_POST['uid']) ? strip_tags(trim($_POST['uid'])) : '';
$decodedText = html_entity_decode($paymentMethod);
$paymentMethod = json_decode($decodedText, true);

$params = array(
    "paymentMethod" => $paymentMethod,
    "amount" => array(
        "currency" => "SGD",
        "value" => 500.00
    ),
    "shopperInteraction" => "Ecommerce",
    "reference" => "BMWSG-X1_PML",
    "merchantAccount" => "PML_Sales_ECOM"
);

$adyenResult = $service->payments($params);

// Check if further action is needed
if (array_key_exists("action", $adyenResult)){
    // Pass the action object to your front end
    echo $adyenResult["action"];
} else {
    // No further action needed, pass the resultCode to your front end
    if($adyenResult['resultCode'] == 'Authorised'){
        $status = 'success';
        salesforceEmail($uid, $status, $adyenResult);
    } else if($adyenResult['resultCode'] == 'Cancelled'){
        $status = 'cancelled';
        salesforceEmail($uid, $status, $adyenResult);
    } else if($adyenResult['resultCode'] == 'Refused'){
        $status = 'refused';
        salesforceEmail($uid, $status, $adyenResult);
    } else {
        $status = 'error';
        salesforceEmail($uid, $status, $adyenResult);
    }
}

function salesforceEmail($uid, $status, $adyenResult){
    
    // Get accessToken
    $getUrl = 'https://login.salesforce.com/services/oauth2/token';
    $data1 = array(
        'grant_type' => 'password',
        'client_id' => '3MVG9ZL0ppGP5UrCDO_RefVJRyfnzTekoZRxtFfnbyuBtfX5pbdWYAeDLXslL0jTkol6fqn6JSmtrPE76t6_F',
        'client_secret' => '65AFF5DCD4870FFC412C3969209212EB3D8F27064C564041F3CE0E50B9F8B023',
        'username' => 'salesforce_support@bmwasia.com',
        'password' => 'TechmatrixSG!2022'
    );
    // $getUrl = 'https://test.salesforce.com/services/oauth2/token';
    // $data1 = array(
    //     'grant_type' => 'password',
    //     'client_id' => '3MVG9Gdzj3taRxuOIuKjkZq1sOEP8pzWOW4SOT3p33uImbzxVxH7GbXM6qSCSSe5NfXF4L_zbsEdnvdY10nm5',
    //     'client_secret' => '6E2D5F3891B845574E266011B5951618E069AFEFE3A20B6A36C9A28E1457FBEF',
    //     'username' => 'salesforce_support@bmwasia.com.fullcopy',
    //     'password' => 'TMCSingapore2021!'
    // );

    $ch = curl_init($getUrl); 
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data1));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
    $result = curl_exec($ch);
    $jsonDecode = json_decode($result);
    $accessToken = $jsonDecode->access_token;
    
    if (curl_errno($ch)) {
        $return_data['status'] 	= 'error';
        echo json_encode($return_data); 
    } else {
        $date = new DateTime('now', new DateTimeZone('Asia/Singapore')); 
        $date = $date->format("n/j/Y  h:i:s A");
        
        if($status == 'success'){
            $paymentStatus = 'Paid';
            $paymentMade = 'true';
        } else {
            $paymentStatus = 'Unpaid';
            $paymentMade = 'false';
        }

        $patchUrl = 'https://bmw-asia.my.salesforce.com/services/data/v52.0/sobjects/Lead/' . $uid;
        //$patchUrl = 'https://bmw-asia--fullcopy.sandbox.my.salesforce.com/services/data/v52.0/sobjects/Lead/' . $uid;
        $data2 = array(
            "Payment_Reference__c" => $adyenResult['pspReference'],
            "Payment_Made__c" => $paymentMade,
            "Payment_Status__c" => $paymentStatus,
            "Amount__c" => 500.00
        );
        $insertData = json_encode($data2);
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $patchUrl);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PATCH');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $insertData);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Authorization: Bearer ' . $accessToken
        ));
        $result = curl_exec($ch);
        $resultStatus = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        if ($resultStatus == 204 && $status == 'success') {

            $return_data['status'] 	= 'success';
            $return_data['refCode'] = $adyenResult['pspReference'];
            echo json_encode($return_data);

       } else if ($resultStatus == 204 && $status == 'cancelled') {
            
            $return_data['status'] 	= 'cancelled';
            echo json_encode($return_data);

       } else if ($resultStatus == 204 && $status == 'refused') {
            
            $return_data['status'] 	= 'refused';
            echo json_encode($return_data);

       } else {
            $return_data['status'] 	= 'error';
            echo json_encode($return_data);   
       }

    }

    curl_close($ch);
}


?>