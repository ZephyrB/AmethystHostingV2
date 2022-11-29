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
      position:relative;
      overflow:hidden;
    }
    section.jumbotron .polygon {
      clip-path:polygon(1800px 0,100% 0, 100% 100%, .3% 100%);
      position:absolute;
      top:0;
      right:0;
      width:100%;
      z-index: -1;
    }
    @media (min-width:768px) {
      section.jumbotron .polygon {
        clip-path:polygon(2500px 0,100% 0, 100% 100%, .3% 100%);
        position:absolute;
        top:0;
        right:0;
        width:100%;
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
    }
  </style>
</head>
<body class="bg-light text-black">
<nav class="navbar navbar-expand-lg navbar-dark bg-black">
  <div class="container">
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#n" aria-controls="n" aria-expanded="false" aria-label="Toggle Navigation">
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="n">
      <a class="navbar-brand mt-2 mt-lg-0"><img src="/img/logo.png" height="35" alt="Amethyst Hosting" loading="lazy"></a>
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
  <div class="polygon h-100 bg-primary"></div>
  <div class="container py-3 py-md-5">
    <div class="row align-items-center">
      <div class="col-lg-7 col-12 mx-auto mb-4 mb-md-5 mb-lg-0">
        <p class="h5 fw-bolder text-uppercase">Web Hosting</p>
        <p class="h1 fw-bold">Get your website online with everything you need.</p>
        <p class="lead"><i class="fa-solid fa-check me-2"></i>Fast, reliable and secure</p>
        <p class="lead"><i class="fa-solid fa-check me-2"></i>Friendly Support Team</p>
        <p class="lead"><i class="fa-solid fa-check me-2"></i>Transparent Pricing</p>
        <p class="lead"><i class="fa-solid fa-check me-2"></i>No Hidden Fees</p>
      </div>
      <div class="col-lg-5 d-none d-lg-block">
        <img src="/img/showcase1.png" alt width="400" height="525" class="img-fluid shadow-lg rounded-10">
      </div>
    </div>
  </div>
</section>
<script type="text/javascript" src="js/mdb.min.js"></script>
<script type="text/javascript"></script>
</body>
</html>
