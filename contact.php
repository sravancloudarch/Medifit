<!-- <?php require_once (dirname(__FILE__) . DIRECTORY_SEPARATOR . 'settings.php'); ?> -->
<!DOCTYPE HTML>
<!--[if IE 8]> <html class="ie8 no-js"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<!-- begin meta -->
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=8, IE=9, IE=10">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- end meta -->
	
	<!-- begin CSS -->
	<link href="style.css" type="text/css" rel="stylesheet" id="main-style">
	<link href="css/responsive.css" type="text/css" rel="stylesheet">
	<!--[if IE]> <link href="css/ie.css" type="text/css" rel="stylesheet"> <![endif]-->
	<link href="css/colors/green.css" type="text/css" rel="stylesheet" id="color-style">
    <!-- end CSS -->
    
    <link href="images/favicon.ico" type="image/x-icon" rel="shortcut icon">
	
	<!-- begin JS -->
    <script src="js/jquery-1.8.2.min.js" type="text/javascript"></script> <!-- jQuery -->
    <script src="js/ie.js" type="text/javascript"></script> <!-- IE detection -->
    <script src="js/jquery.easing.1.3.js" type="text/javascript"></script> <!-- jQuery easing -->
	<script src="js/modernizr.custom.js" type="text/javascript"></script> <!-- Modernizr -->
    <!--[if IE 8]>
    <script src="js/respond.min.js" type="text/javascript"></script> 
    <script src="js/selectivizr-min.js" type="text/javascript"></script> 
    <![endif]--> 
    <script src="js/ddlevelsmenu.js" type="text/javascript"></script> <!-- drop-down menu -->
    <script type="text/javascript"> <!-- drop-down menu -->
        ddlevelsmenu.setup("nav", "topbar");
    </script>
    <script src="js/tinynav.min.js" type="text/javascript"></script> <!-- tiny nav -->
    <script src="js/jquery.validate.min.js" type="text/javascript"></script> <!-- form validation -->
    <script src="js/jquery.ui.totop.min.js" type="text/javascript"></script> <!-- scroll to top -->
    <script src="js/jquery.fitvids.js" type="text/javascript"></script> <!-- responsive video embeds -->
    <script src="js/jquery.tweet.js" type="text/javascript"></script> <!-- Twitter widget -->
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script> <!-- Google maps -->
    <script src="js/jquery.gmap.min.js" type="text/javascript"></script> <!-- gMap -->
    <script type="text/javascript" src="js/revslider.jquery.themepunch.plugins.min.js"></script> <!-- swipe gestures -->
    <script src="js/jquery.tipsy.js" type="text/javascript"></script> <!-- tooltips -->
    <script src="js/custom.js" type="text/javascript"></script> <!-- jQuery initialization -->
    <!-- end JS -->
	
	<title>Hirise Homes-Villas in Calicut</title>
</head>

<body class="wide">
<!-- begin container -->
<div id="wrap">
	<!-- begin header -->
    <header id="header">
    	<div class="container clearfix">
    	<!-- begin logo -->
        <h1 id="logo"><a href="index.html"><img src="images/logo.png" alt="Hirise Homes"></a></h1>
        <!-- end logo -->
        
        <!-- begin navigation wrapper -->
        <div class="nav-wrap clearfix">
        
        <!-- begin search form -->
       
        <!-- end search form -->

      <!-- begin navigation -->
        <nav id="nav">
            <ul id="navlist" class="clearfix">
                <li ><a href="index.php" >Home</a></li>
                <li><a href="project.php">Projects</a>
                <li><a href="service.html">Service</a></li>
                <li><a href="about.php" >About</a></li>
                <li><a href="latestnewscomb.php" >News & Events</a></li>
                <li class="current"><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
        <!-- end navigation -->
        </div>
        <!-- end navigation wrapper -->
        </div>
    </header>
    <!-- end header -->
	
    <!-- begin page title -->
    <section id="page-title">
    	<div class="container clearfix">
            <h1>Contact</h1>
            <nav id="breadcrumbs">
                <ul>
                    <li><a href="index.php">Home</a> &rsaquo;</li>
                    <li>Contact</li>
                </ul>
            </nav>
        </div>
    </section>
    <!-- begin page title -->
    
    <!-- begin content -->
    <section id="content">
    	<div class="container clearfix">
     
        
        <!-- begin main -->
        <section style=" width:100%;float:none;" id="main" class="three-fourths">
        <!-- begin contact form -->
        <h2>Contact Us</h2>
        <p>We would be glad to have feedback from you. Drop us a line, whether it is a comment, a question, a work proposition or just a hello. You can use either the form below or the contact details on the right.</p>
        <div id="contact-notification-box-success" class="notification-box notification-box-success" style="display: none;">
            <p>Your message has been successfully sent. We will get back to you as soon as possible.</p>
            <a href="#" class="notification-close notification-close-success">x</a>
        </div>
        
        <div id="contact-notification-box-error" class="notification-box notification-box-error " style="display: none;">
            <p id="contact-notification-box-error-msg" data-default-msg="Your message couldn't be sent because a server error occurred. Please try again."></p>
            <a href="#" class="notification-close notification-close-error">x</a>
        </div>
        <form id="contact-form" class="content-form" method="post" action="#">
        <div style="width:49%;float:left;">
        <p>
              
                 <label for="name">Name:<span class="note">*</span></label>
                <input style=" width:95%;margin-right:1%; " id="name" type="text" name="name" class="required">
            </p>
            <p>
                <label for="email">Email:<span class="note">*</span></label>
                <input style=" width:95%;margin-right:1%; " id="email" type="email" name="email" class="required">
            </p>
            <p>
                <label for="url">Website:</label>
                <input style=" width:95%;margin-right:1%; " id="url" type="url" name="url">
            </p>
            <p>
                <label for="subject">Subject:<span class="note">*</span></label>
                <input style=" width:95%;margin-right:1%; " id="subject" type="text" name="subject" class="required">
            </p>
        </div> 
        <div  style="width:49%;float:right;">
         <p>
                <label for="message">Message:<span class="note">*</span></label>
                <textarea style=" width:95%;height: 215px; " id="message" cols="68" rows="16" name="message" class="required"></textarea>
            </p>
        </div>
            
           
            <?php
            if(ENABLE_CAPTCHA){
                require_once ('recaptcha/recaptchalib.php');
                echo '<p>';
                echo recaptcha_get_html($captcha_public_key, null, USE_SSL);
                echo '</p>';
            }
            ?><div  style="width:100%";>
            <p>
                <input id="submit" class="button" type="submit" name="submit" value="Send Message">
            </p>
            </div>
            
        </form>
        <p><span class="note">*</span> Required fields</p>
        <!-- end contact form -->
        </section>
        <!-- end main -->
        
        <!-- begin sidebar -->
        <aside style="width:100%;max-width:none;"  id="sidebar" class="one-fourth column-last">
            <div class="widget contact-info">
                <h3>Contact Info</h3>
                <p>You can also reach us here:</p>
                <div style="width:49%;float:left;">
                <p class="address"><strong>Address:</strong>Moozhikal, Cheruvattakadavu</p>
                 <p class="business-hours"><strong>Business Hours:</strong><br>
                    Monday-Friday: 9:00-18:00<br>
                    Saturday: 10:00-17:00<br>
                    Sunday: Closed
                    </p>
                </div>
                <div style="width:49%;float:right;">
                 <p class="phone"><strong>Phone:</strong> 9947893112</p>
                            <p class="fax"><strong>Mob:</strong> 9745920033</p>
                            <p class="email"><strong>Email:</strong> <a href="mailto:hirisehomes@gmail.com">hirisehomes@gmail.com</a></p>
                </div>
                <div>
                     
                           
                   
                </div>
            </div>
        </aside>
        
        <!-- end sidebar -->
        
    </div>
     <section>
            <div id="map"
                data-address="Moozhikkal, National Highway 212, Moozikal, Kozhikode, KL 673012"
                data-zoom="17"
                style="width: 100%; height: 400px;">
            </div>
        </section>
    </section>
    <!-- end content --> 
     <!-- begin footer -->
	<footer id="footer">
<!-- begin footer top -->
        <div id="footer-top">
        	<div class="container clearfix">
                <div class="one-fourth">
                    <div class="widget">
                        <h3>About</h3>
									We are specialized in Construction of Independent Houses, Flats/Apartments, Villas, Commercial Buildings, Vasthu Consulting, Preparing Plans,Architectural Drawings, Interior Designing, 3D Elevation and Rendering, Animated Walkthrough, Building Information Modeling</p>                    </div>
                
                </div>
                <div class="one-fourth">
                    <div class="widget twitter-widget">
                        <h3>Location</h3>
                        <div ><iframe width="200" height="100" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Moozhikal+West+Bus+Station,+National+Highway+212,+Kozhikode,+Kerala&amp;aq=0&amp;oq=moozhikal&amp;sll=11.25381,75.801696&amp;sspn=0.219205,0.41851&amp;ie=UTF8&amp;hq=&amp;hnear=Moozhikal+West+Bus+Station,+National+Highway+212,+Kozhikode,+Kerala&amp;t=m&amp;z=14&amp;iwloc=lyrftr:m,0x3ba65c410792179f:0x72db298d1fce1378,11.296682,75.833666&amp;ll=11.296682,75.833672&amp;output=embed"></iframe><br /><small><a href="http://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Moozhikal+West+Bus+Station,+National+Highway+212,+Kozhikode,+Kerala&amp;aq=0&amp;oq=moozhikal&amp;sll=11.25381,75.801696&amp;sspn=0.219205,0.41851&amp;ie=UTF8&amp;hq=&amp;hnear=Moozhikal+West+Bus+Station,+National+Highway+212,+Kozhikode,+Kerala&amp;t=m&amp;z=14&amp;iwloc=lyrftr:m,0x3ba65c410792179f:0x72db298d1fce1378,11.296682,75.833666&amp;ll=11.296682,75.833672" style="color:#0000FF;text-align:left">View Larger Map</a></small></div>
                    </div>
                </div>
                <div class="one-fourth">
                    <div class="widget newsletter">
                        <h3>Newsletter</h3>
                        <p>Subscribe to our email newsletter for useful tips and valuable resources sent out every second Monday.</p>
                        <div id="newsletter-notification-box-success" class="notification-box notification-box-success" style="display: none;">
                            <p>You have successfully subscribed to our newsletter.</p>
                            <a href="#" class="notification-close notification-close-success">x</a>
                        </div>
        
                        <div id="newsletter-notification-box-error" class="notification-box notification-box-error" style="display: none;">
                            <p>Your email address couldn't be subscribed because a server error occurred. Please try again later.</p>
                            <a href="#" class="notification-close notification-close-error">x</a>
                        </div>
                        <form id="newsletter-form" class="content-form" action="#" method="post">
                            <input id="newsletter" type="email" name="newsletter" placeholder="Enter your email address &hellip;" class="required">
                            <input id="subscribe" class="button" type="submit" name="subscribe" value="Subscribe">
                        </form>
                    </div>
                </div>
                <div class="one-fourth column-last">
                    <div class="widget contact-info">
                        <h3>Contact Info</h3>
                        <div>
                            <p class="address"><strong>Address:</strong>Moozhikal, Cheruvattakadavu</p>
                            <p class="phone"><strong>Phone:</strong> 9947893112</p>
                            <p class="fax"><strong>Mob:</strong> 9745920033</p>
                            <p class="email"><strong>Email:</strong> <a href="mailto:hirisehomes@gmail.com">hirisehomes@gmail.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end footer top -->

        <!-- begin footer bottom -->
        <div id="footer-bottom">
        	<div class="container clearfix">
                <div class="one-half">
                   <p>Copyright &copy; 2013  Created by <a href="http://arthaskills.com/">Artha Skills Solution Pvt.Ltd</a>.</p>
                </div>
        
                <div class="one-half column-last">
                    <ul class="social-links">
                        <li class="twitter"><a href="#" title="Twitter" target="_blank">Twitter</a></li>
                        <li class="facebook"><a href="#" title="Facebook" target="_blank">Facebook</a></li>
                        <li class="google-plus"><a href="#" title="Google+" target="_blank">Google+</a></li>
                        <li class="linkedin"><a href="#" title="LinkedIn" target="_blank">LinkedIn</a></li>
                        <li class="vimeo"><a href="#" title="Vimeo" target="_blank">Vimeo</a></li>
                        <li class="youtube"><a href="#" title="YouTube" target="_blank">YouTube</a></li>
                        <li class="skype"><a href="#" title="Skype" target="_blank">Skype</a></li>
                        <li class="digg"><a href="#" title="Digg" target="_blank">Digg</a></li>
                        <li class="delicious"><a href="#" title="Delicious" target="_blank">Delicious</a></li>
                        <li class="tumbler"><a href="#" title="Tumbler" target="_blank">Tumbler</a></li>
                        <li class="dribbble"><a href="#" title="Dribbble" target="_blank">Dribbble</a></li>
                        <li class="stumbleupon"><a href="#" title="StumbleUpon" target="_blank">StumbleUpon</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end footer bottom -->
	</footer>
	<!-- end footer -->  
</div>
<!-- end container -->
</body>
</html>