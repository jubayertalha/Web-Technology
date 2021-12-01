<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$connect = mysqli_connect("localhost", "root", "", "test");
 
// Check connection
if($connect === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO persons (fisrt_name, last_name, email) VALUES 
('Peter2', 'Parker2', 'peterparker2@mail.com'),
('Clark', 'Kent', 'clarkkent@mail.com'),
 ('John', 'Carter', 'johncarter@mail.com'),
 ('Harry', 'Potter', 'harrypotter@mail.com')";
if(mysqli_query($connect, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
}
 
// Close connection
mysqli_close($connect);
?>