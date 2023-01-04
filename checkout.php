<?php
require_once('layouts/header.php');
if(isset($_SESSION['user'])){
	 $currentUser = $_SESSION['user'];
 $id = ($currentUser['id'] == null || trim($currentUser['id']) == '') ? '' : $currentUser['id'];

 $sql = "select * from user where id = '$id'";
 $userItem = executeResult($sql);
foreach($userItem as $item){

  $fullname = $item['fullname'];
  $email = $item['email'];
  $phone_number = $item['phone_number'];
  $address = $item['address'];
}
}

?>


<div class="container" style="margin-top: 20px; margin-bottom: 20px;">
<form method="post" onsubmit="return completeCheckout();">
	<div class="row">
	<div class="col-md-6">

		 <div class="form-group">
				  <input required="true" type="text" class="form-control" id="usr" name="fullname" value="<?php if(isset($_SESSION['user'])) echo $fullname?>" placeholder="Nhập Họ và Tên">
				</div>
				<div class="form-group">
				  <input required="true" type="email" class="form-control" id="email" name="email" value="<?php if(isset($_SESSION['user'])) echo $email?>"placeholder="Nhập Email">
				</div>
				<div class="form-group">
				  <input required="true" type="tel" class="form-control" id="phone" name="phone_number" value="<?php if(isset($_SESSION['user'])) echo $phone_number?>" placeholder="Nhập số điện thoại">
				</div>
				<div class="form-group">
				  <input required="true"  type="text" class="form-control" id="address" name="address" value="<?php if(isset($_SESSION['user'])) echo $address?>"  placeholder="Nhập địa chỉ">
				</div>
				<div class="form-group">
				  <label for="address">Ghi chú:</label>
				  <textarea class="form-control" rows="3" name="note"></textarea>
				</div>	
		
	</div>
	<div class="col-md-6">
		<table class="table table-bordered">
		<tr>
			<th>STT</th>
			<th>Hình Ảnh</th>
			<th>Tiêu Đề</th>
			<th>Giá</th>
			<th>Số Lượng</th>
			<th>Tổng</th>
		
		</tr>
<?php

if(!isset($_SESSION['cart'])){
	$_SESSION['cart'] = [];
}
$index = 0;
$total = 0;
foreach($_SESSION['cart'] as $item){
	echo'<tr>
	<td>'.(++$index).'</td>
	<td><img src="'.$item['thumbnail'].'" style="height: 80px"/></td>
	<td>'.$item['title'].'</td>
	<td>'.number_format($item['discount']).' VND</td>
	<td>
	'.$item['num'].'
	</td>
	<td>'.number_format($item['discount'] * $item['num']).' VND</td>
	
        </tr>';
  $total += $item['discount'] * $item['num'];
   
}
?>



	</table>
	<a href="checkout.php"><button class="btn btn-warning">Thanh toán</button></a>
	 
	</div>
</div>
</form>

	<form action="payment_momo.php" method="post">
					<input type="hidden" name="total" value="<?php echo $total ?>">
					<button class="btn btn-success" name="momo" id="momo">Thanh Toán MOMO</button>
				</form>
</div>

<script type="text/javascript">
	function completeCheckout(){
		$.post('api/ajax_request.php',{
			'action' : 'checkout',
			'fullname':$('[name=fullname]').val(),
			'email':$('[name=email]').val(),
			'phone_number':$('[name=phone_number]').val(),
			'address':$('[name=address]').val(),
			'note':$('[name=note]').val()
		},function () {
			window.open('complete.php','_self');
		})
    return false;

	}
</script>
<?php 
require_once('layouts/footer.php');
 ?>
