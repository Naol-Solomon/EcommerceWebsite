<?php
session_start();
require ("./server/connection.php");

if (isset($_POST['register'])){

   $name = $_POST['name'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $confirmPassword = $_POST['confirmPassword'];

   //if password match
  if($password !== $confirmPassword){
    header('location: register.php?error=password do not match');
   }

   else if(strlen($password) < 6){
    header('location: register.php?error=password must be at least 6 characters');
   }

   //if there is no error
   else{
     //check whether there is a  user with this email or not
     $stmt1 = $conn->prepare("SELECT count(*) FROM users WHERE user_email=?");
     $stmt1->bind_param('s', $email);
     $stmt1->execute();
     $stmt1->bind_result($num_rows);
     $stmt1->store_result();
     $stmt1->fetch();
 
    //check if there is a user already registered with this email
     if($num_rows != 0){
       header('location: register.php?error=email already exists');
     }
 
    //create a new user
    else{
      $stmt = $conn->prepare('INSERT INTO users (user_name, user_email, user_password) VALUES (?, ?, ?)');
      $stmt->bind_param("sss", $name, $email, md5($password));
      
      //if account is creted from successfully.
      if($stmt->execute()){
        $_SESSION['user_email'] = $email;
        $_SESSION['user_name'] = $name;
        $_SESSION['logged_in'] = true;
        header('location: account.php? register=You registered successfully');
      }else{
        header('location: register.php? error= Could not create account at the moment');
      }

    }


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

      <!--Register-->
      <section class="my-5 py-5">
        <div class="container text-center mt-3 pt-5">
          <h2 class="form-weight-bold">Register</h2>
          <hr class="mx-auto">
        </div>

        <div class="mx-auto container">
          <form id="register-form" method="POST" action="register.php">
            <p style="color:red"><?php if(isset($_GET['error'])) {echo $_GET['error']; }?> </p>
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" id="register-name" placeholder="Name" name="name" />
              </div>

              <div>
              <label>Email</label>
              <input type="text" class="form-control" id="register-email" placeholder="Email" name="email" />
            </div>

            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" id="register-password" placeholder="Password" name="password" />
            </div>

            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" class="form-control" id="register-confirm-password" placeholder="Confirm Password" name="confirmPassword" />
              </div>

            <div class="form-group">
                  <input type="submit" class="btn" id="register-btn" name="register" value="Register" />
            </div>
            <div class="form-group">
              <a id="login-url" class="btn">Do you have  an account? Login</a>
            </div>
          </form>
        </div>
      </section>



       <!--Footer-->
      <?php require('footer.php')?>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
  </html>