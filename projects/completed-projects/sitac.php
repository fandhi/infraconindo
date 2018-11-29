<?php
$page = "page3";
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
                <a class="" href="http://<?php echo $url ?>">Projects</a> &gt;
                <span class="active_2">Complete Project</span>
            </div>

        </div><!-- end breadcrumb -->
        <div class="box-side-menu">
            <div class="general_title">Projects</div>
            <div class="line-5">&nbsp;</div>
            <ul class="side-menu">
                <li><a class="active" href="http://<?php echo $url ?>projects/completed-projects/sitac.php">Complate Project</a>
                    <ul class="side-submenu">
                        <li class="active"><a href="http://<?php echo $url ?>projects/completed-projects/sitac.php">SITAC</a></li>
                        <li><a class="" href="#">CME</a></li>
                        <li><a class="" href="#">CME collocated</a></li>
                        <li><a class="" href="#">ME Instalation &amp; mantainance</a></li>
                        <li><a class="" href="#">Tower Strengthening Site Audit &amp; Rectification Tower</a></li>
                        <li class="last"><a class="" href="#">PLN Connection</a></li>
                    </ul>
                </li>
                <li><a class="" href="http://<?php echo $url ?>projects/on-going-project.php">On Going Project</a></li>
                <li class="last"><a class="" href="http://<?php echo $url ?>projects/site-locatore.php">Site Locatore</a></li>
            </ul>
        </div>
        <?php include $url_root . 'inc_side_news.php'; ?>
    </div><!-- end left_side -->
    <div class="right_side">
        <h1 class="content_title">Complete Project</h1>
        <img class="img_content_wide" src="http://<?php echo $url ?>/images/content/sitac.jpg" alt="sitac" />
        <p class="content_title2 grid_4">Pengalaman Bidang Site Acquisition</p>
        <div class="right"><b>Year: </b>
        <select class="select_wBorder">
            <option value="">2006</option>
            <option value="">2007</option>
            <option value="">2008</option>
            <option value="">2009</option>
            <option value="">2010</option>
            <option value="">2011</option>
            <option value="">2012</option>
            <option value="">2013</option>
        </select>
        </div>
        <div class="clear"></div>
        <table class="table_content" width="100%">
            <tr>
                <th bgcolor="#dfdfdf" width="5%">NO</th>
                <th bgcolor="#dfdfdf" width="25%">SITE NAME</th>
                <th bgcolor="#dfdfdf" width="20%">REGION</th>
                <th bgcolor="#dfdfdf" width="35%">CUSTOMER</th>
                <th bgcolor="#dfdfdf" width="15%">OPERATOR</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Cilodang</td>
                <td>Sumbagsel</td>
                <td>PT Dayamitra Telekomunikasi</td>
                <td>Telkomsel</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Bukit Subur</td>
                <td>Sumbagsel</td>
                <td>PT Dayamitra Telekomunikasi</td>
                <td>Telkomsel</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Simpang Rambutan</td>
                <td>Sumbagsel</td>
                <td>PT Dayamitra Telekomunikasi</td>
                <td>Telkomsel</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Karya Boga Kusuma</td>
                <td>Kalbar</td>
                <td>PT Dayamitra Telekomunikasi</td>
                <td>Telkomsel</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Komplek Villa Ria Asri</td>
                <td>Kalbar</td>
                <td>PT Dayamitra Telekomunikasi</td>
                <td>Telkomsel</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Mulak Ulu-2</td>
                <td>Sumbagsel</td>
                <td>PT Dayamitra Telekomunikasi</td>
                <td>Telkomsel</td>
            </tr>
            <tr>
                <td>7</td>
                <td>Sidomulyo OKI </td>
                <td>Sumbagsel</td>
                <td>PT Dayamitra Telekomunikasi</td>
                <td>Telkomsel</td>
            </tr>
            <tr>
                <td>8</td>
                <td>Maribaya OKI</td>
                <td>Sumbagsel</td>
                <td>PT Dayamitra Telekomunikasi</td>
                <td>Telkomsel</td>
            </tr>
            <tr>
                <td>9</td>
                <td>Tegal Sari Mesuji</td>
                <td>Sumbagsel</td>
                <td>PT Dayamitra Telekomunikasi</td>
                <td>Telkomsel</td>
            </tr>
            <tr>
                <td>10</td>
                <td>Ulak Kedondong</td>
                <td>Sumbagsel</td>
                <td>PT Dayamitra Telekomunikasi</td>
                <td>Telkomsel</td>
            </tr>
            <tr>
                <td>11</td>
                <td>Tanjung Makmur</td>
                <td>Sumbagsel</td>
                <td>PT Dayamitra Telekomunikasi</td>
                <td>Telkomsel</td>
            </tr>
            <tr>
                <td>12</td>
                <td>Kali Deras</td>
                <td>Sumbagsel</td>
                <td>PT Dayamitra Telekomunikasi</td>
                <td>Telkomsel</td>
            </tr>
            <tr>
                <td>13</td>
                <td>Jokoh</td>
                <td>Sumbagsel</td>
                <td>PT Dayamitra Telekomunikasi</td>
                <td>Telkomsel</td>
            </tr>
            <tr>
                <td>14</td>
                <td>Sukarame III</td>
                <td>Sumbagsel</td>
                <td>PT Dayamitra Telekomunikasi</td>
                <td>Telkomsel</td>
            </tr>
            <tr>
                <td>15</td>
                <td>30 Ilir</td>
                <td>Sumbagsel</td>
                <td>PT Dayamitra Telekomunikasi</td>
                <td>Telkomsel</td>
            </tr>
            <tr>
                <td>16</td>
                <td>Subdenpom Prabumulih</td>
                <td>Sumbagsel</td>
                <td>PT Dayamitra Telekomunikasi</td>
                <td>Telkomsel</td>
            </tr>
            <tr>
                <td>17</td>
                <td>Tj. Baru Penukal</td>
                <td>Sumbagsel</td>
                <td>PT Dayamitra Telekomunikasi</td>
                <td>Telkomsel</td>
            </tr>
            <tr>
                <td>18</td>
                <td>Kota Baru Penukal</td>
                <td>Sumbagsel</td>
                <td>PT Dayamitra Telekomunikasi</td>
                <td>Telkomsel</td>
            </tr>
            <tr>
                <td>19</td>
                <td>Gunung Aji </td>
                <td>Sumbagsel</td>
                <td>PT Dayamitra Telekomunikasi</td>
                <td>Telkomsel</td>
            </tr>
            <tr>
                <td>20</td>
                <td>Selibar-STO Pagar Alam</td>
                <td>Sumbagsel</td>
                <td>PT Dayamitra Telekomunikasi</td>
                <td>Telkomsel</td>
            </tr>
            <tr>
                <td>21</td>
                <td>Suryaadi</td>
                <td>Sumbagsel</td>
                <td>PT Dayamitra Telekomunikasi</td>
                <td>Telkomsel</td>
            </tr>
            <tr>
                <td>22</td>
                <td>Muara Burnai </td>
                <td>Sumbagsel</td>
                <td>PT Dayamitra Telekomunikasi</td>
                <td>Telkomsel</td>
            </tr>
            <tr>
                <td>23</td>
                <td>Rana Watsu Kencana</td>
                <td>Kalbar</td>
                <td>PT Dayamitra Telekomunikasi</td>
                <td>Telkomsel</td>
            </tr>
            <tr>
                <td>24</td>
                <td>Karya Boga Mitara</td>
                <td>Kalbar</td>
                <td>PT Dayamitra Telekomunikasi</td>
                <td>Telkomsel</td>
            </tr>
            <tr>
                <td>25</td>
                <td>Pasar Sei Raya Infill</td>
                <td>Kalbar</td>
                <td>PT Dayamitra Telekomunikasi</td>
                <td>Telkomsel</td>
            </tr>
            <tr>
                <td>26</td>
                <td>Muara Pelantau</td>
                <td>Kalbar</td>
                <td>PT Dayamitra Telekomunikasi</td>
                <td>Telkomsel</td>
            </tr>
            <tr>
                <td>27</td>
                <td>Perumnas 4</td>
                <td>Kalbar</td>
                <td>PT Dayamitra Telekomunikasi</td>
                <td>Telkomsel</td>
            </tr>
        </table>
        <div style="clear: both;"></div>
    </div><!-- end right_side -->
    <div class="clear">&nbsp;</div>
</div><!-- end middle -->
<?php include $url_root . 'inc_footer.php'; ?>