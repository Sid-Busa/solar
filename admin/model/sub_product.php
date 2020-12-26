<?php
    include_once("DBConfig.php");

    class SubProduct extends DBConfig 	{ 


        function addSubProduct($name,$image,$feature,$description,$id){
            $sql="INSERT INTO  sub_products (sub_id,sub_product_name,sub_product_image,sub_product_description,sub_product_features,main_product_id) VALUES (NULL,'$name','$image','$description','$feature','$id')";

            if(mysqli_query($this->con,$sql))   {
                return true;
            }else {
                return false;
            }
        }
        function getAllSubProduct(){
            $sql = "SELECT * from sub_products  ORDER BY s1.sub_id DESC ";
            $result = mysqli_query($this->con,$sql);
            $array=array();
            while($row = mysqli_fetch_assoc($result))
            {
                $array[]=$row;
            }
            return $array;
        }
        function getAllSubProductWithMain(){
            $sql = "select * from sub_products s1, main_products s2 where s1.main_product_id=s2.id ORDER BY s1.sub_id DESC ";
            $result = mysqli_query($this->con,$sql);
            $array=array();
            while($row = mysqli_fetch_assoc($result))
            {
                $array[]=$row;
            }
            return $array;
        }

        function getSubProductById($id){
            $sql = "SELECT * FROM sub_products WHERE sub_id = $id";
            $result = mysqli_query($this->con,$sql);
            if($row = mysqli_fetch_assoc($result)){
                return $row;
             }else{
                return false;
              }          
        }

        function deleteSubProduct($id){

            $sql="DELETE FROM  sub_products WHERE sub_id = $id";

            if(mysqli_query($this->con,$sql)){
                return true;
            }else {
                 return false;
            }
        }

        function updateSubProduct($id,$name,$pre_filename,$feature,$description,$main_product){
            $sql = "UPDATE sub_products SET sub_product_name='$name',sub_product_image = '$pre_filename',sub_product_description='$description',sub_product_features = '$feature',main_product_id='$main_product' WHERE sub_id = $id";        
            if(mysqli_query($this->con,$sql)){
                return true;
            }else{
                return false;
            }
         }    

         function getSubProduct_Based_on_mainProduct($id){
            $sql = "SELECT * FROM sub_products WHERE main_product_id = $id";
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