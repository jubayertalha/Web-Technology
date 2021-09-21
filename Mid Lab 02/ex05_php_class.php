<?php

class Student {
  public $name;
  public $id;
  public $age;
  public function __construct($name, $id, $age) {
    $this->name = $name;
    $this->id = $id;
    $this->age = $age;
  }
  public function print() {
    echo "Name = " . $this->name . "    ID = " . $this->id . "    Age = " . $this->age . "<br>";
  }
}

$student1 = new Student("Talha", "19-41468-3", 21);
$student2 = new Student("Jubayer", "19-41468-3", 19);

$student1->print();
$student2->print();

?>
