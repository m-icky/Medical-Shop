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
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mx-auto order-lg-2 align-self-center">
            <div class="site-block-cover-content text-center">
              <h2 class="sub-title">Effective Medicine, New Medicine Everyday</h2>
              <h1>Welcome User</h1>
              <p>
                <!-- <a href="#" class="btn btn-primary px-5 py-3">Shop Now</a> -->
              </p>
              <h2 class="sub-title">Home / Cart</h2>
            </div>
          </div>
        </div>
      </div>
    </div>



    
    <div class="container add-emp">		
			<center><h1 class="p-2 mb-0 bg-info text-light"><strong>Cart Details</strong></h1><br></center>
			<table class="table table-bordered" style="color:black;">
				<!-- <thead class="thead-dark"> -->
					<tr>			
						<th class="p-3 mb-2 bg-warning text-light">Image</th>
						<th class="p-3 mb-2 bg-success text-light">Product</th>
						<th class="p-3 mb-2 bg-info text-light">Price</th>
						<!-- <th class="p-3 mb-2 bg-primary text-light">Update</th> -->
						<th class="p-3 mb-2 bg-danger text-light">Delete</th>
					</tr>
					<?php
						include '../connection.php';
            $id=$_SESSION['loginid'];

            $sql = "SELECT * FROM add_med, cart WHERE add_med.id = cart.product_id AND cart.user_id = '$id' AND cart.cart_status = 'Added To Cart'";
						$result = mysqli_query($con, $sql);  
            $t=0;         
						while ($data = mysqli_fetch_assoc($result))			 
						{
					?>      
              <td><img src="../images/<?php echo $data['img'];?>" alt="Image" class="img-fluid" width="150px" height="100px"></td>
							<td class="h5 text-black"><?php echo $data['name']?></td>
							<td><?php echo $data['price']?></td>
              <?php  $r=$data['price'];
              $t=$t+$r;
              ?>
              <!-- <td><a class="btn btn-primary py-2 px-3" href="update_btn.php?id=<?php echo $data['id']; ?>">Update</a> </td> -->
              <td><a class="btn btn-danger py-2 px-3"  href="cart_delete.php?id=<?php echo $data['cart_id']; ?>">Delete</a> </td>
						</tr> 
            <?php    
						}
					?>
		    </table>
     
        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6 mb-3 mb-md-0">
                <a href="view_med.php" class="btn btn-info btn-md btn-block">Continue Shopping</a>
              </div>
              <div class="col-md-6">
              </div>
            </div>
          </div>

          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                  </div>
                </div>
                
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total Amount</span>
                  </div>
                  <div class="col-md-6 text-right">
                  <strong class="text-black"><h3><i class="fa fa-rupee"></i><?php echo $t?> </h3></strong>
                  </div>
                </div>
                  <div class="row">
                  <div class="col-md-12">

                  
                    <a class="btn btn-success btn-lg btn-block" href="payment.php?amt=<?php echo $t?>">Proceed To Checkout</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
	      </div>
      </div>
    </div>
  </div><br><br><br>

    
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