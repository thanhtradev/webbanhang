<?php
    session_start();

    require_once($baseUrl.'..\utils\utility.php');
    require_once($baseUrl.'..\database\dbhelper.php');
    

    $user = getUserToken();
    if($user == null){
      header('Location: '.$$baseUrl.'authen/login.php');
      die();
    }

  ?>

<!DOCTYPE html>
<html>
<head>
  <title><?=$title?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,
  initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="https://gokisoft.com/uploads/2021/03/s-568-ico-web.jpg" />

  <!--Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylEsheet" type="text/css" href="<?=$baseUrl?>..\assets\css\dashboard.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

 <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>

	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <form class="form-inline">
    <a class="navbar-brand" href="#">Trang Quản Trị</a>
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-success" type="submit">Search</button>
  </form>
</nav>

   <div class="container-fluid">
    <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column"> 

          <li class="nav-item">
            <a  class="nav-link" href="<?=$baseUrl?>dashboard">
              <i class="bi bi-house-fill"></i>
              Trang Chủ
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?=$baseUrl?>category">
              <i class="bi bi-folder"></i>
              Danh mục
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=$baseUrl?>product">
              <i class="bi bi-file-earmark-text"></i>
              Sản Phẩm
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=$baseUrl?>order">
              <i class="bi bi-minecart"></i>
              Đơn Hàng
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=$baseUrl?>feedback">
              <i class="bi bi-question-circle-fill"></i>
              Phản Hồi
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=$baseUrl?>user">
              <i class="bi bi-people-fill"></i>
              Người Dùng
            </a>
          </li>
        </ul>
    </div>
  </nav>

   <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
   	<!-- hien thi chuc nang cua trang quan tri Start-->