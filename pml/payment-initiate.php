<?php

/*
ini_set('display_errors', 1);
error_reporting(E_ERROR | E_PARSE);
error_reporting(-1);
*/

require '../composer/vendor/autoload.php';

$client = new \Adyen\Client();
$client->setEnvironment(\Adyen\Environment::LIVE, '5ab730a2fa05896b-simedarby');
$client->setXApiKey('AQErhmfxJo7HYxNCw0m/n3Q5qf3Ve4JACLdLSmdP3A4y85a74wiqfMPxcrsa9xDBXVsNvuR83LVYjEgiTGAH-615697PlkM2EKKZd7MWzBqQ4vZx9LdnD17KRQ0yryeQ=-(QJrEg9ug3?:+g8k');
$service = new \Adyen\Service\Checkout($client);

$params = array(

    "countryCode" => "SG",
    "shopperLocale" => "en-US",
    "amount" => array(
        "currency" => "SGD",
        "value" => 500.00
    ),
    "channel" => "Web",
    "merchantAccount" => "PML_Sales_ECOM"
);

$result = $service->paymentMethods($params);
echo json_encode($result);