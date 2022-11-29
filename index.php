<?php
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Amethyst Hosting</title>
  <link rel="icon" href="/img/icon.png" type="image/png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap">
  <link rel="stylesheet" href="css/mdb.min.css">
  <style>
    section.jumbotron {
      padding:0;
      margin:0;
      background:linear-gradient(to bottom,#e9e9e9 0,#fdfdfd,#fff 100%);
      position:relative;
      overflow:hidden;
    }
    section.jumbotron .polygon {
      clip-path:polygon(1800px 0,100% 0, 100% 100%, .3% 100%);
      background:linear-gradient(to right,#4b006b 0,#4b006b,#8a0052 100%);
      position:absolute;
      top:0;
      right:0;
      width:100%;
    }
    section.jumbotron .hero-trustpilot {
      bottom:0;
      left:-30px;
      z-index:10;
      transform:scale(.8,.8);
    }
    section.jumbotron .hero-trustpilot .trustpilot-logo {
      max-width:140px;
      margin-bottom:8px;
    }
    section.jumbotron .hero-trustpilot .trustpilot-stars {
      max-width:240px;
      margin-bottom:8px;
    }
    @media (min-width:768px) {
      section.jumbotron .polygon {
        clip-path:polygon(2500px 0,100% 0, 100% 100%, .3% 100%);
        position:absolute;
        top:0;
        right:0;
        width:100%;
      }
      section.jumbotron .hero-trustpilot {
      bottom:0;
      left:-30px;
      z-index:10;
      transform:scale(.8,.8);
    }
    }
    @media (min-width:992px) {
      section.jumbotron .polygon {
        clip-path:polygon(310px 0,100% 0, 100% 100%, .3% 100%);
        position:absolute;
        top:0;
        right:0;  
        width:40%;
      }
      section.jumbotron .hero-trustpilot {
      bottom:20px;
      left:-15px;
      z-index:10;
      transform:scale(1,1);
    }
    }
    .cookies {
      background-color:black;
      color:#fff;
      position:fixed;
      bottom:0;
    }
  </style>
</head>
<body class="bg-light text-black">
<nav class="navbar navbar-expand-lg navbar-dark bg-black">
  <div class="container">
  <a class="navbar-brand mt-2 mt-lg-0"><img src="/img/logo.png" height="45" alt="Amethyst Hosting" loading="lazy"></a>
    <button class="ms-auto navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#n" aria-controls="n" aria-expanded="false" aria-label="Toggle Navigation">
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="n">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fw-bold">
        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="/">Website Hosting</a></li>
        <li class="nav-item"><a class="nav-link" href="/">Game Server Hosting</a></li>
        <li class="nav-item"><a class="nav-link" href="/">Discord Bot Hosting</a></li>
        <li class="nav-item"><a class="nav-link bg-primary rounded-5 text-white px-3" href="/">Client Portal</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- Jumbotron -->
<section class="jumbotron">
  <div class="polygon h-100"></div>
  <div class="container py-3 py-md-5">
    <div class="row align-items-center">
      <div class="col-lg-7 col-md-10 col-12 mx-auto mb-4 mb-md-5 mb-lg-0 text-center text-lg-start">
        <p class="h5 fw-bolder text-uppercase text-muted">Web Hosting</p>
        <p class="h1 fw-bold">Get your website online with everything you need.</p>
        <p class="lead"><i class="fa-solid fa-check me-2"></i>Fast, reliable and secure</p>
        <p class="lead"><i class="fa-solid fa-check me-2"></i>Friendly Support Team</p>
        <p class="lead"><i class="fa-solid fa-check me-2"></i>Transparent Pricing</p>
        <p class="lead"><i class="fa-solid fa-check me-2"></i>No Hidden Fees</p>
      </div>
      <div class="col-lg-5 d-none d-lg-block position-relative">
        <img src="/img/showcase1.png" alt width="400" height="525" class="img-fluid shadow-lg rounded-9">
        <div class="hero-trustpilot rounded-9 bg-white p-4 position-absolute shadow">
          <div class="trustpilot-logo">
            <a href="https://www.trustpilot.com/review/amethysthosting.co.uk" target="_blank">
              <img src="/img/trustpilot-light.png" class="img-fluid">
            </a>
          </div>
          <div class="trustpilot-stars">
            <a href="https://www.trustpilot.com/review/amethysthosting.co.uk" target="_blank">
              <img src="/img/stars/stars-4.svg" class="img-fluid">
            </a>
          </div>
          <p class="small m-0 text-muted">TrustScore <strong><?php echo $tp['score']; ?></strong> | <strong><?php echo $tp['of']; ?></strong> reviews</p>
        </div>
      </div>
      <div class="col-md-8 col-11 mx-auto d-block d-lg-none">
        <div class="rounded-9 mx-auto shadow bg-white p-4 position-relative">
          <div class="row align-items-center">
            <div class="col-6">
              <img src="/img/stars/stars-4.svg" class="img-fluid" alt="TrustScore <?php echo $tp['score']; ?>/5">
            </div>
            <div class="col-6">
              <img src="/img/trustpilot-light.png" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
if(!isset($_COOKIE['accepted'])) {
?>
<div class="container-fluid cookies p-5">
  <div class="row">
    <div class="col-lg-9 col-md-8">
      <p class="h3 fw-bold">Hey there!</p>
      <p class="m-0"><strong>We use cookies.</strong><br>Like almost every website, nowadays, we use cookies! To comply with laws,
      we're asking if we're allowed to use some additional cookies that could 
      make your experience with us better, like remembering your password.
    </div>
    <div class="col-lg-3 col-md-4">
      <a class="btn btn-secondary btn-block" href="?c=false">Essential Cookies Only</a>
      <a class="btn btn-primary btn-block" href="?c=true">Allow Optional Cookies</a>
    </div>
  </div>
</div>
<?php } ?>
<script type="text/javascript" src="js/mdb.min.js"></script>
<script type="text/javascript"></script>
</body>
</html>
