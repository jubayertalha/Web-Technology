
<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  
  <?php

  for($a=0;$a<=5;$a++){
    echo "the value of a = $a <br>";
  }
  $x = 2;
  do{
    echo "The number is: $x <br>";
  $x++;

  } while ($x <= 5); 

  $favcolor = "red";
  switch ($favcolor) {
    case "red":
      echo "you favourite color is red";
      break;
    
    default:
      // code...
    echo "you favourite color is undefined";
      break;
  }

  $age =15;

  if ($age<18){
    echo "You are not adult yet \n\n";
     echo "</br>";
  }

  $cars = array("Volvo","BMW","Toyota");
  echo sort($cars, SORT_NUMERIC);
  echo $cars[0];


  
  class Car  
  {
    
    function Car(){
      $this->model = "vw";
  
  }
  function welcome(){
    echo "welcome to php summer sem";
  }
}

   $bmw = new Car();
  echo $bmw->model;
  $bmw->welcome();
  $x = "Hello world!";
$x = null;
var_dump($x);



  ?>


  

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $_POST["name"];
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
$number = 2;

echo "<pre>", var_dump($number), "</pre>";
$cars = array("Volvo","BMW","Toyota");

var_dump($cars);
var_dump($number)

?>
 
  
</body>
</html>
