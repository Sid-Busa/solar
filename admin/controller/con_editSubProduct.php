<?php
	if(isset($_POST['cancel']))
	{
		header("location: ../view/listSubProducts.php ");
		die();
	}
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		include_once '../model/sub_product.php';
		$objProduct = new SubProduct();
		 extract($_POST);
		// print_r($_POST);
		// print_r($_FILES);
		// die();
		if($_FILES['img']['name'][0]){
			$Image_name = $_FILES['img']['name'][0];
			$avatar_extension =pathinfo($Image_name,PATHINFO_EXTENSION);
			$final_name = pathinfo($Image_name,PATHINFO_FILENAME);
			$database_name = $final_name."_".date("mjYHis").".".$avatar_extension;
			$finalPath = '../../client/assets/images/'.$database_name;	
			if(move_uploaded_file($_FILES['img']['tmp_name'][0], $finalPath)){
				if($objProduct->updateSubProduct($id,$name,$database_name,$feature,$description,$main_product)){
					header('location:../view/listSubProducts.php');
					exit;
				}else{	
					header('location:../view/error.html');
				}
			}
			}else{
				if($objProduct->updateSubProduct($id,$name,$pre_filename,$feature,$description,$main_product)){
					header('location:../view/listSubProducts.php');
					exit;
				}else{	
					header('location:../view/error.html');
				}
			}
		die();
		

	}else{
		header('location:../view/login.php');
	}

	

?>