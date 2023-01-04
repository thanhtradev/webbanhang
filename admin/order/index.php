
<?php
    

    $title = 'Quan Li Don Hang';
    $baseUrl = '../';
    require_once'..\layouts\header.php';

     $sql = "select * from orders order by status asc,order_date desc";
    $data = executeResult($sql);


?>

<div class="row">
  <div class="col-md-12 table-responsive">
    <h1>Quản Lí Đơn Hàng</h1>

    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th>STT</th>
          <th>Họ và tên</th>
          <th>SĐT</th>
          <th>Email</th>
          <th>Địa chỉ</th>
          <th>Nội dung</th>
          <th>Ngày đặt hàng</th>
          <th>Tổng tiền</th>
          <th style="width: 50px;">Trạng thái</th>
          <th style="width: 50px;">Đơn hàng</th>
        </tr>
      </thead>
<tbody>
  <?php
  $index = 0;
foreach ($data as $item) {
  echo '<tr>
          <th>'.(++$index).'</th>
          <th><a href="detail.php?id='.$item['id'].'">'.$item['fullname'].'</a></th>
          <th>'.$item['phone_number'].'</th>
          <th>'.$item['email'].'</th>
          <th>'.$item['address'].'</th>
          <th>'.$item['note'].'</th>
          <th>'.$item['order_date'].'</th>
           <th>'.$item['total_money'].'</th>  
          <th style="width: 50px">';
          if($item['status'] ==1){
            echo '<button onclick="changeStautus('.$item['id'].',2)" class="btn btn-sm btn-success">Approve</button>
            <button onclick="changeStautus('.$item['id'].',4)" class="btn btn-sm btn-danger">Cancel</button>';
          }else if($item['status'] ==2){
            echo'<label class="badge badge-success">Approve</label>';

          }else if($item['status'] ==4){
            echo'<label class="badge badge-danger">Cancel</label>';

          }
          echo '</th>
          <th style="width: 50px">';
          if($item['status'] ==1){
            echo '';
          }else if($item['status'] ==2){
            echo'<button onclick="changeStautus('.$item['id'].',3)" class="btn btn-sm btn-warning">Đang giao hàng</button>
            ';

          }else if($item['status'] ==3){
            echo'<label class="badge badge-dark">Đã giao hàng</label>';

          }
          echo '</th>
        </tr>';
}


  ?>


</tbody>


    </table>
    
  </div>
  
</div>

<script type="text/javascript">
  function changeStautus(id,status){

    $.post('form_api.php',{
        'id':id,
        'status':status,
        'action':'update_status'
       },function(data){
        location.reload()
       })

  }

</script>

<?php 
     require_once'..\layouts\footer.php';
 ?>