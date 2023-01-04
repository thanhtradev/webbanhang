
<?php
    require_once('.\utils\utility.php');
    require_once('.\database\dbhelper.php');

$message = "Cập nhật tài khoản thành công";

if(!empty($_POST)){
	$fullname = getPost('fullname');
	$email = getPost('email');
    $phone_number = getPost('phone_number');
    $address= getPost('address');

    $userId = getPost('id');
     
 
    		$sql="update User set fullname = '$fullname', email = '$email',phone_number = '$phone_number', address = '$address' where id ='$userId'";
    		execute($sql);
            echo "<script>alert('$message');</script>";
            header('Location: tree_profile.php');
    		die();
    	
    
}


?>

