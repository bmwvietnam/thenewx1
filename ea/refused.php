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
        <title>BMW X1: Payment refused | bmw.com.sg</title>
        <meta name="description" content="Your transaction was not accepted by the system. Please check your details and try again.">
        <meta property="og:url" content="https://bethefirst.bmw.com.sg/the7/pml/" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="BMW X1" />
        <meta property="og:description" content="Be among the first to reserve and enjoy exhilarating benefits on the new BMW X1." />
        <meta property="og:image" content="https://bethefirst.bmw.com.sg/the7/images/og-facebook.jpg" />
        <!-- Bootstrap CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/slick.css" rel="stylesheet">
        <link href="css/aos.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">
        
        <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
        <link rel="manifest" href="site.webmanifest">
        
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-WKN3BK6B2L"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'G-WKN3BK6B2L');
        </script>
        
        <!-- Adform Tracking Code BEGIN -->
        <script type="text/javascript">
            window._adftrack = Array.isArray(window._adftrack) ? window._adftrack : (window._adftrack ? [window._adftrack] : []);
            window._adftrack.push({
                HttpHost: 'asia.adform.net',
                pm: 1824002
            });
            (function () { var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = 'https://s2.adform.net/banners/scripts/st/trackpoint-async.js'; var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x); })();

        </script>
        <noscript>
            <p style="margin:0;padding:0;border:0;">
                <img src="https://asia.adform.net/Serving/TrackPoint/?pm=1824002" width="1" height="1" alt="" />
            </p>
        </noscript>
        <!-- Adform Tracking Code END -->
        
        <!-- Facebook Pixel Code -->
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '608633623033362');
            fbq('track', 'PageView');
        </script>
        <noscript>
            <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=608633623033362&ev=PageView&noscript=1"/>
        </noscript>
        <!-- End Facebook Pixel Code -->
        
        <script type="text/javascript">
            _linkedin_partner_id = "2949993";
            window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
            window._linkedin_data_partner_ids.push(_linkedin_partner_id);
            </script><script type="text/javascript">
            (function(l) {
            if (!l){window.lintrk = function(a,b){window.lintrk.q.push([a,b])};
            window.lintrk.q=[]}
            var s = document.getElementsByTagName("script")[0];
            var b = document.createElement("script");
            b.type = "text/javascript";b.async = true;
            b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
            s.parentNode.insertBefore(b, s);})(window.lintrk);
        </script>
        <noscript>
            <img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=2949993&fmt=gif" />
        </noscript>
    </head>
    <body>
        <div class="container-fluid container-sm">
            <div class="row">
                <div class="col-12 position-relative">
                <img id="bmw-logo" src="images/bmw-logo-grey.png" width="55" height="55">
                </div>
            </div>
        </div>
        <section id="thankyou">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="mb-4">YOUR PAYMENT WAS REJECTED.</h2>
                        <p class="mb-4">Your transaction was not accepted by the system. Please check your details and try again. For enquiries or assistance, please contact Eurokars Auto at <a href="tel:+6562699933">62699933</a> or <a href="https://wa.me/+6583830866">83830866</a> (WhatsApp).</p>
                        <a class="btn btn-primary" href="https://bethefirst.bmw.com.sg/theX1/ea/">Back to home</a>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-9 col-xl-8 offset-xl-1 col-xxl-7 offset-xxl-1">
                        <ul>
                            <li><a href="https://www.bmw.com.sg/en/ssl/contact.html" target="_blank">Contact BMW Asia</a></li>
                            <li><a href="https://www.bmw.com.sg/en/footer/footer-section/cookie-policy.html" target="_blank">Cookie Policy</a></li>
                            <li><a href="https://www.bmw.com.sg/en/footer/metanavigation/legal-notice-pool/imprint.html" target="_blank">Imprint</a></li>
                            <li><a href="https://www.bmw.com.sg/en/footer/metanavigation/privacy-policy-pool/privacy-policy.html" target="_blank">Privacy Policy</a></li>
                            <li><a href="https://www.bmw.com.sg/en/footer/metanavigation/legal-disclaimer-pool/legal-disclaimer.html" target="_blank">Legal Disclaimer</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-3 col-xl-3 col-xxl-3">
                        <div id="social" class="text-left text-md-center text-lg-right">
                            <p class="text-md-center text-left mb-0">Visit us on</p>
                            <a id="website" href="https://www.bmw.com.sg/" target="_blank"><span></span></a>
                            <a id="facebook" href="https://www.facebook.com/BMWSingapore/" target="_blank"><span></span></a>
                            <a id="instagram" href="https://www.instagram.com/bmwsingapore/?hl=en/" target="_blank"><span></span></a>
                        </div>
                    </div>
                    <div class="col-12">
                        <h6 class="text-md-center text-left mb-0">All Rights Reserved.</h6>
                    </div>
                </div>
            </div>
        </footer>
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/slick.min.js"></script>
    </body>
</html>

