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
    <?php require ("header.php")?>

    <!--Account-->
    <section class="my-5 py-5">
        <div class="row container mx-auto">
            <div class="text-center mt-3 pt-3 col-lg-6 col-md-12 col-12">
                <h3 class="font-weight-bold">Account info</h3>
                <hr class="mx-auto">
                <div class="account-info">
                    <p>Name: <span>Naol</span></p>
                    <p>Email: <span>nola@email.com</span></p>
                    <p><a href="" id="order-btn">Your orders</a></p>
                    <p><a href="" id="logout-btn">Logout</a></p>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 ">
               <form id="account-form">
                <h3> Change Password</h3>
                <h1 class="mx-auto"></h1>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" id="account-password"  name="Password" />
                </div>
                <div class="form-group">
                  <label>Confirm Password</label>
                  <input type="password" class="form-control" id="account-password-confirm"  name="Confirm Password" />
                </div>
                <div class="form-group">
                  <input type="submit"  value="Change Password" class="btn" id="change-pass-btn"/>
                </div>
               </form>
            </div>
        </div>
    </section>

    <!--Orders-->
    <section class="orders container my-5 py-5">
      <div class="container mt-2">
          <h2 class="font-weight-below">Your Orders</h2>
          <hr>
      </div>

      <table class="mt-5 pt-5">
          <tr>
              <th>Product</th>
              <th>Date</th>
          </tr>
          <tr>
              <td>
                <div class="product-info">
                  <img src="./assets/imgs/backpack4.jpg">
                  <div>
                    <p class="mt-3"> White Shoes</p>
                  </div>
                </div>
              </td>
              <td>
                  <span>2024-10-20</span>
              </td>

          </tr>
      </table>
  
  </section>
    <!--Footer-->
     <?php require ("footer.php")?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        </body>
        </html>