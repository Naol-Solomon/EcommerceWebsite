<?php
session_start();

if ( !empty($_SESSION['cart']) && isset($_POST['checkout']) ) {

  
}else{
  header('location: index.php');
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
    <?php require ("header.php"); ?>

    <!--Checkout-->
    <section class="my-5 py-5">
        <div class="container text-center mt-3 pt-5">
          <h2 class="form-weight-bold">checkout</h2>
          <hr class="mx-auto">
        </div>

        <div class="mx-auto container">
          <form id="checkout-form" action="./server/place_order.php" method="POST">
            <div class="form-group checkout-small-element">
                <label>Name</label>
                <input type="text" class="form-control" id="checkout-name" placeholder="Name" name="name" />
              </div>
              <div class="form-group checkout-small-element">
              <label>Email</label>
              <input type="text" class="form-control" id="checkout-email" placeholder="Email" name="email" />
            </div>

            <div class="form-group checkout-small-element">
              <label>Phone</label>
              <input type="tel" class="form-control" id="checkout-phone" placeholder="Phone" name="phone" />
            </div>

            <div class="form-group checkout-small-element">
                <label>City</label>
                <input type="text" class="form-control" id="checkout-city" placeholder="City" name="city" />
              </div>
              <div class="form-group checkout-large-element">
                <label>Address</label>
                <input type="text" class="form-control" id="checkout-address" placeholder="Address" name="address" />
              </div>  
            <div class="form-group checkout-btn-container">
                  <input type="submit" class="btn" id="checkout-btn" name="place_order" value="Place Order" />
            </div>
          </form>
        </div>
      </section>

    <!--Footer-->
    <?php require ("footer.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
  </html>