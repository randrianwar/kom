<div id="container" class="opacity">
  <div id="showcase" class="showcase">
    <div class="showcase-slide">
      <div class="showcase-content"> <img src="style/images/art/s1.jpg" alt=""></div>
    </div>
    <div class="showcase-slide">
      <div class="showcase-content"> <img src="style/images/art/s2.jpg" alt=""> </div>
      <div class="showcase-caption"> Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. </div>
    </div>
    <div class="showcase-slide">
      <div class="showcase-content"> <img src="style/images/art/s3.jpg" alt=""></div>
    </div>
    <div class="showcase-slide">
      <div class="showcase-content"> <img src="style/images/art/rb2.png" alt=""></div>
    </div>
    <div class="showcase-slide">
      <div class="showcase-content"> <img src="style/images/art/show1.png" alt=""> </div>
      <div class="showcase-caption"> Kominfo Makassar.</div>
    </div>
  </div>
  <div class="intro">Balai Monitoring spektrum Frekuensi Radio Kelas II Makassar.</div>
  <div class="hr2"></div>
  <h1>Layanan Kemkominfo</h1>
  <div class="two-third">
    <p>Balai Monitor Spektrum Frekuensi Radio adalah Unit Pelaksana Teknis (UPT) Direktorat Jenderal Sumber Daya dan Perangkat
      Pos dan Informatika, berada di bawah dan bertanggung jawab kepada Direktorat Jenderal SDPPI, pembinaan administrasi di
      bawah koordinasi Sekretariat Ditjen SDPPI dan pembinaan teknis operasional di bawah koordinasi Direktorat Pengendalian
      SDPPI Kementerian Komunikasi dan Informatika RI.</p>
  </div>
  <div class="one-third last">
    <ul>
      <li>Pemantauan spektrum frekuensi.</li>
      <li>Pelayanan/pengaduan masyarakat.</li>
      <li>Penertiban dan penyidikan.</li>
      <li>Pelaksanaan evaluasi dan pengujian.</li>
    </ul>
  </div>
  <div class="clear"></div>
  <br>
  <br>
  <br>
  <div class="one-fourth"> <img src="style/images/icon1.png" alt="" class="center"><br>
    <h4 class="center">Monitoring</h4>
    <p class="center">Pelaksanaan pengamatan, deteksi lokasi pancaran, pemantauan/monitor spektrum frekuensi radio.</p>
  </div>
  <div class="one-fourth"> <img src="style/images/icon2.png" alt="" class="center"><br>
    <h4 class="center">Perizinan</h4>
    <p class="center">Izin Stasiun Radio (ISR) diterbitkan oleh Direktorat Jenderal Sumber Daya dan Perangkat Pos dan Informatika.</p>
  </div>
  <div class="one-fourth"> <img src="style/images/icon3.png" alt="" class="center"><br>
    <h4 class="center">Sertifikasi</h4>
    <p class="center">Sertifikat Kecakapan Operator Radio (SKOR) hanya terdiri dari 1 (satu) jenis sertifikat.</p>
  </div>
  <div class="one-fourth last"> <img src="style/images/icon4.png" alt="" class="center"><br>
    <h4 class="center">Optimasi</h4>
    <p class="center">Pelaksanaan kalibrasi dan perbaikan perangkat monitor spektrum frekuensi radio.</p>
  </div>
  <div class="clear"></div>
  <div class="hr1"></div>
  <h2>Informasi dan Publikasi</h2>
  <div class="carousel">
    <div id="carousel-scroll"><a href="#" id="prev">Prev</a><a href="#" id="next">Next</a></div>
    <ul>
    <?php
      include('proc/connect_db.php');
      $sql = "SELECT * FROM post ORDER BY waktu DESC LIMIT 7";
      $result = $conn->query($sql);
      while ($row = $result->fetch_object()) {
        ?>
			<li> <a href='?page=post&id=<?php echo $row->id; ?>'> <span class='overlay details'></span><img style='width:164px; height=130px;' src='admin/img/post/<?php echo $row->id; ?>.jpg' onError="this.onerror=null;this.src='admin/img/no2.jpg';"/> </a> </li>
		<?php
      }
    ?>
    </ul>
  </div>
