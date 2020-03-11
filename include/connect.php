<?php
    $con = mysqli_connect('localhost', 'root', '', 'dragonpunch');

    if(!$con){
        die("Connection Error: ".mysqli_connect_error);
    }
?>