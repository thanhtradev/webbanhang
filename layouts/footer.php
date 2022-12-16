<footer class="bg-second">
        <div class="container">
            <div class="row">
                <div class="col-3 col-md-6">
                    <h5 class="footer-head">Hỗ trợ khách hàng</h5>
                    <ul class="menu">
                        <li><a href="#">Chính sách khách hàng</a></li>
                        <li><a href="#">Chính sách đổi trả</a></li>
                        <li><a href="#">Chính sách bảo hành</a></li>
                        <li><a href="#">Chính sách dành cho khách hàng thiết</a></li>
                        <li><a href="#">Chính sách giao hàng</a></li>
                        <li><a href="#">Chính sách bảo mật</a></li>
                        <li><a href="#">Các câu hỏi thường gặp</a></li>

                    </ul>
                </div>
                <div class="col-3 col-md-6">
                    <h5 class="footer-head">Về chúng tôi</h5>
                    <ul class="menu">
                        <li><a href="#">Giới thiệu</a></li>
                        <li><a href="#">Hệ thống cửa hàng</a></li>
                        <li><a href="#">Hợp tác kinh doanh</a></li>
                    </ul>
                </div>
                <div class="col-3 col-md-6">
                    <h3 class="footer-head">Cơ hội nghề nghiệp</h3>
                    <ul class="menu">
                        <li><a href="#">Tuyển dụng</a></li>
                    </ul>
                </div>
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="contact">
                        <h3 class="contact-header">
                            Shop Thời Trang Nam Nữ
                        </h3>
                        <ul class="contact-socials">
                            <li><a href="#">
                                    <i class='bx bxl-facebook-circle'></i>
                                </a></li>
                            <li><a href="#">
                                    <i class='bx bxl-instagram-alt'></i>
                                </a></li>
                            <li><a href="#">
                                    <i class='bx bxl-youtube'></i>
                                </a></li>
                            <li><a href="#">
                                    <i class='bx bxl-twitter'></i>
                                </a></li>
                        </ul>
                    </div>
                    <div class="subscribe">
                        <input type="email" placeholder="ENTER YOUR EMAIL">
                        <button>Theo Dõi Chúng Tôi</button>
                    </div>
                </div>
            </div>
        </div>
    </footer>    
<!-- end footer -->

<?php
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
$count = 0;
foreach($_SESSION['cart'] as $item){
    $count += $item['num'];
}
?>

<script type="text/javascript">
    function addCart(productId,num) {
        $.post('api/ajax_request.php', {
            'action': 'cart',
          'id':productId,
          'num': num
        } , function(data){
          location.reload()
        })
    }
</script>


<!--Cart start-->
<span class="cart_icon">
    <span class="cart_count"><?=$count?></span>
    <a href="cart.php" ><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAAAAXNSR0IArs4c6QAAAWdJREFUSEvFlL0uRFEUhb95AioFkyBR6CRMj4SeQo1CJzEPIEGhp9Bo0GroSdBpBE+AgkJjvIGsyb6Te2/mzJyfmXG6m7vX/s7aP6fCgE5lQBz+BXQEzJjDe+AYaPTKcd6Rks/nEl8Dq/0AbQATwDCwY4BJ4L0XMFePXqyMKl+9nyC5O7MerSSAfgFd2jl1Kp9KNpQAyaTN8ncab01h1qtYnhyp741OIAW8xRJMdwGoDV0XtjzyodxFQDm6gjQIV6HZLf7Dytb89HmCNBTjEbADYD/T+YAUvBcBKiy7D0ij/hMIegAW8hofkOLPgfUA2KZpWhJfkG535wlq7U6MI2nUq0I5HGAtul7+wvF1lInmgCcHQM+Vlvy13f8Q0A2wBDwDs6Vk08CjvY0nwHaso1HgMyeulZxtAaf2/wsYiwVJdwmsAbfAcilR1YZlCjgEdlNA0sqZbuw6I8B3ao88p7t9WMgwJIH+AEVdNRsonDmPAAAAAElFTkSuQmCC"/></a>

</span>

<!--Cart end-->



<!--Danh Muc San Pham end -->

</body>
</html>