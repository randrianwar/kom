<div id="container" class="opacity">
    <div class="content">
		<?php
			include("proc/connect_db.php");
			$sql = "SELECT id, judul, isi, YEAR(waktu) as tahun, MONTH(waktu) as bulan, DAY(waktu) as hari FROM post WHERE id=".$_GET['id'];
			$result = $conn->query($sql);

			$row = $result->fetch_object();
			switch($row->bulan) {
				case 1 : $bulan = "Jan"; break;
				case 2 : $bulan = "Feb"; break;
				case 3 : $bulan = "Mar"; break;
				case 4 : $bulan = "Apr"; break;
				case 5 : $bulan = "Mei"; break;
				case 6 : $bulan = "Juni"; break;
				case 7 : $bulan = "July"; break;
				case 8 : $bulan = "Agst"; break;
				case 9 : $bulan = "Sept"; break;
				case 10 : $bulan = "Oct"; break;
				case 11 : $bulan = "Nov"; break;
				case 12 : $bulan = "Des"; break;
			}
		?>

		<div class="post">
			<div class="post-info">
				<div class="post-date"> <span class="day"><?php echo $row->hari; ?></span> <span class="month"><?php echo $bulan; ?></span> <span class="year"><?php echo $row->tahun; ?></span></div>
				<div class="post-title">
					<h1><a href="post.html"><?php echo $row->judul; ?></a></h1>
				</div>
			</div>
			<div align='justify' class="post-text"> <a href="post.html"><img src="admin/img/post/<?php echo $_GET['id']; ?>.jpg" width='595px' height='330px' onError="this.onerror=null;this.src='admin/img/no2.jpg';"></a> <br>
				<?php echo $row->isi; ?>
			</div>
		</div>
	</div>

	<div class="sidebar">
		<div class="sidebar-box">
			<h4>Custom Text</h4>
			<p>Cras vehicula, enim ac rutrum imperdiet, tellus nibh sodales magna, at mollis odio mi a urna. Aliquam augue augue, sodales eu condimentum a, scelerisque eget purus. Sed suscipit mattis molestie.</p>
		</div>

		<div class="sidebar-box">
			<h4>Search</h4>
			<form class="searchform" method="POST" action="./?page=informasi">
				<input type="text" name='search' placeholder='Search...'/>
			</form>
		</div>
	</div>
	<div class="clear"></div>
