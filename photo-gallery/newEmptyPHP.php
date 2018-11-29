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
        <h1 class="content_title">Hcpt Projecdsdsdst</h1>
        <!-- Start Advanced Gallery Html Containers -->
        <!-- Slideshow 3 -->
        <ul class="rslides" id="slider3">
            <li><img src="../images/gallery/New-folder/1.jpg" alt=""/></li>
            <li><img src="../images/gallery/New-folder/2.jpg" alt=""/></li>
            <li><img src="../images/gallery/New-folder/3.jpg" alt=""/></li>
            <li><img src="../images/gallery/New-folder/4.jpg" alt=""/></li>
            <li><img src="../images/gallery/New-folder/5.jpg" alt=""/></li>
            <li><img src="../images/gallery/New-folder/6.jpg" alt=""/></li>
            <li><img src="../images/gallery/New-folder/7.jpg" alt=""/></li>
            <li><img src="../images/gallery/New-folder/8.jpg" alt=""/></li>
            <li><img src="../images/gallery/New-folder/9.jpg" alt=""/></li>
            <li><img src="../images/gallery/New-folder/10.jpg" alt=""/></li>
            <li><img src="../images/gallery/New-folder/11.jpg" alt=""/></li>
            <li><img src="../images/gallery/New-folder/12.jpg" alt=""/></li>
            <li><img src="../images/gallery/New-folder/13.jpg" alt=""/></li>
            <li><img src="../images/gallery/New-folder/14.jpg" alt=""/></li>
        </ul>
        <div id="" class="carousel-pager">
            <ul id="owl-demo" class="owl-carousel">
                <li class="item"><a href="#"><img src="../images/gallery/New-folder/thumbs/t1.jpg" alt="image01" data-description="From off a hill whose concave womb reworded" height="70" width="70" /></a></li>
                <li class="item"><a href="#"><img src="../images/gallery/New-folder/thumbs/t2.jpg" alt="image02" data-description="A plaintful story from a sistering vale" height="70" width="70" /></a></li>
                <li class="item"><a href="#"><img src="../images/gallery/New-folder/thumbs/t3.jpg" alt="image03" data-description="A plaintful story from a sistering vale" height="70" width="70" /></a></li>
                <li class="item"><a href="#"><img src="../images/gallery/New-folder/thumbs/t4.jpg" alt="image04" data-description="My spirits to attend this double voice accorded" height="70" width="70" /></a></li>
                <li class="item"><a href="#"><img src="../images/gallery/New-folder/thumbs/t5.jpg" alt="image05" data-description="And down I laid to list the sad-tuned tale" height="70" width="70" /></a></li>
                <li class="item"><a href="#"><img src="../images/gallery/New-folder/thumbs/t6.jpg" alt="image06" data-description="Ere long espied a fickle maid full pale" height="70" width="70" /></a></li>
                <li class="item"><a href="#"><img src="../images/gallery/New-folder/thumbs/t7.jpg" alt="image07" data-description="Tearing of papers, breaking rings a-twain" height="70" width="70" /></a></li>
                <li class="item"><a href="#"><img src="../images/gallery/New-folder/thumbs/t8.jpg" alt="image08" data-description="Storming her world with sorrow's wind and rain" height="70" width="70" /></a></li>
                <li class="item"><a href="#"><img src="../images/gallery/New-folder/thumbs/t9.jpg" alt="image09" data-description="Upon her head a platted hive of straw" height="70" width="70" /></a></li>
                <li class="item"><a href="#"><img src="../images/gallery/New-folder/thumbs/t10.jpg" alt="image10" data-description="Which fortified her visage from the sun" height="70" width="70" /></a></li>
                <li class="item"><a href="#"><img src="../images/gallery/New-folder/thumbs/t11.jpg" alt="image11" data-description="Whereon the thought might think sometime it saw" height="70" width="70" /></a></li>
                <li class="item"><a href="#"><img src="../images/gallery/New-folder/thumbs/t12.jpg" alt="image12" data-description="The carcass of beauty spent and done" height="70" width="70" /></a></li>
                <li class="item"><a href="#"><img src="../images/gallery/New-folder/thumbs/t13.jpg" alt="image13" data-description="Time had not scythed all that youth begun" height="70" width="70" /></a></li>
                <li class="item"><a href="#"><img src="../images/gallery/New-folder/thumbs/t14.jpg" alt="image14" data-description="Nor youth all quit; but, spite of heaven's fell rage" height="70" width="70" /></a></li>
            </ul>
        </div>

    </div><!-- end right_side -->
    <div class="clear">&nbsp;</div>
</div><!-- end middle -->
<?php include $url_root . 'inc_footer.php'; ?>