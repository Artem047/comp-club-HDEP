<?php
    $connect = mysqli_connect('localhost', 'root','','hpde');
    if(!$connect) {
        die('Error connect to DataBase');
    }
