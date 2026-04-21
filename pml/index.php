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

<?php
/*
    header("Location: https://www.bmw.com.sg/en/all-models/bmw-i/i7/2022/bmw-i7-sedan-highlights.html");
    die();
*/
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <meta http-equiv="Content-Security-Policy" content="connect-src 'self'; script-src 'self' 'unsafe-inline' 'unsafe-eval' https:"> -->
        <title>BMW X1: Reserve now | bethefirst.bmw.com.sg</title>
        <meta name="description" content="Be among the first to reserve and enjoy exhilarating benefits on the new BMW i7 and 7 Series.">
        <meta property="og:url" content="https://bethefirst.bmw.com.sg/theX1/" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="BMW i7 and 7 Series" />
        <meta property="og:description" content="Be among the first to reserve and enjoy exhilarating benefits on the new BMW i7 and 7 Series." />
        <meta property="og:image" content="https://bethefirst.bmw.com.sg/theX1/images/og-facebook.jpg" />
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
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-BY6DZE3T1L"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'G-BY6DZE3T1L');
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
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand py-md-3" href="#">
                <img alt="BMW i logo" id="bmw-logo" src="images/BMW_i_logo.svg" width="96" height="42">
                </a>
            </div>
        </nav>
        <section id="banner">
            <div id="title">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-9">
                            <h1>THE NEW X1</h1>
                            <h3>LIVE YOUR DREAMS</h3>
                            <a class="btn btn-outline-light" href="" target="_blank">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
            <img id="static-banner" class="img-fluid d-none d-xxl-block" src="images/banner_xl.jpg" alt="BMW Banner">
            <img id="static-banner" class="img-fluid d-none d-md-block d-xxl-none" src="images/banner.jpg" alt="BMW Banner">
            <img id="static-banner" class="img-fluid d-none d-sm-block d-md-none" src="images/banner_mobile.jpg" alt="BMW Banner">
            <img id="static-banner" class="img-fluid d-block d-sm-none" src="images/banner_mobile_576.jpg" alt="BMW Banner">
        </section>
        <section id="redefinite" data-aos="fade-up">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                    <h2 class="mb-4">ADVENTURES AWAIT IN THE NEW X1.</h2>
                        <p>THE NEW X1 is built to take you on adventures like never before. Meticulously crafted with great attention to detail, the dynamic SAV exudes a sporty persona with a progressive interior design.</p>
                        <a class="btn btn-outline-dark" href="#reserve-form" target="_blank">Reserve now</a>
                    </div>
                </div>
            </div>
            <div class="position-relative">
                <img alt="Redefine The Future Of Luxury" id="future-of-luxury" class="middle-img img-fluid" src="images/luxury_banner.jpg">
            </div>
        </section>
        <section id="usp" data-aos="fade-up">
           <div class="container">
           <div class="row">
                    <div class="col-10 offset-1">
                        <nav id="carousel-nav">
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-the-exterior-tab" data-bs-toggle="tab" data-bs-target="#nav-the-exterior" type="button" role="tab" aria-controls="nav-the-exterior" aria-selected="true">EXTERIOR</button>
                                <button class="nav-link" id="nav-the-interior-tab" data-bs-toggle="tab" data-bs-target="#nav-the-interior" type="button" role="tab" aria-controls="nav-the-7" aria-selected="false">INTERIOR</button>
                                <button class="nav-link" id="nav-the-tech-tab" data-bs-toggle="tab" data-bs-target="#nav-the-tech" type="button" role="tab" aria-controls="nav-the-7" aria-selected="false">TECHNOLOGY</button>
                            </div>
                        </nav>
                    </div>
                    <div class="col-10 offset-1 mt-5">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-the-exterior" role="tabpanel" aria-labelledby="nav-the-exterior-tab">
                                <h2 class="text-light mb-5">EXTERIOR HIGHLIGHTS OF THE NEW BMW X1.</h2>
                                <div id="usp-carousel-7" class="usp-carousel">
                                <div>
                                        <div class="d-flex flex-wrap">
                                            <div class="col-12 col-lg-7">
                                                <img class="img-fluid" src="images/bmw-x1-usp-8.jpg" alt="Robust looks">
                                            </div>
                                            <div class="col-12 col-lg-5 position-relative">
                                                <div class="usp-copy-text">
                                                    <h2 class="mb-4">Robust looks</h2>
                                                    <p>Short overhangs and a long wheelbase gives THE NEW X1 its characteristic SAV profile while the large tyres and iconic BMW kidney grille completes the car’s striking and dynamic aesthetic.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex flex-wrap">
                                            <div class="col-12 col-lg-7">
                                                <img class="img-fluid" src="images/bmw-x1-usp-1.jpg" alt="Front design.">
                                            </div>
                                            <div class="col-12 col-lg-5 position-relative">
                                                <div class="usp-copy-text">
                                                    <h2 class="mb-4">Front design.</h2>
                                                    <p class="mb-4">At the centre of the front is the distinctive and large, almost square double kidney grille. In combination with the slim Adaptive LED headlights, extending far into the flanks, the new BMW X1 delivers a powerful statement. </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex flex-wrap">
                                            <div class="col-12 col-lg-7">
                                                <img class="img-fluid" src="images/bmw-x1-usp-3.jpg" alt="Rear design.">
                                            </div>
                                            <div class="col-12 col-lg-5 position-relative">
                                                <div class="usp-copy-text">
                                                    <h2 class="mb-4">Rear design.</h2>
                                                    <p>Thanks to their interplay of transparent and dark smoked glass together with the hexagonal pattern in the side, the three-dimensional L-shaped rear lights deliver an unmistakably modern statement.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex flex-wrap">
                                            <div class="col-12 col-lg-7">
                                                <img class="img-fluid" src="images/bmw-x1-usp-3.jpg" alt="Rear design.">
                                            </div>
                                            <div class="col-12 col-lg-5 position-relative">
                                                <div class="usp-copy-text">
                                                    <h2 class="mb-4">Rear design.</h2>
                                                    <p>Thanks to their interplay of transparent and dark smoked glass together with the hexagonal pattern in the side, the three-dimensional L-shaped rear lights deliver an unmistakably modern statement.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-the-interior" role="tabpanel" aria-labelledby="nav-the-interior-tab">
                                <h2 class="text-light mb-5">INTERIOR HIGHLIGHTS OF THE NEW BMW X1.</h2>
                                <div id="usp-carousel-i7" class="usp-carousel">
                                <div>
                                        <div class="d-flex flex-wrap">
                                            <div class="col-12 col-lg-7">
                                                <img class="img-fluid" src="images/bmw-x1-usp-9.jpg" alt="Efficient Cat A Engine">
                                            </div>
                                            <div class="col-12 col-lg-5 position-relative">
                                                <div class="usp-copy-text">
                                                    <h2 class="mb-4">Efficient Cat A Engine</h2>
                                                    <p>Engineered for efficiency, the 122 hp engine gives you the power you need for all your adventures at a Cat A COE price.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex flex-wrap">
                                            <div class="col-12 col-lg-7">
                                                <img class="img-fluid" src="images/bmw-x1-usp-4.jpg" alt="Intuitive Technology">
                                            </div>
                                            <div class="col-12 col-lg-5 position-relative">
                                                <div class="usp-copy-text">
                                                    <h2 class="mb-4">Intuitive Technology</h2>
                                                    <p>From the BMW Curved Display to automated driving and parking systems, the advanced innovations enhance the seamless driving experience for every journey.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex flex-wrap">
                                            <div class="col-12 col-lg-7">
                                                <img class="img-fluid" src="images/bmw-x1-usp-5.jpg" alt="Modern central console.">
                                            </div>
                                            <div class="col-12 col-lg-5 position-relative">
                                                <div class="usp-copy-text">
                                                    <h2 class="mb-4">Modern central console.</h2>
                                                    <p>The modern central console is equipped with a switch/sliding control, operating elements of the latest generation and an integrated wireless charging tray.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex flex-wrap">
                                            <div class="col-12 col-lg-7">
                                                <img class="img-fluid" src="images/bmw-x1-usp-6.jpg" alt="Comfort in the rear.">
                                            </div>
                                            <div class="col-12 col-lg-5 position-relative">
                                                <div class="usp-copy-text">
                                                    <h2 class="mb-4">Comfort in the rear.</h2>
                                                    <p>Thanks to their new design and the upholstery in Sensatec Oyster with exclusive contrasting seams and stitching, the seats in the rear offer an especially high level of comfort at all times.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-the-tech" role="tabpanel" aria-labelledby="nav-the-tech-tab">
                                <h2 class="text-light mb-5">INNOVATION AND COMFORT IN THE NEW BMW X1.</h2>
                                <div id="usp-carousel-i7" class="usp-carousel">
                                    <div>
                                        <div class="d-flex flex-wrap">
                                            <div class="col-12 col-lg-7">
                                                <img class="img-fluid" src="images/bmw-x1-usp-7.jpg" alt="Widescreen curved display">
                                            </div>
                                            <div class="col-12 col-lg-5 position-relative">
                                                <div class="usp-copy-text">
                                                    <h2 class="mb-4">Widescreen curved display</h2>
                                                    <p>Equipped with BMW Widescreen Curved 10.25" instrument display and 10.7" Touchscreen</p>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </section>
        <!-- <img alt="BMW i7" id="reserve-image" class="img-fluid" src="images/rear_banner.png"> -->
        <section id="reserve-form">
            <div id="container" class="container">
                <div class="row">
                    <div class="col-12 col-lg-8 offset-lg-2">
                        <h2 class="mb-4">MAKE EVERY MOMENT ICONIC.</h2>
                        <p class="mb-4">
                            Coming soon, be the first to view THE NEW X1. Reserve now.
                        </p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <iframe src="https://bmwasia.force.com/apex/BMWX1PrereservationPML"></iframe>   
                    </div>
                </div>
            </div>
        </section>
        <div id="sticky-footer">
            <a class="btn btn-grad w-100" href="#reserve-form" target="_blank">Reserve now</a>
        </div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-12 text-md-center">
                        <ul>
                            <li><a href="https://www.bmw.com.sg/en/footer/metanavigation/privacy-policy-pool/privacy-policy.html" target="_blank">Privacy policy</a></li>
                            <li><a href="https://www.bmw.com.sg/en/footer/metanavigation/legal-disclaimer-pool/legal-disclaimer.html" target="_blank">Legal disclaimer</a></li>
                            <li><a href="https://www.bmw.com.sg/en/ssl/contact.html" target="_blank">Contact us</a></li>
                        </ul>
                    </div>
                    <div class="col-12">
                        <h6 class="text-md-center">FOLLOW US</h6>
                    </div>
                    <div class="col-12 text-md-center">
                        <div id="social" class="text-lg-center">
                            <a id="facebook" href="https://www.facebook.com/BMWSingapore/" target="_blank"><span></span></a>
                            <a id="instagram" href="https://www.instagram.com/bmwsingapore/?hl=en/" target="_blank"><span></span></a>
                            <a id="youtube" href="https://www.youtube.com/BMWSingapore" target="_blank"><span></span></a>
                            <a id="linkedin" href="https://www.linkedin.com/showcase/bmw-singapore/?viewAsMember=true" target="_blank"><span></span></a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>

