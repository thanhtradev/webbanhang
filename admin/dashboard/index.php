
<?php

    $title = 'Quan Li Phan Hoi';
    $baseUrl = '../';
    require_once'..\layouts\header.php';

    $sql = "select count(*) from user";
    $userItem = executeResult($sql,true);
    $countUser=0;
    foreach($userItem as $item){
      $countUser +=$item;
    }

    $countProduct=0;
    $sql = "select count(*) from product";
    $productItem = executeResult($sql,true);
    $count=0;
    foreach($productItem as $item){
    $countProduct += $item;
    }

    $countFeedbank =0;
    $sql = "select count(*) from feedback";
    $feedbackItem = executeResult($sql,true);
    foreach($feedbackItem as $item){
      $countFeedbank += $item;
    }
    

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DashBoard</title>
  <style type="text/css">
    .analytics{
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      grid-gap: 2rem;
      box-shadow: grey;
      padding: 1rem;
    }
    .analytic{
      padding: 1.5rem;
      border-radius: 10px;
      display: flex;
      justify-content: center;
      box-shadow: grey;
    }
  </style>
</head>
<body>
   <div class="container-fluid px-4">
     <div class="row g-3 my-2">
       <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
        <div>
          <div>
            <h3 class="fs-2">720</h3>
            <p class="fs-5">products</p>
          </div>
          <i class="fas fa-gift fs-1 primary-text border rounded-full secondary-bg p-e"></i>
        </div>
         
       </div>
     </div>
   </div>
</body>
</html>

<?php 
     require_once'..\layouts\footer.php';
 ?>

<!--  <div class="analytics">
    <div class="analytic">
      <div class="analytic-icon">
        <span class="las la-eye"></span>
      </div>
      <div class="analytic-info">
        <h4>Tổng số người dùng:</h4>
        <h2><?=$countUser?></h2>
      </div>
    </div>

    <div class="analytic">
      <div class="analytic-icon">
        <span class="las la-eye"></span>
      </div>
      <div class="analytic-info">
        <h4>Tổng số sản phẩm:</h4>
        <h2><?=$countProduct?></h2>
      </div>
    </div>

    <div class="analytic">
      <div class="analytic-icon">
        <span class="las la-eye"></span>
      </div>
      <div class="analytic-info">
        <h4>Tổng số phản hồi:</h4>
        <h2><?=$countFeedbank?></h2>
      </div>
    </div>
  </div> -->