<?php 

session_start();

if (isset($_POST['add_to_cart'])) {

    // Check if user already added product to cart
    if (isset($_SESSION['cart'])) {

        $product_array_ids = array_column($_SESSION['cart'], "product_id");

        // Check if product has already been added to cart or not
        if (!in_array($_POST['product_id'], $product_array_ids)) {

            $product_array = array(
                'product_id' => $_POST['product_id'],
                'product_name' => $_POST['product_name'],
                'product_price' => $_POST['product_price'],
                'product_image' => $_POST['product_image'],
                'product_quantity' => $_POST['product_quantity']
            );

            $_SESSION['cart'][$_POST['product_id']] = $product_array;

        } else {
            echo '<script>alert("Product was already added to cart");</script>';
            // echo '<script>window.location="index.php";</script>'; 
        }

    } else {
        // If this is the first product added to cart
        $product_id = $_POST['product_id'];
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $product_image = $_POST['product_image'];
        $product_quantity = $_POST['product_quantity'];

        $product_array = array(
            'product_id' => $product_id,
            'product_name' => $product_name,
            'product_price' => $product_price,
            'product_image' => $product_image,
            'product_quantity' => $product_quantity
        );

        $_SESSION['cart'][$product_id] = $product_array;
    }

    
 //to remove product from cart
}else if (isset($_POST['remove_product'])){
  unset($_SESSION['cart'][$_POST['product_id']]);
}
 else {
    header('Location: index.php');
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
    <nav class="navbar navbar-expand-lg bg-white  py-3 fixed-top">
      <div class="container">
        <img class="logo" src="./assets/imgs/logo.jpg" />
        <h2 class="brand pt-2">Blue</h2>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link " href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="shop.html">Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="contact.html">Contact Us</a>
            </li>
            <li class="nav-item">
              <a href="account.html"><i class="fa fa-user" aria-hidden="true"></i></a>
             <a href="cart.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a> 
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!--Cart-->
    <section class="cart container my-5 py-5">
        <div class="container mt-5">
            <h2 class="font-weight-below">Your Cart</h2>
            <hr>
        </div>

        <table class="mt-5 pt-5">
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            <?php 
            $total = 0;
            foreach($_SESSION['cart'] as $value) { 
                $subtotal = $value['product_price'] * $value['product_quantity'];
                $total += $subtotal;
            ?> 

            <tr>
                <td>
                    <div class="product-info">
                        <img src="assets/imgs/<?php echo $value['product_image'] ;?>"/>
                        <div>
                            <p><?php echo $value['product_name']; ?></p>
                            <small><span><?php echo $value['product_price']; ?></span> Birr</small>
                            <br>
                            <form action="cart.php" method="POST">
                              <input type="hidden" name="product_id" value="<?php echo $value['product_id'] ;?>" />
                              <input type="submit" name="remove_product" class="remove-btn" value="Remove" />
                            </form>

                        </div>
                    </div>
                </td>
                <td>
                    <input type="number" value="<?php echo $value['product_quantity'] ;?>" />
                    <a class="edit-btn" href="#">Edit</a>
                </td>
                <td>
                    <span><?php echo $subtotal ?></span>
                    <span class="product-price">Birr</span>
                </td>
            </tr>
            <?php } ?>
        </table>
        <div class="cart-total">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td><?php echo $total ?> Birr</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td><?php echo $total ?> Birr</td>
                </tr>
            </table>
        </div>
        <div class="checkout-container">
            <button class="btn checkout-btn">Checkout</button>
        </div>
    </section>

          <!--Footer-->
        <footer  class="mt-5 py-5">
        <div class="row container">
          <div class="footer-one col-lg-3 col-md-6 col-sm-12">
            <img class="logo" src="./assets/imgs/logo.jpg"/>
            <p class="pt-3">We Provide the best products for the most affordable prices</p>
          </div>
          <div class="footer-one col-lg-3 col-md-6 col-sm-12">
            <h5 class="pb-2">Featured</h5>
            <ul class="text-uppercase">
                <li><a href="#">men</a></li>
                <li><a href="#">women</a></li>
                <li><a href="#">boys</a></li>
                <li><a href="#">girls</a></li>
                <li><a href="#">new arrivals</a></li>
                <li><a href="#">clothes</a></li>
            </ul>
          </div>
          <div class="footer-one col-lg-3 col-md-6 col-sm-12">
            <h5 class="pb-2">Contact Us</h5>
            <div> 
              <h6 class="text-uppercase">Address</h6>
              <p> 1234 HU-IOT</p>
            </div>
            <div>
              <h6 class="text-uppercase">Phone</h6>
              <p> +2510000000</p>
            </div>
            <div>
              <h6 class="text-uppercase">Email</h6>
              <p>nola@gmial.com</p>
            </div>
          </div>
          <div class="footer-one col-lg-3 col-md-6 col-sm-12">
              <h5 class="pb-2">Instagram</h5>
              <div class="row">
                <img src="./assets/imgs/clothes4.jpg" class="img-fluid w-25 h-100 m-2"/>
                <img src="./assets/imgs/backpack4.jpg" class="img-fluid w-25 h-100 m-2"/>
                <img src="./assets/imgs/feature3.jpg" class="img-fluid w-25 h-100 m-2"/>
                <img src="./assets/imgs/feature4.jpg" class="img-fluid w-25 h-100 m-2"/>
                <img src="./assets/imgs/clothes1.jpg" class="img-fluid w-25 h-100 m-2"/>
              </div>
          </div>
        </div>
  
        <div class="copyright mt-5">
          <div class="row container mx-auto">
            <div class="col-lg-3 col-md-5 col-sm-12 mb-4"> 
              <img src="./assets/imgs/payment.jpg"/>
            </div>
            <div class="col-lg-3 col-md-5 col-sm-12 mb-4 text-nowrap mx-5">
              <p>eCommerce @2024 All Right Reserved.</p>
            </div>
            <div class="col-lg-3 col-md-5 col-sm-12 mb-4 ">
              <a><i class="fa fa-facebook"></i></a>
              <a><i class="fa fa-twitter"></i></a>
              <a><i class="fa fa-instagram"></i></a>
            </div>
  
          </div>
        </div>
      </footer>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
  </html>