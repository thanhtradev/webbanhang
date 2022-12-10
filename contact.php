<?php
require_once('layouts/header.php');
if(!empty($_POST)){
	$first_name = getPost('firstname');
	$last_name = getPost('lastname');
	$email = getPost('email');
	$phone_number = getPost('phone_number');
	$subject_name = getPost('subject_name');
	$note = getPost('note');
	$created_at = $updated_at = date('Y-m-d H:i:s');

     $sql = "insert into feedback(firstname,lastname,email,phone_number,subject_name,note,status,created_at,updated_at) values('$first_name','$last_name','$email','$phone_number','$subject_name','$note',0,'$created_at','$updated_at')";
	execute($sql);
}

?>


<div class="container" style="margin-top: 20px; margin-bottom: 20px;">
<form method="post">
	<div class="row">
	<div class="col-md-6">
		         <div class="row">
		         	<div class="col-md-6">
		         		<div class="form-group">
				  <input required="true" type="text" class="form-control" id="usr" name="firstname" placeholder="Nhap ho">
				</div>
		         	</div>
		         	<div class="col-md-6">
		         		<div class="form-group">
				  <input required="true" type="text" class="form-control" id="usr" name="lastname" placeholder="Nhap ten">
				</div>
		         	</div>
		         	
		         </div>
				<div class="form-group">
				  <input required="true" type="email" class="form-control" id="email" name="email" placeholder="nhap email">
				</div>
				<div class="form-group">
				  <input required="true" type="tel" class="form-control" id="phone" name="phone_number" placeholder="Phone">
				</div>
				<div class="form-group">
				  <input required="true"  type="text" class="form-control" id="subject_name" name="subject_name" placeholder="chu de">
				</div>
				<div class="form-group">
				  <label for="address">Ghi Chu:</label>
				  <textarea class="form-control" rows="3" name="note"></textarea>
				</div>

	<a href="checkout.php"><button class="btn btn-warning">Gui phan hoi</button></a>
	 
		
	</div>
	<div class="col-md-6">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.2311711962047!2d106.80086541466902!3d10.870014160431912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527587e9ad5bf%3A0xafa66f9c8be3c91!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgVGjDtG5nIHRpbiAtIMSQSFFHIFRQLkhDTQ!5e0!3m2!1svi!2s!4v1670604270107!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
</div>
</form>
</div>

<?php 
require_once('layouts/footer.php');
 ?>
