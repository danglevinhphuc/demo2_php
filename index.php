<?php
	session_start();
	require_once("bootstrap.php");
	header('X-Frame-Options: DENY');
	$boostrap = new Bootstrap;
	$boostrap->Init();
?>