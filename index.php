<!DOCTYPE html>
<html>
<head>
	<?php
		session_start();

		if(isset($_SESSION["username"])){
			echo '<title>Welcome to MobileForce '.$_SESSION["username"].'</title>';
			echo '<link type="text/css" rel="stylesheet" href="theme/estilo.css">';
		}else{
			echo '<title>Welcome to MobileForce</title>';
			echo '<link type="text/css" rel="stylesheet" href="theme/estilo.css">';
		}
	?>
</head>
<body>
<?php
	include 'header.php';
	include 'nav.php';
	include 'main.php';
	include 'footer.php';
?>
</body>
</html>