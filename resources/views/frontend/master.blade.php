<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>XYZ School</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="frontend/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="frontend/vendor/aos/aos.css" rel="stylesheet">
  <link href="frontend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="frontend/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="frontend/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="frontend/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="frontend/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="frontend/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
    @include('frontend.header');

    @yield('content');
  <!-- ======= Footer ======= -->
    @include('frontend.footer');

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="frontend/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="frontend/vendor/aos/aos.js"></script>
  <script src="frontend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="frontend/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="frontend/vendor/php-email-form/validate.js"></script>

  <!-- Main JS File -->
  <script src="frontend/js/main.js"></script>

</body>

</html>