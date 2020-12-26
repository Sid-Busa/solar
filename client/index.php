<?php
  $activePage = "index";
  include 'header.php';
?>

  <body>
    <?php
      include 'nav.php';
    ?>  
    <!-- Banner Starts Here -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item item-1">
            <div class="img-fill">
                <div class="text-content">
                  <!-- <h6>we are ready to help you</h6>
                  <h4>Financial Analysis<br>&amp; Consulting</h4>
                  <p>This finance HTML template is 100% free of charge provided by TemplateMo for everyone. You can download, edit and use this layout for your business website.</p>
                  <a href="contact.html" class="filled-button">contact us</a> -->
                </div>
            </div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <div class="item item-2">
            <div class="img-fill">
                <div class="text-content">
                  
                </div>
            </div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <div class="item item-3">
            <div class="img-fill">
                <div class="text-content">
                  
                </div>
            </div>
          </div>
          <!-- // Item -->
        </div>
    </div>
    <!-- Banner Ends Here -->
      <div class="fun-facts">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="left-content" data-aos="zoom-in">
              <h2>Our solutions for your <em>business growth</em></h2>
              <span style="color: #ffe66c">Expert Engineering, best procurement and timely project execution are our focus areas.</span>
              <p style="font-size: 16px">Green Earth solar energy was established in order to supply alternative energy solutions for its customers. We minimize risk and provide comprehensive support before and after sales. We accomplish this by virtue of our team of the most experienced and highly skilled employees. We design,built and commission with utmost sophistication and providers real time operational support and maintain to large scale solar power plant.
              Our professional workforce focuses on the design and construction of each individual project. Our design team ensure a robust and sustainable design for proper project execution. We focus on solutions that increase the economic returns of solar energy while reducing its ecologic. We develop, plan, build and operate utility scale, commercial and industrial plants.</p>
              <a href="about" class="filled-button">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="what-we-do">
      <div class="main-data-about-what-do">
        <div class="child-data-about-what-do">
          <h2>WHAT WE DO?</h2>
          <p>As govt. channel partner of GUNVL, we do provide subsidies on residential projects.</p>
          <p>We provide complete Design, Engineering & Construction service for Residential, Commercial & Industrial Solar Projects!</p>
        </div>
        <div class="child-data-about-what-do what-do-with-image" >
          <img src="https://heavensolarenergy.com/wp-content/uploads/2019/11/research.svg" alt="solar engineering design">
          <h2>SOLAR ENGINEERING DESIGN</h2>
          <p>Before we Install solar power plant we do site survey, and provide complete 3D design with shadow analysis.  </p>
        </div>
        <div class="child-data-about-what-do what-do-with-image">
          <img src="https://heavensolarenergy.com/wp-content/uploads/2019/11/opportunity.svg" alt="solar benefits">
          <h2>ON-GRID SOLAR BENIFITS</h2>
          <p>We provide complete detailed knowledge about current policy of govt. Also we explain benefits of solar in detail.</p>
        </div>
        <div class="child-data-about-what-do what-do-with-image">
          <img src="https://heavensolarenergy.com/wp-content/uploads/2019/11/startup.svg" alt="solar solution">
          <h2>COMPLETE SOLAR SOLUTION</h2>
          <p>We provide complete solution of solar power plant design, planning, documentation & installation.</p>
        </div>
      </div>
    </section>



    <div class="services">
      <div class="container">
        <div class="col-md-12">
            <div class="section-heading">
              <h2>POPULAR PRODUCTS</h2>
            </div>
          </div>
        <div class="row">
          
          <?php
             $count = 0;
            foreach ($result as $key => $rowData)
              {   
              
          ?>
          <div class="col-md-6 mb-4" data-aos="flip-right" >
            <div class="service-item">
              <img src="assets/images/<?php echo($rowData['image']) ?> " alt=""  data-aos="zoom-in-up" class="images_height_set" >
              <div class="down-content">
                <a href=""><h4 style="color:#a4c639" ><?php echo($rowData['name'])  ?></h4></a>
                <div class="main_product_title">
                  <p><?php echo($rowData['title'])  ?></p>
                </div >
                <a href="" class="filled-button">Read More</a>
              </div>
            </div>
          </div>
          <?php
            }
          ?> 
        </div>
        <h2 class="mt-5 mb-5">Project</h2>
        <div class="row">
          
          <div class="col-md-4" style="margin-bottom: 15%">
             <a href="projectSetup"> <div class="product_images_for_well_design">
              <img src="assets/images/about-image.jpg" width="100%" height="200" style="border-radius: 10px" />
              <div class="product_images_for_sub_well_design">
                <h5 class="content_product_images_for_sub_well_design">11 KW SOLAR</h5>
                <i class="fa fa-angle-right icon_position" style="font-size:24px"></i>
              </div>
            </div></a>
          </div>

          <div class="col-md-4" style="margin-bottom: 15%">
            <a href="projectSetup"><div class="product_images_for_well_design">
              <img src="assets/images/about-image.jpg" width="100%" height="200" style="border-radius: 10px" />
              <div class="product_images_for_sub_well_design">
                <h5 class="content_product_images_for_sub_well_design">11 KW SOLAR</h5>
                <i class="fa fa-angle-right icon_position" style="font-size:24px"></i>
              </div>
            </div></a>
          </div>

          <div class="col-md-4" style="margin-bottom: 15%">
            <a href="projectSetup"><div class="product_images_for_well_design">
              <img src="assets/images/about-image.jpg" width="100%" height="200" style="border-radius: 10px" />
              <div class="product_images_for_sub_well_design">
                <h5 class="content_product_images_for_sub_well_design">11 KW SOLAR</h5>
                <i class="fa fa-angle-right icon_position" style="font-size:24px"></i>
              </div>
            </div>
            </a>
          </div>
        </div>           
      </div>
    </div>
      <div class="testimonials">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>What they say <em>about us</em></h2>
              <span>testimonials from our greatest clients</span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-testimonials owl-carousel">
              
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>David Wood</h4>
                  <p style="margin:10px 0px">"I installed solar rooftop system of 9.7 KW at my home from Green Earth solar. The service provided by Green Earth solar has been excellent. I strongly recommend to my friends and family, That if you want to install best solar power plant than it should be from Green Earth Solar Only."</p>
                </div>
                <img src="https://image.ibb.co/kL6AES/Top_SA_Nicky_Oppenheimer.jpg" alt="">
              </div>
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>Andrew Boom</h4>
                  <p>" Green Earth Solar worked hard before the project to come up with a solution that met our requirements. The process they follows is best for any customer The team was helpful and efficient throughout the installation and commission. Thank You Niravbhai and Team Heaven to help us for making our light bill zero."</p>
                </div>
                <img src="https://image.ibb.co/cNP817/pexels_photo_220453.jpg" alt="">
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>

    <section>
      <div class="happy-client-section">
        <div class="child-happy-client-section">
          <img src="https://heavensolarenergy.com/wp-content/uploads/2019/11/project.svg" alt='solar installation'>
          <h2>2,000</h2>
          <p>KW Solar Installation</p>
        </div>
        <div class="child-happy-client-section">
           <img src="https://heavensolarenergy.com/wp-content/uploads/2019/11/smile.svg" alt='solar installation'>
          <h2>300+</h2>
          <p>Happy Clients</p>
        </div>
        <div class="child-happy-client-section">
           <img src="https://heavensolarenergy.com/wp-content/uploads/2019/11/teamwork.svg" alt='solar installation'>
          <h2>17</h2>
          <p>Team Members</p>
        </div>
      </div>
    </section>

    <section class="client" style="margin : 40px 0px">
      <div class="container">
      <h2>Our  Partners</h2>
       <section class="customer-logos slider">
          <div class="slide"><img src="assets/images/Branding_logo/adani_branding_logo.png"></div>
          <div class="slide"><img src="assets/images/Branding_logo/e_link_branding_logo.jpg"></div>
          <div class="slide"><img src="assets/images/Branding_logo/eaton_branding_logo.jpg"></div>
          <div class="slide"><img src="assets/images/Branding_logo/goldi_branding_logo.png"></div>
          <div class="slide"><img src="assets/images/Branding_logo/jakson_branding_logo.jpg"></div>
          <div class="slide"><img src="assets/images/Branding_logo/kstart_branding_logo.jpg"></div>
          <div class="slide"><img src="assets/images/Branding_logo/luminous_branding_logo.png"></div>
          <div class="slide"><img src="assets/images/Branding_logo/pahal_branding_logo.png"></div>
          <div class="slide"><img src="assets/images/Branding_logo/polycab_branding_logo.png"></div>
          <div class="slide"><img src="assets/images/Branding_logo/rayzon_branding_logo.png"></div>
          <div class="slide"><img src="assets/images/Branding_logo/renewsys_branding_logo.png"></div>
          <div class="slide"><img src="assets/images/Branding_logo/rr_branding_logo.jpg"></div>
          <div class="slide"><img src="assets/images/Branding_logo/rr_branding_logo.png"></div>
          <div class="slide"><img src="assets/images/Branding_logo/sofar_branding_logo.png"></div>
          <div class="slide"><img src="assets/images/Branding_logo/solis_branding_logo.png"></div>
          <div class="slide"><img src="assets/images/Branding_logo/waaree_branding_logo.jpg"></div>
       </section>
    </div>
    </section>

<?php
  include 'footer.php';
?>

  