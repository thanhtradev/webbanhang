
<?php
    

    $title = 'Quan Li Nguoi dung';
    $baseUrl = '../';
    require_once'..\layouts\header.php';

    $sql = "select user.*, role.name as role_name from user left join role on
    user.role_id = role.id where user.deleted = 0";
     $data = executeResult($sql);


?>

<div class="row">
  <div class="col-md-12 table-responsive">
    <h1>Quản Lí Người Dùng</h1>

    <a href="editor.php"><button class="btn btn-success">Thêm người dùng</button></a>

    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th>STT</th>
          <th>Họ và Tên</th>
          <th>Email</th>
          <th>SĐT</th>
          <th>Địa Chỉ</th>
          <th>Quyền</th>
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
          <th>'.$item['fullname'].'</th>
          <th>'.$item['email'].'</th>
          <th>'.$item['phone_number'].'</th>
          <th>'.$item['address'].'</th>
          <th>'.$item['role_name'].'</th>
          <th style="width: 50px;">
           <a href="editor.php?id='.$item['id'].'">
           <button class="btn btn-warning">Sửa</button>
           </a>
          </th>
          <th style="width: 50px">';
          if($user['id'] != $item['id'] && $item['role_id'] !=0){
         echo '<button onclick="deleteUser('.$item['id'].')" class="btn btn-danger">Xóa</button>';
         
          }
         echo '
          </th>
        </tr>';
}


  ?>


</tbody>


    </table>
    
  </div>
  
</div>

<script type="text/javascript">
  function deleteUser(id){

    option = confirm('Ban co chac muon xoa tai khoan nay khong?')
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