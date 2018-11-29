<?php
$page = "page4";
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
                <span class="active_2">Clients</span>
            </div>

        </div><!-- end breadcrumb -->
        <div class="box-side-menu">
            <div class="general_title">Clients</div>
            <div class="line-5">&nbsp;</div>
        </div>
        <?php include $url_root . 'inc_side_news.php'; ?>
    </div><!-- end left_side -->
    <div class="right_side">
        <h1 class="content_title">Clients</h1>
        <div class="content_page">
            <div class="thumb-big">
                <div class="box_center">
                    <img src="http://<?php echo $url ?>/images/content/nokia-siemens-networks.jpg" alt="nokia-siemens-networks" />
                </div>
                <p>Nokia Siemens Networks</p>
            </div>
            <div class="thumb-big">
                <div class="box_center">
                    <img src="http://<?php echo $url ?>/images/content/mitratel.jpg" alt="mitratel" />
                </div>
                <p>Mitratel</p>
            </div>
            <div class="thumb-big">
                <div class="box_center">
                    <img src="http://<?php echo $url ?>/images/content/ericsson.jpg" alt="ericsson" />
                </div>
                <p>Ericsson</p>
            </div>
            <div class="thumb-big">
                <div class="box_center">
                    <img src="http://<?php echo $url ?>/images/content/hutchison-telecom.jpg" alt="hutchison-telecom" />
                </div>
                <p>Hutchison Telecom</p>
            </div>
            <div class="thumb-big">
                <div class="box_center">
                    <img src="http://<?php echo $url ?>images/content/indosat.jpg" alt="indosat" />
                </div>
                <p>Indosat</p>
            </div>
            <div class="thumb-big">
                <div class="box_center">
                    <img src="http://<?php echo $url ?>/images/content/telkomsel.jpg" alt="telkomsel" />
                </div>
                <p>Telkomsel</p>
            </div>
            <div class="thumb-big">
                <div class="box_center">
                    <img src="http://<?php echo $url ?>/images/content/protelindo.jpg" alt="protelindo" />
                </div>
                <p>Protelindo</p>
            </div>
        </div>
        <div style="clear: both;"></div>
    </div><!-- end right_side -->
    <div class="clear">&nbsp;</div>
</div><!-- end middle -->
<?php include $url_root . 'inc_footer.php'; ?>