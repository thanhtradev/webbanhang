<?php
require_once('layouts/header.php');

?>


<div class="container" style="margin-top: 20px; margin-bottom: 20px;">
<div>
	<h2>Thanh Toán Thành Công</h2>

   <?php 
  if(isset($_SESSION['user'])){
  	echo '<a href="history_order.php">(Click)Xem Lịch Sử Đặt Hàng</a>';
  }
   ?>
  <br>
  <a href="index.php">Quay Trở lại Mua Hàng</a>
	 
</div>
</div>


<?php 
require_once('layouts/footer.php');
 ?>
