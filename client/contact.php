<?php
  $activePage = "monitor";
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
            <h1>Contact Us</h1>
            <span>feel free to send us a message now!</span>
          </div>
        </div>
      </div>
    </div>

    <div class="contact-information">
      <div class="container">
        <div class="row">
          <div class="col-md-4" data-aos="flip-left">
            <div class="contact-item">
              <i class="fa fa-phone"></i>
              <h4>Phone</h4>
              <p>Feel free to contact with this phone number</p>
              <a href="#">+91 96246 16516</a>
            </div>
          </div>
          <div class="col-md-4" data-aos="flip-left">
            <div class="contact-item">
              <i class="fa fa-envelope"></i>
              <h4>Email</h4>
              <p>Feel free to contact with this email address</p>
              <a href="#">greenearthsolar2015@gmail.com</a>
            </div>
          </div>
          <div class="col-md-4" data-aos="flip-left">
            <div class="contact-item">
              <i class="fa fa-map-marker"></i>
              <h4>Location</h4>
              <p>Nr.Swaminarayan Temple-(BAPS)<br>Bhavnagar Road,Botad - 364710</p>
              <a href="#map">View on Google Maps</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="callback-form contact-us">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Send us a <em>message</em></h2>
            </div>
          </div>
          <div class="col-md-12">
            <div class="contact-form">
              <form id="contact" action="mail_contactus.php" method="post">
                <div class="row">
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="phone" type="text" class="form-control" id="phone" placeholder="Phone" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">Submit</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="map">
    <!-- How to change your own map point
    	1. Go to Google Maps
    	2. Click on your location point
    	3. Click "Share" and choose "Embed map" tab
    	4. Copy only URL and paste it within the src="" field below
    --> 
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3749.440395935255!2d73.77830121439071!3d19.990023027800536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddeb0fc9a23dbf%3A0xfcf2da2617747c9e!2sCrystal%20Solar%20Power%20Pvt.%20Ltd.!5e0!3m2!1sen!2sus!4v1596339470222!5m2!1sen!2sus" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

    </div>

   


<?php
  include 'footer.php';
?>
