<?php
	$data = array(
			'host' => 'localhost',
			'user' => 'root',
			'pass' => '',
			'dbnm' => 'kominfo'
	);
	
	$conn = new mysqli($data['host'],$data['user'],$data['pass'],$data['dbnm']);
?>