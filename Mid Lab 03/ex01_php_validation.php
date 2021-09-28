<?php
    $nameErr = $emailErr = $genderErr = $phoneErr = $agreeErr = " * ";
    $name = $email = $gender = $comment = $website = $phone = $agree = $websiteErr = "";
    $valid = false;
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["name"])) {
            $nameErr .= "Name is required";
        } else {
            $name = test_input($_POST["name"]);
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                $nameErr .= "Only letters and white space allowed";
            }
        }
        
        if (empty($_POST["email"])) {
            $emailErr .= "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr .= "Invalid email format";
            }
        }

        if (empty($_POST["phone"])) {
            $phoneErr .= "Phone is required";
        } else {
            $phone = test_input($_POST["phone"]);
            if (!preg_match("/^01(?:3|5|6|7|8|9)[0-9]{8}$/",$phone)) {
                $phoneErr .= "Invalid phone format";
            }
        }
        
        if (empty($_POST["website"])) {
            $website = "";
        } else {
            $website = test_input($_POST["website"]);
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
                $websiteErr .= "Invalid URL";
            }
        }
        
        if (empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = test_input($_POST["comment"]);
        }
        
        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }

        if (empty($_POST["agree"])) {
            $agreeErr .= "You must agree to the terms of service";
        } else {
            $agree = test_input($_POST["agree"]);
        }
        
    }

    if($nameErr==" * "  && $emailErr==" * " && $phoneErr==" * " && $genderErr==" * " && $agreeErr==" * "  && empty($websiteErr)
                    && $_SERVER["REQUEST_METHOD"] == "POST"){
        $valid = true;
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }      
    
?>

<html>
    <body>

        <h2>PHP Form Validation Example</h2>
        <p style="color:red;">* rerquired field</p>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Name: <input type="text" name="name" value="<?php echo $name;?>">
            <label style="color:red;"><?php echo $nameErr;?></label><br><br>

            Email: <input type="email" name="email" value="<?php echo $email;?>">
            <label style="color:red;"><?php echo $emailErr;?></label><br><br>

            Phone: <input type="phone" name="phone" value="<?php echo $phone;?>">
            <label style="color:red;"><?php echo $phoneErr;?></label><br><br>

            Website: <input type="text" name="website" value="<?php echo $website;?>">
            <label style="color:red;"><?php echo $websiteErr;?></label><br><br>

            Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea><br><br>

            Gender:
            <input type="radio" name="gender"
            <?php if (isset($gender) && $gender=="Female") echo "checked";?>
            value="Female">Female
            <input type="radio" name="gender"
            <?php if (isset($gender) && $gender=="Male") echo "checked";?>
            value="Male">Male
            <input type="radio" name="gender"
            <?php if (isset($gender) && $gender=="Other") echo "checked";?>
            value="Other">Other
            <label style="color:red;"><?php echo $genderErr;?></label><br><br>

            Agree to Terms of Service:
            <input type="checkbox" name="agree"
            <?php if (isset($agree) && $agree=="agree") echo "checked";?>
            value="agree">
            <label style="color:red;"><?php echo $agreeErr;?></label><br><br>

            <input type="submit" name="submit" value="Submit">
        </form>

        <?php if($valid){ ?>
            <h3>Your Input</h3>
            <p>Name: <?php echo $name;?></p>
            <p>Email: <?php echo $email;?></p>
            <p>Phone: <?php echo $phone;?></p>
            <p>Website: <a href="<?php echo $website;?>"><?php echo $website;?></a></p>
            <p>Comment: <?php echo $comment;?></p>
            <p>Gender: <?php echo $gender;?></p>
        <?php } ?>

    </body>
</html>