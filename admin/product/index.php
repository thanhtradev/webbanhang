
<?php
    

    $title = 'Quan Li San Pham';
    $baseUrl = '../';
    require_once'..\layouts\header.php';
    $sql = "select product.*, category.name as category_name from product left join category on product.category_id = category.id where product.deleted =0";
    $data = executeResult($sql);

?>


<div class="row">
  <div class="col-md-12 table-responsive">
    <h1>Quản Lí Sản Phẩm</h1>

    <a href="editor.php"><button style="margin-bottom:10px" class="btn btn-success">Thêm Sản Phẩm</button></a>

    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th>STT</th>
          <th>Thumbnailn</th>
          <th>Tên sản phẩm</th>
          <th>Giá</th>
          <th>Danh Mục</th>
          <th style="width: 50px;"></th>
          <th style="width: 50px;"></th>
        </tr>
      </thead>
<tbody>
  <?php
  $index = 0;
foreach ($data as $item) {
  echo '<tr>
          <th>'.(++$index).'</th>
          <th><img src="'.fixUrl($item['thumbnail']).'" style="height:100px"/></th>
          <th>'.$item['title'].'</th>
          <th>'.number_format($item['discount']).' VND</th>
          <th>'.$item['category_name'].'</th>
          <th style="width: 50px">
           <a href="editor.php?id='.$item['id'].'">
           <button class="btn btn-warning">Sửa</button>
           </a>
          </th>
          <th style="width: 50px">
          <button onclick="deleteProduct('.$item['id'].')" class="btn btn-danger">Xóa</button>
          </th>
        </tr>';
}


  ?>


</tbody>


    </table>
    
  </div>
  
</div>

<script type="text/javascript">
  function deleteProduct(id){

    option = confirm('Ban co chac muon xoa san pham nay khong?')
    if(!option) return;

    $.post('form_api.php',{
        'id':id,
        'action':'delete'
       },function(data){
        location.reload()
       })

  }

</script>

<?php 
     require_once'..\layouts\footer.php';
 ?>