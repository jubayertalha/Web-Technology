<?php
    $timeName = "time";
    $ipName = "ip";
    $pageName = "page";

    $timeValue = date("F j, Y, g:i a");
    $ipValue = $_SERVER['REMOTE_ADDR'];
    $pageValue = "https://".$_SERVER['HTTP_HOST']."".$_SERVER['PHP_SELF'];

    $expire = time()+86400;
    setcookie($timeName,$timeValue,$expire);
    setcookie($ipName,$ipValue,$expire);
    setcookie($pageName,$pageValue,$expire);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Cookie</title>
    </head>
    <body>
    Access Time: 
        <?php
            if(!empty($_COOKIE['time'])){
                echo $_COOKIE['time'];
            }else{
                echo "Not set!";
            }
        ?>
        </br>
        IP Address: 
        <?php
            if(!empty($_COOKIE['ip'])){
                echo $_COOKIE['ip'];
            }else{
                echo "Not set!";
            }
        ?>
        </br>
        Page Address: 
        <?php
            if(!empty($_COOKIE['page'])){
                echo $_COOKIE['page'];
            }else{
                echo "Not set!";
            }
        ?>
    </body>
</html>