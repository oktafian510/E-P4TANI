<!DOCTYPE html>
<html>
<head>
	  <meta charset="utf-8">
	  <meta content="width=device-width, initial-scale=1.0" name="viewport">

	  <title>P4TANI - {{ $title }}</title>
	  <meta content="" name="description">
	  <meta content="" name="keywords">

	  <!-- Favicons -->
	  <link href="{{ asset('user/assets/img/favicon.png') }}" rel="icon">
	  <link href="{{ asset('user/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

	  <!-- Google Fonts -->
	  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	  <!-- Vendor CSS Files -->
	  <link href="{{ asset('user/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
	  <link href="{{ asset('user/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
	  <link href="{{ asset('user/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
	  <link href="{{ asset('user/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
	  <link href="{{ asset('user/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

	  <!-- Template Main CSS File -->
	  <link href="{{ asset('user/assets/css/style.css') }}" rel="stylesheet">

	  <!-- =======================================================
	  * Template Name: eNno - v4.7.0
	  * Template URL: https://bootstrapmade.com/enno-free-simple-bootstrap-template/
	  * Author: BootstrapMade.com
	  * License: https://bootstrapmade.com/license/
	  ======================================================== -->
</head>
<body>
	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top" style="background-color: #3cd407;">
	    <div class="container d-flex align-items-center justify-content-between">
	      <h1 class="logo"><a href="index.html">P4TANI</a></h1>
	      <!-- Uncomment below if you prefer to use an image logo -->
	      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
		  

	      <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto {{ ($title === "HOME") ? 'active' : ' ' }}" href="/">Home</a></li>
              <li><a class="nav-link scrollto {{ ($title === "ARTICLE") ? 'active' : ' ' }}" href="/article">Article</a></li>
              <li><a class="nav-link scrollto {{ ($title === "PRODUCT") ? 'active' : ' ' }}" href="/product">Product</a></li>
              <li class="dropdown"><a class="" href="#"><span>Other Page</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a class="" href="#">About</a></li>
                  <li><a class="" href="#">FAQ</a></li>
                  <li><a class="" href="#">Member</a></li>
                </ul>
              </li>
              <li><a class="nav-link scrollto " href="Signup">Signup</a></li>
              <li><a class="nav-link scrollto" href="Signin" data-bs-toggle="modal" data-bs-target="#SignIn">Sign In</a></li>
              
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->

	    </div>
    </header>
    <!-- End Header -->

    @yield('conten')

	<!-- ======= Footer ======= -->
	  <footer id="footer">

	    <div class="footer-top">

	      <div class="container">

	        <div class="row  justify-content-center">
	          <div class="col-lg-6">
	            <h3>E P4TANI</h3>
	            <p>Contact Us At</p>
	            <a href="">Whatsapp</a>
	            <a href="">Youtube</a>
	            <a href="">Instagram</a>
	            <a href="">Facebook</a>
	          </div>
	        </div>

	        <div class="row footer-newsletter justify-content-center">
	          <div class="col-lg-6">
	          </div>
	        </div>

	        </div>

	      </div>
	    </div>

	    <div class="container footer-bottom clearfix">
	    	<center>
	    		<div class="copyright">
	        &copy; Copyright <strong><span>P4TANI</span></strong>. All Rights Reserved
	      </div>
	    	</center>
	      
	    </div>
	  </footer><!-- End Footer -->


     <!-- Vendor JS Files -->
     <!-- Modal -->
    <div class="modal fade" id="SignIn" tabindex="-1" aria-labelledby="SignIn" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="SignIn">Sign In</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
  <script src="{{ asset('user/assets/vendor/purecounter/purecounter.js') }}"></script>
  <script src="{{ asset('user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('user/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('user/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('user/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('user/assets/js/main.js') }}"></script>

</body>
</html>