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
        include_once '../model/product.php';
        include_once '../model/sub_product.php';
        $objProduct1 = new Product();
        $result1 = $objProduct1->getAllProduct(); 
        $objProduct2 = new SubProduct();
        $id = $_GET['id'];
        $result2 = $objProduct2->getSubProductById($id);

      ?>   
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <!-- partial -->
        <div class="main-panel" style="resize: both">
          <div class="content-wrapper">
           
           <div class="row m-auto">
              <div class="col-md-8 grid-margin stretch-card">
                <div class="card justify-content-center">
                  <div class="card-body">
                    <h2 class="card-title text-center mt-4 mb-4">Edit Sub Product</h2>
                    <form class="forms-sample" autocomplete="off" action="../controller/con_editSubProduct.php" method="post" enctype="multipart/form-data">
                      <input type="hidden" name="id" value="<?php echo($result2['sub_id']) ?>">
                       <div class="form-group">
                        <label for="name">Sub Product name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Product name" value="<?php echo($result2['sub_product_name'])  ?>" required>
                      </div>
                      

                      <input type="hidden" name="pre_filename" value="<?php echo($result2['sub_product_image']) ?>">

                      <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info"  placeholder="Upload Image" value="<?php echo($result2['sub_product_image']) ?>" required>
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span>
                        </div>
                      </div>
                      
                  
                    
                      <div class="form-group">
                        <label for="feature">Sub Product Feature</label>
                        <textarea class="form-control" name="feature" id="feature" placeholder="Product feature" rows="3" style="resize: both" required> <?php echo($result2['sub_product_features']) ?> 
                        </textarea>
                      </div>

                      <div class="form-group">
                        <label for="desctiption">Sub Product description</label>
                        <textarea class="form-control" name="description" id="desctiption" placeholder="Product description" rows="5" style="resize: both" required=>
                          <?php echo($result2['sub_product_description']) ?> 
                        </textarea>
                      </div>

                      <div class="form-group">
                      <label for="exampleFormControlSelect1">Select Main Product</label>
                      <select class="form-control form-control-lg" name="main_product" id="exampleFormControlSelect1">
                        <?php 
                          foreach($result1 as $key=> $rowPhotos)
                          {  
                        ?>
                           <option value="<?php echo($rowPhotos['id']) ?>" 
                            <?php if($rowPhotos['id'] === $result2['main_product_id'] ) {
                              echo 'selected';
                            }

                             ?>><?php echo($rowPhotos['name']); ?></option>
                        <?php 
                          }  
                        ?>
                      </select>
                      </div>  

                     
                      <button type="submit" name="submit" class="btn btn-primary text-center m-auto">Submit</button>
                      <button class="btn btn-dark" name='cancel'>Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
           </div> 
           
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
 <?php
      include "footer.php";
 ?>      

