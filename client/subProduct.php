<?php
  $activePage = "product";
  include 'header.php';
?>
<body>
      <?php
          include 'nav.php';
          $id= $_GET['id'];
          if(!$id){            
            die();
          }
          include_once '../admin/model/sub_product.php';
          $objSubProduct = new SubProduct;
          $SubProductresult = $objSubProduct->getSubProductById($id);
      ?>
    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1> <?php  echo($SubProductresult['sub_product_name']) ?> </h1>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="col-md-12 col-xs-12 col-sm-12 ">
        <h1 class="mt-5 mb-5" ><?php  echo($SubProductresult['sub_product_name']) ?></h1>
        <div  class="handle_subproduct_data">
          <p class="mb-5" > <?php  echo($SubProductresult['sub_product_description']);  ?></p>
          <img src="assets/images/<?php echo($SubProductresult['sub_product_image']) ?> " class="handle_subproduct_sub_data">  
        </div>
        
      </div>
    </div>

<?php
  include 'footer.php';
?>
