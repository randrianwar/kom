<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">TAMBAH POST</h1>
		</div>
	</div><!--/.row-->
</div>	<!--/.main-->

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<form method='POST' enctype="multipart/form-data">
						<div class='form-group'>
							<label> Judul </label>
							<input type='text' name='judul' class='form-control' placeholder='Input Judul...' required/>
						</div>
						<div class='form-group'>
							<label> Gambar </label>
							<input type='file' name='gambar' class='form-control'/>
						</div>
						<div class='form-group'>
							<label> Berita </label>
							<textarea name='berita' class='form-control ckeditor' required></textarea>
						</div>
						<div class='form-group'>
							<input type='submit' name='input' class='btn btn-primay' value='Save'/>
						</div>
					</form>
					<?php
					if (isset($_POST['input'])) {
						$judul = $_POST['judul'];
						$berita = $_POST['berita'];
						date_default_timezone_set("Asia/Hong_Kong");
						$date = date("Y-m-d H:i:s");
						include('../proc/connect_db.php');
						$sql = "INSERT INTO post VALUES(null,'$judul','$berita','$date')";
						$result = $conn->query($sql);

						$sql = "SELECT * FROM post ORDER BY id DESC LIMIT 1";
						$result = $conn->query($sql);
						$row = $result->fetch_object();

						move_uploaded_file($_FILES['gambar']['tmp_name'],'img/post/'.$row->id.'.jpg');

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
