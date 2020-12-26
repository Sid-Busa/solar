  <!-- Footer Starts Here -->
    <footer>  
      <div class="container">
        <div class="row"  >
           <div class="col-md-4 footer-item">
            <h4>Useful Links</h4>
            <ul class="menu-list">
              <li><a href="index">Home</a></li>
              <li><a href="about">About us</a></li>
              <li><a href="product">Products</a></li>
              <li><a href="becomeDealer">Become A Dealer</a></li>
              <li><a href="career">Careers</a></li>
              <li><a href="contact">Contact us</a></li>
              <li><a href="http://greenearthsolar.in/termsandconditions/">Privacy and Policy</a></li>
            </ul>
          </div>
          <div class="col-md-4 footer-item">
            <h4>Contact Info</h4>
            <p>
              Opp.Nilkanth Stationary, <br/>
              Nr.Swaminarayan Temple-(BAPS) <br />Bhavnagar Road<br/>Botad - 364710 <br/>
              +91 97230 76250<br />
              +91 96246 16516<br />
              greenearthsolar2015@gmail.com
            </p>
            <ul class="social-icons">
              <li><a rel="nofollow" href="https://fb.com/templatemo" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="https://api.whatsapp.com/send?phone=+918000980047"><i class="fa fa-whatsapp"></i></a></li>
            </ul>
          </div>

          <?php
            include_once '../admin/model/product.php';
            $objProduct = new Product;
            $result = $objProduct->getAllProductAcending();
          ?>

          <div class="col-md-4 footer-item">
            <h4>SOLAR ENERGY</h4>
            <ul class="menu-list">
              <?php foreach ($result as $key => $rowData) { ?>
              <li><a href="mainProduct.php?id=<?php echo($rowData['id']) ?>"><?php echo($rowData['name']) ?> </a></li>
            <?php } ?>
            </ul>
          </div>
         
        </div>
      </div>
    </footer>
    
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>Copyright &copy; 2020 <span id="footer_copy_right"> Green Earth Solar </span> </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script> 
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    $(function() {
          AOS.init();
     });
  </script>
  <script type="text/javascript">
    $('a[href=map]').click(function(event){
    $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 500);
    event.preventDefault();
});
  </script>
  
  <script type="text/javascript">
    $(function(){
    $("#big-image img:eq(0)").nextAll().hide();
    $(".small-images img").click(function(e){
        var index = $(this).index();
        $("#big-image img").eq(index).show().siblings().hide();
    });
});
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 4,
        slidesToScroll: 3,
        autoplay: true,
        autoplaySpeed: 500,
        arrows: false,
        dots: true,
        pauseOnHover: true,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
  </script>
  </body>
</html>