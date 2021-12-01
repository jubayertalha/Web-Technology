<?php 
session_start();
// header('location:login.html');

$con = mysqli_connect("localhost","root","");

mysqli_select_db($con, 'userregistration');

$name = $_POST['user'];
$pass = $_POST['password'];

$q = "select * from usertable where name = $name";

$result = mysqli_query($con, $q );
$num = mysqli_num_rows($result);
if($num == 1){
	echo "User Name Already taken";
}
else{
	$reg = "insert into usertable(name,password) values ('$name', '$pass')";
	mysqli_query($con, $reg);
	echo "Registration Successful";
	header('location:login.html');


}


?>