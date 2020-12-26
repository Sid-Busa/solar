<?php
  $activePage = "monitor";
  include 'header.php';
?>

  <body>
      <?php
          include 'nav.php';
      ?>
    <!-- Page Content -->
    <div class="page-heading-become-dealer header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Become a Dealer</h1>
          </div>
        </div>
      </div>
    </div>

     <div class="callback-form contact-us" style="margin-top: 30px">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2> <em> DEALERSHIP INFORMATION</em></h2>
            </div>
          </div>
          <div class="col-md-12">
            <div class="contact-form">
              <form id="contact" action="mail_becomeDealer.php" method="post">
                <div class="row">
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required>
                    </fieldset>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="Organization" type="text" class="form-control" id="organization" placeholder="Organization" required>
                    </fieldset>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="phone" type="text" class="form-control" id="phone"  placeholder="Phone" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="city" type="text" class="form-control" id="city"  placeholder="City" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="district" type="text" class="form-control" id="district"  placeholder="District" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="state" type="text" class="form-control" id="state"  placeholder="State" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="country" type="text" class="form-control" id="country"  placeholder="Country" required="">
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

<?php
  include 'footer.php';
?>
