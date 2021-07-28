<?php
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css"/>
    <link rel="stylesheet" href="style.css"/>
</head>

<body>
    
    <?php 

    require('db.php');
    require_once ("../php/header.php");

    $username = $_SESSION['username'];
    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $email = $row['email'];
    $createtime = $row['create_datetime'];

    $info = "

        <div class=\"container text-center\">
            
            <h1 class = \"display-1\">Hello, $username</h1>
            
            <div class=\"card shadow\">
                
                <h3>Account Details:<h3>
                <h5>Username: $username</h5>
                <h5>Email: $email</h5>
                <h5>Date Created: $createtime</h5>
            </div>
        </div>
    ";

    echo $info;
    ?>
</body>
</html>
