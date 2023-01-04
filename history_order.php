<?php
require_once('layouts/header.php');
 $currentUser = $_SESSION['user'];
 $userId = $currentUser['id'];
 $sql = "select * from orders where user_id = '$userId'";
 $orderMenu= executeResult($sql);


      
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Trang Chu</title>
  <!--new-->
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <!-- boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- app css -->
    <link rel="stylesheet" href="./assets/css/grid.css">
    <link rel="stylesheet" href="./assets/css/app.css">
    <!--end new-->
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
html,body{
  
  height: 100%;
  width: 100%;
  place-items: center;
  background: #f2f2f2;
  /* background: linear-gradient(-135deg, #c850c0, #4158d0); */
}
::selection{
  background: #4158d0;
  color: #fff;
}
    </style>
</head>

<body><div class="row">
  <div class="col-md-12 table-responsive">
    <h1>Lịch sử đặt hàng</h1>

    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <td>STT</td>
          <td>Họ và tên</td>
          <td>SĐT</td>
          <td>Email</td>
          <td>Địa chỉ</td>
          <td>Nội dung</td>
          <td>Ngày đặt hàng</td>
          <td>Tổng tiền</td>
          <td style="width: 50px;">Trạng thái</td>
          <td style="width: 50px;"></td>
        </tr>
      </thead>
<tbody>
  <?php
  $index = 0;
foreach ($orderMenu as $item) {
  echo '<tr>
          <td>'.(++$index).'</td>
          <td style="color:blue"><a href="detail_order.php?id='.$item['id'].'">'.$item['fullname'].'(Xem chi tiết)</a></td>
          <td>'.$item['phone_number'].'</td>
          <td>'.$item['email'].'</td>
          <td>'.$item['address'].'</td>
          <td>'.$item['note'].'</td>
          <td>'.$item['total_money'].'</td>
           <td>'.$item['order_date'].'</td>  
          <td style="width: 50px">';
          if($item['status'] ==1){
            echo '<label class="badge badge-success">Đặt hàng thành công(Chờ giao hàng)</label>';
          }else if($item['status'] ==2){
            echo'<label class="badge badge-warning">Đang giao hàng</label>';
             }else if($item['status'] ==3){
            echo'<label class="badge badge-dark">Giao hàng thành công</label>';

          }else{
            echo'<label class="badge badge-danger">Đơn bị hủy</label>';

          }
          echo '</td>
        </tr>';
}


  ?>


</tbody>


    </table>
    
  </div>
  
</div>
</body>

</html>


<?php 
require_once('layouts/footer.php');
?>
<!-- footer -->
