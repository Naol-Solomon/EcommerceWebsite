<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css" />
    <style>
        .product img{
            width: 100%;
            height: auto;
            object-fit: cover;
            box-sizing: border-box;
        }

        .pagination li:hover a {
            color:#fff;
            background-color:coral;
        }
    </style>
</head>
<body>
    <!--Navigation Bar-->
      <?php require ("header.php"); ?>

    <!--Featured-->
    <section id="featured" class="my-5 py-5">
            <div class="container mt-5 py-5">
              <h3>Our Products</h3>
              <hr>
              <p>Here you can check out our products</p>
            </div>
            <div class="row mx-auto container">
            <div onclick="window.location.href='single_product.html'"class="product  text-center col-lg-3 col-md-4 col-sm-12">
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
            <div onclick="window.location.href='single_product.html'" class="product  text-center col-lg-3 col-md-4  col-sm-12">
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
            <div onclick="window.location.href='single_product.html'" class="product  text-center col-lg-3 col-md-4 col-sm-12">
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
            <div onclick="window.location.href='single_product.html'"  class="product  text-center col-lg-3 col-md-4 col-sm-12">
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
          
            <div onclick="window.location.href='single_product.html'" class="product  text-center col-lg-3 col-md-4 col-sm-12">
              <img class="img-fluid mb-3"  src="./assets/imgs/clothe1.jpg"/>
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
            <div onclick="window.location.href='single_product.html'" class="product  text-center col-lg-3 col-md-4  col-sm-12">
              <img class="img-fluid mb-3"  src="./assets/imgs/clothe2.jpg"/>
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
            <div onclick="window.location.href='single_product.html'" class="product  text-center col-lg-3 col-md-4 col-sm-12">
              <img class="img-fluid mb-3"  src="./assets/imgs/clothe3.jpg"/>
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
            <div onclick="window.location.href='single_product.html'"  class="product  text-center col-lg-3 col-md-4 col-sm-12">
              <img class="img-fluid mb-3"  src="./assets/imgs/clothe4.jpg"/>
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
      
          <div onclick="window.location.href='single_product.html'" class="product  text-center col-lg-3 col-md-4 col-sm-12">
              <img class="img-fluid mb-3"  src="./assets/imgs/feature5.jpg"/>
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
            <div  onclick="window.location.href='single_product.html'" class="product  text-center col-lg-3 col-md-4  col-sm-12">
              <img class="img-fluid mb-3"  src="./assets/imgs/feature6.jpg"/>
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
            <div  onclick="window.location.href='single_product.html'" class="product  text-center col-lg-3 col-md-4 col-sm-12">
              <img class="img-fluid mb-3"  src="./assets/imgs/feature7.jpg"/>
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
            <div onclick="window.location.href='single_product.html'"  class="product  text-center col-lg-3 col-md-4 col-sm-12">
              <img class="img-fluid mb-3"  src="./assets/imgs/feature8.jpg"/>
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

          <div onclick="window.location.href='single_product.html'" class="product  text-center col-lg-3 col-md-4 col-sm-12">
              <img class="img-fluid mb-3"  src="./assets/imgs/watche1.jpg"/>
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
            <div onclick="window.location.href='single_product.html'" class="product  text-center col-lg-3 col-md-4  col-sm-12">
              <img class="img-fluid mb-3"  src="./assets/imgs/watche2.jpg"/>
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
            <div onclick="window.location.href='single_product.html'" class="product  text-center col-lg-3 col-md-4 col-sm-12">
              <img class="img-fluid mb-3"  src="./assets/imgs/watche3.jpg"/>
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
            <div onclick="window.location.href='single_product.html'" class="product  text-center col-lg-3 col-md-4 col-sm-12">
              <img class="img-fluid mb-3"  src="./assets/imgs/watche4.jpg"/>
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
            <nav aria-label="page navigation example">
                <ul class="pagination mt-5">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul> 
            </nav>
          </div>
        </div>
        </section>

    <!--Footer-->
    <?php require ("footer.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>