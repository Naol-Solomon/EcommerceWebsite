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

    //calculate product quantity
    calculateTotalCart();


 //to remove product from cart
}else if (isset($_POST['remove_product'])){

  unset($_SESSION['cart'][$_POST['product_id']]);

}else if(isset($_POST['edit_quantity'])){
   
  //get id and quantity from the form
  $product_id = $_POST['product_id'];
  $product_quantity = $_POST['product_quantity'];

 //get the product array from the the session
 $product_array = $_SESSION['cart'][$product_id];

 //update the product array with the new quantity
 $product_array['product_quantity'] = $product_quantity;

 $_SESSION['cart'][$product_id] = $product_array;
 



}else {
    header('Location: index.php');
}

  function calculateTotalCart(){
      $total = 0;

      foreach ($_SESSION['cart'] as $key => $value) {
          $product = $_SESSION['cart'][$key];

          $price = $product['product_price'];
          $quantity = $product['product_quantity'];

          $total = $total + ($price * $quantity);
      }

      $_SESSION['total'] = $total; //return total
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
   <?php  require("header.php"); ?>

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
  
                    <form action="cart.php" method="POST">
                      <input type="hidden" name="product_id" value="<?php echo $value['product_id']; ?>"/>  
                      <input type="number" name="product_quantity" value="<?php echo $value['product_quantity'] ;?>" /> 
                      <input type="submit" class="edit-btn"  value="edit" name="edit_quantity"/>                  
                    </form>
                    
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
                    <td>Total</td>
                    <td><?php echo $_SESSION['total'] ?> Birr</td>
                </tr>

            </table>
        </div>
        <div class="checkout-container">
          <form action="checkout.php" method="POST">
          <input type="submit" class="btn checkout-btn" name="checkout" value="Checkout" />
          </form>
            
        </div>
    </section>

    <!--Footer-->
    <?php require ("footer.php"); ?>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
  </html>