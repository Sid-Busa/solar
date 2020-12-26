<?php
	include '../model/sub_product.php';
	$objProduct = new SubProduct();
	extract($_GET);
	if($objProduct->deleteSubProduct($id))
	{
		header("location:../view/listSubProducts.php");
	}
?>