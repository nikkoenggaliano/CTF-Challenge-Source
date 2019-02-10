<?php
	session_start();
	if(!isset($_SESSION['userid'])) {
		header('location:login.php');
		die();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Panel</title>
</head>
<body>
	<ul>
		<li><a href="?file=welcome">Welcome</a></li>
		<li><a href="?file=about">About Us</a></li>
		<li><a href="?file=flaaag">Your Point</a></li>
	</ul>
	<?php
		if(isset($_GET['file'])) {
				echo "<pre>".htmlentities(file_get_contents($_GET['file'].".php"))."</pre>";
		} else {
			echo "<pre>".htmlentities(file_get_contents("welcome.php"))."</pre>";
		}
	?>
</body>
</html>