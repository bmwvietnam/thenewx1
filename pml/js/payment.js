$(document).ready(function(){
    
    var responseData;

    $.ajax({
        url: "payment-initiate.php",
        type: "GET",
        success: function (response) {
            responseData = $.parseJSON(response);
            const configuration = {
                paymentMethodsResponse: responseData,
                clientKey: "live_BRIUGIYTIJGYVHQVLGI735SNFQBNCEDS",
                locale: "en-US",
                environment: "live",
                onSubmit: (state, dropin) => {
                    makePayment(state.data)
                   .then(response => {
                        if (response.action) {
                            dropin.handleAction(response.action);
                        } else {
                            showFinalResult(response);
                        }
                    })
                   .catch(error => {
                        throw Error(error);
                   });
                },
                paymentMethodsConfiguration: {
                    card: {
                        hasHolderName: true,
                        holderNameRequired: true,
                        enableStoreDetails: true,
                        hideCVC: false,
                        name: 'Credit or debit card',
                        onSubmit: (state) => {
                            
                            var currentURL = window.location.href;
                            var url = new URL(currentURL);
                            var uid = url.searchParams.get("LeadCaseSafeID");
                            
                            var paymentData = JSON.stringify(state.data.paymentMethod);
                            $.ajax({
                                url: "payment-make.php",
                                type: "POST",
                                data: {
                                    'paymentData' : paymentData,
                                    'uid' : uid
                                },
                                success: function(response) {
                                    var responseData = $.parseJSON(response);
                                    if(responseData.status == 'success'){
                                        window.parent.location.href = 'https://bethefirst.bmw.com.sg/theX1/pml/thankyou.php?ref=' + responseData.refCode;
                                    } else if(responseData.status == 'cancelled'){
                                        window.parent.location.href = 'https://bethefirst.bmw.com.sg/theX1/pml/cancelled.php';
                                    } else if(responseData.status == 'refused'){
                                        window.parent.location.href = 'https://bethefirst.bmw.com.sg/theX1/pml/refused.php';
                                    } else if(responseData.status == 'error'){
                                        window.parent.location.href = 'https://bethefirst.bmw.com.sg/theX1/pml/error.php'
                                    }
                                }
                            })
                        }, // onSubmit configuration for card payments. Overrides the global configuration.
                    }
                }
            };
            
            const checkout = new AdyenCheckout(configuration);
            const dropin = checkout.create('dropin', {

                openFirstPaymentMethod: true
        
            }).mount('#dropin-container');
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
        }
    });
    
});