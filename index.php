<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Fashion Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/ed7865b7c9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
    <link rel="stylesheet" type="text/css" href="resources/css/style-index.css">
    <meta charset="UTF-8">
    <title> </title>
    
    <style>
        *{
            padding:0;
            margin:0;
            box-sizing: border-box;
        }
        
        body{
            background:#eee;
            font-family:sans-serif;
        }
        
        .banner-area{
            width:100%;
            
            background-image:linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)), url(img/back.jpg);
            background-size:auto;
        }        
        
    </style>
</head>
<body>
    <div class="banner-area">
<?php include 'header.php'; ?>
<style type="text/css">
	.searchDiv{
		position:relative;top:-15px;width:45%
	}
</style>

<section style="width:100%;">
	<div style="width:100%;margin: 0 auto;height: 170px;background: cadetblue;position: relative;">
		<div style="width: 100%;position:absolute;top: 20%;left: 30%;">
			<h2>Search Your product Which You Want Here</h2>
			<form action="search.php" method="get" style="position: relative;">
				<input type="text" name="searching" style="width: 45%;height: 31px;background: #ccc;" placeholder="Enter Product Name" id="searchKey">
				<input type="submit" name="submit" value="Submit" style="background-color: darkgoldenrod;padding: 9px;text-decoration: none;color: #fff;">
			</form>
				<div id="searchItem" class="searchDiv" style="">
					
				</div>
		</div>
	</div>
</section>

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <div class="thumb">
                            <div class="inner-content">
                                
                                <span>Choose the best. Choose us.</span>
                                <div class="main-border-button">
                                    <a href="cart.php">Purchase Now!</a>
                                </div>
                            </div>
                            <img src="resources/images/left-banner-image.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Women</h4>
                                            <span>Best Clothes For Women</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Women</h4>
                                                <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.
                                                </p>
                                                <div class="main-border-button">
                                                    <a href="pages/shop.php">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="resources/images/baner-right-image-01.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Men</h4>
                                            <span>Best Clothes For Men</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Men</h4>
                                                <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.
                                                </p>
                                                <div class="main-border-button">
                                                    <a href="pages/shop.php">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="resources/images/baner-right-image-02.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Kids</h4>
                                            <span>Best Clothes For Kids</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Kids</h4>
                                                <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.
                                                </p>
                                                <div class="main-border-button">
                                                    <a href="pages/shop.php">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="resources/images/baner-right-image-03.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Accessories</h4>
                                            <span>Best Trend Accessories</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Accessories</h4>
                                                <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.
                                                </p>
                                                <div class="main-border-button">
                                                    <a href="pages/shop.php">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="resources/images/baner-right-image-04.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->
    <h2 style="margin-left: 780px;color: #FFFC37">Featurs Products </h2>
<section style="width:100%;height: 700px;">
<div style="width:100%;display:flex;">
	<div style="width:20%;height: auto;background-color :#ccc;">
		<div style="width:100%;margin:0 auto;border-bottom: 2px solid #ddd;">
			<h2 align="center" style="color: green">Category</h2>
			<ul style="list-style-type: none;width:80%; margin: 0 auto;margin-bottom: 20px;">
			<?php 

					$sql = "SELECT * FROM category";
                $result = mysqli_query($connect, $sql);
                $output = '';
                if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_array($result)) {
                    echo '<li style="padding:5px;border:2px solid #fff"><a  href="category.php?id=' . $row['cat_id'] . '&name='.$row['cat_title'].'">' . $row['cat_title'] . '</a></li>';
                  }
                }

			 ?>
			</ul>
		</div>
		<div style="width:100%;margin:0 auto;border-bottom: 2px solid #ddd;">
			<h2 align="center" style="color: green">Brand</h2>
			<ul style="list-style-type: none;width:80%; margin: 0 auto;margin-bottom: 20px;">
				<?php 

					$sql = "SELECT * FROM brand";
                $result = mysqli_query($connect, $sql);
                $output = '';
                if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_array($result)) {
                    echo '<li style="padding:5px;border:2px solid #fff"><a href="brand.php?id=' . $row['brand_id'] . '&name='.$row['brand_name'].'">' . $row['brand_name'] . '</a></li>';
                  }
                }
			  ?>
			</ul>
		</div>	
	</div>

	<div style="width:80%;height: 300px;display:grid;grid-template-columns: auto auto auto;">

<?php
  $sql = "SELECT * FROM `product`";
  $result = mysqli_query($connect, $sql);
  if ($result) {
    $i = 0;
    while ($data = mysqli_fetch_array($result)) {
?>

			<div style="height:370px;margin: 3px;border: 1px solid #ccc;">
				<img src="img/<?php echo $data['product_image']; ?>" style="width: 100%;height: 220px;">
				<h2 style="padding: 10px;text-align: center;background-color: #ccc;margin: 0;"><a href="product_details.php?product=<?php echo $data['product_id']; ?>" style="text-decoration:none"><?php echo $data['product_name']; ?></a></h2>
				<div style="display:block;height: 32px;">
					<p style="float: left;margin-left: 10px;font-size: 22px;">$20</p>
					<p style="float: right;margin-right: 10px;font-size: 22px;">4.2(420)</p>
				</div>
								<div style="">
					<button class="addToCart" style="width: 150px; float:left" data-product="<?php echo $data['product_id'] ?>">Add To Cart</button>
					<button class="addToWishlist" style="float:right;" data-product="<?php echo $data['product_id'] ?>"><i class="fa fa-heart" style=" color: #F55D29 "></i>  </button>
				</div>
			</div>

<?php
    }
   }
 ?>

	</div>
</div>
</section>
<br>

<?php 
	if(isset($_SESSION["user_id"])){
		$id = $_SESSION["user_id"];
	}else{
		$id = 0;
	}
 ?>
 <small id="session"><?php echo $id; ?></small>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){

		$(document).on('click','.getsearch',function(){
			$('#searchKey').val($(this).text());
		});

		$('#searchKey').keyup(function(){
			var search = $('#searchKey').val();
			$.ajax({
					url: "ajax/searchsuggestion.php",
					method: "POST",
					data:{search:search},
					success: function(data){
						console.log(data);
						$('#searchItem').html(data);
					}
				});
		});

		var i = $('#cartmenu').text();

		$(".addToCart").on('click',function(){
			var checkSession = $('#session').text();
			if(checkSession == 0){
				location.replace("http://localhost/auntor_final/login.php");
			}else{
				
				var product = $(this).data("product");
				$.ajax({
					url: "ajax/addcart.php",
					method: "POST",
					data:{product_id:product},
					success: function(data){
						data = parseInt(data)
						if(data){
							i++;
							$('#cartmenu').text(i);
							alert("Product added successfull");
						}else{
							alert("Product Already Exists in cart");
						}
						
					}
				});
			};
				
		});

		
		$(".addToWishlist").on('click',function(){
			var j = $('#wishmenu').text();
			var checkSession = $('#session').text();
			if(checkSession == 0){
				location.replace("http://localhost/auntor_final/login.php");
			}else{
				var product = $(this).data("product");
				$.ajax({
					url: "ajax/wishlist.php",
					method: "POST",
					data:{product_id:product},
					success: function(data){
						data = parseInt(data)
						if(data){
							j++;
							$('#wishmenu').text(j);
							alert("Product added successfull");
						}else{
							alert("Product Already Exists in Wishlist");
						}
						
					}
				});
			};
		});


	})
</script>
 </div>
 </div>
   <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="pages/shop.html">Shop</a></li>
                            <li><a href="pages/help.html">Customer Support</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="pages/about.html">Company</a></li>
                            <li><a href="pages/about.html">Team</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>The Fashion Store</h3>
                        <p>Your Friendly Neighborhood Fashion Store. Come get the best shopping experience ever !</p>
                    </div>
                    <div class="col item social"><a href="pages/about.html"><i class="fa fa-facebook"></i></a><a
                            href="pages/about.html"><i class="fa fa-twitter"></i></a><a href="pages/about.html"><i
                                class="fa fa-snapchat"></i></a><a href="pages/about.html"><i
                                class="fa fa-instagram"></i></a></div>
                </div>
                <p class="copyright">The Fashion Store © 2022</p>
            </div>
        </footer>
    </div>
    <style type="text/css">

    	.footer-dark {
  margin-top: auto;
  padding: 50px 0;
  color: #f0f9ff;
  background-color: #282d32;
}

.footer-dark h3 {
  margin-top: 0;
  margin-bottom: 12px;
  font-weight: bold;
  font-size: 16px;
}

.footer-dark ul {
  padding: 0;
  list-style: none;
  line-height: 1.6;
  font-size: 14px;
  margin-bottom: 0;
}

.footer-dark ul a {
  color: inherit;
  text-decoration: none;
  opacity: 0.6;
}

.footer-dark ul a:hover {
  opacity: 0.8;
}

@media (max-width:767px) {
  .footer-dark .item:not(.social) {
    text-align: center;
    padding-bottom: 20px;
  }
}

.footer-dark .item.text {
  margin-bottom: 36px;
}

@media (max-width:767px) {
  .footer-dark .item.text {
    margin-bottom: 0;
  }
}

.footer-dark .item.text p {
  opacity: 0.6;
  margin-bottom: 0;
}

.footer-dark .item.social {
  text-align: center;
}

@media (max-width:991px) {
  .footer-dark .item.social {
    text-align: center;
    margin-top: 20px;
  }
}

.footer-dark .item.social>a {
  font-size: 20px;
  width: 36px;
  height: 36px;
  line-height: 36px;
  display: inline-block;
  text-align: center;
  border-radius: 50%;
  box-shadow: 0 0 0 1px rgba(255, 255, 255, 0.4);
  margin: 0 8px;
  color: #fff;
}

.footer-dark .item.social>a:hover {
  opacity: 0.9;
}

.footer-dark .copyright {
  text-align: center;
  padding-top: 24px;
  opacity: 0.3;
  font-size: 13px;
  margin-bottom: 0;
}
    </style>
    </body>
    </html>