<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	session_start();
	if($_POST['name']==='admin' && $_POST['pass'] == 'admin') {
		$_SESSION['name'] = $_POST['name'];
		$response = array('status' => true, 'message'=>'successfully login');
		echo json_encode($response);
		die();
	}else{
		$response = array('status' => false, 'message'=>'username or password is invalid');
		echo json_encode($response);
		die();		
	}
}else{
	header('location:../view/login.php');
}
	
?>