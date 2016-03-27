<?php
	ob_start();
	include('proc/connect_db.php');
	date_default_timezone_set("Asia/Hong_kong");
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<title>Kominfo | BalMon</title>
<meta charset="UTF-8">
<link rel="shortcut icon" type="image/x-icon" href="style/images/favicon.png">
<link rel="stylesheet" type="text/css" href="style/css/style.css" media="all">
<link rel="stylesheet" type="text/css" href="style/color/blue.css" media="all">
<link rel="stylesheet" type="text/css" media="screen" href="style/css/prettyPhoto.css">
<link rel="stylesheet" type="text/css" href="style/type/museo.css" media="all">
<link rel="stylesheet" type="text/css" href="style/type/ptsans.css" media="all">
<link rel="stylesheet" type="text/css" href="style/type/charis.css" media="all">
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="all">
<![endif]-->
<!--[if IE 8]>
<link rel="stylesheet" type="text/css" href="style/css/ie8.css" media="all">
<![endif]-->
<!--[if IE 9]>
<link rel="stylesheet" type="text/css" href="style/css/ie9.css" media="all">
<![endif]-->
<script src="style/js/jquery-1.6.2.min.js"></script>
<script src="style/js/ddsmoothmenu.js"></script>
<script src="style/js/transify.js"></script>
<script src="style/js/jquery.aw-showcase.js"></script>
<script src="style/js/jquery.jcarousel.js"></script>
<script src="style/js/carousel.js"></script>
<script src="style/js/jquery.prettyPhoto.js"></script>
<script src="style/js/jquery.superbgimage.min.js"></script>
<script src="style/js/jquery.slickforms.js"></script>
<script>
jQuery(document).ready(function ($) {
    $('.forms').dcSlickForms();
});
</script>
<script>
$(document).ready(function () {
    $("#showcase").awShowcase({
        content_width: 900,
        content_height: 400,
        auto: true,
        interval: 3000,
        continuous: false,
        arrows: true,
        buttons: true,
        btn_numbers: true,
        keybord_keys: true,
        mousetrace: false,
        /* Trace x and y coordinates for the mouse */
        pauseonover: true,
        stoponclick: false,
        transition: 'fade',
        /* hslide/vslide/fade */
        transition_delay: 0,
        transition_speed: 500,
        show_caption: 'onload'
		/* onload/onhover/show */
    });
});
</script>
</head>
<body>
<div id="thumbs"> <a href="style/images/art/bgr1.jpg">1</a>
                  <a href="style/images/art/bgr2.jpg">2</a>
                  <a href="style/images/art/bgr3.jpg">3</a>
                  <a href="style/images/art/bgr4.jpg">4</a>
                  <a href="style/images/art/bgr5.jpg">5</a>
                  <a href="style/images/art/bgr6.jpg">6</a> </div>
<div id="superbgimage">
  <div class="scanlines"></div>
</div>
<div id="wrapper">
  <div id="header">
    <div class="logo opacity"><a href="index.php"><img src="style/images/logo4.png" style="width:850px" alt=""></a></div>
    <div class="social">
      <ul>
        <li><a href="http://kominfo.go.id/index.php/content/rss/siaran_pers"><img src="style/images/icon-rss.png" alt=""></a></li>
        <li><a href="https://www.facebook.com/kemkominfo"><img src="style/images/icon-facebook.png" alt=""></a></li>
        <li><a href="https://twitter.com/kemkominfo"><img src="style/images/icon-twitter.png" alt=""></a></li>
        <li><a href="#"><img src="style/images/icon-googleplus.png" alt=""></a></li>
      </ul>
    </div>
  </div>
  <div class="clear"></div>
  <div id="menu" class="menu opacity">
    <ul>
      <li class="<?php if (!isset($_GET['page'])) { echo 'active'; } ?>"><a href="./">Home</a></li>

      <li> <a>Profil</a>
        <ul>
          <li class="<?php if ($_GET['page']=='executivesummary') { echo 'active'; } ?>"><a href="./?page=executivesummary">Executiv Summary</a></li>
          <li class="<?php if ($_GET['page']=='tugasdanfungsi') { echo 'active'; } ?>"><a href="./?page=tugasdanfungsi">Tugas dan Fungsi</a></li>
		      <li class="<?php if ($_GET['page']=='wilayahkerja') { echo 'active'; } ?>"><a href="./?page=wilayahkerja">Wilayah Kerja</a></li>
          <li class="<?php if ($_GET['page']=='struktur') { echo 'active'; } ?>"><a href="./?page=struktur">Struktur Organisasi</a></li>
        </ul>
      </li>

      <li class="<?php if ($_GET['page']=='informasi') { echo 'active'; } ?>"><a href="./?page=informasi">Informasi dan Publikasi</a></li>

      <li><a href="#">Layanan</a>
        <ul>
          <li class="<?php if ($_GET['page']=='sertifikasioprator') { echo 'active'; } ?>"><a href="./?page=sertifikasioprator">Sertifikasi Oprator Radio</a></li>
          <li class="<?php if ($_GET['page']=='izinspektrum') { echo 'active'; } ?>"><a href="./?page=izinspektrum">Izin Spektrum Frekuensi Radio</a></li>
					<li class="<?php if ($_GET['page']=='monitoringspektrum') { echo 'active'; } ?>"><a href="./?page=monitoringspektrum">Monitoring Spektrum Frekuensi Radio</a></li>
					<li class="<?php if ($_GET['page']=='sertifikasialat') { echo 'active'; } ?>"><a href="./?page=sertifikasialat">Sertifikasi Alat dan Perangkat Telekomunikasi</a></li>
        </ul>
      </li>

      <li class="<?php if ($_GET['page']=='rencanastrategi') { echo 'active'; } ?>"><a href="./?page=rencanastrategi">Rencana Strategi</a></li>

      <li class="<?php if ($_GET['page']=='contact') { echo 'active'; } ?>"><a href="./?page=contact">Contact</a></li>
    </ul>
    <br style="clear: left">
  </div>


  <?php
  /*  if (isset($_POST['go'])) {
      $src = $_POST['src'];
      header("Location:./?page=berita&src=$src");
    }*/

    if (isset($_GET['page'])) {
       if ($_GET['page']=='executivesummary') {
        include('page/executivesummary.php');
      }

	    else if ($_GET['page']=='wilayahkerja') {
        include('page/wilayahkerja.php');
      }

      else if ($_GET['page']=='tugasdanfungsi') {
        include('page/tugasdanfungsi.php');
      }

      else if ($_GET['page']=='struktur') {
        include('page/struktur.php');
      }

      else if ($_GET['page']=='informasi') {
        include('page/informasi.php');
      }

			else if ($_GET['page']=='sertifikasioprator') {
			  include('page/sertifikasioprator.php');
			}

			else if ($_GET['page']=='izinspektrum') {
			  include('page/izinspektrum.php');
			}

			else if ($_GET['page']=='monitoringspektrum') {
			  include('page/monitoringspektrum.php');
			}

			else if ($_GET['page']=='sertifikasialat') {
			  include('page/sertifikasialat.php');
			}

      else if ($_GET['page']=='rencanastrategi') {
        include('page/rencanastrategi.php');
      }

      else if ($_GET['page']=='contact') {
        include('page/contact.php');
      }

      else if ($_GET['page']=='admin') {
        include('page/admin.php');
      }

	  else if ($_GET['page']=='post') {
		include('page/post.php');
	  }
    }

    else {
      include('page/home.php');
    }
  ?>

      <div id="footer">
      <div class="footer-top"></div>



      <div class="one-fifth">
        <img src="style/images/kominfo.png" class="center" style="width:90px">
        <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kominfo</h2>
      </div>

      <div class="one-fifth">
        <h3>Link</h3>
					<ul class="latest-posts">
          <li><a href="https://www.kominfo.go.id/">Direktorat Jendral</a></li>
          <li><a href="http://www.postel.go.id/">SDPPI </a></li>
          <li><a href="http://balitbangsdm.kominfo.go.id/">Balitbang SDM </a></li>
				</ul>
      </div>

			<div class="one-fifth">
        <h3>&nbsp;</h3>
					<ul class="latest-posts">
          <li><a href="http://aptika.kominfo.go.id/">Aptika</a></li>
					<li><a href="http://aptika.kominfo.go.id/">&nbsp;</a></li>

				</ul>
      </div>

			<div class="two-fifth">
        <h3>About Us</h3>
					<ul class="latest-posts">
          <p>Balai Monitor SFR Kelas II Makassar selaku UPT Ditjen SDPPI bertujuan mewujudkan penggunaan Spektrum Frekuensi Radio
						yang tertib, efesien dan bebas dari gangguan melalui penerapan sistem monitoring yang terintegrasi
						dengan SIM-S sebagai fungsi pengawasan yang profesional</p>
				</ul>
      </div>

      <div class="clear"></div>
    </div>
  </div>
  <div id="copyright" class="opacity">
    <p align='center'>Copyright &copy; <?php echo date('Y'); ?> - All Rights Reserved - <a href="#">KEMKOMINFO | BalMon</a></p>
  </div>
</div>
<script src="style/js/scripts.js"></script>
</body>
</html>
