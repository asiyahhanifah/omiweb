<?php
    session_start();

    $id = $_GET['id'];
    if(!($_SESSION)){
        header('location: login.php?redirectProfile='.$id);
    }

    include 'conn.php';
    $sql = "SELECT * FROM users WHERE id=$id LIMIT 1";
    
    $rows = mysqli_query($conn,$sql);
    $i = 0;
    mysqli_close($conn);
    $data = mysqli_fetch_assoc($rows);

  
    include 'header_home.php';
?>

<section id="about" class="about-mf sect-pt4 route">
</secion>
  <section id="about" class="about-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="box-shadow-full">
            <div class="row">
              <div class="col-md-6">
                  <div class="row">
                    <div class="about-img w-100">
                    <img src= "uploads/<?php echo $data['image']?>"alt="Foto profil <?php echo $data['username'] ?>" width="350" height="350" >
                     <h4> </h4>
                     <h4><strong>@<?php echo $data['username'] ?></strong></h4>
                    </div>
                    
                  
                </div>
              </div>
              <div class="col-md-6">
                  <div class="title-box-2">
                    <h4 class="title-left" style="color:blue;"><strong>
                      Profile
                    </strong></h4>
                  </div>
                  

                  <div class="about-info">
                            <ul>
                                <li>
                                    <strong><a>Tanggal Lahir</a><br /></strong>
                                    <a><?php echo $data['bio']; ?></a>
                                </li><br />
                                <li>
                                    <strong><a>Description</a><br /></strong>
                                    <a><?php echo $data['description']; ?></a>
                                </li><br />
                                <li>
                                    <strong><a>Rentang Harga Design</a><br /></strong>
                                    <a><?php echo $data['hargacom']; ?></a>
                                </li><br />
                                <li>
                                    <strong><a>Contact</a><br /></strong>
                                    <a><?php echo $data['email']; ?></a>
                                </li><br />
                                
                            </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="clearfix">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3 class="section-title">My Portfolio</h3>
        </header>

        

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12">
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
            <img src= "uploads/portofolio/<?php echo $data['portofolio']?>"alt="portofolio <?php echo $data['username'] ?>">
              <div class="portfolio-info">
                <h4><a><?php echo $data['nama_porto']; ?></a></h4>
                <div>
                  <a href="uploads/portofolio/<?php echo $data['portofolio']?>"alt="portofolio <?php echo $data['username'] ?>" data-gall="portfolioGallery"
                  title="<?php echo $data['nama_porto']; ?>" class="venobox link-preview"><i class="ion ion-eye"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
            <img src= "uploads/portofolio/2/<?php echo $data['portofolio2']?>"alt="portofolio2 <?php echo $data['username'] ?>">
              <div class="portfolio-info">
              <h4><a><?php echo $data['nama_porto2']; ?></a></h4>
                
                <div>
                <a href="uploads/portofolio/2/<?php echo $data['portofolio2']?>"alt="portofolio2 <?php echo $data['username'] ?>" data-gall="portfolioGallery"
                  title="<?php echo $data['nama_porto2']; ?>" class="venobox link-preview"><i class="ion ion-eye"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
            <img src= "uploads/portofolio/3/<?php echo $data['portofolio3']?>"alt="portofolio3 <?php echo $data['username'] ?>">
              <div class="portfolio-info">
              <h4><a><?php echo $data['nama_porto3']; ?></a></h4>
                
                <div>
                <a href="uploads/portofolio/3/<?php echo $data['portofolio3']?>"alt="portofolio3 <?php echo $data['username'] ?>" data-gall="portfolioGallery"
                  title="<?php echo $data['nama_porto3']; ?>" class="venobox link-preview"><i class="ion ion-eye"></i> </a>
                </div>
              </div>
            </div>
          </div>


        </div>

      </div>
    </section><!-- End Portfolio Section -->

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
<?php
    include 'footer.php'
?>    