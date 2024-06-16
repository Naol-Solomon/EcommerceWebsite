<?php 

include ('./server/connection.php');

if (isset($_GET['product_id'])){
  $product_id = $_GET['product_id'];

  $stmt = $conn->prepare("SELECT * FROM products WHERE product_id = ?");
  $stmt->bind_param("i", $product_id);

  $stmt->execute();

  $result  = $stmt->get_result();
}

else {
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


    <!--Single Product-->
      <section id="single-product"class="container single-product my-5 pt-5">
        <div class="row mt-5">

        <?php while($row = $result->fetch_assoc()){ ?>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <img  id="main-img"class="img-fluid w-100 pb-1" src="./assets/imgs/<?php echo $row['product_image']?>" />
                <div class="small-img-group pt-2">
                    <div class="small-img-col">
                        <img src="./assets/imgs/<?php echo $row['product_image']?>" width="100%" class="small-img"/>
                    </div>
                    <div class="small-img-col">
                        <img src="./assets/imgs/<?php echo $row['product_image']?>" width="100%" class="small-img"/>
                    </div>
                    <div class="small-img-col">
                        <img src="./assets/imgs/<?php echo $row['product_image']?>" width="100%" class="small-img"/>
                    </div>
                    <div class="small-img-col">
                        <img src="./assets/imgs/<?php echo $row['product_image']?>" width="100%" class="small-img"/>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-12">
                <h6>Men/Shoes</h6>
                <h3 class="py-4"><?php echo $row['product_name']?></h3>
                <h2><?php echo $row['product_price'] ?></h2>

                <form method="POST" action="cart.php">
                <input type="hidden" name="product_id" value="<?php echo $row['product_id']?>" />
                <input type="hidden" name="product_name" value="<?php echo $row['product_name'] ?>" />
                <input type="hidden" name="product_image" value="<?php echo $row['product_image'] ?>" />
                <input type="hidden" name="product_price" value="<?php echo $row['product_price'] ?>" />
                <input type="number" name="product_quantity" value="1"/>
                <button class="buy-btn" type="submit" name="add_to_cart">Add To Cart</button>
                </form>
               
                <h4 class="mt-5 mb-5">Product details</h4>
                <span><?php echo $row['product_description']?>
                </span>
            </div>
            <?php }?>
        </div>
      </section>

      <!--Related Product-->
      <section id="clothes" class="my-5 ">
        <div class="container text-center mt-5 py-5">
          <h3>Related Products</h3>
          <hr>        
        </div>
        <div class="row mx-auto container-fluid">
        <div class="product  text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3"  src="./assets/imgs/clothe1.jpg"/>
          <div class="star">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
          <h5 class="p-name"> Winter Clothes</h5>
          <h4 class="p-price">2000Birr</h4>
          <button class="buy-btn">Buy Now</button>
        </div>
        <div class="product  text-center col-lg-3 col-md-4  col-sm-12">
          <img class="img-fluid mb-3"  src="./assets/imgs/clothe2.jpg"/>
          <div class="star">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
          <h5 class="p-name"> Black Clothes</h5>
          <h4 class="p-price">2000Birr</h4>
          <button class="buy-btn">Buy Now</button>
        </div>
        <div class="product  text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3"  src="./assets/imgs/clothe3.jpg"/>
          <div class="star">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
          <h5 class="p-name"> Smart Jeans</h5>
          <h4 class="p-price">2000Birr</h4>
          <button class="buy-btn">Buy Now</button>
        </div>
        <div class="product  text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3"  src="./assets/imgs/clothe4.jpg"/>
          <div class="star">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
          <h5 class="p-name"> Smart Hoodies</h5>
          <h4 class="p-price">2000Birr</h4>
          <button class="buy-btn">Buy Now</button>
        </div>
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
                <img src="./assets/imgs/clothe4.jpg" class="img-fluid w-25 h-100 m-2"/>
                <img src="./assets/imgs/backpack4.jpg" class="img-fluid w-25 h-100 m-2"/>
                <img src="./assets/imgs/feature3.jpg" class="img-fluid w-25 h-100 m-2"/>
                <img src="./assets/imgs/feature4.jpg" class="img-fluid w-25 h-100 m-2"/>
                <img src="./assets/imgs/clothe1.jpg" class="img-fluid w-25 h-100 m-2"/>
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

      <script>
        let mainImg = document.getElementById("main-img");
        let smallImg = document.getElementsByClassName("small-img");

        for(let i = 0; i < smallImg.length; i++){
                smallImg[i].onclick = function(){
                    mainImg.src = smallImg[i].src;
            }
        }
      </script>
  </body>
  </html>