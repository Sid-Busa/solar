<!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <div class="sub-header">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-xs-12">
            <ul class="left-info">
              <li><a href="#"><i class="fa fa-clock-o"></i>Mon-Fri 09:00-17:00</a></li>
              <li><a href="#"><i class="fa fa-phone"></i>+91 96246 16516</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="right-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="https://api.whatsapp.com/send?phone=+918000980047"><i class="fa fa-whatsapp"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <?php
      include_once '../admin/model/product.php';
      $objProduct = new Product;
      $result = $objProduct->getAllProductAcending();
    ?>
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="index"><h2 style="color:#a4c639">Green Earth Solar</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item <?php if($activePage === "index") { echo "active"; }  ?>">
                <a class="nav-link" href="index">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item  <?php if($activePage == "about") { echo "active"; }  ?>">
                <a class="nav-link" href="about">About Us</a>
              </li>
              <li class="nav-item dropdown <?php if($activePage == "product") { echo "active"; }  ?>">
                <a class="nav-link dropdown-toggle" href="#"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >  <span onclick="location.href = 'product';" >  Products</span> </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <?php foreach ($result as $key => $rowData) {
                      ?>
                    <a class="dropdown-item" href="mainProduct.php?id=<?php echo($rowData['id']) ?>"> <?php echo($rowData['name']) ?> </a>
                    <?php } ?>
                  </div>
              </li>
              <li class="nav-item dropdown <?php if($activePage == "monitor") { echo "active"; }  ?>">
                <a class="nav-link dropdown-toggle" href="#"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >  Resources  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="becomeDealer"> Become A Dealer </a>
                    <a class="dropdown-item" href="career">Career</a>
                    <a class="dropdown-item" href="contact">Contact Us</a>  
                  </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >  Monitoring  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="http://www.urenergyrooftopmonitoring.com" target="_blank"> Rooftop/EPC </a>
                    <a class="dropdown-item" href="http://www.urenergywatermonitoring.com" target="_blank"> PGVCL </a>  
                  </div>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    