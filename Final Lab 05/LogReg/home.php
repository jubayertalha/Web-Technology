<?php 
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
</head>
<body>
	
	<h1>Home Page</h1>
	<h3>Welcome <?php echo $_SESSION['userName']; ?></h3>
	
	<a href="logout.php">LOGOUT</a>

</body>
</html>