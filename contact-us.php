<?php
$page = "page8";
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
            <div class="general_title">Contact Us</div>
            <div class="line-5">&nbsp;</div>
        </div>
        <?php include $url_root . 'inc_side_news.php'; ?>
    </div><!-- end left_side -->
    <div class="right_side">
        <h1 class="content_title">Contact Us</h1>
        <img class="img_content_wide" src="http://<?php echo $url ?>/images/content/map.jpg" alt="Contact Us" />
        <div class="grid_4a">
            <div class="line_title_content">
                <h4>PT. INFRACONINDO MEGATAMA<br/>Head Office :</h4>
            </div>
            <p>Jl. Komp. Perkantoran Mitra Sunter<br/>
                Blok E1 No.7<br/>
                Jl. Yos Sudarso Kav.89,<br/>
                Jakarta 14350<br/>
            <table width="200" cellpadding="1">
                <tr>
                    <td>Ph</td>
                    <td>:</td>
                    <td>+62 21 6530 2158</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>+62 21 6530 2159</td>
                </tr>
                <tr>
                    <td>Fax</td>
                    <td>:</td>
                    <td>+62 21 6530 8952</td>
                </tr>
            </table>
            </p>
            <p>&nbsp;</p>
            <div class="line_title_content">
                <h4>Pontianak Office :</h4>
            </div>
            <p>Jl. Suwignyo, Komp. Citra Indah I<br/>
                Blok C No.1, Suwi Jawi <br/>
                Pontianak - Kalimantan Barat</p>
            <p>&nbsp;</p>
            <div class="line_title_content">
                <h4>Palembang Office :</h4>
            </div>
            <p>Komp. Kenten Permai I Blok A No.19<br/>
                Jl. MT Mangkunegara<br/>
                Palembang – Sumatera Selatan</p>
        </div>
        <div class="grid_4 omega form">
            <div class="line_title_content">
                <h4>Contact Form :</h4>
            </div>
            <form method="post" action="">
                <div class="row">
                    <label for="LoginForm_username" class="required">Contact Us :</label>
                    <input name="contact_us" id="contact_us" type="text" value=""/>
                </div>
                <div class="row">
                    <label for="LoginForm_username" class="required">Name :</label>
                    <input name="name" id="name" type="text" value=""/>
                </div>
                <div class="row">
                    <label for="LoginForm_username" class="required">Email :</label>
                    <input name="email" id="email" type="text" value=""/>
                </div>
                <div class="row">
                    <label for="LoginForm_username" class="required">City :</label>
                    <input name="city" id="city" type="text" value=""/>
                </div>
                <div class="row">
                    <label for="LoginForm_username" class="required">Mobile :</label>
                    <input name="mobile" id="mobile" type="text" value=""/>
                </div>
                <div class="row">
                    <label for="LoginForm_username" class="required">Write your message :</label>
                    <textarea name="message" id="message" rows="6" value=""></textarea>
                </div>
                <input class="button_1 right" type="submit" value="SUBMIT" />
            </form>
        </div>
        <div style="clear: both;"></div>
    </div><!-- end right_side -->
    <div class="clear">&nbsp;</div>
</div><!-- end middle -->
<?php include $url_root . 'inc_footer.php'; ?>