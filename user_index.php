
<?php
          include 'koneksi.php';
                $query = mysqli_query ($koneksi, "SELECT * FROM user") or die (mysqli_error());
                $fetch = mysqli_fetch_array ($query);
            ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>BABEO- Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/b5.png">
    
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
<style>
    #input{
 background: rgba(23, 20, 20, 0.52);
 font-size:12pt;
 font-family:Time News Roman;
 color:pink;
 width:100%;
 height:40px;
 padding:5px 5px 5px 10px;
 margin:3px;
 border-radius:3px;
 border:none;
}
::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  color: white;
}
#input[type="submit"]{
 background:rgba(31, 15, 2, 0.78);
 color:#fff;
 cursor:pointer;
 
}
#input:hover, #input:focus{

 background:black;
 outline-style:none;
}
#input[type="submit"]:hover, #input[type="submit"]:focus{
 background:rgba(31, 15, 2, 0.78);
}</style>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="user_index.php">BABEO</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <span><a class="navbar-brand">&nbsp;<input name="ukuran" id="input" type="text" placeholder="Cari Produk"></a></span>
             
		  
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="user_index.php" class="nav-link">Home</a></li>
	          <li class="nav-item dropdown">
              
            </li>
	          <li class="nav-item"><a href="about.php" class="nav-link">Tentang</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profil</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	
              	<a class="dropdown-item" href="login.php">Login / Sign Up</a>
        
              </div>
            </li>
	          <li class="nav-item cta cta-colored"><a href="login.php" class="nav-link"><span class="icon-shopping_cart">Keranjang</span>
	         
	         <!-- <?php
	          include 'koneksi.php';
	          $id = (int) $_SESSION['id'];
                        $sqlCommand = "SELECT COUNT(orders.jumlah), user.nama_user FROM user left join orders on orders.id_user = user.id_user WHERE user.id_user = '$id'"; 
$query = mysqli_query($koneksi, $sqlCommand) or die (mysqli_error()); 
$row = mysqli_fetch_row($query);
echo "Keranjang " . $row[0] . "";
mysqli_free_result($query);?> --></a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
		
		<div class="hero-wrap js-fullheight" style="background-image: url('images/img_bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
        	<h3 class="v">Babeo - Produk terbaik</h3>
        	<h3 class="vr">Sejak - 2020</h3>
          <div class="col-md-11 ftco-animate text-center">
            <h1>Hanya Ada disini</h1>
            <h2><span>Bekas Tapi Berkelas</span></h2>
          </div>
          <div class="mouse">
						<a href="#" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-down"></span></div>
						</a>
					</div>
        </div>
      </div>
    </div>

    <div class="goto-here"></div>
    
    <section class="ftco-section ftco-product">
    	<div class="container">
    		<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<h1 class="big">Kategori</h1>
            <h2 class="mb-4">Kategori</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="product-slider owl-carousel ftco-animate">
    					<div class="item">
		    				<div class="product">
		    					<a href="baju_pria.php" class="img-prod"><img class="img-fluid" src="images/fashionpria.jpg" alt="Colorlib Template">
		    					</a>
		    					<div class="text pt-3 px-3">
		    						<h3><a href="baju_pria.php">BAJU PRIA</a></h3>

		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="product">
		    					<a href="baju_wanita.php" class="img-prod"><img class="img-fluid" src="images/fashionwanita.jpg" alt="Colorlib Template"></a>
		    					<div class="text pt-3 px-3">
		    						<h3><a href="baju_wanita.php">BAJU WANITA</a></h3>
		    						
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="product">
		    					<a href="aksesoris.php" class="img-prod"><img style="height: 525px; width: 800px; max-width: 100%; max-height: 100%;" class="img-fluid" src="images/aksesoris.jpg" alt="Colorlib Template"></a>
		    					<div class="text pt-3 px-3">
		    						<h3><a href="aksesoris.php">AKSESORIS</a></h3>
		    						
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="product">
		    					<a href="baju_pria.php" class="img-prod"><img class="img-fluid" src="images/fashionpria1.jpg" alt="Colorlib Template"></a>
		    					<div class="text pt-3 px-3">
		    						<h3><a href="baju_pria.php">BAJU PRIA</a></h3>
		    						
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="product">
		    					<a href="baju_wanita.php" class="img-prod"><img src="images/fashionwanita1.jpg" alt="Colorlib Template">
			    					<!-- <span class="status">30%</span> -->
			    				</a>
		    					<div class="text pt-3 px-3">
		    						<h3><a href="baju_wanita.php">BAJU WANITA</a></h3>
		    						
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="product">
		    					<a href="aksesoris.php" class="img-prod"><img style="height: 525px; width: 600px; max-width: 100%; max-height: 100%;" src="images/aksesoris1.jpg" alt="Colorlib Template"></a>
		    					<div class="text pt-3 px-3">
		    						<h3><a href="aksesoris.php">AKSESORIS</a></h3>
		    						
		    					</div>
		    				</div>
	    				</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section bg-light">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<h1 class="big">Produk</h1>
            <h2 class="mb-4">Produk Terbaik</h2>
          </div>
        </div>    		
    	</div>
    	<div class="container-fluid">
    		<div class="row">
    			<?php
    			include 'koneksi.php';
                                        $query = mysqli_query($koneksi, "SELECT * FROM product") or die(mysqli_error());
                                        while($fetch = mysqli_fetch_array($query))
                                            {
                                            $id = $fetch['id_product'];
                                            $id2 = $fetch['id_category'];
                                    ?>
    			<div class="col-lg-3 col-md-6 ftco-animate">
    				<div class="product">
    					<a href=details.php?id=<?=$fetch['id_product']?> class="img-prod"><img style="height: 350px; width: 600px; max-width: 100%; max-height: 100%;" class="img-fluid" src="images/<?php echo $fetch['foto_product']?>" alt="Colorlib Template"></a>
    					<div class="text py-4 px-4">
    						<h3><a href="#"><?php echo $fetch['nama_product'];?></a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span><?php echo $fetch['hrg_product'];?></span></p>
		    					</div>
		    					<div class="rating">
	    							<p class="text-right">
	    								<span class="ion-ios-star-outline"></span>
	    								<span class="ion-ios-star-outline"></span>
	    								<span class="ion-ios-star-outline"></span>
	    								<span class="ion-ios-star-outline"></span>
	    								<span class="ion-ios-star-outline"></span>
	    							</p>
	    						</div>
	    					</div>
	    					<hr>
    						<p class="bottom-area d-flex">
    							<?php echo"<a href='cart.php?id=".$id."&action=add' class='btn btn-primary py-3 px-5'>Add to Cart</a></p>" 
                   				?>
    							<!-- <a href="#" class="ml-auto"><span><i class="ion-ios-heart-empty"></i></span></a> -->
    						</p>
    					</div>
    				</div>
    			</div>
    		<?php } ?>
    		</div>
    	</div>
    </section>

    <!-- <section class="ftco-section testimony-section bg-light">
      <div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<h1 class="big">Testimony</h1>
          </div>
        </div>    		
        <div class="row justify-content-center">
          <div class="col-md-8 ftco-animate">
          	<div class="row ftco-animate">
		          <div class="col-md-12">
		            <div class="carousel-testimony owl-carousel ftco-owl">
		              <div class="item">
		                <div class="testimony-wrap py-4 pb-5">
		                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                    <p class="mb-4">Barang bagus, Harga terjangkau, terjamin.</p>
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Customer</span>
		                  </div>
		                </div>
		              </div>
		              <div class="item">
		                <div class="testimony-wrap py-4 pb-5">
		                  <div class="user-img mb-4" style="background-image: url(images/person_2.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Customer</span>
		                  </div>
		                </div>
		              </div>
		              <div class="item">
		                <div class="testimony-wrap py-4 pb-5">
		                  <div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Customer</span>
		                  </div>
		                </div>
		              </div>
		              <div class="item">
		                <div class="testimony-wrap py-4 pb-5">
		                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Customer</span>
		                  </div>
		                </div>
		              </div>
		              <div class="item">
		                <div class="testimony-wrap py-4 pb-5">
		                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Customer</span>
		                  </div>
		                </div>
		              </div>
		            </div>
		          </div>
		        </div>
          </div>
        </div>
      </div>
    </section> -->
    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_4.jpg);">
    	<div class="container">
    		<div class="row justify-content-center py-5">
    			<div class="col-md-10">
		    		<div class="row">
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="10000">0</strong>
		                <span>Happy Customers</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="100">0</strong>
		                <span>Branches</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="1000">0</strong>
		                <span>Partner</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="100">0</strong>
		                <span>Awards</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    <footer class="ftco-footer bg-light ftco-section">
      <div class="container">
        <div class="row mb-5">
          <!-- <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Modist</h2>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div> -->
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
                <li><a href="index.php" class="py-2 d-block">Home</a></li>
                <li><a href="#" class="py-2 d-block">Tentang</a></li>
               <!--  <li><a href="#" class="py-2 d-block">Journal</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li> -->

              </ul>
            </div>
          </div>
          <!-- <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Bantuan</h2>
              <div class="d-flex">
	              <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
	                <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
	                <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
	                <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
	                <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
	              </ul>
	              <ul class="list-unstyled">
	                <li><a href="#" class="py-2 d-block">FAQs</a></li>
	                <li><a href="#" class="py-2 d-block">Contact</a></li>
	              </ul>
	            </div>
            </div>
          </div> -->
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Ingin bertanya?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Jl. Mastrip Jember, Jawa Timur</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+62-82245800319</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">babeo@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> by <a href="https://colorlib.com" target="_blank">Babeo</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>