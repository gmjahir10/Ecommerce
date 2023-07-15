<?php 
include 'db_connect.php';
include 'header.php';

?>
<?php
  $id = $_GET['product'];
  $sql = "SELECT * FROM `product` WHERE product_id='{$id}'";
  $result = mysqli_query($connect, $sql);
  $data = mysqli_fetch_array($result);
  //print_r($data);
 ?>

<section style="width:100%;">
	<div style="width:90%;margin: 0 auto;height: 170px;background: cadetblue;position: relative;">
		<div style="width: 100%;position:absolute;top: 50%;text-align: center;">
			<h2 >Product Details</h2>
			
		</div>
	</div>
</section>

<section style="width:100%;">
	<div style="width:90%;height: auto;margin: 0 auto;">
		<div style="width:100%;display: flex;">
			<div style="width:50%;height: 300px;">
				<img src="img/<?php echo $data['product_image']; ?>" style="width: 90%;height: 300px;margin: 10px;">
			</div>
			<div style="width:50%;height: 300px;background-color :#eee;">
				<div style="padding:20px">
					<h2><?php echo $data['product_name']; ?></h2>
					<h4>Rating : 4.3 ||<span> Review: 213</span></h4>
          <h4>Price : 21 TK</span></h4>
					<div>
						Quantity : 1
          </div>
          <br>
          <button style="padding: 10px;font-size: 16px;background: blueviolet;color: aliceblue;border-radius: 12px;" class="addToCart">add to Cart</button>
				</div>
			</div>
		</div>
	</div>
</section>
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

    function loadAjax(){
      
    }

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

    var j = $('#wishmenu').text();
    $(".addToWishlist").on('click',function(){
      j++;
      $('#wishmenu').text(j);
    });

  })
</script>
</body>
</html>