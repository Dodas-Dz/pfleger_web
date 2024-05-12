<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Mico</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
  <!-- nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <!-- datepicker -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
  <!-- Custom styles for this template -->
  <link href="assets/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="assets/css/responsive.css" rel="stylesheet" />

</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    @include('layouts.headerUser')
    <!-- end header section -->
  </div>


  <!-- treatment section -->

  <section class="treatment_section layout_padding">
    <div class="side_img">
      <img src="assets/images/treatment-side-img.jpg" alt="">
    </div>
    <div class="container">

      <div class="heading_container heading_center">

        <h2>
          Hospital <span>Treatment</span>
        </h2>



      </div>

    <div class="container">
        <h2 class="mt-5 mb-3">Formulaire Patient</h2>
        <form action="{{ route('api') }}" method="GET" >
            <div class="form-group">
              <label for="name" >Name des Patienten:</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="Geben Sie den Namen des Patienten ein">
            </div>
            <div class="form-group">
              <label for="geburtstag">Geburtsdatum:</label>
              <input type="date" name="Geburtsdatum" class="form-control" id="geburtstag">
            </div>
            <div class="form-group">
              <label for="diagnosen">Diagnosen:</label>
              <textarea class="form-control" name="Diagnosen" id="diagnosen" rows="3" placeholder="Geben Sie die Diagnosen des Patienten ein"></textarea>
            </div>
            <div class="form-group">
              <label for="pflegebedarf">Pflegebedarf:</label>
              <textarea class="form-control" name="Pflegebedarf"id="pflegebedarf" rows="3" placeholder="Beschreiben Sie den Pflegebedarf des Patienten"></textarea>
            </div>
            <div class="form-group">
              <label for="pflegepersonal">Verfügbares Pflegepersonal:</label>
              <textarea class="form-control" name="Verfugbares"  id="pflegepersonal" rows="3" placeholder="Listen Sie das verfügbare Pflegepersonal auf"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Absenden</button>
          </form>
      </div>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

      <div class="row">
        <div class="col-md-6 col-lg-3">

          <div class="box ">
            <div class="img-box">
              <img src="assets/images/t1.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
                Nephrologist Care
              </h4>
              <p>
                alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="box ">
            <div class="img-box">
              <img src="assets/images/t2.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
                Eye Care
              </h4>
              <p>
                alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="box ">
            <div class="img-box">
              <img src="assets/images/t3.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
                Pediatrician Clinic
              </h4>
              <p>
                alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="box ">
            <div class="img-box">
              <img src="assets/images/t4.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
                Parental Care
              </h4>
              <p>
                alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end treatment section -->

  <!-- info section -->
  @include('layouts.footer')
  <!-- footer section -->

  <!-- jQery -->
  <script src="assets/js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="assets/js/bootstrap.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- datepicker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
  <!-- custom js -->
  <script src="assets/js/custom.js"></script>


</body>

</html>
