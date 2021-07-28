<<<<<<< HEAD
<?php     

session_start();

?>

=======
>>>>>>> cc215af324de6e19782e944ba9937b19702b8285
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
<<<<<<< HEAD
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

    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);   
        $password = stripslashes($_REQUEST['password']);
        $query    = "SELECT * FROM users WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($conn, $query);
=======
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db.php');
    session_start();
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);   
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
>>>>>>> cc215af324de6e19782e944ba9937b19702b8285
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            header("Location: dashboard.php");
        } else {
<<<<<<< HEAD

            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  </div>";
        }
    }
=======
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
>>>>>>> cc215af324de6e19782e944ba9937b19702b8285
?>
    <form class="form" method="post" name="login">
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
<<<<<<< HEAD
        <p class="link">Don't have an account? <a href="registration.php">Register Now</a></p>
  </form>

=======
        <p class="link">Don't have an account? <a href="registration.php">Registration Now</a></p>
  </form>
<?php
    }
?>
>>>>>>> cc215af324de6e19782e944ba9937b19702b8285
</body>
</html>
