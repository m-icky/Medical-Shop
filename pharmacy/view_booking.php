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
                <li class="active"><a href="pharmacy_index.php">Home</a></li>
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
                <!-- <li><a href="cart.php" class="icons-btn d-inline-block bag">Cart</a>
                <span class="icon-shopping-bag"></span>
                </li> -->
              <!-- <span class="number">2</span> -->
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
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mx-auto order-lg-2 align-self-center">
            <div class="site-block-cover-content text-center">
              <h2 class="sub-title">Effective Medicine, New Medicine Everyday</h2>
              <h1>Welcome User</h1>
              <p>
                <!-- <a href="#" class="btn btn-primary px-5 py-3">Shop Now</a> -->
              </p>
              <h2 class="sub-title">Home</h2>
            </div>
          </div>
        </div>
      </div>
    </div>



    
    <div class="container add-emp">		
			<center><h1 class="p-2 mb-0 bg-info text-light"><strong>Booking Details</strong></h1><br></center>
			<table class="table table-bordered table-hover">
				<!-- <thead class="thead-dark"> -->
					<tr>
                        <th class="p-3 mb-2 bg-info text-light">User Name </th>
                        <th class="p-3 mb-2 bg-warning text-light">User Email </th>
                        <th class="p-3 mb-2 bg-info text-light">User Phone </th>
						<th class="p-3 mb-2 bg-warning text-light">Medicine Name </th>
						<th class="p-3 mb-2 bg-info text-light">Price</th>
						<th class="p-3 mb-2 bg-warning text-light">Payment</th>
						<!-- <th class="p-3 mb-2 bg-danger text-light">Feedback</th> -->
						<!-- <th class="p-3 mb-2 bg-primary text-light">Update</th> -->
						<!-- <th class="p-3 mb-2 bg-secondary text-light">Delete</th> -->
					</tr>
					<?php
						include '../connection.php';
                        $sql = "SELECT * FROM add_med, user_registration, booking_view WHERE add_med.id = booking_view.product_id AND booking_view.cart_status = 'Added To Cart'";
						$result = mysqli_query($con, $sql);           
						while ($data = mysqli_fetch_assoc($result))			 
						{
                            
					?>      
                            <td><?php echo $data['first_name'];?></td>
                            <td><?php echo $data['email'];?></td>
                            <td><?php echo $data['phonenumber'];?></td>
                            <td><?php echo $data['name'];?></td>
							<td><?php echo $data['price']?></td>
							<td><?php echo $data['payment']?></td>
							<!-- <td><?php echo $data['feedback']?></td>         -->
              <!-- <td><a class="btn btn-primary py-2 px-3" href="update_btn.php?id=<?php echo $data['id']; ?>">Update</a> </td> -->
              <!-- <td><a class="btn btn-secondary py-2 px-3"  href="delete_btn.php?id=<?php echo $data['id']; ?>">Delete</a> </td> -->
						</tr> 
					<?php    
						}
					?>
		    </table>
		</div>
	</div>








    <hr style="width:100%;text-align:left;margin-left:0">

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
              <li><a href="pharmacy_index.php">Home</a></li>
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