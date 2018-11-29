<?php
$page = "page5";
$url = $_SERVER['SERVER_NAME'] . "/infraconindo/";
$url_root = $_SERVER['DOCUMENT_ROOT'] . "/infraconindo/";
include $url_root . 'inc_header.php';
?>
<div class="clear">&nbsp;</div>

<div id="middle" class="wrapper">
    <div class="left_side">
        <div class="breadcrumb append_top_1 append_bottom_1">
            <div class="grid_20">
                <a class="" href="http://<?php echo $url ?>">Home</a> &gt;
                <span class="active_2">Sitemap</span>
            </div>

        </div><!-- end breadcrumb -->
        <div class="box-side-menu">
            <div class="general_title">Sitemap</div>
            <div class="line-5">&nbsp;</div>
        </div>
        <?php include $url_root . 'inc_side_news.php'; ?>
    </div><!-- end left_side -->
    <div class="right_side">
        <h1 class="content_title">Sitemap</h1>
        <img class="img_content_wide" src="http://<?php echo $url ?>/images/content/sitemap.jpg" alt="sitemap" />
        <b>About Infraconindo</b>
        <ul class="prefix_3">
                <li><a href="http://<?php echo $url ?>about-infraconindo/corporate-profile.php">Corporate Profile</a></li>
                <li><a href="http://<?php echo $url ?>about-infraconindo/vision-and-mission.php">Vision and Mission</a></li>
                <li><a href="http://<?php echo $url ?>about-infraconindo/company-structure.php">Company Structure</a></li>
                <li><a href="http://<?php echo $url ?>about-infraconindo/message-from-bod.php">Message from BoD</a></li>
            </ul>
        <p>&nbsp;</p>
        <b>Services</b>
            <ul class="prefix_3">
                <li><a href="http://<?php echo $url ?>services/engineering-survey-and-design.php">Engineering Survey &amp; Design</a></li>
                <li><a href="http://<?php echo $url ?>services/tower-infrastructure.php">Tower Infrastructure</a></li>
                <li><a href="http://<?php echo $url ?>services/managed-services.php">Managed Services</a></li>
                <li><a href="http://<?php echo $url ?>services/project-management.php">Project Management</a></li>
                <li><a href="http://<?php echo $url ?>services/site-expansion-service.php">Site Expansion Service</a></li>
            </ul>
        <p>&nbsp;</p>
        <b>Projects</b>
            <ul class="prefix_3">
                <li><a href="http://<?php echo $url ?>projects/completed-projects/sitac.php">Complate Project</a></li>
                <li><a href="http://<?php echo $url ?>projects/on-going-project.php">On Going Project</a></li>
                <li><a href="http://<?php echo $url ?>projects/site-locatore.php">Site Locatore</a></li>
            </ul>
        <p>&nbsp;</p>
        <b><a href="http://<?php echo $url ?>clients.php">Clients</a></b>
        <p>&nbsp;</p>
        <b><a href="http://<?php echo $url ?>photo-gallery/indosat-project.php">Photo galerry</a></b>
        <p>&nbsp;</p>
        <b><a href="http://<?php echo $url ?>news.php">News</a></b>
        <p>&nbsp;</p>
        <b><a href="http://<?php echo $url ?>career.php">Career</a></b>
        <p>&nbsp;</p>
        <b><a href="http://<?php echo $url ?>contact-us.php">Contact Us</a></b>
    </div><!-- end right_side -->
    <div class="clear">&nbsp;</div>
</div><!-- end middle -->
<?php include $url_root . 'inc_footer.php'; ?>