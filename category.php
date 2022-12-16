<?php
require_once('layouts/header.php');

$category_id = getGet('id');

if($category_id == null || $category_id == ''){
   $sql = "select product.*, category.name as category_name from product left join category on product.category_id = category.id order by product.updated_at desc limit 0,8";
    $lastestItems = executeResult($sql);


}else{
 $sql = "select product.*, category.name as category_name from product left join category on product.category_id = category.id where product.category_id = $category_id order by product.updated_at desc limit 0,8";
    $lastestItems = executeResult($sql);

}


?>



<!--San Pham Moi Nhat start-->
<div class="container">

<div class="row" style="margin-top: 50px;">
	<?php
	foreach($lastestItems as $item){
		echo '
		 <div class="col-md-3 col-6 product-card">
    <div class"product-card-img">
       <a href="detail.php?id='.$item['id'].'"><img src="'.$item['thumbnail'].'" style="height:380px; width: 400px"></a>
    </div>
       <div class="product-btn">
                                <button class="btn-flat btn-hover btn-shop-now">Mua Ngay</button>
                                <button onclick="addCart('.$item['id'].',1)" class="btn-flat btn-hover btn-cart-add">
                                    <i class="bx bxs-cart-add"></i>
                                </button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class="bx bxs-heart"></i>
                                </button>
                            </div>
                      
       
       <div class="product-card-name">
                                 <p>'.$item['title'].'</p>
                            </div>
                             <div class="product-card-price">
                                <span><del>'.number_format($item['price']).' VND</del></span>
                                <span class="curr-price">'.number_format($item['discount']).' VND</span>
                            </div>
        </div>';
	}
	?>
</div>


</div>
<!--San Pham Moi Nhat end-->

<?php 
require_once('layouts/footer.php');
 ?>
<!-- footer -->
