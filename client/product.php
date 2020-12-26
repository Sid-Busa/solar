<?php
  $activePage = "product";	 
  include 'header.php';
?>

  <body>
    <?php
      include 'nav.php';
    ?>  
     <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Products</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
    	<div class="col-md-12 col-xs-12 col-sm-12 ">
    	<h1 class="mt-5 mb-5" >Products</h1>
    	<p class="mb-5">Innovations being at the heart of our organization, the products we procure and use in commissioning of our projects are world class solar systems. We provide a wide variety of PV modules ideally suited for all types of installations ranging from residential, commercial to utility. Our professionally managed supply chain system enables us to deliver a complete quality controlled product and service throughout the entire commissioning end to end process. Smart energy solutions include packaged services throughout the entire solar power plant lifecycle from project development, design and engineering, system components procurement, balance of system optimization, and project construction management through operations and maintenance.</p>
    	
    	<h2  class="mt-5 mb-5"> Our Products</h2>
	    <div class="row">
	    	<?php
            foreach ($result as $key => $rowData)
              {
          ?>

          <div class="col-md-6 mb-4" data-aos="flip-right" >
            <div class="service-item">
              <img src="assets/images/<?php echo($rowData['image']) ?> " alt=""  data-aos="zoom-in-up" class="images_height_set" >
              <div class="down-content">
                <h4 class="text-center" style="cursor: pointer;"><?php echo($rowData['name'])  ?></h4>
              </div>
            </div>
          </div>
          <?php
            }
          ?>  
	        
	    </div>
	</div>
    </div>
    
<?php
  include 'footer.php';
?>
