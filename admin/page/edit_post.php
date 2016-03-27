<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">TAMBAH POST</h1>
		</div>
	</div><!--/.row-->
</div>	<!--/.main-->

<?php
	include('../proc/connect_db.php');
	$sql = "SELECT * FROM post WHERE id=".$_GET['id'];
	$result = $conn->query($sql);
	$row = $result->fetch_object();
?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<form method='POST' enctype="multipart/form-data">
						<div class='form-group'>
							<label> Judul </label>
							<input value='<?php echo $row->judul; ?>' type='text' name='judul' class='form-control' placeholder='Input Judul...' required/>
						</div>
						<div class='form-group'>
							<label> Gambar </label>
							<input type='file' name='gambar' class='form-control'/>
							<img src='img/post/<?php echo $row->id; ?>.jpg' width='300px' alt='belum ada gambar'>
						</div>
						<div class='form-group'>
							<label> Berita </label>
							<textarea name='berita' class='form-control ckeditor' required><?php echo $row->isi; ?></textarea>
						</div>
						<div class='form-group'>
							<input type='submit' name='input' class='btn btn-primay' value='Save'/>
						</div>
					</form>
					<?php
					if (isset($_POST['input'])) {
						$judul = $_POST['judul']; 
						$berita = $_POST['berita'];
						
						if (!$_FILES['gambar']['tmp_name'] == '') {
							move_uploaded_file($_FILES['gambar']['tmp_name'],'img/post/'.$row->id.'.jpg');
						}
						
						$sql = "UPDATE post SET judul='$judul', isi='$berita' WHERE id=".$_GET['id'];
						$result = $conn->query($sql);
						
						if ($result) {
							header("Location:./?page='dp");
						}
					}
					?>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="./ckeditor/ckeditor.js"></script>
