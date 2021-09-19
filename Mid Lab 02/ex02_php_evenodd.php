<!DOCTYPE html>
<html>
<head>
    <title>Even Odd</title>
</head>
<body>
<h1>Lab 02 || Even Odd</h1>
<form method="post">
		<label for="number">Enter Number: </label>
		<input type="number" id="number" name="number" required=""><br><br>

		<input type="submit" name = "submit" value="Calculate">
		<input type="reset" value="Reset">
</form>
<h2>Result</h2>
<?php
    if(isset($_POST['submit'])){
        $number = $_POST['number'];

        if($number%2==0){
            echo "<b>"."The Number $number is: Even"."</b>";
        }else{
            echo "<b>"."The Number $number is: Odd"."</b>";
        }
    }
?>
</body>
</html>