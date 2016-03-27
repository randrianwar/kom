<?php
	ob_start();
	session_start();
	if (isset($_SESSION)) {
		if (!$_SESSION['user']=='admin') {
			header("Location:./");
		}
	}

	else {
		header("Location:./");
	}

	include("../proc/connect_db.php");
?>

<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BalMon | Admin Panel</title>

	<link rel="shortcut icon" type="image/x-icon" href="../style/images/favicon.png">

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">

	<!--Icons-->
	<script src="js/lumino.glyphs.js"></script>

	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Admin - <span>Balai Monitoring Spektrum Frekuensi Radio Kelas II Makassar</span></a>
					<ul class="user-menu">
						<a href="logout.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg>Logout</a>
					</ul>
				</div>
			</div><!-- /.container-fluid -->
		</nav>

		<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
			<?php
				$sql = "SELECT * FROM contact WHERE new=0";
				$result = $conn->query($sql);
			?>

			<ul class="nav menu">
				<li class="<?php if ($_GET['page']=='dp') { echo "active"; } ?>"><a href="dashboard.php?page=dp"><svg class="glyph stroked app window with content"><use xlink:href="#stroked-app-window-with-content"/></svg>Daftar Post</a></li>
				<li class="<?php if ($_GET['page']=='tp') { echo "active"; } ?>"><a href="dashboard.php?page=tp"><svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg>Tambah Post</a></li>
				<li class="<?php if ($_GET['page']=='ms') { echo "active"; } ?>"><a href="dashboard.php?page=ms"><svg class="glyph stroked two messages"><use xlink:href="#stroked-two-messages"/></svg>Kontak Masuk <button class='btn btn-success btn-xs'><?php echo $result->num_rows; ?></button></a></li>
			</ul>
		</div><!--/.sidebar-->

		<?php
			if (isset($_GET['page'])) {
				if ($_GET['page']=='dp') {
					include('page/daftar_post.php');
				}

				elseif ($_GET['page']=='tp') {
					include('page/tambah_post.php');
				}

				elseif ($_GET['page']=='ed') {
					include('page/edit_post.php');
				}

				elseif ($_GET['page']=='ms') {
					include('page/message.php');
				}
			}

			else {
				include('page/daftar_post.php');
			}
		?>

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/chart.min.js"></script>
		<script src="js/chart-data.js"></script>
		<script src="js/easypiechart.js"></script>
		<script src="js/easypiechart-data.js"></script>
		<script src="js/bootstrap-datepicker.js"></script>
		<script>
			$('#calendar').datepicker({
			});

			!function ($) {
				$(document).on("click","ul.nav li.parent > a > span.icon", function(){
					$(this).find('em:first').toggleClass("glyphicon-minus");
				});
				$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
			}(window.jQuery);

			$(window).on('resize', function () {
			  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
			})
			$(window).on('resize', function () {
			  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
			})
		</script>
	</body>
</html>
