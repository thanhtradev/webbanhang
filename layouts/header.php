    <?php
        session_start();

        require_once('utils\utility.php');
        require_once('database\dbhelper.php');

        $sql = "select * from category";
        $menuItems = executeResult($sql);

        $sql = "select product.*, category.name as category_name from product left join category on product.category_id = category.id order by product.updated_at desc limit 0,8";
        $lastestItems = executeResult($sql);
        
      ?>

    <!DOCTYPE html>
    <html>
    <head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>Trang Chủ</title>
    	<link rel="shortcut icon" href="https://t004.gokisoft.com/uploads/2021/07/1-s-1637-ico-web.jpg">

    	<!--Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

     <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

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
        	.nav li {
        		text-transform: uppercase;
        		color: red;
        	}
        	.carousel-inner img{
        		height: 550px;
        		width: 100%;
        	}
        	.product-item:hover{
             background-color: #e8e8e8;
             cursor: pointer;
             padding: 10px;
        	}
        	.bg-second {
        background-color: #f5f5f5;
    }
    .container {
        max-width: 1366px;
        margin: auto;
        padding: 0 20px;
        position: relative;
    }
    footer {
        padding: 100px 0;
    }
    .cart_icon{
        position: fixed;
        z-index: 999999;
        right: 0px;
        top: 85%;
    }
    .cart_icon img{
        width: 50px;
        height: 50px;
    }
    .cart_icon .cart_count{
    background-color: red;
    color: white;
    font-size: 16px;
    padding: 2px;
    border-radius: 8px;
    position: fixed;
    right: 35px;

    }
        </style>



    </head>
    <body>
    <!-- header -->
        <header>
            <!-- mobile menu -->
            <div class="mobile-menu bg-second">
                <a href="#" class="mb-logo">Shop Online</a>
                <span class="mb-menu-toggle" id="mb-menu-toggle">
                    <i class='bx bx-menu'></i>
                </span>
            </div>
            <!-- end mobile menu -->

            <!-- main header -->
            <div class="header-wrapper" id="header-wrapper">
                <span class="mb-menu-toggle mb-menu-close" id="mb-menu-close">
                    <i class='bx bx-x'></i>
                </span>
                <!-- top header -->
                <div class="bg-second">
                    <div class="top-header container">
                        <ul class="devided">
                            <li>
                                <a href="#">+840123456789</a>
                            </li>
                            <li>
                                <a href="#">shop123@mail.com</a>
                            </li>
                        </ul>
                        <ul class="devided">

                            <li class="dropdown">
                                <a href="">VIETNAMESE</a>
                                <i class='bx bxs-chevron-down'></i>
                                <ul class="dropdown-content">
                                    <li><a href="#">ENGLISH</a></li>
                                    <li><a href="#">JAPANESE</a></li>
                                    <li><a href="#">FRENCH</a></li>
                                    <li><a href="#">SPANISH</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Theo Dõi Đơn Hàng</a></li>
                        </ul>
                    </div>
                </div>
                <!-- end top header -->

    <?php
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    $count = 0;
    foreach($_SESSION['cart'] as $item){
        $count += $item['num'];
    }
    ?>
    <?php
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    $count = 0;
    foreach($_SESSION['cart'] as $item){
        $count += $item['num'];
    }
    ?>
                <!-- mid header -->
                <div class="bg-main">
                    <div class="mid-header container">
                        <a href="#" class="logo">Logo Shop</a>
                         <form method="get" action="search.php">
                        <div class="search">
                                <input type="text" placeholder="Search" name="tukhoa">
                                <button type="submit"><i class='bx bx-search-alt'></i></button>

                        </div>
                         </form>
                        <ul class="user-menu">
                            <li><a href="#"><i class='bx bxs-bell'></i></a>Thông báo</li>
                            <li><a href="login.php"><i class='bx bxs-user-circle'></i></a>Tài khoản</li>
                            <li><a href="cart.php"><i class='bx bxs-cart'></i></a>Giỏ Hàng(<?=$count?>)</li>
                        </ul>
                    </div>
                </div>
                <!-- end mid header -->
                
    <!-- bottom header -->
             <div class="bg-second">
                  <div class="bottom-header container">
                        <ul class="main-menu">
                            <li class="nav-item">
        <a class="nav-link" href="index.php">Trang Chủ</a>
      </li>

      <?php
      foreach($menuItems as $item){
        echo'
        <li class="nav-item">
        <a class="nav-link" href="category.php?id='.$item['id'].'">'.$item['name'].'</a>
        </li>';
      }
      ?>
      
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Liên Hệ - Phản Hồi</a>
      </li>
                        </ul>
                    </div>
                </div>
                <!-- end bottom header -->
            </div>
            <!-- end main header -->
        </header>
        <!-- end header -->