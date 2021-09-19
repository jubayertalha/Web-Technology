<!DOCTYPE html>
<html>
<body>

<h1>Lab 02 || Caculate Rectangle</h1>

<form method="post">
		<label for="length">Enter Length: </label>
		<input type="number" id="length" name="length" required=""><br><br>
		<label for="width">Enter Width: </lable>
		<input type="number" id="width" name="width" required=""><br><br>

		<input type="submit" name = "submit" value="Calculate">
		<input type="reset" value="Reset">
</form><br>

<h2>Result</h2>

<?php
    if(isset($_POST['submit'])){
        $length = $_POST['length'];
        $width = $_POST['width'];

        $area = $length*$width;
        $perimeter = 2*($length+$width);

        echo "<b>"."The Area is: $area"."</b><br>";
        echo "<b>"."The Perimeter is: $perimeter"."</b>";
    }
?>

</body>
</html>