
<?php include 'koneksi.php';
include 'function/session.php';
if (!isset($_SESSION["id"])) 
{
  echo "<script>alert('Silahkan login');</script>";
  echo "<script>location='login.php';</script>";
}
        $idd = (int) $_SESSION['id'];
      
          $query = mysqli_query ($koneksi, "SELECT * FROM user WHERE id_user = '$idd' ") or die (mysqli_error());
          $fetch = mysqli_fetch_array ($query);
          
if (empty($_SESSION["product_summary"]) OR !isset($_SESSION["product_summary"])) 
{
  echo "<script>alert('keranjang kosong, silahkan belanja dulu');</script>";
  echo "<script>location='user_2index.php';</script>";
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>BABEO- Keranjang Saya</title>
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
  color: orange;
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
        <a class="navbar-brand" href="user_2index.php">BABEO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>
        
             
      
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="user_2index.php" class="nav-link">Home</a></li>
            <li class="nav-item dropdown">
              
            </li>
            <li class="nav-item"><a href="about.php" class="nav-link">Tentang</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hai, <?php echo $fetch['username']; ?></a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">

                <a class="dropdown-item" href="profil.php?id=<?=$fetch['id_user']?>">My profil</a>
                <a class="dropdown-item" href="add_produk.php?id=<?=$fetch['id_user']?>">Mulai Jual</a>
                <a class="dropdown-item" href="cart.php?id=<?=$fetch['id_user']?>">Keranjang</a>
                <a class="dropdown-item" href="favorit.php?id<?$fetch['id_user']?>">Favorit</a>
                <a class="dropdown-item" href="logout.php">Logout</a>
              </div>
            </li>
            <li class="nav-item cta cta-colored"><a href="cart.php?id=<?=$fetch['id_user']?>" class="nav-link"><span class="icon-shopping_cart">Keranjang</span>
           
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
            <h1 class="mb-0 bread">keranjang Saya</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Keranjang</span></p>
          </div>
        </div>
      </div>
    </div>
		
		<section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
              <form method="post" class="well" style="background-color:#fff;">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
                    <th>foto</th>
						        <th>Nama Produk</th>
                    <th>Jumlah</th>
						        <th>Harga</th>
                    <th>Action</th>
						        <th>Total</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
						      </tr>
						    </thead>
<tbody>
<?php $nomor=1; ?>
    <?php foreach ($_SESSION["product_summary"] as $id_produk=> $jumlah): ?>

         
    <?php 
     $us=$fetch['id_user'];
    $ambil = $koneksi->query("SELECT orders.*, product.nama_product, product.hrg_product, product.foto_product, user.nama_user FROM orders JOIN product on product.id_product =orders.id_product 
join user on user.id_user = orders.id_user WHERE orders.id_user='$idd'");
    $pecah = $ambil->fetch_assoc();
    $ttl = $pecah['hrg_product'];
    $total = $pecah["hrg_product"]*$jumlah;
    print_r($pecah);
    $id_user = $pecah['id_user'];
    $nama = $pecah['nama_product'];
    $prod_id =$pecah['id_product'];
    $date = date('Y-m-d');
    $image = $pecah['foto_product'];   
     $sts = "BELUM";
        ?>

    <tr style="height: 50px">
      <td><?php echo $nomor; ?></td>
      <?php echo "<td><img style='height:150px; width:120px;' src='images/".$image."'></td>";?>
      <td><?php echo $nama; ?></td>
      <td><?php echo $jumlah;?></td>
      <td>Rp.<?php echo $ttl; ?></td>
      
      <td>
        <a href="function/hapus_keranjang.php?id=<?php echo 
        $id_produk ?>" class="btn btn-danger btn-xs"> hapus </a>
      </td>
      <td>Rp.<?php echo number_format($total);  ?></td>

     <?php $nomor++; ?>
         <?php endforeach ?>

                <!--
						    
                  <?php

// $h=(isset($_GET['id'])?$_GET['id']:'l');
// echo $h;

  if (isset($_SESSION['id'])) 
  $id=$_SESSION['id'];
  else
  $id=1;
  if (isset($_GET['action']))
  $action=$_GET['action'];
  else
  $action="empty";
  switch($action)
  {
    
    case "view":
      if (isset($_SESSION['cart'][$id]))
      $_SESSION['cart'][$id];
    break;
    case "add":
      if (isset($_SESSION['cart'][$id]))
      $_SESSION['cart'][$id]++;
      else
      $_SESSION['cart'][$id]=1;
    break;
    case "remove":
      if (isset($_SESSION['cart'][$id]))
      {
        $_SESSION['cart'][$id]--;
        if ($_SESSION['cart'][$id]==0)
        unset($_SESSION['cart'][$id]);
      }
    break; 
    case "empty":
      unset($_SESSION['cart']);

    break;
  }
if (isset($_SESSION['cart']))
  { 
 // var_dump($fetch['id_user']);  // ide user
    $us=$fetch['id_user'];
  $total=0;
  foreach($_SESSION['cart'] as $id => $x)
  {
  $result=mysqli_query($koneksi, "Select orders.*,product.nama_product ,product.hrg_product,product.foto_product,product.stok from orders join product on product.id_product =  orders.id_product
   where orders.id_product = '$id' and orders.id_user='$us' ");
 
  $myrow=mysqli_fetch_array($result);
 var_dump($myrow);
  $name=$myrow['nama_product'];
  $price=$myrow['hrg_product'];
  $image=$myrow['foto_product'];
  $product_size=$myrow['stok'];
  $line_cost=$price*$x;
  $total=$total+$line_cost;
    echo "<tr class='text-center'>";
    echo "<td><img style='height:150px; width:120px;' src='images/".$image."'></td>";
    echo "<td class='product-name'><strong><input type='hidden' required value='".$id."' name='pid[]'> ".$name."</strong></td>";
    echo "<td><strong>".$product_size."</strong></td>";
    echo "<td><strong><input type='hidden' required value='".$x."' name='qty[]'> ".$x."</h4></td>";
    echo "<td><b>".$price."</b></td>";
    echo "<td><h4><a href='cart.php?id=".$id."&action=add'><i class='ion-ios-add' style='color:black;'></i></a>
                <h4><a href='cart.php?id=".$id."&action=remove'><i class='ion-ios-remove' style='color:black;'></i></a>
          </td>";
    echo "<td><strong><h5>Rp.".$line_cost."</h5></strong>";
    echo "</tr>";
    }
    echo"<tr>";
    echo "<td>
              <a href='user_2index.php' class='btn btn-primary btn-sm-1 pull-right'><strong>Continue Shopping</strong></a></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td><h6><strong>TOTAL:</strong></h6></td>";
    echo "<td class='product-name'><strong><input type='hidden' value='".$total."' required name='total'><h4 class='text-danger'>Rp. ".$total."</h4></strong></td>";
    echo "<td></td>";
    echo "<td><a class='btn btn-danger btn-sm pull-right' href='cart.php?id=".$id."&action=empty'> 
              <i class='fa fa-trash-o'></i> Empty cart</a><td>
            <button name='pay_now' type='submit' class='btn btn-primary py-1 px-3 btn-lg'>Purchase</button></td>";
            include 'bayar.php';
  
    echo "&nbsp;";
    echo "</tr>";
  }
  else
    echo "<font color='#111' class='alert alert-error' style='float:right'>Cart is empty</font>";

?>-->
<td><p><a href="checkout.php" class="btn btn-primary py-1 px-3 btn-lg">Checkout <i class="icon-arrow-right"></i></a></p></td>
						    </tbody>
						  </table>
            </form>
					  </div>
    			</div>
    		</div>
			</div>
		</section>

    <!-- <section class="ftco-section bg-light">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<h1 class="big">Products</h1>
            <h2 class="mb-4">Related Products</h2>
          </div>
        </div>    		
    	</div>
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-1.jpg" alt="Colorlib Template"></a>
    					<div class="text py-3 px-3">
    						<h3><a href="#">Young Woman Wearing Dress</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$120.00</span></p>
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
    							<a href="#" class="add-to-cart"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></a>
    							<a href="#" class="ml-auto"><span><i class="ion-ios-heart-empty"></i></span></a>
    						</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-2.jpg" alt="Colorlib Template"></a>
    					<div class="text py-3 px-3">
    						<h3><a href="#">Young Woman Wearing Dress</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$120.00</span></p>
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
    							<a href="#" class="add-to-cart"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></a>
    							<a href="#" class="ml-auto"><span><i class="ion-ios-heart-empty"></i></span></a>
    						</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-3.jpg" alt="Colorlib Template"></a>
    					<div class="text py-3 px-3">
    						<h3><a href="#">Young Woman Wearing Dress</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$120.00</span></p>
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
    							<a href="#" class="add-to-cart"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></a>
    							<a href="#" class="ml-auto"><span><i class="ion-ios-heart-empty"></i></span></a>
    						</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-4.jpg" alt="Colorlib Template"></a>
    					<div class="text py-3 px-3">
    						<h3><a href="#">Young Woman Wearing Dress</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$120.00</span></p>
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
    							<a href="#" class="add-to-cart"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></a>
    							<a href="#" class="ml-auto"><span><i class="ion-ios-heart-empty"></i></span></a>
    						</p>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section> -->

		<!-- <section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center py-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
            	<h1 class="big">Subscribe</h1>
              <h2>Subcribe to our Newsletter</h2>
              <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

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

  <script>
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script>
    
  </body>
</html>