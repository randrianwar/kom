<?php
	if (!isset($_GET['dv'])) {
		header("Location:./?page=informasi&dv=1");
	}
?>

<div id="container" class="opacity">
    <div class="content">
    <?php
		include("proc/connect_db.php");
		
		$sql2 = "SELECT * FROM post ORDER BY waktu DESC";
		$result2 = $conn->query($sql2);
		$count = $result2->num_rows;
		$div = $_GET['dv'];
		
		if (isset($_POST['search'])) {
			$sql = "SELECT id, judul, isi, YEAR(waktu) as tahun, MONTH(waktu) as bulan, DAY(waktu) as hari FROM post WHERE judul LIKE '%".$_POST['search']."%' ORDER BY waktu DESC";
		}
		
		else {
			$sql = "SELECT id, judul, isi, YEAR(waktu) as tahun, MONTH(waktu) as bulan, DAY(waktu) as hari FROM post ORDER BY waktu DESC LIMIT ".(($div*3)-3).",".($div*3);
		}
		
		$result = $conn->query($sql);
		
		while ($row = $result->fetch_object()) {
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
						<h1><a href='./?page=post&id=<?php echo $row->id; ?>'><?php echo $row->judul; ?></a></h1>
					</div>
				</div>
				<div class="post-text"> <a href="post.html"><img src="admin/img/post/<?php echo $row->id; ?>.jpg" alt="NO IMAGE" onError="this.onerror=null;this.src='admin/img/no.jpg';" width='595px' height='330px'></a> <br>
					<?php echo substr($row->isi,0,200); ?>
					<a href='./?page=post&id=<?php echo $row->id; ?>' class="more">Continue Reading →</a>
				</div>
			</div>
			<?php
		}
	?>
	
    <?php
	if (!isset($_POST['search'])) {
		echo "
			<div class='page-navi'>
				<p>Page $div of ".ceil($count/3)."</p>
				<ul>";
					for ($i=1; $i<=ceil($count/3); $i++) {
						echo "<li><a href='./?page=informasi&dv=$i' class='current'>$i</a></li>";
					}
		echo "	</ul>
			</div>	
		";
	}
	?>
</div>
    
<div class="sidebar">
	<div class="sidebar-box">
		<h4>Custom Text</h4>
		<p>Cras vehicula, enim ac rutrum imperdiet, tellus nibh sodales magna, at mollis odio mi a urna. Aliquam augue augue, sodales eu condimentum a, scelerisque eget purus. Sed suscipit mattis molestie.</p>
	</div>

	<div class="sidebar-box">
		<h4>Search</h4>
		<form class="searchform" method="POST" action="">
			<input type="text" name='search' placeholder='Search...'/>
		</form>
	</div>
</div>
<div class="clear"></div>