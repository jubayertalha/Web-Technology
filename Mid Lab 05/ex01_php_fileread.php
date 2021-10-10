<?php
    $myfile = fopen("ex01_php_fileread.txt", "r") or die("Unable to open file!");
    echo fread($myfile,filesize("ex01_php_fileread.txt"));
    fclose($myfile);
?>
