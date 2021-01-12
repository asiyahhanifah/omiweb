<?php
    session_start();
    include 'conn.php';

    $sql = "SELECT * FROM users";

    $rows = mysqli_query($conn, $sql);
    $i = 0;
    mysqli_close($conn);

    include 'header.php';

?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <?php if ($_SESSION) : ?>
                <p class="navbar-nav ml-auto mr-4 mt-2 mt-lg-0"><?php echo $_SESSION['username']?></p>
                <a href="update.php" class="mr-4">Update</a> 
                <a href="logout.php">Logout</a>
            <?php else: ?>
                <ul class="navbar-nav ml-auto mr-4 mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="register.php">Register <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                </ul>
            <?php endif; ?>
        </div>
    </nav>
    <!-- ======= Intro Section ======= -->
<section id="intro" class="clearfix">
    <div class="container" data-aos="fade-up">

      <div class="intro-img" data-aos="zoom-out" data-aos-delay="200">
        <img src="assets/img/intro-img.svg" alt="" class="img-fluid">
      </div>

      <div class="intro-info" data-aos="zoom-in" data-aos-delay="100">
        <h2>We provide<br><span>solutions</span><br>for your business!</h2>
        <div>
          <a href="#about" class="btn-get-started scrollto">About Us</a>
          <a href="#contact" class="btn-services scrollto">Contact</a>
        </div>
      </div>

    </div>
  </section><!-- End Intro Section -->

  <main id="main">

<!-- ======= About Section ======= -->
<section id="about">
 <div class="container" data-aos="fade-up">

   <header class="section-header">
     <h3>About Us</h3>
   </header>

   <div class="row about-container">

     <div class="col-lg-6 content order-lg-1 order-2">
       <p>
         OwmisArt is an illustration commission website that helps commissioners who want to
          buy or collect art from illustrators
       </p>

       <h3>What We Can Do?</h3>

       <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
         <div class="icon"><i class="fa fa-shopping-bag"></i></div>
         <h4 class="title"><a href="">Facilitate Buying and Selling Illustration</a></h4>
         <p class="description">facilitate the buying and selling process of illustrations</p>
       </div>

       <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
         <div class="icon"><i class="fa fa-photo"></i></div>
         <h4 class="title"><a href="">Find the illustration as you wish</a></h4>
         <p class="description">makes it easy for the commissioner to find the illustration that suits him/her</p>
       </div>

       <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
         <div class="icon"><i class="fa fa-bar-chart"></i></div>
         <h4 class="title"><a href="">Improve illustrator's marketing</a></h4>
         <p class="description">Help to improve illustrator's art marketing with wider commission publication</p>
       </div>

     </div>

     <div class="col-lg-6 background order-lg-2" data-aos="zoom-in">
       <img src="assets/img/about-img.svg" class="img-fluid" alt="">
     </div>
   </div>

   <div class="row about-extra">
     <div class="col-lg-6" data-aos="fade-right">
       <img src="assets/img/about-extra-1.svg" class="img-fluid" alt="">
     </div>
     <div class="col-lg-6 pt-5 pt-lg-0" data-aos="fade-left">
       <h4>Commissioner</h4>
       <p>
         Nowadays we are dominated by the digital era, including art. Out there, there are many collectors and connoisseurs of art
         who want to buy illustration or art. However, unfortunately they only see very few illustrators or artists selling their art.
         In fact, if explored deeper, there are still artists or illustrators who open art-making or illustration services
       </p>
     </div>
   </div>

   <div class="row about-extra">
     <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
       <img src="assets/img/about-extra-2.svg" class="img-fluid" alt="">
     </div>

     <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-right">
       <h4>Illustrator or Artist</h4>
       <p>
         due to intense competition in the world of work. Now, many people start working as freelancers by making illustrations.
         Lots of these freelancer illustrators are starting to sell their illustrations and art. However, due to the lack of publicity
         in illustration marketing and their art, many illustrators stopped halfway, for that we took the initiative
         to accommodate these illustrators to market their art and illustrators on the OwmisArt website.
       </p>
       
     </div>

   </div>

 </div>
</section><!-- End About Section -->


<!-- ======= Why Us Section ======= -->
<section id="why-us">
 <div class="container" data-aos="fade-up">
   <header class="section-header">
     <h3>Why choose us?</h3>
   </header>

   <div class="row row-eq-height justify-content-center">

     <div class="col-lg-4 mb-4">
       <div class="card" data-aos="zoom-in" data-aos-delay="100">
       
         <div class="card-body">
           <h5 class="card-title">Increase your commission</h5>
           <p class="card-text">With owmisart, your sales commissions will increase much more</p>

         </div>
       </div>
     </div>

     <div class="col-lg-4 mb-4">
       <div class="card" data-aos="zoom-in" data-aos-delay="200">
         
         <div class="card-body">
           <h5 class="card-title">Find the best illustrator</h5>
           <p class="card-text">Owmisart will make it easier for customers to meet the best illustrators. So that the customer feels satisfied with the commissioned illustration results</p>

         </div>
       </div>
     </div>

     <div class="col-lg-4 mb-4">
       <div class="card" data-aos="zoom-in" data-aos-delay="300">
         <div class="card-body">
           <h5 class="card-title">Organize illustrator's portofolio</h5>
           <p class="card-text">Owmisart will make it easier for customers to know and consider Illustrator's portfolio</p>
         </div>
       </div>
     </div>

   </div>

   <div class="row counters" data-aos="fade-up" data-aos-delay="100">

     <div class="col-lg-3 col-6 text-center">
       <span data-toggle="counter-up">274</span>
       <p>Clients</p>
     </div>

     <div class="col-lg-3 col-6 text-center">
       <span data-toggle="counter-up">421</span>
       <p>Projects</p>
     </div>

     <div class="col-lg-3 col-6 text-center">
       <span data-toggle="counter-up">1,364</span>
       <p>Hours Of Support</p>
     </div>

     <div class="col-lg-3 col-6 text-center">
       <span data-toggle="counter-up">18</span>
       <p>Hard Workers</p>
     </div>

   </div>

 </div>
</section><!-- End Why Us Section -->


<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="section-bg">
 <div class="container" data-aso="zoom-in">

   <header class="section-header">
     <h3>Testimonials</h3>
   </header>

   <div class="row justify-content-center">
     <div class="col-lg-8">

       <div class="owl-carousel testimonials-carousel">

         <div class="testimonial-item">
           <img src="assets/img/testimonial-1.jpg" class="testimonial-img" alt="">
           <h3>Saul Goodman</h3>
           <h4>Ceo &amp; Founder</h4>
           <p>
             Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
           </p>
         </div>

         <div class="testimonial-item">
           <img src="assets/img/testimonial-2.jpg" class="testimonial-img" alt="">
           <h3>Sara Wilsson</h3>
           <h4>Designer</h4>
           <p>
             Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
           </p>
         </div>

         <div class="testimonial-item">
           <img src="assets/img/testimonial-3.jpg" class="testimonial-img" alt="">
           <h3>Jena Karlis</h3>
           <h4>Store Owner</h4>
           <p>
             Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
           </p>
         </div>

         <div class="testimonial-item">
           <img src="assets/img/testimonial-4.jpg" class="testimonial-img" alt="">
           <h3>Matt Brandon</h3>
           <h4>Freelancer</h4>
           <p>
             Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
           </p>
         </div>

         <div class="testimonial-item">
           <img src="assets/img/testimonial-5.jpg" class="testimonial-img" alt="">
           <h3>John Larson</h3>
           <h4>Entrepreneur</h4>
           <p>
             Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
           </p>
         </div>

       </div>

     </div>
   </div>

 </div>
</section><!-- End Testimonials Section -->

<!-- ======= Contact Section ======= -->
<section id="contact">
 <div class="container-fluid" data-aos="fade-up">

   <div class="section-header">
     <h3>Contact Us</h3>
   </div>

   <div class="row">

     <div class="col-lg-6">
       <div class="map mb-4 mb-lg-0">
         <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 312px;" allowfullscreen></iframe>
       </div>
     </div>

     <div class="col-lg-6">
       <div class="row">
         <div class="col-md-5 info">
           <i class="ion-ios-location-outline"></i>
           <p>A108 Adam Street, NY 535022</p>
         </div>
         <div class="col-md-4 info">
           <i class="ion-ios-email-outline"></i>
           <p>owmisart@gmail.com</p>
         </div>
         <div class="col-md-3 info">
           <i class="ion-ios-telephone-outline"></i>
           <p>(031) 7654321</p>
         </div>
       </div>

       <div class="form">
         <form action="forms/contact.php" method="post" role="form" class="php-email-form">
           <div class="form-row">
             <div class="form-group col-lg-6">
               <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
               <div class="validate"></div>
             </div>
             <div class="form-group col-lg-6">
               <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
               <div class="validate"></div>
             </div>
           </div>
           <div class="form-group">
             <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
             <div class="validate"></div>
           </div>
           <div class="form-group">
             <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
             <div class="validate"></div>
           </div>
           <div class="mb-3">
             <div class="loading">Loading</div>
             <div class="error-message"></div>
             <div class="sent-message">Your message has been sent. Thank you!</div>
           </div>
           <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
         </form>
       </div>
     </div>

   </div>

 </div>
</section><!-- End Contact Section -->

</main><!-- End #main -->

 
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  
  <!-- Bootstrap core JS-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

<?php
    include 'footer.php'
?>    