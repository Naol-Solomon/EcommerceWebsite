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
    
      <!--Home-->
      <section id="home">
        <div class="container">
          <h5>NEW ARRIVALS</h5>
          <h1> <span>Best Prices</span>  This Season</h1>
          <p>Blue offers the best products for the most affordable prices</p>
          <button>Shop Now</button>
        </div>
      </section>

      <!--Brands-->
      <section id="brand"  class="container">
        <div class="row">
          <img class="img-fluid col-lg-3 col-md-6 col-sm-12"  src="./assets/imgs/brand1.png">
          <img class="img-fluid col-lg-3 col-md-6 col-sm-12"  src="./assets/imgs/brand2.png">
          <img class="img-fluid col-lg-3 col-md-6 col-sm-12"  src="./assets/imgs/brand3.jpg">
          <img class="img-fluid col-lg-3 col-md-6 col-sm-12"  src="./assets/imgs/brand4.png">
        </div>
      </section>

      <!--New Materials-->
      <section id="new" class="w-100">
        <div class="row p-0 m-0">
          <!--One-->
          <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
            <img class="img-fluid" src="./assets/imgs/clothing-rack-with-floral-hawaiian-shirts-hangers-hat.jpg"/>
            <div class="details">
              <h2>Awesome T-shirts</h2>
              <button class="text-uppercase">Shop Now</button>
            </div>
          </div>
          <!--Two-->
          <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
            <img class="img-fluid" src="./assets/imgs/trendy-colour-swatches-collage.jpg"/>
            <div class="details">
              <h2>Awesome Clothes</h2>
              <button class="text-uppercase">Shop Now</button>
            </div>
          </div>
          <!--Three-->
          <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
            <img class="img-fluid" src="./assets/imgs/nordwood-themes-Nv4QHkTVEaI-unsplash.jpg"/>
            <div class="details">
              <h2>Extremely Awesome Fashion</h2>
              <button class="text-uppercase">Shop Now</button>
            </div>
          </div>
        </div>
      </section>

      <!--Featured-->
      <section id="featured" class="my-5 pb-5">
        <div class="container text-center mt-5 py-5">
          <h3>Our Featured</h3>
          <hr>
          <p>Here you can check out our featured products</p>
        </div>
        <div class="row mx-auto container-fluid">
        <div class="product  text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3"  src="./assets/imgs/backpack1.jpg"/>
          <div class="star">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
          <h5 class="p-name"> Nike Backpack</h5>
          <h4 class="p-price">2000Birr</h4>
          <button class="buy-btn">Buy Now</button>
        </div>
        <div class="product  text-center col-lg-3 col-md-4  col-sm-12">
          <img class="img-fluid mb-3"  src="./assets/imgs/backpack2.jpg"/>
          <div class="star">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
          <h5 class="p-name"> Adidas Backpack</h5>
          <h4 class="p-price">2000Birr</h4>
          <button class="buy-btn">Buy Now</button>
        </div>
        <div class="product  text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3"  src="./assets/imgs/backpack3.jpg"/>
          <div class="star">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
          <h5 class="p-name"> Puma Backpack</h5>
          <h4 class="p-price">2000Birr</h4>
          <button class="buy-btn">Buy Now</button>
        </div>
        <div class="product  text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3"  src="./assets/imgs/backpack4.jpg"/>
          <div class="star">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
          <h5 class="p-name"> Nike Backpack</h5>
          <h4 class="p-price">2000Birr</h4>
          <button class="buy-btn">Buy Now</button>
        </div>
      </div>
      </section>

      <!--Banner-->
      <section id="banner" class="my-5 py-5">
        <div class="container">
            <h4>MID SEASON'S SALE</h4>
            <h1>Automn Collection <br> UP to 30% OFF</h1>
            <button class="text-uppercase">Shop Now</button>
        </div>
      </section>

      <!--Clothes-->
      <section id="clothes" class="my-5 ">
        <div class="container text-center mt-5 py-5">
          <h3>Dresses and Coat</h3>
          <hr>
          <p>Here you can check out our Clothes products</p>
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

      <!--Shoes-->
      <section id="shoes" class="my-5 ">
        <div class="container text-center mt-5 py-5">
          <h3>Brand Shoes</h3>
          <hr>
          <p>Here you can check out our Shoes products</p>
        </div>
        <div class="row mx-auto container-fluid">

       <?php include('./server/get_shoes.php'); ?>

       <?php while($row = $shoes->fetch_assoc()){ ?>
        <div class="product  text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3"  src="./assets/imgs/<?php echo $row['product_image']?>"/>
          <div class="star">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
          <h5 class="p-name"><?php echo $row['product_name']?></h5>
          <h4 class="p-price"><?php echo $row['product_price']?></h4>
          <a href="<?php echo "single_product.php? product_id=" . $row['product_id'] ;?>"><button class="buy-btn">Buy Now</button></a>
        </div>
        <?php } ?>
      </div>
      </section>

      <!--Watches-->
      <section id="watches" class="my-5">
        <section id="shoes" class="my-5 ">
          <div class="container text-center mt-5 py-5">
            <h3>Brand Watches</h3>
            <hr>
            <p>Here you can check out our Watches products</p>
          </div>
          <div class="row mx-auto container-fluid">
          <div class="product  text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3"  src="./assets/imgs/watche1.jpg"/>
            <div class="star">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>
            <h5 class="p-name"> Brand Watches</h5>
            <h4 class="p-price">2000Birr</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
          <div class="product  text-center col-lg-3 col-md-4  col-sm-12">
            <img class="img-fluid mb-3"  src="./assets/imgs/watche2.jpg"/>
            <div class="star">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>
            <h5 class="p-name"> Brand Watches</h5>
            <h4 class="p-price">2000Birr</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
          <div class="product  text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3"  src="./assets/imgs/watche3.jpg"/>
            <div class="star">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>
            <h5 class="p-name"> Brand Watches</h5>
            <h4 class="p-price">2000Birr</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
          <div class="product  text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3"  src="./assets/imgs/watche4.jpg"/>
            <div class="star">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>
            <h5 class="p-name">Brand Watches</h5>
            <h4 class="p-price">2000Birr</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
        </div>
        </section> 
      </section>

    <!--Footer-->
   <?php require ("footer.php"); ?>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>