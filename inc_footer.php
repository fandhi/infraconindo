
<div id="footer" class="color_white">
    <div class="wrapper">
        <div class="over_hdn">
            <div class="grid_5 color_white">
                <div>Copyright &copy; 2013 PT. Infraconindo Megatama. All right reserved.<br /> Design by WEBARQ.<br /></div>
            </div>
            <div class="grid_7">
                <span><a class="link_footer_menu first" href="http://<?php echo $url ?>about-infraconindo/corporate-profile.php" rel="nofollow">About Infraconindo</a> /</span>
                <span><a class="link_footer_menu" href="http://<?php echo $url ?>services/engineering-survey-and-design.php" rel="nofollow">Services</a> /</span>
                <span><a class="link_footer_menu" href="http://<?php echo $url ?>projects/completed-projects/sitac.php" rel="nofollow">Projects</a> /</span>
                <span><a class="link_footer_menu" href="http://<?php echo $url ?>clients.php" rel="nofollow">Clients</a> /</span>
                <span><a class="link_footer_menu" href="http://<?php echo $url ?>photo-gallery/indosat-project.php" rel="nofollow">Photo Gallery</a> /</span>
                <span><a class="link_footer_menu border_right_0" href="http://<?php echo $url ?>career.php" rel="nofollow">Career</a> /</span>
                <span><a class="link_footer_menu border_right_0" href="http://<?php echo $url ?>contact-us.php" rel="nofollow">Contact Us</a> /</span>
                <span><a class="link_footer_menu border_right_0" href="http://<?php echo $url ?>sitemap.php" rel="nofollow">Sitemap</a></span>
            </div>
        </div>
    </div>
</div>
</div><!-- end container -->
<?php 
if($page=="page0") echo '
<script type="text/javascript">
    var dropdown=new TINY.dropdown.init("dropdown", {id:"menu", active:"menuhover"});
    $(document).ready(function() {
        $("#coin-slider").coinslider();
    });
//    function(goToGalerry){
//        find("")
//    }
</script>';
?>
<script type="text/javascript">
<?php if($page=="page5")// include $url_root.'js/gallery_footer.js';
?>
</script>
<?php
echo '
    <!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="../js/gallery/jquery.tmpl.min.js"></script>
    <script type="text/javascript" src="../js/gallery/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="../js/gallery/jquery.elastislide.js"></script>
    <script type="text/javascript" src="../js/gallery/gallery.js"></script>-->';
?>

</body>
</html>