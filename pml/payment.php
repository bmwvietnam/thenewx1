<?php
/*
    $AUTH_USER = 'bmwsgix3staging';
    $AUTH_PASS = 'bmwsgix3staging2021';
    header('Cache-Control: no-cache, must-revalidate, max-age=0');
    $has_supplied_credentials = !(empty($_SERVER['PHP_AUTH_USER']) && empty($_SERVER['PHP_AUTH_PW']));
    $is_not_authenticated = (
        !$has_supplied_credentials ||
        $_SERVER['PHP_AUTH_USER'] != $AUTH_USER ||
        $_SERVER['PHP_AUTH_PW']   != $AUTH_PASS
    );
    if ($is_not_authenticated) {
        header('HTTP/1.1 401 Authorization Required');
        header('WWW-Authenticate: Basic realm="Access denied"');
        exit;
    }
*/
?>


<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <meta http-equiv="Content-Security-Policy" content="connect-src 'self'; script-src 'self' 'unsafe-inline' 'unsafe-eval' https:"> -->
        <title>BMW X1: reserve now | bmw.com.sg</title>
        <meta name="description" content="Be among the first to reserve and enjoy exhilarating benefits on the new BMW i7 and 7 Series.">
        <meta property="og:url" content="https://bethefirst.bmw.com.sg/the7/pml/" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="BMW i7 Sedan & The New 7" />
        <meta property="og:description" content="Be the first to experience BMW i7 Sedan & The New 7." />
        <meta property="og:image" content="https://bethefirst.bmw.com.sg/the7/images/og-facebook.jpg" />
        <!-- Bootstrap CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://checkoutshopper-live.adyen.com/checkoutshopper/sdk/4.7.4/adyen.css" integrity="sha384-9+LIlWSGAUQhUPJw1dx4xYnF4Z7wNrR+PqDBpWokR+LuOjpusXig9yZsqMslp3Er" crossorigin="anonymous">
        <link href="css/custom.css" rel="stylesheet">
        
        <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
        <link rel="manifest" href="site.webmanifest">
    </head>
    <body>
        <section id="payment">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="mb-4">PAYMENT FORM.</h2>
                        <p class="mb-4"><strong>Booking fee: S$500.00</strong></p>
                        <div id="dropin-container"></div>
                    </div>
                </div>
            </div>
        </section>
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/slick.min.js"></script>
        
        <script src="https://checkoutshopper-live.adyen.com/checkoutshopper/sdk/4.7.4/adyen.js" integrity="sha384-lIc4bWIO4g4PCmTLvsRFsCBCszdsZiUJSqxuBUDh5IQjyBW+Ng4YywRTtpMRkHMM" crossorigin="anonymous"></script>
        
        <script src="js/payment.js"></script>
    </body>
</html>

