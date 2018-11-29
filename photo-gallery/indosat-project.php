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
                <a class="" href="http://<?php echo $url ?>">Photo Gallery</a> &gt;
                <span class="active_2">Indosat Project</span>
            </div>

        </div><!-- end breadcrumb -->
        <div class="box-side-menu">
            <div class="general_title">Photo Gallery</div>
            <div class="line-5">&nbsp;</div>
            <ul class="side-menu">
                <li><a class="active" href="http://<?php echo $url ?>photo-gallery/indosat-project.php">Indosat Project</a></li>
                <li><a href="http://<?php echo $url ?>photo-gallery/hcpt-project.php">HCPT Project</a></li>
                <li class="last"><a href="http://<?php echo $url ?>photo-gallery/telkomsel-project.php">Telkomsel Project</a></li>
            </ul>
        </div>
        <?php include $url_root . 'inc_side_news.php'; ?>
    </div><!-- end left_side -->
    <div class="right_side">
        <h1 class="content_title">Indosat Project</h1>
        <!-- Start Advanced Gallery Html Containers -->
        <ul class="rslides" id="slider3">
            <li><img src="../images/gallery/indosat-project/untitled-1.jpg" alt=""/></li>
            <li><img src="../images/gallery/indosat-project/untitled-2.jpg" alt=""/></li>
            <li><img src="../images/gallery/indosat-project/untitled-3.jpg" alt=""/></li>
            <li><img src="../images/gallery/indosat-project/untitled-4.jpg" alt=""/></li>
            <li><img src="../images/gallery/indosat-project/untitled-5.jpg" alt=""/></li>
            <li><img src="../images/gallery/indosat-project/untitled-6.jpg" alt=""/></li>
            <li><img src="../images/gallery/indosat-project/untitled-7.jpg" alt=""/></li>
            <li><img src="../images/gallery/indosat-project/untitled-8.jpg" alt=""/></li>
            <li><img src="../images/gallery/indosat-project/untitled-9.jpg" alt=""/></li>
            <li><img src="../images/gallery/indosat-project/untitled-10.jpg" alt=""/></li>
            <li><img src="../images/gallery/indosat-project/untitled-11.jpg" alt=""/></li>
            <li><img src="../images/gallery/indosat-project/untitled-12.jpg" alt=""/></li>
            <li><img src="../images/gallery/indosat-project/untitled-13.jpg" alt=""/></li>
            <li><img src="../images/gallery/indosat-project/untitled-14.jpg" alt=""/></li>
        </ul>
        <div class="carousel-pager">
            <ul id="owl-demo" class="owl-carousel">
                <li class="item"><a href="#" title="Title #0"><img src="http://<?php echo $url ?>images/gallery/indosat-project/thumbs/thumb1.jpg" alt="Title #0" /></a></li>
                <li class="item"><a href="#" title="Title #1"><img src="http://<?php echo $url ?>images/gallery/indosat-project/thumbs/thumb2.jpg" alt="Title #1" /></a></li>
                <li class="item"><a href="#" title="Title #2"><img src="http://<?php echo $url ?>/images/gallery/indosat-project/thumbs/thumb3.jpg" alt="Title #2" /></a></li>
                <li class="item"><a href="#" title="Title #3"><img src="http://<?php echo $url ?>/images/gallery/indosat-project/thumbs/thumb4.jpg" alt="Title #3" /></a></li>
                <li class="item"><a href="#" title="Title #4"><img src="http://<?php echo $url ?>/images/gallery/indosat-project/thumbs/thumb5.jpg" alt="Title #4" /></a></li>
                <li class="item"><a href="#" title="Title #5"><img src="http://<?php echo $url ?>/images/gallery/indosat-project/thumbs/thumb6.jpg" alt="Title #5" /></a></li>
                <li class="item"><a href="#" title="Title #6"><img src="http://<?php echo $url ?>/images/gallery/indosat-project/thumbs/thumb7.jpg" alt="Title #6" /></a></li>
                <li class="item"><a href="#" title="Title #7"><img src="http://<?php echo $url ?>/images/gallery/indosat-project/thumbs/thumb8.jpg" alt="Title #7" /></a></li>
                <li class="item"><a href="#" title="Title #8"><img src="http://<?php echo $url ?>/images/gallery/indosat-project/thumbs/thumb9.jpg" alt="Title #8" /></a></li>
                <li class="item"><a href="#" title="Title #9"><img src="http://<?php echo $url ?>/images/gallery/indosat-project/thumbs/thumb10.jpg" alt="Title #9" /></a></li>
                <li class="item"><a href="#" title="Title #10"><img src="http://<?php echo $url ?>/images/gallery/indosat-project/thumbs/thumb11.jpg" alt="Title #10" /></a></li>
                <li class="item"><a href="#" title="Title #11"><img src="http://<?php echo $url ?>/images/gallery/indosat-project/thumbs/thumb12.jpg" alt="Title #11" /></a></li>
            </ul>
        </div>
        <!-- End Gallery Html Containers -->
    </div><!-- end right_side -->
    <div class="clear">&nbsp;</div>
</div><!-- end middle -->
<?php include $url_root . 'inc_footer.php'; ?>