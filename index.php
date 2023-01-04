<?php
require_once('layouts/header.php');


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
</head>
<body>

<!-- hero section -->
    <div class="hero">
        <div class="slider">
            <div class="container">

                <!-- slide item -->
                <div class="slide active">
                    <div class="info">
                        <div class="info-content">
                            <h3 class="top-down">
                                Áo Khoác Nữ
                            </h3>
                            <h2 class="top-down trans-delay-0-2">
                                Sản Phẩm Mới
                            </h2>
                            <p class="top-down trans-delay-0-4">
                                Thuộc dòng sản phẩm mới nhất 2022 của Shop123, Chunky S1 được thiết kế theo phong cách hầm hố, đường nét phá cách cùng logo SH nổi bật, dễ dàng phối đồ và thể hiện đa phong cách.
                            </p>
                            <div class="top-down trans-delay-0-6">
                                <button class="btn-flat btn-hover">
                                    <span>Mua Ngay</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="img top-down">
                        <img src="./assets/photos/top-shop-ban-ao-khoac-nu-dep-hcm-10.jpg" alt="">
                    </div>
                </div>
                <!-- end slide item -->

                <!-- slide item -->
                <div class="slide">
                    <div class="info">
                        <div class="info-content">
                            <h3 class="top-down">
                                Giày Nam
                            </h3>
                            <h2 class="top-down trans-delay-0-2">
                                Sản Phẩm Cũ
                            </h2>
                            <p class="top-down trans-delay-0-4">
                                Mặt trong được làm từ vải Mesh mềm mại, thoáng khí kết hợp cùng với đệm EVA ôm sát mang đến sự êm ái, thoải mái, đồng thời, bảo vệ bàn chân trong suốt quá trình di chuyển
                            </p>
                            <div class="top-down trans-delay-0-6">
                                <button class="btn-flat btn-hover">
                                    <span>Mua Ngay</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="img right-left">
                        <img src="./assets/photos/giaydeonam.jpg" alt="">
                    </div>
                </div>
                <!-- end slide item -->
                <!-- slide item -->
                <div class="slide">
                    <div class="info">
                        <div class="info-content">
                            <h3 class="top-down">
                                Balo 
                            </h3>
                            <h2 class="top-down trans-delay-0-2">
                                Sản Phẩm Hot
                            </h2>
                            <p class="top-down trans-delay-0-4">
                                Balo nữ da - một món đồ xu hướng mà bất kỳ bạn gái nào cũng muốn sở hữu. Những cặp sách chất liệu da không chỉ bền theo thời gian mà còn mang đến phong cách ấn tượng cho các cô nàng thích sự mới mẻ, cá tính
                            </p>
                            <div class="top-down trans-delay-0-6">
                                <button class="btn-flat btn-hover">
                                    <span>Mua Ngay</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="img left-right">
                        <img src="./assets/photos/balonu.jpg" alt="">
                    </div>
                </div>
                <!-- end slide item -->
            </div>
            <!-- slider controller -->
            <button class="slide-controll slide-next">
                <i class='bx bxs-chevron-right'></i>
            </button>
            <button class="slide-controll slide-prev">
                <i class='bx bxs-chevron-left'></i>
            </button>
            <!-- end slider controller -->
        </div>
    </div>
    <!-- end hero section -->

<!--San Pham Moi Nhat start-->

<div class="container">
  <div class="section-header">
                <h2>Sản Phẩm Mới</h2>
            </div>

<div class="row" style="margin-top: 50px;">
  <?php
  foreach($lastestItems as $item){
    echo '
    <div class="col-md-3 col-6 product-card">
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
        </div>';
  }
  ?>
</div>
 <div class="section-footer">
                <a href="./products.php" class="btn-flat btn-hover">Xem tất cả</a>
            </div>


</div>


<!--San Pham Moi Nhat end-->

<!-- special product -->
<?php
$num = 0;
$sql = "SELECT *, COUNT(product_id) AS product_count from order_details GROUP BY product_id ORDER BY product_count DESC LIMIT 1";
$product = executeResult($sql,true);
$num = $product['order_id'];

$sql = "select * from product where id = $num";
$product_count = executeResult($sql,true);
?>
 <div class="section-header">
                <h3>Sản Phẩm Nổi Bật</h2>
            </div>
    <div class="bg-second">
        <div class="section container">
            <div class="row">
                <div class="col-4 col-md-4">
                    <div class="sp-item-img">
                        <img src="<?=$product_count['thumbnail']?>" alt="">
                    </div>
                </div>
                <div class="col-7 col-md-8">
                    <div class="sp-item-info">
                        <div class="sp-item-name"><?=$product_count['title']?></div>
                        <p class="sp-item-description">
                            <?=$product_count['description']?>
                        </p>
                        <div class="section-footer">
                <a href="./products.php" class="btn-flat btn-hover">Xem tất cả</a>
            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end special product -->

<!--Danh Muc San Pham start-->
<?php
$count = 0;
foreach($menuItems as $item){

    $sql = "select product.*, category.name as category_name from product left join category on product.category_id = category.id where product.category_id = ".$item['id']." order by product.updated_at desc limit 0,4";
    $items = executeResult($sql);
    if ($items == null || count($items) <4 ) continue;

?>

<div  style="background-color: <?=($count++%2 ==0)?'white':''?>;">
<div class="container">

  <h1 style="text-align: center;margin-top: 30px;" ><?=$item['name']?></h1>

<div class="row" style="margin-top: 50px;">
  <?php
  foreach($items as $pItem){
    echo '
    <div class="col-md-3 col-6 product-card">
    <div class"product-card-img">
       <a href="detail.php?id='.$pItem['id'].'"><img src="'.$pItem['thumbnail'].'" style="height:380px; width: 400px"></a>
    </div>
       <div class="product-btn">
                                <button class="btn-flat btn-hover btn-shop-now">Mua Ngay</button>
                                <button onclick="addCart('.$pItem['id'].',1)" class="btn-flat btn-hover btn-cart-add">
                                    <i class="bx bxs-cart-add"></i>
                                </button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class="bx bxs-heart"></i>
                                </button>
                            </div>
                      
       
       <div class="product-card-name">
                                 <p>'.$pItem['title'].'</p>
                            </div>
                             <div class="product-card-price">
                                <span><del>'.number_format($pItem['price']).' VND</del></span>
                                <span class="curr-price">'.number_format($pItem['discount']).' VND</span>
                            </div>
        </div>';
  }
  ?>
</div>
</div>
</div>

<!--ket thuc danh sach-->

 <!-- blogs -->
    <!-- <div class="section">
        <div class="container">
            <div class="section-header">
                <h2>Đánh Giá Của Khách Hàng Về Sản Phẩm</h2>
            </div>
            <div class="blog">
                <div class="blog-img">
                    <img  style="height: 500px;" src="./assets/photos/aosomi.jpg" alt="">
                </div>
                <div class="blog-info">
                    <div class="blog-title">
                        Nguyễn Hoàng Long
                    </div>
                    <div class="blog-preview">
                        Rất cảm ơn bạn đã tin tưởng đặt sản phẩm của Shop mình và dành thời gian đánh giá sản phẩm. Hy vọng bạn sẽ luôn ủng hộ Shop trong những lần sau nhé!
                    </div>
                    <button href="contact.php" class="btn-flat btn-hover">Đọc Thêm</button>
                </div>
            </div>
            <div class="blog row-revere">
                <div class="blog-img">
                    <img style="height: 500px;" src="./assets/photos/vaynu.jpg" alt="">
                </div>
                <div class="blog-info">
                    <div class="blog-title">
                        Nguyễn Thị A
                    </div>
                    <div class="blog-preview">
                        Sản phẩm đẹp, chất lượng, tôi sẽ ủng hộ cho lần sau. Đánh giá 5 sao
                    </div>
                    <button href="contact.php" class="btn-flat btn-hover">Đọc thêm</button>
                </div>
            </div>
            <div class="section-footer">
                <a href="contact.php" class="btn-flat btn-hover">Xem tất cả</a>
            </div>
        </div>
    </div> -->
    <!-- end blogs -->

</body>
</html>
<script type="text/javascript">
  let slide_index = 0
let slide_play = true
let slides = document.querySelectorAll('.slide')

hideAllSlide = () => {
    slides.forEach(e => {
        e.classList.remove('active')
    })
}

showSlide = () => {
    hideAllSlide()
    slides[slide_index].classList.add('active')
}

nextSlide = () => slide_index = slide_index + 1 === slides.length ? 0 : slide_index + 1

prevSlide = () => slide_index = slide_index - 1 < 0 ? slides.length - 1 : slide_index - 1

// pause slide when hover slider

document.querySelector('.slider').addEventListener('mouseover', () => slide_play = false)

// enable slide when mouse leave out slider
document.querySelector('.slider').addEventListener('mouseleave', () => slide_play = true)

// slider controll

document.querySelector('.slide-next').addEventListener('click', () => {
    nextSlide()
    showSlide()
})

document.querySelector('.slide-prev').addEventListener('click', () => {
    prevSlide()
    showSlide()
})

showSlide()
</script>
 

<?php
}
?>
<?php 
require_once('layouts/footer.php');
 ?>
<!-- footer -->
