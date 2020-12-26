<?php
    include_once("DBConfig.php");

    class Product extends DBConfig 	{ 


        function addProduct($name,$image,$title,$description){
            $sql="INSERT INTO  main_products (id,name,title,description,image) VALUES (NULL,'$name','$title','$description','$image')";
            if(mysqli_query($this->con,$sql))   {
                return true;
            }else {
                return false;
            }
        }

        function getAllProductAcending(){
            $sql = "SELECT * FROM main_products  ";
            $result = mysqli_query($this->con,$sql);
            $array=array();
            while($row = mysqli_fetch_assoc($result))
            {
                $array[]=$row;
            }
            return $array;
        }

        function getAllProduct(){
            $sql = "SELECT * FROM main_products ORDER BY id DESC ";
            $result = mysqli_query($this->con,$sql);
            $array=array();
            while($row = mysqli_fetch_assoc($result))
            {
                $array[]=$row;
            }
            return $array;
        }

        function deleteProduct($id){

            $sql="DELETE FROM  main_products WHERE id = $id";

            if(mysqli_query($this->con,$sql)){
                return true;
            }else {
                 return false;
            }
        }

        function getProductById($id){
            $sql = "SELECT * FROM main_products WHERE id = $id";
            $result = mysqli_query($this->con,$sql);
            if($row = mysqli_fetch_assoc($result)){
                return $row;
             }else{
                return false;
              }          
        }

        function updateImage($id,$name,$image,$title,$description){
            $sql = "UPDATE main_products SET name='$name', Image = '$image',title = '$title',description='$description' WHERE id = $id";        
            if(mysqli_query($this->con,$sql)){
                return true;
            }else{
                return false;
            }
         }


    	function getImage($currentPageNo){
            $no_of_records_per_page = 10;
            $offset = ($currentPageNo-1) * $no_of_records_per_page;
    		$sql = "SELECT * FROM preweddingfilm ORDER BY preweddingFilmID DESC LIMIT $offset,$no_of_records_per_page";
		    $result = mysqli_query($this->con,$sql);
		    $array=array();
		    while($row = mysqli_fetch_assoc($result))
		    {
		        $array[]=$row;
		    }
		  	return $array;
    	}

        function getTotalImages(){  
            $sql = "SELECT * FROM preweddingfilm";
            $result = mysqli_query($this->con,$sql);
            if($result){
                $row = mysqli_num_rows($result); 
                return $row; 
            }else{
                  return false; 
               } 
        }
        

    }	

?>