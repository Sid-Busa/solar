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
           
           <div class="row m-auto">
              <div class="col-md-8 grid-margin stretch-card">
                <div class="card justify-content-center">
                  <div class="card-body">
                    <h2 class="card-title text-center mt-4 mb-4">Add Main Product</h2>
                    <form class="forms-sample" autocomplete="off" action="../controller/con_addProduct.php" method="post" enctype="multipart/form-data">

                       <div class="form-group">
                        <label for="name">Product name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Product name" required>
                      </div>

                      <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image" >
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span>
                        </div>
                      </div>
                      
                    
                      <div class="form-group">
                        <label for="title">Product title</label>
                        <textarea class="form-control" name="title" id="title" placeholder="Product title" required> </textarea>
                      </div>

                      <div class="form-group">
                        <label for="desctiption">Product description</label>
                        <textarea class="form-control" name="description" id="desctiption" placeholder="Product description" rows="5" required></textarea>
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

