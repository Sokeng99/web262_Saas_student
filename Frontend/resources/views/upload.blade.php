
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


  <nav class="nav-upload">
    <div class="nav-left">
      <img src="assets/img/logo1.png" class="logo">
      <a href="index">Home</a></li>
    </div>
    <div class="nav-right">
      <ul>
        <li><img src="assets/img/bell.png" class="logo"></li>
        <li><img src="assets/img/mail.png" class="logo"></li>
        <li><img src="assets/img/comment.png" class="logo"></li>
      </ul>
      <div class="nav-user-icon online">
        <img src="assets/img/anime.png">
      </div>
    </div>
  </nav>

  {{-- content --}}
  <div class="container-upload">
    {{-- main content --}}
    <div class="main-content">

      <form method="post" enctype="multipart/form-data" action="{{url('/upload')}}">
        <div class="form-group">
          <label for="title">Publication Title:</label>
          <input type="text" id="title">
        </div>
        
        <div class="form-group">
          <label for="title">Description:</label>
          <input type="text" id="title">
        </div>

        <div class="upload-file" style="margin-bottom: 10px">
          <label for="formFileMultiple" class="form-label">Upload your files here</label>
          <input class="form-control" type="file" name="image" placeholder="" aria-describedby="helpId">
        </div>

        <div class="date">
          <label for="date">Enter the publication date: </label> 
          <input type="date" name="begin" placeholder="dd-mm-yyyy" value="" min="1997-01-01" max="2030-12-31">
        </div> 

        <button class="btn-upload">Upload</button>
      </form>
    </div>

    {{-- right-sidebar --}}
    <div class="right-sidebar hover-underline">
      <div class="pre-upload" style="margin-bottom: 5px; text-align:center;">
        <i class="fa-solid fa-hand-point-right fa-beat"></i>
        <a href="#">see your recent uploaded researches here</a>
      </div>
    {{-- right-sidebar --}}

  </div>
  {{-- content --}}
  </div>

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