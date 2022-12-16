<?php
require_once('layouts/header.php');

$productId = getGet('id');
 $sql = "select product.*, category.name as category_name from product left join category on product.category_id = category.id where product.id = $productId";
 $product = executeResult($sql,true);

 $category_id=$product['category_id'];

 $sql = "select product.*, category.name as category_name from product left join category on product.category_id = category.id order by product.updated_at desc limit 0,4";
    $lastestItems = executeResult($sql);

?>
<style type="text/css">
	.breadcrumb{
		background-color: transparent;
		padding: 0px;
	}
	.breadcrumb li{
		margin-right: 15px;

	}
</style>
<!--Detail-->
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<img src="<?=$product['thumbnail']?>" style="width: 100%;">
		</div>

		<div class="col-md-6">
			<ul class="breadcrumb">
				<li><a href="index.php">Trang Chủ</a></li>
				<li><a href="category.php?id=<?=$product['category_id']?>">/ <?=$product['category_name']?></a></li>
				<li> / <?=$product['title']?></li>
			</ul>
			<h3><?=$product['title']?></h3>
			<p style="font-size: 30px; color: red; margin-top: 15px; margin-bottom: 15px;">
				<?=number_format($product['discount'])?> VND
			</p>
			<p style="font-size: 15px; color: grey; margin-top: 15px; margin-bottom: 15px;">
				<del><?=number_format($product['price'])?> VND</del>
			</p>
			<div style="display: flex;">
				<button class="btn btn-light" style="border: solid grey 1px;" onclick="addMoreCart(-1)">-</button>
				<input type="number" name="num" class="form-control" step="1" value="1" style="max-width: 60px" style="border: solid grey 1px;" onchange="fixCartNum()">
				<button class="btn btn-light" style="border: solid grey 1px;"onclick="addMoreCart(1)">+</button>
			</div>
			<button class="btn btn-success" style="margin-top: 10px; width: 100%; border-radius: 0px; font-size:30px" onclick="addCart(<?=$product['id']?>,$('[name=num]').val())">
				Thêm vào giỏ hàng
			</button>
				<button class="btn btn-secondary" style="margin-top: 10px; width: 100%; border-radius: 0px; font-size:30px">
				Xem giỏ hàng
			</button>
			
		</div>
      
      <div class="col-md-12">
      	<h3>Chi tiết sản phẩm</h3>
      	<?=$product['description']?>
      </div>

	</div>

</div>


<!-- Detail end-->


<!--San Pham Moi Nhat start-->
<div class="container">
	<h2>Các sản phẩm liên quan</h2>

<div class="row" style="margin-top: 50px;">
	<?php
	foreach($lastestItems as $item){
		echo '
		<div class="col-md-3 col-6 product-item">
	     <a href="detail.php?id='.$item['id'].'"><img src="'.$item['thumbnail'].'" style="width:100%;height:280px"></a>
      	<p>'.$item['category_name'].'</p>
      	<p>'.$item['title'].'</p>
     	<p style="color: red">'.number_format($item['discount']).'</p>
     	<p><button class="btn btn-success" onclick="addCart('.$item['id'].',1)" style="width:100%">Thêm vào giỏ hàng</button>
      </p>
        </div>';
	}
	?>
</div>

</div>
<!--San Pham Moi Nhat end-->
<script type="text/javascript">
	function addMoreCart(delta) {
		num = parseInt($('[name=num]').val())
		num += delta
		if(num <1) num =1
			$('[name=num]').val(num)
	}
	function fixCartNum() {
		$('[name=num]').val(Math.abs($('[name=num]').val()))
	}

	
	

</script>

<?php 
require_once('layouts/footer.php');
 ?>
<!-- footer -->
