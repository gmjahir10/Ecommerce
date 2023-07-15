<?php 

require_once 'config.php';
include 'db_connect.php'; 


?>
<?php

$connect = mysqli_connect("localhost", "root" );

mysqli_select_db($connect, 'bookshop');

if(isset($_POST['submit'])){

 print_r($_POST);
  $sql = "SELECT * FROM user WHERE email='{$_POST['email']}'";
  $result = mysqli_query($connect, $sql);
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);
     $verify = password_verify($_POST['password'], $row['password']);

      if ($verify) {
      
      $_SESSION['login'] = 'true';
      $_SESSION['user_id'] = $row['user_id'];
      $_SESSION['username'] = $row['username'];
      $_SESSION['email'] = $_POST['email'];
      setcookie("info", $_SERVER['HTTP_USER_AGENT'],time()+3600,"/","",0);;
      header('location:index.php');;
      }   
      else {
      echo 'Incorrect Password!';
      }

     
  }else{
    echo '<h2 style="text-align:center;padding:10px;color:red">Email and password is incorrect</h2>';
  }
  
} 

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Fashion Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/ed7865b7c9.js" crossorigin="anonymous"></script>
	<title>Log In</title>
	<style type="text/css">
		*{
			margin:0;padding: 0;
		}
		.parent_class{
			width:100%;
		}
		.sub_class{
			width:50%;margin: 0 auto;
		}
		.formdiv{
			margin-top:30px;padding:20px;background-color:#ccc;
		}
		.banner-area{
            width:100%;
            
            background-image:linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)), url(img/img3.png);
            background-size:auto;
        }   
	</style>
</head>
<body>
<div class="banner-area">
<section class="parent_class">
	<div class="sub_class">
		<div class="formdiv">
			<h2 align="center" style="margin-bottom: 10px;color: #fff;background-color: green;padding: 15px;">Log In</h2>
			<div style="width: 70%;margin: 0 auto;font-size: 30px;">
				<form action="" onsubmit="return validationFrom()" method="post">
					<table cellspacing="6">
						<tr>
							<td><label for="Name">Email :</label></td>
							<td><input type="email" name="email" id="email" placeholder="Enter Your Email" style="margin-left: -170px; width: 260px;height: 40px;font-size: 17px;padding: 5px;"></td>
						</tr>
						<tr>
							<td><label for="password">Password:</label></td>
							<td><input type="password" name="password" id="password" placeholder="Enter Your Password" style="margin-left: -170px; width: 260px;height: 40px;font-size: 17px;padding: 5px;"></td>
						</tr>
						<tr>
							<td><input style="margin-left: 250px;padding: 15px;font-size: 19px;cursor: pointer;background-color: cadetblue;border-radius: 20px;color: #fff;" type="submit" name="submit" value="submit" autocomplete="off"></td>
							<td><br><br><br><span style="font-size:25px;margin-left:-119px"><?php echo "<a href='" . $client->createAuthUrl() . "'>Google Login</a>" ?></span></td>
						</tr>
						
					</table>
					<tr>
							<td><span style=" margin-left:213px; font-size:20px;"><a href="register.php">Create your Account?</a></span></td>
						</tr>
				</form>
			</div>

		</div>
	</div>
</section>

	<script type="text/javascript">
		
		function validationFrom(){
			
			var emailvalue = document.getElementById('email').value;
			var passwordvalue = document.getElementById('password').value;

			if(emailvalue == ""){
				alert("Email cannot be empty ");
				return false;
			}else if((passwordvalue.length <= 8) || (passwordvalue.length > 32)) {
				alert("Password length is between 8-32 chars");
				return false;	
			}else {
				
				return true;	
			}
			
			
		}

	</script>
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