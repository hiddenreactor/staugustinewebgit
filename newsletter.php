

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home - St.Augustine School</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="icon" type="image/png" href="/staugustine_nav/assets/img/st/favicon2.png" />
    <!--<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <link href="//cdn.jsdelivr.net/animatecss/3.5.2/animate.min.css" rel="stylesheet">
    <link href="//cdn.snipcart.com/themes/2.0/base/snipcart.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/staugustine_nav/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/staugustine_nav/assets/css/default.css">
    <link rel="stylesheet" href="/staugustine_nav/assets/css/default-responsive.css">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/bootstrap-dropdownhover.min.css" rel="stylesheet">
    <link href="assets/css/jquery.bxslider.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet">
    <link href="news_contents.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.isotope/1.5.25/jquery.isotope.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <!--<link href="assets/css/nav.css" rel="stylesheet"> -->



    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
            n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
            document,'script','https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '264645137261311'); // Insert your pixel ID here.
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=264645137261311&ev=PageView&noscript=1"
            /></noscript>
    <!-- DO NOT MODIFY -->
    <!-- End Facebook Pixel Code -->

    <script>
        $('.dropdown-toggle').click(function(e) {
            if ($(document).width() > 768) {
                e.preventDefault();

                var url = $(this).attr('href');


                if (url !== '#') {

                    window.location.href = url;
                }

            }
        });
    </script>

    <script>
        $(document).ready(function(){
            $("video").bind('ended', function(){
                $("#bannerViv").fadeOut(500);
            });
        });

    </script>

    <script>
        $(document).ready(function () {

            setTimeout(function() {
                $('.fullscreen-bg .background ').slideUp("slow");

            }, 5000);
        });
    </script>

    <script >
        // makes the parallax elements
        function parallaxIt() {

            // create variables
            var $fwindow = $(window);
            var scrollTop = window.pageYOffset || document.documentElement.scrollTop;

            // on window scroll event
            $fwindow.on('scroll resize', function() {
                scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            });

            // for each of content parallax element
            $('[data-type="content"]').each(function (index, e) {
                var $contentObj = $(this);
                var fgOffset = parseInt($contentObj.offset().top);
                var yPos;
                var speed = ($contentObj.data('speed') || 1 );

                $fwindow.on('scroll resize', function (){
                    yPos = fgOffset - scrollTop / speed;

                    $contentObj.css('top', yPos);
                });
            });

            // for each of background parallax element
            $('[data-type="background"]').each(function(){
                var $backgroundObj = $(this);
                var bgOffset = parseInt($backgroundObj.offset().top);
                var yPos;
                var coords;
                var speed = ($backgroundObj.data('speed') || 0 );

                $fwindow.on('scroll resize', function() {
                    yPos = - ((scrollTop - bgOffset) / speed);
                    coords = '40% '+ yPos + 'px';

                    $backgroundObj.css({ backgroundPosition: coords });
                });
            });

            // triggers winodw scroll for refresh
            $fwindow.trigger('scroll');
        };

        parallaxIt();
    </script>

</head>
<body class="en">

<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/main.js"></script> <!--- For Navigation -->


<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="index.php"><img src="/staugustine_nav/assets/img/st/home-logo-wht.png" alt="sas" /></a>

        </div>

        <div id="navbar" class="collapse navbar-collapse ">
            <ul class="nav navbar-nav">


                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">About Us <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Principal </a></li>
                        <li><a href="#">Admissions </a></li>
                        <li><a href="#">Backstory </a></li>
                        <li><a href="#">Excellence </a></li>
                        <li><a href="newsletter.php">Newsletters / Downloads </a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#event" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Recent Activities </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Logins <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Parents Login </a></li>
                        <li><a href="#">Teachers Login </a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Parents <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Guide </a></li>
                        <li><a href="#">Participation </a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Life at School <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Curricula </a></li>
                        <li><a href="#">Calendar </a></li>
                        <li><a href="#">Staff </a></li>
                        <li><a href="#">Music Tracks </a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Support <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Faith and Foundation </a></li>
                        <li><a href="#">Donate </a></li>
                        <li><a href="#">Pass the Torch </a></li>
                        <li><a href="#">Team Players </a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Community <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Alumni </a></li>
                        <li><a href="#">Memorium </a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Downloads / Links <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">School Calendar </a></li>
                        <li><a href="#">Athletics Calendar </a></li>
                        <li><a href="#">Absent from School </a></li>
                        <li><a href="#">Parent Participation </a></li>
                        <li><a href="#">Traffic Safety Guidelines </a></li>
                        <li><a href="#">Hot Lunch </a></li>
                        <li><a href="#">St. Augustine School Parent Handbook </a></li>
                        <li><a href="#">School Code of Conduct </a></li>
                        <li><a href="#">St. Augustine's Church </a></li>
                        <li><a href="#">Catholic Independent Schools </a></li>
                        <li><a href="#">Ministry of Education </a></li>
                        <li><a href="#">St. Augustine Videos </a></li>
                    </ul>
                </li>

                <!--<li class="dropdown">
                    <a href="#" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>

                        <li class="dropdown dropdown-submenu"><a href="#">Separated Drop</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">test</a></li>
                                <li><a href="#">test</a></li>
                                <li><a href="#">test</a></li>
                                <li><a href="#">test</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>-->






            </ul>
            <ul class="nav navbar-nav navbar-right social media">
                <li class="cart snipcart-summary">
                    <a href="#" class="snipcart-checkout fb-icon">
                        <div class="cart-total">
                            <span class="snipcart-total-items"></span>
                        </div>
                    </a>
                </li>

                <li class="cart snipcart-summary">
                    <a href="#" class="snipcart-checkout insta-icon">
                        <div class="cart-total">
                            <span class="snipcart-total-items"></span>
                        </div>
                    </a>
                </li>

                <li class="cart snipcart-summary">
                    <a href="#" class="snipcart-checkout twitter-icon">
                        <div class="cart-total">
                            <span class="snipcart-total-items"></span>
                        </div>
                    </a>
                </li>

                <li class="cart snipcart-summary">
                    <a href="#" class="snipcart-checkout youtube-icon">
                        <div class="cart-total">
                            <span class="snipcart-total-items"></span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class="body">


<!-- <div id="bannerViv" class="fullscreen-bg">
          <video controls autoplay muted  playsinline poster="" class="fullscreen-bg__video">

              <source src="/staugustine_nav/assets/img/st/video/Final.mp4" type="video/mp4">

          </video>
      </div>


    <!---ADD NAVIGATION HERE-->



<div class="clearfix"></div>
<!--------- Start Banner Wrapper ------>
<div class="container">
    <section class="news-left-col">
        <p></p>
    <div class="tab">
        <button class="tablinks" onclick="tabmenu(event, 'Newsletter')" id="defaultOpen">Newsletter </button>
        <button class="tablinks" onclick="tabmenu(event, 'Weekly')" id="defaultOpen">The Weekly Update </button>
        <button class="tablinks" onclick="tabmenu(event, 'Downloads')" id="defaultOpen">Downloads /Links </button>
    </div>
    </section>
    <section class="news-sidebar">
    <div id="Newsletter" class="tabcontent">
        <h3>Newsletter </h3>

        <section class="one-third">
            <p>2017-2018 </p>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/SchoolNewsletters/170401.pdf" target="_blank">April 1, 2017</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/SchoolNewsletters/170301.pdf" target="_blank">March 1, 2017</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/SchoolNewsletters/170201.pdf" target="_blank">February 1, 2017</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/SchoolNewsletters/170105.pdf" target="_blank">January 5, 2017</a></li>
        </section>
        <section class="one-third">
            <p>2015-2016</p>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/SchoolNewsletters/161204.pdf" target="_blank">December 4, 2016</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/SchoolNewsletters/161101.pdf" target="_blank">November 1, 2016</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/SchoolNewsletters/161003.pdf" target="_blank">October 3, 2016</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/SchoolNewsletters/160904.pdf" target="_blank">September 4, 2016</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/SchoolNewsletters/151105.pdf" target="_blank">November 5, 2015</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/SchoolNewsletters/150910.pdf" target="_blank">September 10, 2015</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/SchoolNewsletters/150509.pdf" target="_blank">May 9, 2015</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/SchoolNewsletters/150301.pdf" target="_blank">March 1, 2015</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/SchoolNewsletters/150205.pdf" target="_blank">February 5, 2015</a></li>
        </section>
        <section class="one-third">
            <p>2012-2014</p>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/SchoolNewsletters/141208.pdf" target="_blank">December 8, 2014</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/SchoolNewsletters/141031.pdf" target="_blank">October 31, 2014</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/SchoolNewsletters/140930.pdf" target="_blank">September 30, 2014</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/SchoolNewsletters/131018.pdf" target="_blank">October 18, 2013</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/SchoolNewsletters/130824.pdf" target="_blank">August 24, 2013</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/SchoolNewsletters/130618.pdf" target="_blank">June 18, 2013</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/SchoolNewsletters/130602.pdf" target="_blank">June 2, 2013</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/SchoolNewsletters/130327.pdf" target="_blank">March 27, 2013</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/SchoolNewsletters/130108.pdf" target="_blank">January 8, 2013</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/SchoolNewsletters/121116.pdf" target="_blank">November 16, 2012</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/SchoolNewsletters/121023.pdf" target="_blank">October 23, 2012</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/SchoolNewsletters/120924.pdf" target="_blank">September 24, 2012</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/SchoolNewsletters/120620.pdf" target="_blank">June 20, 2012</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/SchoolNewsletters/120531.pdf" target="_blank">May 31, 2012</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/SchoolNewsletters/120118.pdf" target="_blank">January 18, 2012</a></li>
        </section>
    </div>
    <div id="Weekly" class="tabcontent">
        <h3>The Weekly Update </h3>
        <section class="one-third">
            <p>2017-2018 </p>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/FromtheOffice/170501.pdf" target="_blank">May 1 - 5, 2017</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/FromtheOffice/170424.pdf" target="_blank">April 24 - 28, 2017</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/FromtheOffice/170417.pdf" target="_blank">April 17 - 21, 2017</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/FromtheOffice/170410.pdf" target="_blank">April 10 - 17, 2017</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/FromtheOffice/170403.pdf" target="_blank">April 3 - 7, 2017</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/FromtheOffice/170327.pdf" target="_blank">March 27 - 31 , 2017</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/FromtheOffice/170306.pdf" target="_blank">March 6 - 10, 2017</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/FromtheOffice/170227.pdf" target="_blank">Feb. 27 - March 3. 2017</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/FromtheOffice/170220.pdf" target="_blank">February 20 - 24, 2017</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/FromtheOffice/170213.pdf" target="_blank">February 13 - 20, 2017</a></li>
        </section>
        <section class="one-third">
            <p>2016 </p>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/FromtheOffice/161103.pdf" target="_blank">November 3, 2016</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/FromtheOffice/161027.pdf" target="_blank">October 27, 2016</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/FromtheOffice/161020.pdf" target="_blank">October 20, 2016</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/FromtheOffice/161013.pdf" target="_blank">October 13, 2016</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/FromtheOffice/160922.pdf" target="_blank">September 22, 2016</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/FromtheOffice/160908.pdf" target="_blank">September 8, 2016</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/FromtheOffice/160616.pdf" target="_blank">June 16, 2016</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/FromtheOffice/160609.pdf" target="_blank">June 9, 2016</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/FromtheOffice/160519.pdf" target="_blank">May 19, 2016</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/FromtheOffice/160421.pdf" target="_blank">April 21, 2016</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/FromtheOffice/160303.pdf" target="_blank">March 3, 2016</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/FromtheOffice/160208.pdf" target="_blank">February 8, 2016</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/FromtheOffice/160128.pdf" target="_blank">January 28, 2016</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/FromtheOffice/160121.pdf" target="_blank">January 21, 2016</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/FromtheOffice/160107.pdf" target="_blank">January 7, 2016</a></li>
        </section>
        <section class="one-third">
            <p>2015 </p>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/FromtheOffice/151217.pdf" target="_blank">December 17, 2015</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/FromtheOffice/151203.pdf" target="_blank">December 3, 2015</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/FromtheOffice/151126.pdf" target="_blank">November 26, 2015</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/FromtheOffice/151119.pdf" target="_blank">November 19, 2015</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/FromtheOffice/151029.pdf" target="_blank">October 29, 2015</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/FromtheOffice/151022.pdf" target="_blank">October 22, 2015</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/FromtheOffice/151015.pdf" target="_blank">October 15, 2015</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/FromtheOffice/150618.pdf" target="_blank">June 18, 2015</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/FromtheOffice/150613.pdf" target="_blank">June 13, 2015</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/FromtheOffice/150507.pdf" target="_blank">May 7, 2015</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/FromtheOffice/150423.pdf" target="_blank">April 23, 2015</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/FromtheOffice/150416.pdf" target="_blank">April 16, 2015</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/FromtheOffice/150409.pdf" target="_blank">April 9, 2015</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/FromtheOffice/150401.pdf" target="_blank">April 1, 2015</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/FromtheOffice/150326.pdf" target="_blank">March 26, 2015</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/FromtheOffice/150320.pdf" target="_blank">March 20, 2015</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/FromtheOffice/150305.pdf" target="_blank">March 5, 2015</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/FromtheOffice/150227.pdf" target="_blank">February 27, 2015</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/FromtheOffice/150218.pdf" target="_blank">February 19, 2015</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/FromtheOffice/150205.pdf" target="_blank">February 5, 2015</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/FromtheOffice/150122.pdf" target="_blank">January 22, 2015</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/FromtheOffice/150115.pdf" target="_blank">January 15, 2015</a></li>
        </section>
    </div>
    <div id="Downloads" class="tabcontent">
        <h3>Downloads / Links </h3>
        <section class="one-third">
            <p>Donation Forms </p>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/FFNewSchoolFamilyForm2018.pdf" target="_blank">St. Augustine School New Family Donation Form</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/FFSchoolFamilyForm2018.pdf" target="_blank">St. Augustine School Family Donation Form</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/St.Augustine_Parishioner_DonationForm.pdf" target="_blank">Parishioner Donation Form</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/FFPoster.jpg" target="_blank">Faith and Foundation Poster</a></li>
        </section>
        <section class="one-third">
            <p>Links </p>
            <li><a href="https://calendar.google.com/calendar/embed?src=staugustineschool.ca_ov95acb0ok7gakg29hvhn1fp70%40group.calendar.google.com&amp;ctz=America/Vancouver" target="_blank">School Calendar</a></li>
            <li><a href="https://calendar.google.com/calendar/embed?src=staugustineschool.ca_r486v0i5rtvup6hvat147jcef0%40group.calendar.google.com&amp;ctz=America/Vancouver" target="_blank">Athletics Calendar (Basketball)</a></li>
            <li><a href="mailto:&#111;&#102;&#102;&#105;&#99;&#101;&#64;&#115;&#116;&#97;&#117;&#103;&#117;&#115;&#116;&#105;&#110;&#101;&#115;&#99;&#104;&#111;&#111;&#108;&#46;&#99;&#97;?subject=My child's absence" target="_blank">Absent from School</a></li>
            <li><a href="http://sta.onvolunteers.com" target="_blank">Parent Participation</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/TrafficSafetyGuidelines1718.pdf" target="_blank">Traffic Safety Guidelines</a></li>
            <li><a href="http://munchalunch.com/schools/staugustine" target="_blank">Hot Lunch</a></li>
            <li><a href="Misc/yearbook.html"  target="_blank">St. Augustine Yearbooks</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/Parent&amp;FamilyHandbook2017-2018.pdf" target="_blank">St. Augustine School <br>Parent Handbook</a></li>
            <li><a href="http://www.faithandfoundation.com/AAfiles/misc/SASCodeOfConduct1718.pdf" target="_blank">School Code of Conduct</a></li>
            <li><a href="http://staugustineschurch.ca" target="_blank">St. Augustine’s Church</a></li>
            <li><a href="http://www.cisva.bc.ca" target="_blank">Catholic Independent Schools</a></li>
            <li><a href="http://www.gov.bc.ca/bced/" target="_blank">Ministry of Education</a></li>
            <li><a href="http://vpl.bibliocommons.com/" target="_blank">Vancouver Public Library</a></li>
            <li><a href="http://www.youtube.com/channel/UCiw2UvofQJFRqCJzmuPrP0g/videos" target="_blank"><span class="style3">St. Augustine Videos</span></a></li>
        </section>
        <section class="one-third">
            <p>Downloads </p>
            <script type="text/javascript"  src="https://chimp.net/widget/js/loader.js?MjA4MCxtaW5pLG9yYW5nZSxGYWl0aCBhbmQgRm91bmRhdGlvbiAtIFN0LiBBdWd1c3RpbmUgU2Nob29sLEdyb3Vw"  id="chimp-button-script"></script>
        </section>
    </div>
    </section>
</div>

    <script>
        function tabmenu(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace("active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
        document.getElementById("defaultOpen").click();
    </script>
<!--------- End Banner Wrapper ------>


<div class="clearfix"></div>
<!--------- Start Banner Wrapper ------>
<div class="linebreak">
    <h2></h2>
</div>
<footer>
        <section class="footer-one-third">
            <p><a href="#"><img src="assets/img/icon/test1.png"> Newsletter! </a></p>
            <p><a href="#"><img src="assets/img/icon/test1.png"> The Weekly Update </a></p>
            <p><a href="#"><img src="assets/img/icon/test1.png"> Faith & Foundation Newsletter </a></p>
        </section>
        <section class="footer-one-third">
            <p><a href="#"><img src="assets/img/icon/test1.png"> Pass the Torch </a></p>
            <p><a href="#"><img src="assets/img/icon/test1.png"> Donate Online </a></p>
        </section>
        <section class="footer-one-third">
            <p><a href="#"><img src="assets/img/icon/test1.png"><a href="#"> Library </a></p>
            <p><a href="#"><img src="assets/img/icon/test1.png"> Care for Common Home </a></p>
            <p><a href="#"><img src="assets/img/icon/test1.png"> Father John Brioux O.M.I. </a></p>
            <p><a href="#"><img src="assets/img/icon/test1.png"> Bully Free School </a></p>
        </section>

</footer>
<!--------- End Banner Wrapper ------>



<div class="clearfix"></div>
<div class ="subfooter">
    <p>&copy; 2018. St.Agustine School. All Rights Reserved.        <li>tel:(604) 731-8024 </li>
    <li>fax:(604) 739-1712 </li>
    <li>2154 W. 7th Avenue, Vancouver BC V6K 0E3 Canada</li><a href="/privacy"> Privacy Policy</a></p>
</div>

<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-580c4249dce75e81"></script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/582604a9e808d60cd0818620/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-89212510-1', 'auto');
    ga('send', 'pageview');

</script>
</body>
</html>