<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "webtech";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }
        $user_name = $_POST['user_name'];
        $pass = $_POST['pass'];
        $name = $_POST['name'];
        $email = $_POST['email'];

        $sql = "INSERT INTO users (user_name, password, name, email) VALUES (
                '".$user_name."',
                '".$pass."',
                '".$name."',
                '".$email."');";
                
        if($conn->query($sql) === TRUE){
            echo "User registered successfully";
        }else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
?>

<html>
    <body>
        <h1>Registration</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <input type="text" name="user_name" placeholder="User Name"><br><br>
            <input type="password" name="pass" placeholder="Password"><br><br>
            <input type="text" name="name" placeholder="Name"><br><br>
            <input type="email" name="email" placeholder="Email"><br><br>
            <input type="submit" value="Register">
        </form>
    </body>
</html>