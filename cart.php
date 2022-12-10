<?php
require_once('layouts/header.php');

?>


<div class="container" style="margin-top: 20px; margin-bottom: 20px;">
<div class="row">
	<table class="table table-bordered">
		<tr>
			<th>STT</th>
			<th>Thumbnail</th>
			<th>Tieu De</th>
			<th>Gia</th>
			<th>So Luong</th>
			<th>Tong Gia</th>
			<th></th>
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
	<td style="display: flex">
	<button class="btn btn-light" style="border: solid grey 1px;" onclick="addMoreCart('.$item['id'].',-1)">-</button>
	<input type="number" id="num_'.$item['id'].'"value="'.$item['num'].'" class="form-control" style="width: 90px" onchange="fixCartNum('.$item['id'].')"/>
	<button class="btn btn-light" style="border: solid grey 1px;"onclick="addMoreCart('.$item['id'].',1)">+</button>
	</td>
	<td>'.number_format($item['discount'] * $item['num']).' VND</td>
	<td><button class="btn btn-danger" onclick="updateCart('.$item['id'].',0)">Xoa</button></td>
        </tr>';

}
?>



	</table>
	<a href="checkout.php"><button class="btn btn-success">Tiep Tuc Thanh Toan</button></a>
	 
</div>
</div>

<script type="text/javascript">
	function addMoreCart(id,delta) {
		num = parseInt($('#num_' + id).val())
		num += delta
		if(num <1) num =1
			$('#num_' + id).val(num)

		updateCart(id,num)
	}
	function fixCartNum(id) {
		$('#num_' + id).val(Math.abs($('#num_' + id).val()))
		updateCart(id,$('#num' + id).val())
	}
	function updateCart(productId,num) {
        $.post('api/ajax_request.php', {
            'action': 'update_cart',
          'id':productId,
          'num': num
        } , function(data){
          location.reload()
        })
    }
	

</script>

<?php 
require_once('layouts/footer.php');
 ?>
