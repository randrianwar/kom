<?php
	function anti_injection($data) {
		$filter_sql = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
		return $filter_sql;
	}
	
	if (isset($_POST['login'])) {
		include('connect_db.php');
		$user = anti_injection($_POST['user']);
		$pass = md5(anti_injection($_POST['password']));
		
		$sql = "SELECT * FROM user WHERE user='$user' AND pass='$pass'";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
			session_start();
			$_SESSION['user']='admin';
			header("Location:dashboard.php");
		}
	}
?>