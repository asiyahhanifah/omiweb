<?php
    session_start();
    include 'conn.php';

    $sql = "SELECT * FROM users";

    $rows = mysqli_query($conn, $sql);
    $i = 0;
    mysqli_close($conn);

    include 'header_home.php';

?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            
            <?php if ($_SESSION) : ?>
                <p class="navbar-nav ml-auto mr-4 mt-2 mt-lg-0"><?php echo $_SESSION['username']?></p>
                <a href="update.php" class="mr-4">Update</a>
                    <a href="update.php">Update</a>
                <a href="profile.php?id=<?=$row['id']?>">Profile</a>
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
        <h2>Contact<br>Illustrator !</h2>
      </div>

    </div>
  </section><!-- End Intro Section -->

  <main id="main">

<!-- ======= About Section ======= -->
<section id="about">
 <div class="container" data-aos="fade-up">

   <header class="section-header">
     <h3>Illustrator</h3>
   </header>

   <div class="container">
        <table class="table">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            <?php foreach($rows as $row) : ?>
                <tr>
                    <td> <?= ++$i ?>  </td>
                    <td> <?=  $row['username'] ?>  </td>
                    <td> <?=  $row['email'] ?>  </td>
                    <td> <a href="profile.php?id=<?=$row['id']?>" class="btn btn-primary"> Details </a> </td>
                </tr>
            <?php endforeach;?>
        </table>
    </div>
</div>

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