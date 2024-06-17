<?php 
session_start();
require("./server/connection.php");

if(isset($_SESSION['logged_in'])){
  header('Location: account.php');
  exit();
}

if(isset($_POST['login_btn'])){

  $email = $_POST['email'];
  $password = md5($_POST['password']);

  $stmt = $conn->prepare("SELECT user_id, user_name, user_email, user_password FROM users WHERE user_email = ? AND user_password = ? LIMIT 1");

  $stmt->bind_param("ss", $email, $password);

  if($stmt->execute()){
    $stmt->bind_result($user_id, $user_name, $user_email, $user_password);
    $stmt->store_result();

    if($stmt->num_rows() == 1){
        $row = $stmt->fetch();

        $_SESSION['user_id'] = $user_id;
        $_SESSION['user_name'] = $user_name;
        $_SESSION['user_email'] = $user_email;
        $_SESSION['logged_in'] = true;

        header('Location: account.php?message=Logged in Successfully');
    }else{
      header('Location: account.php?error=There is no credentials with this account');
    }

  }else{

    header('location:login.php?error= something went wrong');

  }

}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>

    <!--Navigation Bar-->
    <?php require('header.php')?>

      <!--Login-->
      <section class="my-5 py-5">
        <div class="container text-center mt-3 pt-5">
          <h2 class="form-weight-bold">Login</h2>
          <hr class="mx-auto">
        </div>
        <div class="mx-auto container">
          <form id="login-form" action="login.php" method="POST">
            <p style="color:red" class="text-center"><?php if(isset($_GET['error'])) {
              echo $_GET['error'];
            }?></p>
            <div class="form-group">
              <label>Email</label>
              <input type="text" class="form-control" id="login-email" placeholder="Email" name="email" />
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="text" class="form-control" id="login-password" placeholder="Password" name="password" />
            </div>
            <div class="form-group">
                  <input type="submit" class="btn" name="login_btn" id="login-btn" value="Login" />
            </div>
            <div class="form-group">
              <a id="register-url" href="register.php" class="btn">Don't have account? Register</a>
            </div>
          </form>
        </div>
      </section>



       <!--Footer-->
      <?php  require('footer.php')?>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
  </html>