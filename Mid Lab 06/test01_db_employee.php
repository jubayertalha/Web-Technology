<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "labtest";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }
        $E_ID = $_POST['E_ID'];
        $E_TITLE = $_POST['E_TITLE'];
        $initial_SALARY = $_POST['initial_SALARY'];
        $current_SALARY = $_POST['current_SALARY'];

        $sql = "INSERT INTO emloyee (E_ID, E_TITLE, initial_SALARY, current_SALARY) VALUES (
                '".$E_ID."',
                '".$E_TITLE."',
                '".$initial_SALARY."',
                '".$current_SALARY."');";
                
        if($conn->query($sql) === TRUE){
            echo "Employee submited successfully";
        }else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
?>
<html>
    <body>
        <h1>Submit Employee Info</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <input type="text" name="E_ID" placeholder="E_ID"><br><br>
            <input type="text" name="E_TITLE" placeholder="E_TITLE"><br><br>
            <input type="number" name="initial_SALARY" placeholder="initial_SALARY"><br><br>
            <input type="number" name="current_SALARY" placeholder="current_SALARY"><br><br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>