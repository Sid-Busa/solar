<?php
  session_start();
    if(!isset($_SESSION['name'])){     
        header("location: login.php");
        die();
    }
  include 'header.php';
  
?>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <?php
        include 'nav.php';
      ?>   
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <!-- partial -->
        <div class="main-panel" style="resize: both">
          <div class="content-wrapper">
            <div class="table-responsive">
           <table class="table table-hover">
              <thead>
                <tr>
                  <th>name</th>
                  <th>image</th>
                  <th>feature</th>
                  <th>desription</th>
                  <th>main product</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  include_once '../model/sub_product.php';
                  $objProduct = new SubProduct();
                  $result = $objProduct->getAllSubProductWithMain( );
                  foreach($result as $key=> $rowPhotos)
                  {
                ?>
                      <tr>
                        <td> <?php echo($rowPhotos['sub_product_name']) ?>  </td>
                        <td> <img src='../../client/assets/images/<?php echo($rowPhotos['sub_product_image']) ?>' style="width:90px;border-radius:0%;height:70px;" />   </td>
                          <td><textarea style="resize: both" rows="5"> <?php echo($rowPhotos['sub_product_features']) ?>    </textarea> </td>
                        <td> <textarea style="resize: both" rows="5"> <?php echo($rowPhotos['sub_product_description']) ?> </textarea>   </td>
                      
                        <td> <?php echo($rowPhotos['name']) ?>  </td>
                        <td> <a href="editSubProduct.php?id=<?php echo($rowPhotos['sub_id']) ?>"> Edit </a> </td>
                        <td> <a href="../controller/con_deleteSubProduct.php?id=<?php echo($rowPhotos['sub_id']) ?>"">Delete</a>  </td>
                      </tr>
                 <?php } ?>        
              </tbody>
            </table>
          </div>           
          </div>
        </div>  
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
 <?php
      include "footer.php";
 ?>      
