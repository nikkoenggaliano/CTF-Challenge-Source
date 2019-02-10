<?php
	//error_reporting(0);
	function calpos($awal,$array)
	{
    	foreach($array as $arra)
    	{
        	if(strpos($awal,$arra) !== false)
        	{
            	return true;
        	}
        
    	}
    		return false;
	}
	$bl = array('system','id','shell','passthru','ls','cat');
	if(isset($_GET['name'])){
	$flag = '!Fest{WarM_Up_Dude_Calm_GOGO_Ganbate!}';
	if(calpos($_GET['name'], $bl) !== false) {
		die('Hey dont inject me!');
	} else {
		if(preg_match('/[^A-Za-z0-9%]\w/', $_GET['name']) !== false) {
			assert($_GET['name']);
			echo '<center>Kim '.$_GET['name'].'</center>';
		} else {
			echo 'Hey NO!';
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Kim Generator</title>
</head>
<body>
<center>
	<form method="GET">
		<input type="text" name="name">
		<br>
		<br>
		<button>Submit</button>
	</form>
</center>
</body>
</html>