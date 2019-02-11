<?php

	include 'konek.php';
	function idiotWAF($input) {
		return preg_replace('/order/', 'Get Out Hacker!', preg_replace('/select|version|database|information|schema|columns|table/', '', $input));
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<meta charset="UTF-8">
	<title>Punokawan</title>
	<!-- backup.txt -->
</head>
<body>
	<ul>
	<?php
		$q = $link->query("SELECT * FROM `388e8d19bf9740f95858eb22b4fa7d4f`");
		//var_dump($q);
		if(isset($_GET['user'])) {
			if(strpos(urldecode(strtolower($_GET['user'])), 'order') == true) {
				die('Hello Hacker? Hello?');
			} else {
				$idiotFilter = idiotWAF($_GET['user']);
				$q1 = $link->query("SELECT id_user,name_user FROM `388e8d19bf9740f95858eb22b4fa7d4f` WHERE name_user='".$idiotFilter."'") or die($link->error);
				$r1 = $q1->fetch_assoc();

				$q2 = $link->query("SELECT id_user,name_user,nick_user FROM `388e8d19bf9740f95858eb22b4fa7d4f` WHERE id_user=('".$r1['id_user']."')") or die($link->error);
				$r2 = $q2->fetch_assoc();

echo '<ul class="list-group">';
echo'				<li class="list-group-item list-group-item-info">ID : '.$r2['id_user'].'</li>
 					<li class="list-group-item list-group-item-info">name_user : '.$r2['name_user'].'</li>
  <li class="list-group-item list-group-item-info">nick_user : '.$r2['nick_user'].' </li>
  ';
  echo'
</ul>';
			}


			
		} else {
			while($r = $q->fetch_assoc()) {
				echo "<li><a href='?user=".$r['name_user']."' class='list-group-item list-group-item-action list-group-item-warning'>".$r['name_user']."</a></li>";
			} echo "</ul>";
		}
	?>
</body>
</html>