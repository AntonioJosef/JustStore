<?php
    include('db.php');

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE Email = '$email'";

    $result = mysqli_query($database, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if($row['Password'] == $password) {
            session_start();
            $_SESSION['Email'] = $email;
            setcookie('Email', $email, time()+3600);
            header("location:index.php");
        }
        else echo 'Password is incorrect';
    }
    else echo 'Username tidak ditemukan';
    mysqli_error($database);
?>