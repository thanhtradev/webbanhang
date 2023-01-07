<?php
require_once('layouts/header.php');



// Initial data
$category_list = executeResult("select * from category");


// Get data from url
$category_id = getGet('id');

$filter_price_max = getGet('maxprice');
$filter_price_min = getGet('minprice');



$filter_condition = '';
// Check if max price is not null
if ($filter_price_max != null && $filter_price_max != '') {
    $filter_condition = " and product.discount <= $filter_price_max";
}
// Add min price default is 0
if ($filter_price_min == null || $filter_price_min == '') {
    $filter_price_min = 0;
}
$filter_condition .= " and product.discount >= $filter_price_min";

// Check if category id is not null
if ($category_id != null && $category_id != '') {
    $filter_condition .= " and product.category_id = $category_id";
}
// Get data from database
$sql = "select product.*, category.name as category_name from product left join category on product.category_id = category.id where product.deleted = 0 $filter_condition order by product.updated_at desc limit 0,8";
$items = executeResult($sql);

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
                    <a href="./index.php">Trang Chủ></a>
                    
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
                                <h4>Bộ Lọc</h4>
                            </span>
                            <ul class="filter-list">
                                <?php
                                    foreach ($category_list as $item) {
                                        // Check if category is chosen
                                        if ($item['id'] == $category_id) {
                                            echo '<li><a href="./products.php?id=' . $item['id'] . '" class="active">' . $item['name'] . '</a></li>';
                                            continue;
                                        }
                                        echo '<li><a href="./products.php?id=' . $item['id'] . '">' . $item['name'] . '</a></li>';
                                    }
                                    ?>
                                    <li><a href="filter.php" class="active">Mới nhất</a></li>
                                    <li><a href="filter.php" class="active">Giá thấp nhất</a></li>
                                    <li><a href="filter.php" class="active">Giá cao nhất</a></li>

                            </ul>
                        </div>
                        
                        <div class="box">
                                <span class="filter-header">
                                    Khoảng Giá
                                </span>
                                <div class="price-range">
                                    <input type="number" id="filter_price_min" value="<?php echo $filter_price_min ?>">
                                    <span>-</span>
                                    <input type="number" id="filter_price_max" value="<?php echo $filter_price_max ?>">
                                </div>
                            </div>
                            <div class="box" style="text-align:center">
                                <button class="btn-flat btn-hover" id="filter_price_button">Áp dụng</button>

                                <!-- <ul class="filter-list">
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
                                </ul> -->
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
        <div class="container">
            <div class="row" id="product">
             <?php
             if(isset($_GET['tukhoa'])){
            $tukhoa = $_GET['tukhoa'];
          }else{
            $tukhoa = '';
          }
         $sql = "select * from product where title like '%".$tukhoa."%'";
         $items = executeResult($sql);

  foreach($items as $item){
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
</div>
    <!-- end products content -->

</body>
</html>
<script type="text/javascript">
    let product_list = document.querySelector('#products')


    document.querySelector('#filter_price_button').addEventListener('click', () => {
        // Get product id from url 
        let url = new URL(window.location.href)
        let product_id = url.searchParams.get('id')
        // Get min and max price
        let min_price = document.querySelector('#filter_price_min').value
        let max_price = document.querySelector('#filter_price_max').value

        let redirect_url = `./products.php?`;
        if (product_id) {
            redirect_url += `id=${product_id}`
        }
        if (min_price != 0) {
            redirect_url += `&minprice=${min_price}`
        }
        if (max_price) {
            redirect_url += `&maxprice=${max_price}`
        }
        window.location.href = redirect_url
    })


    let filter_col = document.querySelector('#filter-col')

    document.querySelector('#filter-toggle').addEventListener('click', () => filter_col.classList.toggle('active'))

    document.querySelector('#filter-close').addEventListener('click', () => filter_col.classList.toggle('active'))
    </script>




<?php 
require_once('layouts/footer.php');
 ?>
<!-- footer -->
