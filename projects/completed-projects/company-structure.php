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
                <span class="active_2">Corporate Profile</span>
            </div>

        </div><!-- end breadcrumb -->
        <div class="box-side-menu">
            <div class="general_title">About Infraconindo</div>
            <div class="line-5">&nbsp;</div>
            <ul class="side-menu">
                <li><a class="" href="http://<?php echo $url ?>about-infraconindo/corporate-profile.php">Corporate Profile</a></li>
                <li><a class="" href="http://<?php echo $url ?>about-infraconindo/vision-and-mission.php">Vision &amp; Mission</a></li>
                <li><a class="" href="http://<?php echo $url ?>about-infraconindo/company-structure.php">Company Structure</a></li>
                <li class="last"><a class="" href="http://<?php echo $url ?>about-infraconindo/message-from-bod.php">Message from BoD</a></li>
            </ul>
        </div>
        <?php include $url_root . 'inc_side_news.php'; ?>
    </div><!-- end left_side -->
    <div class="right_side">
        <h1 class="content_title">Corporate Profile</h1>
        <img class="img_content_wide" src="http://<?php echo $url ?>/images/content/corporate-profile.jpg" alt="corporate profile" />
        <p>INFRACONINDO MEGATAMA  is a fast growing telecommunication contractor specializing in the provision of full services for the deployment of networks infrastructures and other telecommunication related project in global market.</p>

	<p>As a part of our continuous effort to service our partner across multiple location, we are continuing to expand our national presence. 
        Having already established representative office in South Sumatera & West Kalimantan Area, we have planned to increase our representative office in other area in Indonesia in order to offer truly global coverage to our clients.</p>
        <div style="clear: both;"></div>
    </div><!-- end right_side -->
    <div class="clear">&nbsp;</div>
</div><!-- end middle -->
<?php include $url_root . 'inc_footer.php'; ?>