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
                  <th>title</th>
                  <th>desription</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  include_once '../Model/product.php';
                  $objProduct = new Product();
                  $result = $objProduct->getAllProduct( );
                  foreach($result as $key=> $rowPhotos)
                  {
                   
                ?>
                      <tr>
                        <td > <?php echo($rowPhotos['name']) ?>  </td>
                        <td > <img src='../../client/assets/images/<?php echo($rowPhotos['image']) ?>' style="width:90px;border-radius:0%;height:70px;" />   </td>
                        <td> <textarea style="resize: both" rows="5"> <?php echo($rowPhotos['title']) ?> </textarea>   </td>
                        <td><textarea style="resize: both" rows="5"> <?php echo($rowPhotos['description']) ?>    </textarea> </td>
                        <td> <a href="editProduct.php?id=<?php echo($rowPhotos['id']) ?>"> Edit </a> </td>
                        <td> <a href="../controller/con_deleteProduct.php?id=<?php echo($rowPhotos['id']) ?>"">Delete</a>  </td>
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
