<!DOCTYPE html>
<html>  
<head>
    <title>Calculator</title>
</head>
<body>

<h1>Lab 02 || Caculate Nmbers</h1>

<form method="post">
		<label for="x">Enter First Number: </label>
		<input type="number" id="x" name="x" required=""><br><br>
		<label for="y">Enter Second Number: </lable>
		<input type="number" id="y" name="y" required=""><br><br>

		<input type="submit" name = "submit" value="Calculate">
		<input type="reset" value="Reset">
</form><br>

<h2>Result</h2>

<?php
    function addNumbers(int $x, int $y){
        return ($x+$y);
    }
    function subtractNumbers(int $x, int $y){
        return ($x-$y);
    }
    function multipyNumbers(int $x, int $y){
        return ($x*$y);
    }
    function divideNumbers(int $x, int $y){
        if($y!=0){
            return ($x/$y);
        }else{
            return NULL;
        }
    }

    if(isset($_POST['submit'])){
        $x = $_POST['x'];
        $y = $_POST['y'];

        echo "<b>The Addition: $x + $y = ".addNumbers($x,$y)."</b><br>";
        echo "<b>The Subtraction: $x - $y = ".subtractNumbers($x,$y)."</b><br>";
        echo "<b>The Multiplication: $x x $y = ".multipyNumbers($x,$y)."</b><br>";
        if(divideNumbers($x,$y)!=NULL){
            echo "<b>The Division: $x / $y = ".divideNumbers($x,$y)."</b><br>";
        }else{
            echo "<b>Can't Divide $x by $y";
        }
        
    }
?>

</body>
</html>