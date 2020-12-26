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
            <h1>Career</h1>
          </div>
        </div>
      </div>
    </div>

     <div class="callback-form contact-us" style="margin-top: 30px">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2> <em> CAREER</em></h2>
            </div>
          </div>
          <div class="col-md-12">
            <div class="contact-form">
              <form id="contact">
                <div class="row">
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required>
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="phone" type="text" class="form-control" id="phone"  placeholder="Phone" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="address" rows="6" class="form-control" id="address" placeholder="Your Address" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12" style="text-align: left;">
                    <p>Which Position(S) Are You Interested In? (Required)</p>
                  <div>
                    <div class="custom-control custom-radio mb-1">
                      <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="groupOfDefaultRadios" checked>
                      <label class="custom-control-label" for="defaultGroupExample1">Liasoning</label>
                    </div>
              
                    <div class="custom-control custom-radio mb-1">
                      <input type="radio" class="custom-control-input" id="defaultGroupExample2" name="groupOfDefaultRadios">
                      <label class="custom-control-label" for="defaultGroupExample2">Commercial</label>
                    </div>
              
                    <div class="custom-control custom-radio mb-1">
                      <input type="radio" class="custom-control-input" id="defaultGroupExample3" name="groupOfDefaultRadios">
                      <label class="custom-control-label" for="defaultGroupExample3"> HR & Admin</label>
                    </div>

                    <div class="custom-control custom-radio mb-1">
                      <input type="radio" class="custom-control-input" id="defaultGroupExample4" name="groupOfDefaultRadios">
                      <label class="custom-control-label" for="defaultGroupExample4"> Customer Support</label>
                    </div>

                    <div class="custom-control custom-radio mb-1">
                      <input type="radio" class="custom-control-input" id="defaultGroupExample5" name="groupOfDefaultRadios">
                      <label class="custom-control-label" for="defaultGroupExample5"> Technical Installation</label>
                    </div>

                    <div class="custom-control custom-radio mb-1">
                      <input type="radio" class="custom-control-input" id="defaultGroupExample6" name="groupOfDefaultRadios">
                      <label class="custom-control-label" for="defaultGroupExample7"> Designer</label>
                    </div>

                    <div class="custom-control custom-radio mb-1">
                      <input type="radio" class="custom-control-input" id="defaultGroupExample7" name="groupOfDefaultRadios">
                      <label class="custom-control-label" for="defaultGroupExample7"> Field Marketing </label>
                    </div>
                      
                    <div class="custom-control custom-radio mb-1">
                      <input type="radio" class="custom-control-input" id="defaultGroupExample8" name="groupOfDefaultRadios">
                      <label class="custom-control-label" for="defaultGroupExample8"> Others </label>
                    </div>  

                  </div>  
                  </div>
                    
                  <div class="col-lg-12" style="text-align: left;">
                    <p>Attach Your Resume (Required)</p>
                    <label for="myfile">Select a file:</label>
                      <input type="file" id="myfile" name="myfile" accept=".doc, .docx,.pdf" style="border:none;line-height: 32px">
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
