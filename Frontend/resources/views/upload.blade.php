{{-- 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Upload Files</title>

  <style>
    body {
      background: rgba(228, 228, 228, 0.9);
    }
    form {
      position: absolute;
      top: 50%;
      left: 50%;
      margin-top: -100px;
      margin-left: -250px;
      width: 500px;
      height: 200px;
      border: 4px dashed #000000;
    }
    form p {
      width: 100%;
      height: 100%;
      text-align: center;
      line-height: 170px;
      color: black;
      font-family: Arial;
    }
    form input {
      position: absolute;
      margin: 0;
      padding: 0;
      width: 100%;
      height: 100%;
      outline: none;
      opacity: 0;
    }
    form button {
      margin: 0;
      color: #fff;
      background: #090135;
      border: none;
      width: 508px;
      height: 35px;
      margin-top: -20px;
      margin-left: -4px;
      border-radius: 4px;
      border-bottom: 4px solid #090135;
      transition: all .2s ease;
      outline: none;
    }
    form button:hover {
      background: #0e1279;
      color: #e5e5e5;
    }
    form button:active {
      border: 0;
    }
  </style>
</head>
<body>
  <form action="upload.php" method="POST">
    <input type="file" multiple>
    <p>Drag your files here or click in this area.</p>
    <button type="submit">Upload</button>
  </form>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function(){
      $('form input').change(function () {
        $('form p').text(this.files.length + " file(s) selected");
      });
    });
  </script>
</body>

</html> --}}
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Share2YorGate</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- Font Awesome Tool Kit -->
  <script src="https://kit.fontawesome.com/b2093c8d10.js" crossorigin="anonymous"></script>
  
</head>

<body>

  {{-- <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Share2YorGate</h1>
      </a>
      
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href=".html">Home</a></li>
          <li><a href="signin.html">Log in</a></li>
          <li><a href="signup.html">Join for free</a></li>
        </ul>
      </nav><!-- .navbar -->
      
    </div>
      
  </header><!-- End Header --> --}}

  <nav>
    <div class="nav-left">
      
    </div>
    <div class="nav-right"></div>
  <!-- ======= Hero Section ======= -->
  <div class="upload container">
    <div class="mb-3">
      <label for="formFileMultiple" class="form-label">Multiple files input example</label>
      <input class="form-control" type="file" id="formFileMultiple" multiple>
    </div>
  </div>


  <main id="main">



  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>Share2YorGate</span>
            </a>
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4 style="text-align: left">More information</h4>
          <ul>
            <li><a href="#">About us</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Terms</a></li>
            <li><a href="#">Privacy policy</a></li>
            <li><a href="#">Copyright</a></li>
            <li><a href="#">Imprint</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4 style="text-align: left">Related</h4>
          <ul>
            <li><a href="#">Researchers</a></li>
            <li><a href="#">Q&A</a></li>
            <li><a href="#">Publications</a></li>
            <li><a href="#">Advertising</a></li>
            <li><a href="#">Recruiting</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; 2022-2023 <strong><span>Share2YorGate</span></strong>. All rights reserved
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>