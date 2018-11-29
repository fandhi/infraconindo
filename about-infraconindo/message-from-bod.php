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
                <span class="active_2">Message from BoD</span>
            </div>

        </div><!-- end breadcrumb -->
        <div class="box-side-menu">
            <div class="general_title">About Infraconindo</div>
            <div class="line-5">&nbsp;</div>
            <ul class="side-menu">
                <li><a class="" href="http://<?php echo $url ?>about-infraconindo/corporate-profile.php">Corporate Profile</a></li>
                <li><a class="" href="http://<?php echo $url ?>about-infraconindo/vision-and-mission.php">Vision &amp; Mission</a></li>
                <li><a class="" href="http://<?php echo $url ?>about-infraconindo/company-structure.php">Company Structure</a></li>
                <li class="last"><a class="active" href="http://<?php echo $url ?>about-infraconindo/message-from-bod.php">Message from BoD</a></li>
            </ul>
        </div>
        <?php include $url_root . 'inc_side_news.php'; ?>
    </div><!-- end left_side -->
    <div class="right_side bod">
        <h1 class="content_title">Message from BoD</h1>
        <img class="img_content_wide" src="http://<?php echo $url ?>/images/content/message-from-bod.jpg" alt="Message from BoD" />
        <h4><b><i>COMMITTED  to  EXCELLENCE</i></b></h4>
        <table width="619">
            <tr>
                <td width="124"><b><i class="bigger_font_content">COMMITTED</i></b></td>
                <td><p>means we deliver what we promise, do what we say and stand for what is right.</p></td>
            </tr>
            <tr>
                <td><b><i class="bigger_font_content">EXCELLENCE</i></b></td>
                <td><p>means we continue to improve our value preposition to our clients with   the highest standard of quality , accountability, and respect for our clients and the communities in which we work.</p></td>
            </tr>
        </table>
        
        <p>&nbsp;</p>
        <p>Combination of those two words are our philosophy which shown how we do our bussiness in construction field in the past, at the present, and also in the future.</p>

        <p><b class="bigger_font_content">INFRACONINDO</b> is a fast growing telecommunication contractor specializing in the provision of full services for the deployment of networks infrastructures and other telecommunication related project in global market.</p>

        <p>Established at 2004, and focus on telecommunication infrastructure project since 2006, we have built hundreds telecommunication tower at many area in Indonesia. 
            With many years experience in this field and providing services to some world class company with international standard, whereas we can see, 
            learn and practice how to manage a multiple project with high quality standard, we ready to reach our vision to become the best telecommunication contractor in Indonesia.</p> 

        <p>My favourite quote said :</p>
        <q><i class="indent bigger_font_content"><b>"Nobody remembers who finished second but the guy who finished second"</b></i></q>

        <p>We are confidence by working with our best effort, develop our competency & skills, and improve our knowledge continuously, in the future, when everybody say about telecommunication contractor, they will remember us...<b class="bigger_font_content">INFRACONINDO</b>.</p>

        <p>Sincerely,</p>
        <p>&nbsp;</p>

        <p><b class="bigger_font_content">Toga V Michael Sinaga</b><br/>
        <i style="margin-left: 15px;">President Director</i></p>
        <div style="clear: both;"></div>
    </div><!-- end right_side -->
    <div class="clear">&nbsp;</div>
</div><!-- end middle -->
<?php include $url_root . 'inc_footer.php'; ?>