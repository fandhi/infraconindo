<?php
$page = "page7";
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
                <span class="active_2">Career</span>
            </div>

        </div><!-- end breadcrumb -->
        <div class="box-side-menu">
            <div class="general_title">Career</div>
            <div class="line-5">&nbsp;</div>
        </div>
        <?php include $url_root . 'inc_side_news.php'; ?>
    </div><!-- end left_side -->
    <div class="right_side">
        <h1 class="content_title">Career</h1>
        <img class="img_content_wide" src="http://<?php echo $url ?>/images/content/img-career.jpg" alt="career" />
        <p>Career at Infraconindo is an opportunity to be part of an enterprise that values a healthy working environment. Dedicated, enthusiastic and responsible are just a few words that describe the employees at Prisma Tower.</p>

	<p>Our attitude is relaxed and open-minded, while also maintaining professionalism. All our employees strive to provide excellence in quality service to our clients. 
            If you would like to be part of our team please check for available jobs opportunities below.</p>
        <p><b>Available Jobs :</b></p>
        <div class="line_title_content">
            <h4>Finance Manager (FM)</h4>
            <ul>
                <li>Male / Female S1 graduate</li>
                <li>Not older than 28 years.</li>
                <li>Fluent in English.</li>
                <li>Strong communication skills & able to work independently</li>
                <li>Willing to work in under pressured</li>
                <li>Graduated from reputable university</li>
            </ul>
        </div>
        <div class="line_title_content">
            <h4>Project Manager (PM)</h4>
            <ul>
                <li>S1 Civil Engineering</li>
                <li>IPK > 3.2 reputable university</li>
                <li>Having minimum 2 years experience</li>
            </ul>
        </div>
        <p>Please send your application and resume to :</p>
        <p><b>PT. INFRACONINDO MEGATAMA</b></p>
        <p>Jl. Pal Batu IV No. 14</p>
        <p>Menteng Dalam - Tebet<br/>
        Jakarta 12870<br/>
        INDONESIA<br/>
        </p>
        <p>or email to : <a class="red" href="mailto:hrd@infraconindo.com">hrd@infraconindo.com</a></p>
        <p class="red">Please put the job code  on the envelope or at the email subject</p>
        <div style="clear: both;"></div>
    </div><!-- end right_side -->
    <div class="clear">&nbsp;</div>
</div><!-- end middle -->
<?php include $url_root . 'inc_footer.php'; ?>