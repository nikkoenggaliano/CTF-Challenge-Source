<!-- ?show_source=false -->
<style>
	* {
		background-color: #111;
		color: lime;
	} code {
		margin-top: 100px;
		display: block;
		text-align: center;
	}
</style>
<code>Ha<strong><span style="color:red">ashur1n</span></strong><br><br> your security is suck <br>we are angonwedus <br>we do not porget <br> we do not ekspek <br> eskecap </code>

<?php

	error_reporting(0);
	include '../konek.php';
	
	$ojo_sepaneng_bos = '!Fest{l00sers_will_submit_this_flag_into_scoreboard}';
	if($_GET['show_source'] == 'true') {
		echo "<pre>".htmlentities(file_get_contents(__FILE__))."</pre>";
	}

	$user = $link->real_escape_string($_COOKIE['user_login']);
	$pass = $link->real_escape_string($_COOKIE['user_pass']);

	$q_login = "SELECT * FROM `388e8d19bf9740f95858eb22b4fa7d4f` WHERE user_login='$user' AND user_pass='$pass'";
	$login = $link->query($q_login);
	$r = $login->fetch_assoc();
	if($login->num_rows >= 1) {
		session_start();
		$userdata = $r['id_user'].$r['nick_user'];
		$_SESSION['userid'] = $userdata;
		header('location:index.php');
		die();
	}
