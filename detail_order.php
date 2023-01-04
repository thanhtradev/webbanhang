
<?php
  
    require_once'.\layouts\header.php';

    $orderId= getGet('id');
    $sql = "select order_details.*, product.title,product.thumbnail from order_details left join product on product.id= order_details.product_id where order_details.order_id = $orderId";
    $data = executeResult($sql);

    $sql = "select * from orders where id =$orderId";
    $orderItem = executeResult($sql,true);
   

?>

<div class="row">
  <div class="col-md-12 table-responsive">
    <h1>Khach Hang: <?=$orderItem['fullname']?></h1>

    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th>STT</th>
          <th>Thumbnail</th>
          <th>Ten San Pham</th>
          <th>Gia</th>
          <th>So Luong</th>
          <th>Tong Gia</th>
        </tr>
      </thead>
<tbody>
  <?php
  $index = 0;
foreach ($data as $item) {
  echo '<tr>
          <th>'.(++$index).'</th>
          <th><img src="'.fixUrl($item['thumbnail']).'" style="height:120px"/></th>
          <th>'.$item['title'].'</th>
          <th>'.$item['price'].'</th>
          <th>'.$item['num'].'</th>
          <th>'.$item['total_money'].'</th>
        </tr>';
}


  ?>


</tbody>


    </table>
    
  </div>
  
</div>

<script type="text/javascript">
  function markRead(id){

    $.post('form_api.php',{
        'id':id,
        'action':'mark'
       },function(data){
        location.reload()
       })

  }

</script>

<?php 
     require_once'.\layouts\footer.php';
 ?>