<?php 
include 'db_connect.php';
include 'header.php';
?>

<section style="width:100%;">
  <div style="width:100%;margin: 0 auto;height: 170px;background: cadetblue;position: relative;">
    <div style="width: 100%;position:absolute;top: 20%;text-align: center;">
      <h2>Cart Page</h2>
    </div>
  </div>
</section>
<section style="width:100%;">
	<div style="width:80%;display:flex;margin: 0 auto;">
		<div style="width:80%;height: 100vh;background-color :#ccc;">
      <div style="margin-top:20px">
        <table cellspacing="5" width="100%">
          <tr>
            <th>Item</th>
            <th>Title</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
          </tr>
<?php 
          $sql = "SELECT * FROM `cart` JOIN product ON product.product_id = cart.product_id WHERE cart.user_id='{$_SESSION['user_id']}'";
                $result = mysqli_query($connect, $sql);
                $output = '';
                $subTotal = 0;
                if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_array($result)) {
                    $priceWithQua = $row['product_price']*$row['quantity'];
                    $subTotal += $priceWithQua;
                    $total = $subTotal + $subTotal*0.1;

 ?>
          <tr id="<?php echo $row['product_id'] ?>">
            <td><img src="img/<?php echo $row['product_image']; ?>" width="100"></td>
            <td><?php echo $row['product_name'] ?></td>
            <td><span><?php echo $row['product_price'] ?></span>tk</td>
            <td>
              <div>
                <span><button style="text-decoration: none;background: green;padding: 6px;font-size: 24px;" class="addQuantity">+</button></span>
                <input type="text" name="" value="<?php echo $row['quantity'] ?>" readonly="" style="width: 34px;height: 30px;font-size: 20px;" class="valueQuantity">
                <span><button style="text-decoration: none;background: red;padding: 6px;font-size: 24px;" class="removeQuantity">-</button></span>
              </div></td>
            <td><span class="rowTotal"><?php echo $priceWithQua; ?></span>Tk</td>
          </tr>
  <?php }} ?>
        </table>
      </div>
		</div>
		<div style="width:20%;height: 300px;">
				<div style="width:100%;margin:0 auto;border-bottom: 2px solid #ddd;">
          <h2 align="center" style="color: green">Cash Memo</h2>
          <ul style="list-style-type: none;width:100%;">
            <li style="padding:5px;border:2px solid #ccc">Cart Sub Total <span style="float:right" id="subtotal">Tk <?php echo $subTotal; ?></span></li>
            <li style="padding:5px;border:2px solid #ccc">Tax <span style="float:right">10%</span></li>
            <li style="padding:5px;border:2px solid #ccc">Shipping Cost <span style="float:right">Free</span></li>
            <li style="padding:5px;border:2px solid #ccc">Total <span style="float:right" id="finalamount"><?php echo $total; ?>Tk</span></li>
          </ul>
        </div>

       <div style="margin-left: 120px;">
        <?php

    include('phpqrcode/qrlib.php');

    // how to save PNG codes to server
    
    $tempDir = "qrcodes/";
    $codeContents = $subTotal;
    
    $codeContents = 'Cart Sub Total ='.$subTotal.' tk' .' Tax = 10%' .' Shipping Cost  = Free' .' Total Price ='.$total;
    
    // we need to generate filename somehow, 
    // with md5 or with database ID used to obtains $codeContents...
    $fileName = '005_file_'.md5($codeContents).'.png';
    
    $pngAbsoluteFilePath = $tempDir.$fileName;
    $urlRelativeFilePath = $tempDir.$fileName;
    
    // generating
    if (!file_exists($pngAbsoluteFilePath)) {
      #4 {main} thrown in  QRcode::png($codeContents, $pngAbsoluteFilePath);
        echo '<hr />';
    } else {
        
        echo '<hr />';
    }
    
    echo $pngAbsoluteFilePath;
    echo '<hr />';
    
    // displaying
    echo '<img src="'.$urlRelativeFilePath.'" />';
    ?>
</div>
<br>
        <a href="checkout.php?price=<?php echo $total; ?>" style="margin-left: 120px; font-size:30px; ">Checkout</a>
		</div>
	</div>
		
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){

    function valueUpdate(tr,type){
      $value = tr.attr('id');
      var tinyValue = parseFloat(tr.find("td:nth-child(3) span").text());
      var i = $('#'+$value+' input.valueQuantity').val();
     if (type == 1) {
        i++;
      } else {
        if (i > 0) i--;
      }
      tr.find("td:nth-child(5) span").text(tinyValue*i);
      var sumTiny = 0;
      $(".rowTotal").each(function(){
        sumTiny += parseFloat($(this).text());
        console.log(sumTiny);
      });
      $('#subtotal').text(sumTiny);
      var Total = sumTiny*0.1 + sumTiny;
      console.log(Total);
      $("#finalamount").text(Total);
      $.ajax({
          url: "ajax/cartcalculate.php",
          method: "POST",
          data:{quantity:i,product_id:$value},
          success: function(data){
            data = parseInt(data)
            if(data){
              
              $('#cartmenu').text(i);
              $('#'+$value+' input.valueQuantity').val(i);
            }else{
              alert("server error");
            }
            
          }
        });
    }

    $(".addQuantity").on('click',function(){
      $tr = $(this).closest('tr');
      valueUpdate($tr,1);
      
    });
    $(".removeQuantity").on('click',function(){
      $tr = $(this).closest('tr');
      valueUpdate($tr,3);;
    });

  })
</script>

</body>
</html>