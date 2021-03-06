<?php 
  session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>BABEO- Tentang Kami</title>
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
        <a class="navbar-brand" href="user_2index.php">Babeo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>
        <span><a class="navbar-brand">&nbsp;<input name="ukuran" id="input" type="text" placeholder="Cari Produk"></a></span>
             
      
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="user_2index.php" class="nav-link">Home</a></li>
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
		
		<div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Tentang Kami</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Tentang</span></p>
          </div>
        </div>
      </div>
    </div>
<br>
    <section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
			<div class="container">
				<div class="row">
					<div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/bg_2.jpg);">
						<a href="https://vimeo.com/45830194" class="icon popup-vimeo d-flex justify-content-center align-items-center">
							<span class="icon-play"></span>
						</a>
					</div>
					<div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
	          <div class="heading-section-bold mb-5 mt-md-5">
	          	<div class="ml-md-0">
		            <h2 class="mb-4">BABEO </h2>
                <h3>(Barang Bekas Online) </h3>
	            </div>
	          </div>
	          <div class="pb-md-5">
							<p>BABEO merupakan aplikasi jual beli secara online yang fokus pada penjualan barang bekas . Barang bekas yang dijual pada aplikasi yaitu berbagai macam fashion . Dimulai dari fashion atasan dan bawahan wanita, fashion atasan dan bawahan pria, serta aksesoris. aksesoris pun yang dijual bermacam-macam. Aksesoris yang dijual yaitu mulai dari jam tangan, kalung , anting-anting, jilbab, sepatu, sendal, tas, ikat pinggang, dll.  </p>
							<p>Aplikasi BABEO ini dapat diakses oleh seluruh masyarakat. semua pengguna dapat menjadi pembeli atau penjual pada aplikasi ini. tujuan dibuatnya aplikasi adalah untuk memudahkan orang-orang yang ingin menjual pakaian atau aksesorisnya dengan lebih cepat dan mudah serta terjamin kualitas dan keamanannya . </p>
						</div>
					</div>
				</div>
			</div>

    <footer class="ftco-footer bg-light ftco-section">
      <div class="container">
        <div class="row mb-5">
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