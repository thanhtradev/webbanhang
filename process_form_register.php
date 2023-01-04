
<?php
    require_once('.\utils\utility.php');
    require_once('.\database\dbhelper.php');

$fullname = $email = $msg = '';

if(!empty($_POST)){
	$fullname = getPost('fullname');
	$email = getPost('email');
	$pwd = getPost('password');

    //validate
    if(empty($fullname) || empty($email) || empty($pwd) || strlen($pwd) <6){

    }else{
    	//validate thanh cong
    	$userExist = executeResult("select* from User where email = '$email' ",true);
    	if($userExist != null){
    		$msg = 'Email da duoc dang ky tren he thong';
    	}else{
             $created_at = $updated_at = date('Y-m-d H:i:s');
             $pwd = getSecurityMD5($pwd);


    		$sql="insert into User(fullname,email,password,role_id,created_at,updated_at,deleted) values(
    		'$fullname','$email','$pwd',3,'$created_at','$updated_at',0)";
    		execute($sql);
    		header('Location: login.php');
    		die();
    	}
    }

}

?>

