<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>OwmisArt-Commission Web</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo3.png" rel="icon">
  <link href="assets/img/logoo3.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NewBiz - v2.1.0
  * Template URL: https://bootstrapmade.com/newbiz-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an text logo -->
        <!-- <h1><a href="index.html">NewBiz</a></h1> -->
        <a href="index.php"><img src="assets/img/logo4.png" alt="" class="img-fluid"></a>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
      <?php if ($_SESSION) : ?>
                <ul class="active">
                    <li class="nav-item active"><?php echo $_SESSION['username']?></li>
                    <li class="nav-item active">
                    <a class="active" href="update.php">Update</a>
                    </li>
                    <li class="nav-item">
                    <a class="active" href="logout.php">Logout</a>
                    </li>

                </ul>
            <?php else: ?>
                <ul class="active">
                     <li class="nav-item active">
                        <a class="active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="active" href="register.php">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="active" href="login.php">Login</a>
                    </li>
                </ul>
            <?php endif; ?>
      </nav><!-- .main-nav -->

    </div>
  </header><!-- #header -->
