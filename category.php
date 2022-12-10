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
		<div class="col-md-3 col-6 product-item">
	     <a href="detail.php?id='.$item['id'].'"><img src="'.$item['thumbnail'].'" style="width:100%;height:280px"></a>
      	<p>'.$item['category_name'].'</p>
      	<p>'.$item['title'].'</p>
     	<p style="color: red">'.number_format($item['discount']).'</p>
      <p><button class="btn btn-success" onclick="addCart('.$item['id'].',1)" style="width:100%">Them Vao Gio Hang</button>
      </p>
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
