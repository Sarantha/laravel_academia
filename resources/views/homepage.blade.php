@extends('layouts.app')
@include('inc.nav')


  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="img_33.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2><strong><strong><a href="#intro" class="scrollto" style="color:#18d26e">රසායන විද්‍යාව</a></strong> - ගිහාන් එස්. පිටිගල</strong></h2>
                <p style="font-size: 22px;">සීමිත ඇසට නොව අසීමිත සිතට </p>
                <a href="{{ route('login') }}" class="btn-get-started scrollto">Students portal</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img_33.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                  <h2><strong><strong><a href="#intro" class="scrollto" style="color:#18d26e">රසායන විද්‍යාව</a></strong> - ගිහාන් එස්. පිටිගල</strong></h2>
                  <p style="font-size: 22px;">සීමිත ඇසට නොව අසීමිත සිතට </p>
                  <a href="{{ route('login') }}" class="btn-get-started scrollto">Students portal</a>
                </div>
            </div>
          </div>
        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

        {{-- <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron text-center">
          <div class="container">
            <h1 class="display-3">Hello, Welcome to the project!</h1>
            <p>Basic Function of the 3.2 Project</p>
            <p><a class="btn btn-primary btn-lg" href="/services" role="button">Learn more &raquo;</a></p>
          </div>
        </div>
<div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
        </div>
    
        <hr>
    
      </div> <!-- /container -->
     --}}
     <main id="main">
    
      <section id="featured-services">
        <div class="container">
          <div class="row">
  
            <div class="col-lg-4 box box-bg">
              <i class="ion-ios-stopwatch-outline"></i>
              
              <p class="description">ප්‍රින්සිපියා - බණ්ඩාරවෙල</p>
              <p class="description">සෙනසුරාදා පෙ.ව 8.00 - 12.00 | Theory 2020</p>
              <p class="description">සෙනසුරාදා ප.ව 1.00 - 5.00 | Theory 2020</p>
              <p class="description">බදාදා පෙ.ව 7.30 - 4.00 | Revision 2020</p>
            </div>
  
            <div class="col-lg-4 box box-bg">
              <i class="ion-ios-stopwatch-outline"></i>
              <p class="description">Go Getter - බදුල්ල</p>
              <p class="description">ඉරිදා පෙ.ව 8.00 - 12.00 | Theory 2020</p>
              <p class="description">ඉරිදා ප.ව 1.00 - 5.00 | Theory 2020</p>
              <p class="description">සඳුදා පෙ.ව 7.00 - 4.00 | Revision 2020</p>
            </div>
  
            <div class="col-lg-4 box box-bg">
              <i class="ion-ios-stopwatch-outline"></i>
              <p class="description">රොටරි - මහනුවර</p>
              <p class="description">බ්‍රහස්පතින්දා පෙ.ව 7.00 - 4.00 | Revision 2020</p>
            </div>
  
          </div>
        </div>
      </section>
  
      
    </main>
    
    <div class="text-center">
  
    </div>
      <!--==========================
        Footer
      ============================-->
      <footer id="footer">
        <div class="footer-top">
          <div class="container">
            <div class="row">
    
              <div class="col-lg-4 col-md-6 footer-info">
                <h3 style="font-size: 22px;">රසායන විද්‍යාව</h3>
                <p>ගිහාන් එස්. පිටිගල Bsc(Hon's) Peradeniya</p>
              </div>
    
              <div class="col-lg-4 col-md-6 footer-links">
                <h4>ප්‍රයෝජනවත් සබැඳි</h4>
                <ul>
                  <li><i class="ion-ios-arrow-right"></i> <a href="#intro">මුල් පිටුව</a></li>
                </ul>
              </div>
    
              <div class="col-lg-4 col-md-6 footer-contact">
                <h4>විමසීම්</h4>
                <p>
                  ලිතිර<br>
                  බණ්ඩාරවෙල<br>
                  <strong>Phone:</strong> 000 000 0000<br>
                  <strong>Email:</strong> info@example.com<br>
                </p>
    
                <div class="social-links">
                  <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                  <a href="https://www.facebook.com/GihanSPitigala/" class="facebook"><i class="fa fa-facebook"></i></a>
                  <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                  <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                </div>
    
              </div>
    
    
            </div>
          </div>
        </div>
    
        <div class="container">
          <div class="copyright">
            &copy; Copyright <strong><a href="https://www.facebook.com/GihanSPitigala/">Gihan S Pitigala</a> </strong>. All Rights Reserved
          </div>
          <div class="credits">
    
            Developed by: S.S</a>
          </div>
        </div>
      </footer><!-- #footer -->
    
      <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    
    
      <!-- JavaScript Libraries -->
      <script src="lib/jquery/jquery.min.js"></script>
      <script src="lib/jquery/jquery-migrate.min.js"></script>
      <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="lib/easing/easing.min.js"></script>
      <script src="lib/superfish/hoverIntent.js"></script>
      <script src="lib/superfish/superfish.min.js"></script>
      <script src="lib/wow/wow.min.js"></script>
      <script src="lib/waypoints/waypoints.min.js"></script>
      <script src="lib/counterup/counterup.min.js"></script>
      <script src="lib/owlcarousel/owl.carousel.min.js"></script>
      <script src="lib/isotope/isotope.pkgd.min.js"></script>
      <script src="lib/lightbox/js/lightbox.min.js"></script>
      <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
      <!-- Contact Form JavaScript File -->
      <script src="contactform/contactform.js"></script>
    
      <!-- Template Main Javascript File -->
      <script src="js/main.js"></script>
    
