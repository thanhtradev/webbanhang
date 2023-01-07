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
.wrapper{
  margin-left:550px ;
  margin-top: 20px;
  margin-bottom: 20px;
  width: 680px;
  background: #fff;
  border-radius: 15px;

}
.wrapper .title{
  font-size: 35px;
  font-weight: 600;
  text-align: center;
  line-height: 100px;
  color: black;
  user-select: none;
  border-radius: 15px 15px 0 0;
  background: white;
}
.wrapper form{
  padding: 10px 30px 50px 30px;
}
.wrapper form .field{
  height: 50px;
  width: 100%;
  margin-top: 20px;
  position: relative;
}
.wrapper form .field input{
  height: 100%;
  width: 100%;
  outline: none;
  font-size: 17px;
  padding-left: 20px;
  border: 1px solid lightgrey;
  border-radius: 25px;
  transition: all 0.3s ease;
}
.wrapper form .field input:focus,
form .field input:valid{
  border-color: #4158d0;
}
.wrapper form .field label{
  position: absolute;
  top: 50%;
  left: 20px;
  color: #999999;
  font-weight: 400;
  font-size: 17px;
  pointer-events: none;
  transform: translateY(-50%);
  transition: all 0.3s ease;
}
form .field input:focus ~ label,
form .field input:valid ~ label{
  top: 0%;
  font-size: 16px;
  color: #4158d0;
  background: #fff;
  transform: translateY(-50%);
}
form .content{
  display: flex;
  width: 100%;
  height: 50px;
  font-size: 16px;
  align-items: center;
  justify-content: space-around;
}
form .content .checkbox{
  display: flex;
  align-items: center;
  justify-content: center;
}
form .content input{
  width: 15px;
  height: 15px;
  background: red;
}
form .content label{
  color: #262626;
  user-select: none;
  padding-left: 5px;
}
form .content .pass-link{
  color: "";
}
form .field input[type="submit"]{
  color: #fff;
  border: none;
  padding-left: 0;
  margin-top: -10px;
  font-size: 20px;
  font-weight: 500;
  cursor: pointer;
  background: black;
  transition: all 0.3s ease;
}
form .field input[type="submit"]:active{
  transform: scale(0.95);
}
form .signup-link{
  color: #262626;
  margin-top: 20px;
  text-align: center;
}
form .pass-link a,
form .signup-link a{
  color: #4158d0;
  text-decoration: none;
}
form .pass-link a:hover,
form .signup-link a:hover{
  text-decoration: underline;
}
.info{
  margin-top: 10px;
  margin-left: 20px;
}
.order{
  margin-top: 10px;
  margin-left: 40px;
}
.menu_info{
  margin-left: 20px;
  margin-top: 20px;
  color: grey;
}
.menu_order{
  margin-left: 40px;
  margin-top: 20px;
  color: grey;
}
    </style>
</head>

<body>
<div class="wrapper">
 <div class="title">
   Tài Khoản
 </div>
 <div class="user-menu">
   <div class="col-md-6">
     <h6 class="info">Thông Tin Tài Khoản</h6>
     <div class="menu_info">
     <a href="#"><p>Cấp độ khách hàng</p></a>
     <a href="#"><p>Điểm tích lũy</p></a>
     <a href="profile.php"><p>Thay đổi thông tin</p></a>
     <a href="#"><p>Thay đổi mật khẩu</p></a>
     <a href="#"><p>Đăng xuất</p></a>

     </div>
   </div>
   <div class="col-md-6">
     <h6 class="order">Thông Tin Đơn Hàng</h6>
     <div class="menu_order">
     <a href="#"><p>Sản phẩm yêu thích</p></a>
     <a href="history_order.php"><p>Lịch sử đơn hàng</p></a>
     
     </div>
   </div>
 </div>
</div>
</body>

</html>


<?php 
require_once('layouts/footer.php');
?>
<!-- footer -->
