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
                <a class="" href="http://<?php echo $url ?>">About Infraconindo</a> &gt;
                <span class="active_2">Company Structure</span>
            </div>

        </div><!-- end breadcrumb -->
        <div class="box-side-menu">
            <div class="general_title">About Infraconindo</div>
            <div class="line-5">&nbsp;</div>
            <ul class="side-menu">
                <li><a class="" href="http://<?php echo $url ?>about-infraconindo/corporate-profile.php">Corporate Profile</a></li>
                <li><a class="" href="http://<?php echo $url ?>about-infraconindo/vision-and-mission.php">Vision &amp; Mission</a></li>
                <li><a class="active" href="http://<?php echo $url ?>about-infraconindo/company-structure.php">Company Structure</a></li>
                <li class="last"><a class="" href="http://<?php echo $url ?>about-infraconindo/message-from-bod.php">Message from BoD</a></li>
            </ul>
        </div>
        <?php include $url_root . 'inc_side_news.php'; ?>
    </div><!-- end left_side -->
    <div class="right_side">
        <h1 class="content_title">Company Structure</h1>
        <img class="img_content_wide" src="http://<?php echo $url ?>/images/content/company-structure.jpg" alt="Company Structure" />
        <img src="http://<?php echo $url ?>/images/content/structure.jpg" alt="Company Structure" />
        <div style="clear: both;"></div>
    </div><!-- end right_side -->
    <div class="clear">&nbsp;</div>
</div><!-- end middle -->
<?php include $url_root . 'inc_footer.php'; ?>