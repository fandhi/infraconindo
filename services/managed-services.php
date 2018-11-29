<?php
$page = "page2";
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
                <a class="" href="http://<?php echo $url ?>">Services</a> &gt;
                <span class="active_2">Managed Services</span>
            </div>

        </div><!-- end breadcrumb -->
        <div class="box-side-menu">
            <div class="general_title">Services</div>
            <div class="line-5">&nbsp;</div>
            <ul class="side-menu">
                <li><a class="" href="http://<?php echo $url ?>services/engineering-survey-and-design.php">Engineering Survey &amp; Design</a></li>
                <li><a class="" href="http://<?php echo $url ?>services/tower-infrastructure.php">Tower Infrastructure</a></li>
                <li><a class="active" href="http://<?php echo $url ?>services/managed-services.php">Managed Services</a></li>
                <li><a class="" href="http://<?php echo $url ?>services/project-management.php">Project Management</a></li>
                <li class="last"><a class="" href="http://<?php echo $url ?>services/site-expansion-service.php">Site Expansion Service</a></li>
            </ul>
        </div>
        <?php include $url_root . 'inc_side_news.php'; ?>
    </div><!-- end left_side -->
    <div class="right_side">
        <h1 class="content_title">Managed Services</h1>
        <img class="img_content_wide" src="http://<?php echo $url ?>/images/content/managed-services.jpg" alt="Managed Services" />
        <ul>
            <li>Lorem ipsum dolor sit amet,</li>
            <li>Consectetur adipisicing elit</li>
            <li>Sed do eiusmod tempor incididunt</li>
            <li>Tut labore et dolore magna aliqua.</li>
        </ul>
        <div style="clear: both;"></div>
    </div><!-- end right_side -->
    <div class="clear">&nbsp;</div>
</div><!-- end middle -->
<?php include $url_root . 'inc_footer.php'; ?>