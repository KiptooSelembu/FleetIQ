<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trucker - Transport Courier & Logistics Html Template</title>

  <!--Start css files-->
  <link rel="stylesheet preload" href="assets/css/font-awesome-pro.css" as="style">
  <link rel="stylesheet preload" href="assets/css/bootstrap.min.css" as="style">
  <link rel="stylesheet preload" href="assets/css/swiper.css" as="style">
  <link rel="stylesheet preload" href="assets/css/nice-select.css" as="style">
  <link rel="stylesheet preload" href="assets/css/animate.css" as="style">
  <link rel="stylesheet preload" href="assets/css/odometer-theme-default.min.css" as="style">
  <link rel="stylesheet preload" href="assets/css/magnific-popup.css" as="style">
  <link rel="stylesheet preload" href="assets/css/style.css" as="style">
  <!-- End Css File -->

  <!-- Start Favicon-->
  <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
  <!-- End Favicon -->
</head>

<body>
  <!-- Start Site Preloader -->
  <div id="trucker__preloader">
    <div id="trucker__circle_loader"></div>
    <div class="trucker__loader_logo"><img src="assets/images/logo/logo.svg" alt="Preload"></div>
  </div>
  <!-- End Site Preloader -->
  <!-- Start Scroll To Top Here  -->
  <div class="scroll-up">
    <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <!-- End Scroll To Top Here -->

    <livewire:pages.inc.header/>
    {{ $slot }}
    <livewire:pages.inc.footer/>

  <!-- Start Js File -->
  <script defer src="assets/js/jquery.min.js"></script>
  <script defer src="assets/js/bootstrap.min.js"></script>
  <script defer src="assets/js/wow.js"></script>
  <script defer src="assets/js/magnific-popup.js"></script>
  <script defer src="assets/js/nice-select.js"></script>
  <script defer src="assets/js/swiper.js"></script>
  <script defer src="assets/js/odometer.min.js"></script>
  <script defer src="assets/js/jarallax.min.js"></script>
  <script defer src="assets/js/imagesloaded-pkgd.js"></script>
  <script defer src="assets/js/script.js"></script>
  <!-- End Js File -->
</body>

</html>
