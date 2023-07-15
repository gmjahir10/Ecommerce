<?php 
include "db_connect.php"; 
include 'header.php'
?>
<?php
    $id =$_GET['id'];
    $sql = "SELECT * FROM product JOIN brand ON product.brand_id = brand.brand_id WHERE product.brand_id='{$id}'";
    $result = mysqli_query($connect, $sql);
    
?>


<section style="width:100%;">
	<div style="width:90%;margin: 0 auto;height: 170px;background: cadetblue;position: relative;">
		<div style="width: 100%;position:absolute;top: 20%;text-align: center;">
			<h2>Brand : <?php echo $_GET['name']; ?></h2>
		</div>
	</div>
</section>

<section style="width:100%;display:block;">
	<div style="width:90%;margin: 0 auto;height: 300px;display:grid;grid-template-columns: auto auto auto;">
		<?php 
      if (mysqli_num_rows($result) > 0) {
            while ($data = mysqli_fetch_array($result)) {
     ?>
			<div style="height:300px;margin: 3px;border: 1px solid #ccc;">
				<img src="img/<?php echo $data['product_image']; ?>" style="width: 100%;height: 150px;">
				<h2 style="padding: 10px;text-align: center;background-color: #ccc;margin: 0;"><?php echo $data['product_name']; ?></h2>
				<div style="display:block;height: 32px;">
					<p style="float: left;margin-left: 10px;font-size: 22px;">$20</p>
					<p style="float: right;margin-right: 10px;font-size: 22px;">4.2(420)</p>
				</div>
				<br>
				<br>
				<div style="">
          <button class="addToCart" style="float:left" data-product="<?php echo $data['product_id'] ?>">Add To Cart</button>
          <button class="addToWishlist" style="float:right;"><i class="fa fa-heart"></i></button>
        </div>
			</div>
		<?php }}else{echo '<h2>No books found</h2>'; } ?>
			
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