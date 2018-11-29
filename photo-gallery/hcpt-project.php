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
                <li><a href="http://<?php echo $url ?>photo-gallery/indosat-project.php">Indosat Project</a></li>
                <li><a class="active" href="http://<?php echo $url ?>photo-gallery/hcpt-project.php">HCPT Project</a></li>
                <li class="last"><a href="http://<?php echo $url ?>photo-gallery/telkomsel-project.php">Telkomsel Project</a></li>
            </ul>
        </div>
        <?php include $url_root . 'inc_side_news.php'; ?>
    </div><!-- end left_side -->
    <div class="right_side">
        <h1 class="content_title">Hcpt Project</h1>
        <!-- Start Advanced Gallery Html Containers -->

                <ul id="slider3" class="rslides">
                    <li><img src="http://<?php echo $url ?>images/gallery/hcpt-project/untitled-1.jpg" alt="Title #0" /></li>
                    <li><img src="http://<?php echo $url ?>images/gallery/hcpt-project/untitled-2.jpg" alt="Title #1" /></li>
                    <li><img src="http://<?php echo $url ?>images/gallery/hcpt-project/untitled-3.jpg" alt="Title #2" /></li>
                    <li><img src="http://<?php echo $url ?>images/gallery/hcpt-project/untitled-4.jpg" alt="Title #3" /></li>
                    <li><img src="http://<?php echo $url ?>images/gallery/hcpt-project/untitled-5.jpg" alt="Title #4" /></li>
                    <li><img src="http://<?php echo $url ?>images/gallery/hcpt-project/untitled-6.jpg" alt="Title #5" /></li>
                    <li><img src="http://<?php echo $url ?>images/gallery/hcpt-project/untitled-7.jpg" alt="Title #6" /></li>
                    <li><img src="http://<?php echo $url ?>images/gallery/hcpt-project/untitled-8.jpg" alt="Title #7" /></li>
                </ul>
                <div id="" class="carousel-pager">
            <ul id="owl-demo" class="owl-carousel">
                <li class="item"><a href="#"><img src="../images/gallery/hcpt-project/thumbs/thumb1.jpg" alt="image01" data-description="From off a hill whose concave womb reworded" height="70" width="70" /></a></li>
                <li class="item"><a href="#"><img src="../images/gallery/hcpt-project/thumbs/thumb2.jpg" alt="image02" data-description="A plaintful story from a sistering vale" height="70" width="70" /></a></li>
                <li class="item"><a href="#"><img src="../images/gallery/hcpt-project/thumbs/thumb3.jpg" alt="image03" data-description="A plaintful story from a sistering vale" height="70" width="70" /></a></li>
                <li class="item"><a href="#"><img src="../images/gallery/hcpt-project/thumbs/thumb4.jpg" alt="image04" data-description="My spirits to attend this double voice accorded" height="70" width="70" /></a></li>
                <li class="item"><a href="#"><img src="../images/gallery/hcpt-project/thumbs/thumb5.jpg" alt="image05" data-description="And down I laid to list the sad-tuned tale" height="70" width="70" /></a></li>
                <li class="item"><a href="#"><img src="../images/gallery/hcpt-project/thumbs/thumb6.jpg" alt="image06" data-description="Ere long espied a fickle maid full pale" height="70" width="70" /></a></li>
                <li class="item"><a href="#"><img src="../images/gallery/hcpt-project/thumbs/thumb7.jpg" alt="image07" data-description="Tearing of papers, breaking rings a-twain" height="70" width="70" /></a></li>
                <li class="item"><a href="#"><img src="../images/gallery/hcpt-project/thumbs/thumb8.jpg" alt="image08" data-description="Storming her world with sorrow's wind and rain" height="70" width="70" /></a></li>
                <li class="item"><a href="#"><img src="../images/gallery/hcpt-project/thumbs/thumb9.jpg" alt="image09" data-description="Upon her head a platted hive of straw" height="70" width="70" /></a></li>
                <li class="item"><a href="#"><img src="../images/gallery/hcpt-project/thumbs/thumb10.jpg" alt="image10" data-description="Which fortified her visage from the sun" height="70" width="70" /></a></li>
                <li class="item"><a href="#"><img src="../images/gallery/hcpt-project/thumbs/thumb11.jpg" alt="image11" data-description="Whereon the thought might think sometime it saw" height="70" width="70" /></a></li>
                <li class="item"><a href="#"><img src="../images/gallery/hcpt-project/thumbs/thumb12.jpg" alt="image12" data-description="The carcass of beauty spent and done" height="70" width="70" /></a></li>
                <li class="item"><a href="#"><img src="../images/gallery/hcpt-project/thumbs/thumb13.jpg" alt="image13" data-description="Time had not scythed all that youth begun" height="70" width="70" /></a></li>
                <li class="item"><a href="#"><img src="../images/gallery/hcpt-project/thumbs/thumb14.jpg" alt="image14" data-description="Nor youth all quit; but, spite of heaven's fell rage" height="70" width="70" /></a></li>
            </ul>
        </div>
        <!-- End Gallery Html Containers -->
    </div><!-- end right_side -->
    <div class="clear">&nbsp;</div>
</div><!-- end middle -->
<?php include $url_root . 'inc_footer.php'; ?>