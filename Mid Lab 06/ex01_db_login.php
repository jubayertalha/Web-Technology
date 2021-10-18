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

        $sql = "SELECT * FROM users WHERE user_name = '".$user_name."' AND password = '".$pass."';";
        $result = $conn->query($sql);
        if($result->num_rows>0){
            echo "Login Successful<br>";
            while($row = $result->fetch_assoc()) {
                echo "Name: " . $row["name"];
            }
        }else{
            echo "Login Failed";
        }
        $conn->close();
    }
?>

<html>
    <body>
        <h1>Login</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <input type="text" name="user_name" placeholder="User Name"><br><br>
            <input type="password" name="pass" placeholder="Password"><br><br>
            <input type="submit" value="Login">
        </form>
    </body>
</html>
