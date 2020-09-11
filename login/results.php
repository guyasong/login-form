<?php
    $email = $_POST['email'];
    $password = $_POST['password'];

    $password = filter_input(INPUT_POST, 'password');

    if (empty($email)) {
        $name_error = 'Please Insert Your email';
    }

    if (empty($password)) {
        $password_error = 'Please Insert Your password';
    }elseif(strlen($password) < 8) { 
        $password_error ='Your password needs to have a minimum length of 8';
    }

    if(empty($name_error) && empty($password_error)) {
        include('success.php');
        exit();
    }else {
        include('login1.php');
    }


    include('login1.php');
?>