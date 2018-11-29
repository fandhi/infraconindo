<?php
$url = $_SERVER['SERVER_NAME'] . "/infraconindo/";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Statict Template</title>
        <link rel="shortcut icon" type="images/x-icon" href="favicon.ico"/>
        <link rel="stylesheet" type="text/css" href="css/reset.css"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="stylesheet" type="text/css" href="css/galleriffic-5.css"/>
        <!--[if IE 7]>
                <link rel="stylesheet" type="text/css" href="css/style_ie7.css"/>
        <![endif]-->
        <!--[if IE 8]>
                <link rel="stylesheet" type="text/css" href="css/style_ie8.css"/>
        <![endif]-->
        <!--[if IE 9]>
                <link rel="stylesheet" type="text/css" href="css/style_ie9.css"/>
        <![endif]-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
       <script type="text/javascript" src="js/jquery_1.8.2.js"></script>
        <script type="text/javascript" src="js/jquery_coin_slider.js"></script>
        <script type="text/javascript" src="js/jquery_tinydropdown.js"></script>
<!-- carousel -->
<!--        <script type="text/javascript" src="http://<?php echo $url ?>js/jquery_tmpl_min.js"></script>-->
        
        
<!-- end carousel -->
<!-- news-->
<?php
if($page=="page0") echo '<!--<script type="text/javascript" src="js/jquery_totemticker.js"></script>-->
    <script type="text/javascript" src="js/jquery_carouFredSel-6.2.0.js"></script>
    <script type="text/javascript">
        $(function(){
//            $("#vertical-ticker").totemticker({
//                row_height  : "48px",
//                next    : "#ticker-next",
//                previous : "#ticker-previous",
//                stop : "#stop",
//                start : "#start",
//                mousestop : true
//            });
        
        
//carousel homepage
//	Basic carousel, no options
            $("#foo0").carouFredSel();

            //	Basic carousel + timer, using CSS-transitions
            $("#foo1").carouFredSel({
                    auto: {
                            pauseOnHover: "resume",
                            progress: "#timer1"
                    }
            }, {
                    transition: true
            });

            //	Scrolled by user interaction
            $("#foo2").carouFredSel({
                    auto: false,
                    prev: "#prev2",
                    next: "#next2",
                    pagination: "#pager2",
                    mousewheel: true,
                    swipe: {
                            onMouse: true,
                            onTouch: true
                    }
            });
    });

     </script>';
//end news
elseif ($page=="page5") {
    echo '<link rel="stylesheet" type="text/css" href="../css/gallery.css" />
        <script type="text/javascript" src="../js/jquery_1.9.1.min.js"></script>
        <script type="text/javascript" src="../js/gallery/responsiveslides.min.js"></script>
        <script type="text/javascript" src="../js/gallery/owl.carousel.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
            $("#owl-demo").owlCarousel({
            items : 8,
                navigation : true,
                pagination : false
            });
            $("#slider3").responsiveSlides({
                carousel:true,
                "auto": false,
                manualControls: "#owl-demo",
                maxwidth: 620
            });
        });
        </script>
        ';
}
?>

    </head>

    <body>
        <div id="container">
            <div id="header">
                <div class="home_shorcut wrapper">
                    <a href="http://<?php echo $url ?>"><img src="images/material/home-icon.png" /></a> / <a class="suffix_1" href="sitemap.php">Sitemap</a>
                </div>
                <div id="mainmenu" <?php if($page=="page2" or $page=="page3" or $page=="page4" or $page=="page5" or $page=="page6" or $page=="page7" or $page=="page8") echo 'class="bg-main-menu"'?>>
                    <div class="wrapper">
			<div class="logo">
                            <a href="http://<?php echo $url ?>"><img src="images/material/logo.png"/></a>
			</div>
			<div class="nav">
                            <ul id="menu" class="menu">
                                <li class="nav-1"><a href="about-infraconindo/corporate-profile.php" <?php if($page=="page1") echo 'class="active"'?>>About Infraconindo<img src="http://<?php echo $url ?>images/material/arrow-1.png"/></a>
                                    <ul>
                                        <li class="noborder"><a href="http://<?php echo $url ?>about-infraconindo/corporate-profile.php">Corporate Profile</a></li>
                                        <li><a href="http://<?php echo $url ?>about-infraconindo/vision-and-mission.php">Vision and Mission</a></li>
                                        <li><a href="http://<?php echo $url ?>about-infraconindo/company-structure.php">Company Structure</a></li>
                                        <li><a href="http://<?php echo $url ?>about-infraconindo/message-from-bod.php">Message from BoD</a></li>
                                    </ul>
                                </li>
                                <li class="nav-2"><a href="http://<?php echo $url ?>services/engineering-survey-and-design.php" <?php if($page=="page2") echo 'class="active"'?>>Services<img src="http://<?php echo $url ?>images/material/arrow-1.png"/></a>
                                    <ul>
                                        <li class="noborder"><a href="http://<?php echo $url ?>services/engineering-survey-and-design.php">Engineering Survey &amp; Design</a></li>
                                        <li><a href="http://<?php echo $url ?>services/tower-infrastructure.php">Tower Infrastructure</a></li>
                                        <li><a href="http://<?php echo $url ?>services/managed-services.php">Managed Services</a></li>
                                        <li><a href="http://<?php echo $url ?>services/project-management.php">Project Management</a></li>
                                        <li><a href="http://<?php echo $url ?>services/site-expansion-service.php">Site Expansion Service</a></li>
                                    </ul>
                                </li>
                                <li class="nav-3"><a href="http://<?php echo $url ?>projects/completed-projects/sitac.php" <?php if($page=="page3") echo 'class="active"'?>>Projects<img src="http://<?php echo $url ?>images/material/arrow-1.png"/></a>
                                    <ul>
                                        <li class="noborder"><a href="http://<?php echo $url ?>projects/completed-projects/sitac.php">Complate Project</a></li>
                                        <li><a href="http://<?php echo $url ?>projects/on-going-project.php">On Going Project</a></li>
                                        <li><a href="http://<?php echo $url ?>projects/site-locatore.php">Site Locatore</a></li>
                                    </ul>
                                </li>
                                <li class="nav-4"><a href="http://<?php echo $url ?>clients.php" <?php if($page=="page4") echo 'class="active"'?>>Clients</a></li>
                                <li class="nav-5"><a href="http://<?php echo $url ?>photo-gallery/indosat-project.php" <?php if($page=="page5") echo 'class="active"'?>>Photo Gallery<img src="http://<?php echo $url ?>images/material/arrow-1.png"/></a>
                                    <ul>
                                        <li class="noborder"><a href="http://<?php echo $url ?>photo-gallery/indosat-project.php">Indosat Project</a></li>
                                        <li><a href="http://<?php echo $url ?>photo-gallery/hcpt-project.php">HCPT Project</a></li>
                                        <li><a href="http://<?php echo $url ?>photo-gallery/telkomsel-project.php">Telkomsel Project</a></li>
                                    </ul>
                                </li>
                                <li class="nav-6"><a href="http://<?php echo $url ?>news.php" <?php if($page=="page6") echo 'class="active"'?>>News</a></li>
                                <li class="nav-7"><a href="http://<?php echo $url ?>career.php" <?php if($page=="page7") echo 'class="active"'?>>Career</a></li>
                                <li class="nav-8"><a href="http://<?php echo $url ?>contact-us.php" <?php if($page=="page8") echo 'class="active"'?>>Contact Us</a></li>
                            </ul>
			</div>
                     </div>
		</div>
            </div><!-- end header -->


