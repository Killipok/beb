<?php
    require_once("connect.php");
    
    $login = $_POST["login"];
    $password = md5($_POST["password"]);

    $check_user = mysqli_query($connection, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
    if(mysqli_num_rows($check_user) > 0){
        session_start();
        $user = mysqli_fetch_assoc($check_user);
        $_SESSION['user'] = [
            "id" => $user['id'],
            "name" => $user['name'],
            "login" => $user['login'],
            "avatar" => $user['avatar'],
        ];
        header("Location: ../profile.php");
    } else {
        $_SESSION["msg"] = "Пользователь не найден";
        header("Location: ../auth.php");
    }