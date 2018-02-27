<!DOCTYPE html>
<html>
<head>
	<title>Deleet</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<div class="row">

		


<?php 
	require 'connect.php';
	$id = $_REQUEST['id'];
	$thb = $_REQUEST['thb'];
	$sql = "DELETE FROM exch002_history WHERE recordID = $id";
	$sql_exe = $conn -> query($sql);


	if($sql_exe) {

?>
<br>
<br>
<br>
<br>
<br>
<br>
		<div class="alert alert-warning text-center" role="alert">
		<h3>


<?php 
		echo "<b>"."Delete complete!!";
		echo "<br>";
 		echo "<br>";
		echo "<b>"."Delete ID = ".$id;
		echo "<br>";
		echo "<br>";
		echo "<b>"."THB = ".$thb;
		header("Refresh:3, url=index.php",true,400);
	} else {
		echo "Delete failed";
	}
?>		
		</h3>
		</div>
	</div>
</div>
</body>
</html>