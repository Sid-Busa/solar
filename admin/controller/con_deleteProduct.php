<?php
	include '../model/product.php';
	$objProduct = new Product();
	extract($_GET);
	if($objProduct->deleteProduct($id))
	{
		header("location:../view/listProducts.php");
	}
?>