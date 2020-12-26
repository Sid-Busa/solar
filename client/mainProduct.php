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
          $result = $objProduct->getProductById($id);
      ?>
    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1> <?php  echo($result['name']) ?> </h1>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="col-md-12 col-xs-12 col-sm-12 ">
        <h1 class="mt-5 mb-5" ><?php  echo($result['name']) ?></h1>
        <p class="mb-5"><?php  echo($result['description']) ?></p>

        
        <?php 
            include_once '../admin/model/sub_product.php';
            $objSubProduct = new SubProduct;
            $SubProductresult = $objSubProduct->getSubProduct_Based_on_mainProduct($id);
        ?>
        <?php 
            if(count($SubProductresult) > 0){
            echo "<h2  class='mt-5 mb-5'> Our Products</h2>";
            }
        ?>
        <?php     
            foreach($SubProductresult as $key => $rowSubProduct) 
            {
        ?>
            <div class="col-md-6 mb-4" data-aos="flip-right" >
              <div class="service-item">
                <img src="assets/images/<?php echo($rowSubProduct['sub_product_image']) ?> " alt=""  data-aos="zoom-in-up" class="images_height_set" >
                  <div class="down-content">
                    <a href="subProduct.php?id=<?php echo($rowSubProduct['sub_id']) ?>"><h4 style="color:#a4c639;text-align: center;" ><?php echo($rowSubProduct['sub_product_name'])  ?></h4></a>
                  </div>
              </div>
            </div>

        <?php
            }
         ?>      
      </div>
    </div>

<?php
  include 'footer.php';
?>
