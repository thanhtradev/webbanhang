<?php
require_once('layouts/header.php');
?>

<<!DOCTYPE html>
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
</head>
<body>

 <!-- products content -->
<div class="row">
        <div class="col-md-3">
        <div class="bg-main">
        <div class="container">
            <div class="box">
                <div class="breadcumb">
                    <a href="./index.php">Trang Chủ ></a>
                    
                    <a href="./products.php">Tất cả</a>
                </div>
            </div>
            <div class="box">
                <div class="row">
                    <div class="col-12 filter-col" id="filter-col">
                        <div class="box filter-toggle-box">
                            <button class="btn-flat btn-hover" id="filter-close">close</button>
                        </div>
                        <div class="box">
                            <span class="filter-header">
                                Danh Mục
                            </span>
                            <ul class="filter-list">
                                <li><a href="#">Quần</a></li>
                                <li><a href="#">Áo</a></li>
                                <li><a href="#">Giày</a></li>
                                <li><a href="#">Phụ Kiện</a></li>
                            </ul>
                        </div>
                        
                        <div class="box">
                            <span class="filter-header">
                                Giá
                            </span>
                            <div class="price-range">
                                <input type="text">
                                <span>-</span>
                                <input type="text">
                            </div>
                        </div>
                        <div class="box">
                            <ul class="filter-list">
                                <li>
                                    <div class="group-checkbox">
                                        <input type="checkbox" id="status1">
                                        <label for="status1">
                                            Giá bán
                                            <i class='bx bx-check'></i>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="group-checkbox">
                                        <input type="checkbox" id="status2">
                                        <label for="status2">
                                            Trong kho
                                            <i class='bx bx-check'></i>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="group-checkbox">
                                        <input type="checkbox" id="status3">
                                        <label for="status3">
                                            Đặc điểm
                                            <i class='bx bx-check'></i>
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="box">
                            <span class="filter-header">
                                Nhãn hàng
                            </span>
                            <ul class="filter-list">
                                <li>
                                    <div class="group-checkbox">
                                        <input type="checkbox" id="remember1" checked="checked">
                                        <label for="remember1">
                                            Nike
                                            <i class='bx bx-check'></i>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="group-checkbox">
                                        <input type="checkbox" id="remember2">
                                        <label for="remember2">
                                            Adidas
                                            <i class='bx bx-check'></i>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="group-checkbox">
                                        <input type="checkbox" id="remember3">
                                        <label for="remember3">
                                            Puma
                                            <i class='bx bx-check'></i>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="group-checkbox">
                                        <input type="checkbox" id="remember4">
                                        <label for="remember4">
                                            Lv
                                            <i class='bx bx-check'></i>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="group-checkbox">
                                        <input type="checkbox" id="remember5">
                                        <label for="remember5">
                                            Gucci
                                            <i class='bx bx-check'></i>
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="box">
                            <span class="filter-header">
                                Màu sắc
                            </span>
                            <ul class="filter-list">
                                <li>
                                    <div class="group-checkbox">
                                        <input type="checkbox" id="remember1">
                                        <label for="remember1">
                                            Đỏ
                                            <i class='bx bx-check'></i>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="group-checkbox">
                                        <input type="checkbox" id="remember2">
                                        <label for="remember2">
                                            Xanh
                                            <i class='bx bx-check'></i>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="group-checkbox">
                                        <input type="checkbox" id="remember3">
                                        <label for="remember3">
                                            Trắng
                                            <i class='bx bx-check'></i>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="group-checkbox">
                                        <input type="checkbox" id="remember4">
                                        <label for="remember4">
                                            Hồng
                                            <i class='bx bx-check'></i>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="group-checkbox">
                                        <input type="checkbox" id="remember5">
                                        <label for="remember5">
                                            Vàng
                                            <i class='bx bx-check'></i>
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="box">
                            <span class="filter-header">
                                Đánh giá
                            </span>
                            <ul class="filter-list">
                                <li>
                                    <div class="group-checkbox">
                                        <input type="checkbox" id="remember1">
                                        <label for="remember1">
                                            <span class="rating">
                                                <i class='bx bxs-star'></i>
                                                <i class='bx bxs-star'></i>
                                                <i class='bx bxs-star'></i>
                                                <i class='bx bxs-star'></i>
                                                <i class='bx bxs-star'></i>
                                            </span>
                                            <i class='bx bx-check'></i>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="group-checkbox">
                                        <input type="checkbox" id="remember1">
                                        <label for="remember1">
                                            <span class="rating">
                                                <i class='bx bxs-star'></i>
                                                <i class='bx bxs-star'></i>
                                                <i class='bx bxs-star'></i>
                                                <i class='bx bxs-star'></i>
                                                <i class='bx bx-star'></i>
                                            </span>
                                            <i class='bx bx-check'></i>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="group-checkbox">
                                        <input type="checkbox" id="remember1">
                                        <label for="remember1">
                                            <span class="rating">
                                                <i class='bx bxs-star'></i>
                                                <i class='bx bxs-star'></i>
                                                <i class='bx bxs-star'></i>
                                                <i class='bx bx-star'></i>
                                                <i class='bx bx-star'></i>
                                            </span>
                                            <i class='bx bx-check'></i>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="group-checkbox">
                                        <input type="checkbox" id="remember1">
                                        <label for="remember1">
                                            <span class="rating">
                                                <i class='bx bxs-star'></i>
                                                <i class='bx bxs-star'></i>
                                                <i class='bx bx-star'></i>
                                                <i class='bx bx-star'></i>
                                                <i class='bx bx-star'></i>
                                            </span>
                                            <i class='bx bx-check'></i>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="group-checkbox">
                                        <input type="checkbox" id="remember1">
                                        <label for="remember1">
                                            <span class="rating">
                                                <i class='bx bxs-star'></i>
                                                <i class='bx bx-star'></i>
                                                <i class='bx bx-star'></i>
                                                <i class='bx bx-star'></i>
                                                <i class='bx bx-star'></i>
                                            </span>
                                            <i class='bx bx-check'></i>
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="col-md-9">

        <div class="row">
         <?php
        if(isset($_GET['tukhoa'])){
            $tukhoa = $_GET['tukhoa'];
          }else{
            $tukhoa = '';
          }
         $sql = "select * from product where title like '%".$tukhoa."%'";
         $lastestItems = executeResult($sql);
    foreach($lastestItems as $item){
    echo '
    <div class="row">
    <div class="col-md-9 col-6 product-card">
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
        </div>
    </div>';
  }
  ?>
</div>
    </div>
</div>
    <!-- end products content -->

</body>
</html>





<?php 
require_once('layouts/footer.php');
 ?>
<!-- footer -->