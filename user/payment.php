<?php
session_start();
if ($_SESSION) 

  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Medical Shop</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">


  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

</head>

<body>

  <div class="site-wrap">


    <div class="site-navbar py-2">

      <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="#" method="post">
            <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
          </form>
        </div>
      </div>

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="admin_index.php" class="js-logo-clone">Medical Shop</a>  
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li><a href="user_index.php">Home</a></li>

                <!-- <li><a href="shop.html">Store</a></li> -->
                <!-- <li class="has-children">
                  <a href="#">Dropdown</a>
                   <ul class="dropdown">
                    <li><a href="#">Supplements</a></li>
                    <li class="has-children">
                      <a href="#">Vitamins</a>
                      <ul class="dropdown">
                        <li><a href="#">Supplements</a></li>
                        <li><a href="#">Vitamins</a></li>
                        <li><a href="#">Diet &amp; Nutrition</a></li>
                        <li><a href="#">Tea &amp; Coffee</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Diet &amp; Nutrition</a></li>
                    <li><a href="#">Tea &amp; Coffee</a></li>
                    
                  </ul>
                </li> -->
                <li><a href="cart.php" class="icons-btn d-inline-block bag">Cart</a>
                <span class="icon-shopping-bag"></span>
                </li>
              <!-- <span class="number">2</span> -->
              <li><a href="view_med.php">Back</a></li>

              <li><a href="logout.php">Log Out</a></li>

              </ul>
            </nav>
          </div>
          <!-- <div class="icons">
             <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span
                class="icon-menu"></span></a>
          </div> -->
        </div>
      </div>
    </div>

    <div class="site-blocks-cover" style="background-image: url('images/hero_1.jpg');">
    <section class="p-4 p-md-4"  data-stellar-background-ratio="0.5">
		<div class="row d-flex justify-content-center">
			<div class="col-md-10 col-lg-8 col-xl-5">
			  <div class="card rounded-3">
				<div class="card-body p-4">
				  <div class="text-center mb-4">
                  <?php
						include '../connection.php';
                    $id=$_SESSION['loginid'];
                    
					?>     
                    <?php  $amt=$_GET['amt']?>
					<p class="p-2 mb-0 bg-info text-light">Total Amount = <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
						<path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4v1.06Z"/>
					  </svg><?php echo $amt?>/-</p>			
					<h1 class="p-2 mb-0 bg-info text-light"><b>PAYMENT</b></h1>
				  </div>
				  <form action="payment_act.php?id=<?php echo $id?>" method="post">

					  <img class="img-fluid" src="https://img.icons8.com/color/48/000000/mastercard-logo.png" />
					
					  <img class="img-fluid" src="https://img.icons8.com/color/48/000000/visa.png" />


					  <div class="form-check">
						<input class="form-check-input" type="radio" name="flexRadioDefault" id="checkoutForm3"
						  checked />
						<label class="form-check-label" for="checkoutForm3">
						  Credit card
						</label>
					  </div>
		  
					  <div class="form-check">
						<input class="form-check-input" type="radio" name="flexRadioDefault" id="checkoutForm4" />
						<label class="form-check-label" for="checkoutForm4">
						  Debit card
						</label>
					  </div>
		  
					  <div class="form-check mb-4">
						<input class="form-check-input" type="radio" name="flexRadioDefault" id="checkoutForm5" />
						<label class="form-check-label" for="checkoutForm5">
						  Paypal
						</label>
					  </div>
		  
		
					<div class="form-outline mb-4">
					  <input type="text" id="formControlLgXsd" name="name" class="form-control form-control-lg"  required=""/>
					  <label class="form-label" for="formControlLgXsd">Cardholder's Name</label>
					</div>
		
					<div class="row mb-4">
					  <div class="col-7">
						<div class="form-outline">
						  <input type="text" id="formControlLgXM" name="number" class="form-control form-control-lg" required="" pattern="[0-9]{16}"/>
						  <label class="form-label" for="formControlLgXM">Card Number</label>
						</div>
					  </div>

					  <div class="col-3">
						<div class="form-outline">
						  <input type="text" id="formControlLgExpk" name="date" class="form-control form-control-lg"  required=""/>
						  <label class="form-label" for="formControlLgExpk">Expire</label>
						</div>
					  </div>

					  <div class="col-2">
						<div class="form-outline">
						  <input type="password" id="formControlLgcvv" name="cvv" class="form-control form-control-lg" required="" pattern="[0-9]{3}"/>
						  <label class="form-label" for="formControlLgcvv">CVV</label>
						</div>
					  </div>
					</div>
		
					<button type="Submit" class="btn btn-success btn-lg btn-block">Make Payment</button>
				  </form>
                  <br>
                  <a href="cart.php"><button class="btn btn-danger">Cancel</button></a>

				</div>
			  </div>
			</div>
		  </div>
	</section>
    </div>


    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">

            <div class="block-7">
              <h3 class="footer-heading mb-4">About Us</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quae reiciendis distinctio voluptates
                sed dolorum excepturi iure eaque, aut unde.</p>
            </div>

          </div>
          <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
            <h3 class="footer-heading mb-4">Quick Links</h3>
            <ul class="list-unstyled">
              <li><a href="admin_index.php">Home</a></li>
              <li><a href="logout.php">Log Out</a></li>

            </ul>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contact Info</h3>
              <ul class="list-unstyled">
                <li class="address">203 Fake St. Mountain View, San Francisco, California, USA</li>
                <li class="phone"><a href="tel://23923929210">+2 392 3929 210</a></li>
                <li class="email">emailaddress@domain.com</li>
              </ul>
            </div>


          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
              Copyright &copy;
              All rights reserved | <a target="_blank"
                class="text-primary">CYBER PRISM</a>
            </p>
          </div>

        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/main.js"></script>

</body>

</html>