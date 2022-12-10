
<?php
    

    $title = 'Quan Li Phan Hoi';
    $baseUrl = '../';
    require_once'..\layouts\header.php';

    $sql = "select * from feedback order by status asc,updated_at desc";
    $data = executeResult($sql);

?>

<div class="row">
  <div class="col-md-12 table-responsive">
    <h1>Quan Li Phan Hoi</h1>

    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th>STT</th>
          <th>Tên</th>
          <th>họ</th>
          <th>SĐT</th>
          <th>Email</th>
          <th>Chu De</th>
          <th>Noi Dung</th>
          <th>Ngay Tao</th>
          <th style="width: 50px;"></th>
        </tr>
      </thead>
<tbody>
  <?php
  $index = 0;
foreach ($data as $item) {
  echo '<tr>
          <th>'.(++$index).'</th>
          <th>'.$item['firstname'].'</th>
          <th>'.$item['lastname'].'</th>
          <th>'.$item['phone_number'].'</th>
          <th>'.$item['email'].'</th>
          <th>'.$item['subject_name'].'</th>
          <th>'.$item['note'].'</th>
           <th>'.$item['updated_at'].'</th>
          
          <th style="width: 50px">';
                    if($item['status'] ==0){
            echo '<button onclick="markRead('.$item['id'].')" class="btn btn-danger">Seen</button>';
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
     require_once'..\layouts\footer.php';
 ?>