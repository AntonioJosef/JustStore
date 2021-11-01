<?php
    include('db.php');

    $data = $_POST;
    $name = $data['name'];
    $gender = $data['gender'];
    $address = $data['address'];
    $phone = $data['phone'];
    $email = $data['email'];
    $password = $data['password'];
    $prodilepicture = $data['profilepicture'];
    $query = "INSERT INTO user VALUES ('$name', '$gender', '$address', '$phone', '$email', '$password', '$profilepicture')";
                
    $result = mysqli_query($database, $query);

    if ($result) {
        header('location:login.php');
    }
    else echo mysqli_error($database);
?>