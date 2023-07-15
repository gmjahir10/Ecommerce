<?php 
include 'db_connect.php';
include 'header.php';
?>
<?php
    $sql = "SELECT * FROM `cart` JOIN product ON product.product_id = cart.product_id WHERE cart.user_id='{$_SESSION['user_id']}'";
    $result = mysqli_query($connect, $sql);
    
?>
<section style="width:100%;">
  <div style="width:100%;margin: 0 auto;height: 170px;background: cadetblue;position: relative;">
    <div style="width: 100%;position:absolute;top: 20%;text-align: center;">
      <h2>Wishlist Page</h2>
    </div>
  </div>
</section>
<section style="width:100%;">
	<div style="width:80%;margin: 0 auto;">
		<div style="width:100%;height: 100vh;background-color :#ccc;">
      <div style="margin-top:20px">
        <table border="1" style="width:50%;margin: 0 auto;padding: 20px;">
          <tr>
            <th>Item</th>
            <th>Title</th>
            <th>Price</th>
          </tr>
            <?php 
      if (mysqli_num_rows($result) > 0) {
            while ($data = mysqli_fetch_array($result)) {
     ?>
          <tr>
            <td><img src="img/<?php echo $data['product_image']; ?>" width="100"></td>
            <td><?php echo $data['product_name']; ?></td>
            <td><?php echo $data['product_price']; ?>tk</td>
          </tr>
      <?php }} ?>
        </table>
      </div>
		</div>
	</div>
		
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</body>
</html>