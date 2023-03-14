<?php
    session_start();
    require_once 'connect.php';
    $login = $_POST['login'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $tourn = $_POST['tourn'];
            
    mysqli_query($connect, "INSERT INTO `user` (`id`, `login`, `email`, `phone`, `tourn`) VALUES (NULL, '$login', '$email', '$phone', '$tourn')");
    
    $_SESSION['message'] = 'Регистрация прошла успешно';
    header('Location: ../index.html');

    ?>