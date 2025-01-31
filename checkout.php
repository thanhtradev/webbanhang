<?php
require_once('layouts/header.php');

?>


<div class="container" style="margin-top: 20px; margin-bottom: 20px;">
<form method="post" onsubmit="return completeCheckout();">
	<div class="row">
	<div class="col-md-6">
		<div class="form-group">
				  <input required="true" type="text" class="form-control" id="usr" name="fullname" placeholder="Ho va Ten">
				</div>
				<div class="form-group">
				  <input required="true" type="email" class="form-control" id="email" name="email" placeholder="nhap email">
				</div>
				<div class="form-group">
				  <input required="true" type="tel" class="form-control" id="phone" name="phone_number" placeholder="Phone">
				</div>
				<div class="form-group">
				  <input required="true"  type="text" class="form-control" id="address" name="address" placeholder="dia chi">
				</div>
				<div class="form-group">
				  <label for="address">Ghi Chu:</label>
				  <textarea class="form-control" rows="3" name="note"></textarea>
				</div>
		
	</div>
	<div class="col-md-6">
		<table class="table table-bordered">
		<tr>
			<th>STT</th>
			<th>Thumbnail</th>
			<th>Tieu De</th>
			<th>Gia</th>
			<th>So Luong</th>
			<th>Tong Gia</th>
		
		</tr>
<?php

if(!isset($_SESSION['cart'])){
	$_SESSION['cart'] = [];
}
$index = 0;
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

}
?>



	</table>
	<a href="checkout.php"><button class="btn btn-warning">Thanh Toan</button></a>
	 
	</div>
</div>
</form>
</div>

<script type="text/javascript">
	function completeCheckout(){
		$.post('api/ajax_request.php',{
			'action' : 'checkout',
			'fullname':$('[name=fullname]').val(),
			'email':$('[name=email]').val(),
			'phone_number':$('[name=phone]').val(),
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
