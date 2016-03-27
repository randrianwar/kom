<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">DAFTAR POST</h1>
		</div>
	</div><!--/.row-->
</div>	<!--/.main-->


<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<table class='table table-bordered table-hover'>
					    <thead>
					    <tr>
					        <th>No</th>
					        <th>Judul</th>
					        <th colspan="2">Action</th>
					    </tr>
					    </thead>
							<tbody>
							<?php
							 	$sql = "SELECT * FROM post";
								$result = $conn->query($sql);
								$i=1;
								while ($row = $result->fetch_object()) {
									echo "
										<tr>
											<td width='20px' align='center'>".$i++."</td>
											<td>".$row->judul."</td>
											<td width='25px'>
												<a href='./dashboard.php?page=ed&id=".$row->id."'><svg style='width:20px; height:20px;' class='glyph stroked pencil'><use xlink:href='#stroked-pencil'></use></svg></a>
											</td>
											<td width='25px'>
												<a href='./dashboard.php?page=dp&act=del&id=".$row->id."' class='trash'><svg style='width:20px; height:20px;' class='glyph stroked trash'><use xlink:href='#stroked-trash'></use></svg></a>
											</td>
										</tr>
									";
								}

							?>
							</tbody>
					</table>
				</div>
			</div>
		</div>
	</div><!--/.row-->
</div>	<!--/.main-->

<?php
	if (isset($_GET['act'])) {
		if ($_GET['act'] == 'del') {
			$id = $_GET['id'];
			$sql = "DELETE FROM post WHERE id=$id";
			$result = $conn->query($sql);
			header("Location:./dashboard.php?page=dp");
		}
	}
?>
