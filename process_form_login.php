<?php
    session_start();
    require_once('.\utils\utility.php');
    require_once('.\database\dbhelper.php');
    $fullname = $email = $msg = '';

if(!empty($_POST)){
	$email = getPost('email');
	$pwd = getPost('password');
	$pwd = getSecurityMD5($pwd);

	$sql = "select * from User where email = '$email' and password = '$pwd'";
	$userExist = executeResult($sql,true);


	if($userExist == null){
		$msg = 'Dang nhap khong thanh cong , vui long kiem tra lai email hoac mat khau';
	}else{
		//longin thanh cong
         $token = getSecurityMD5($userExist['email'].time());
         setcookie('token', $token,time() + 7 * 24 * 60 *60,'/');
         $created_at = date('Y-m-d H:i:s');

         $_SESSION['user'] = $userExist;


         $userId= $userExist['id'];
         $sql = "insert into Tokens (user_id , token , created_at)
         values ('$userId', '$token', '$created_at')";
         execute($sql);

		header('Location: tree_profile.php');
		die();
	}
}
?>