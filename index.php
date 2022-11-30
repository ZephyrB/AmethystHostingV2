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
    @import url('https://fonts.googleapis.com/css?family=Rubik:900');
    :root {
      --stroke-width: calc(1em / 6);
      --font-size: 5rem;
      --font-weight: 900;
      --letter-spacing: calc(1em / 13);
    }

    * {
      box-sizing: border-box;
    }
    .bg-primary-gradient {
      background:linear-gradient(to right,#4b006b 0,#4b006b,#8a0052 100%);
    }
    section.jumbotron {
      padding:0;
      margin:0;
      background:linear-gradient(to bottom,#e9e9e9 0,#fdfdfd,#fff 100%);
      position:relative;
      overflow:hidden;
    }
    section.jumbotron .polygon {
      clip-path:polygon(1800px 0,100% 0, 100% 100%, .3% 100%);
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
    .btn-primary {
      background-color: var(--mdb-primary);
      color:var(--mdb-gray-400);
    }
    .btn-primary:hover {
      color:var(--mdb-light);
      background-color: var(--mdb-primary);
    }
    .tld {
      transition: all .5s ease;
    }
    .tld:hover {
      box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
    }
    h1 {
      background-clip: text;
      -webkit-background-clip: text;
      background-image: linear-gradient(to right, #09f1b8, #00a2ff, #ff00d2, #fed90f);
      font-family: 'Rubik', sans-serif;
      color:#fff;
      font-size: var(--font-size);
      font-weight: var(--font-weight);
      letter-spacing: var(--letter-spacing);
      padding: calc(var(--stroke-width) / 2);
      -webkit-text-stroke-color: transparent;
      -webkit-text-stroke-width: var(--stroke-width);
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
  <div class="polygon h-100 bg-primary-gradient"></div>
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
<section>
  <div class="container py-4">
    <p class="h2 text-center fw-bold">What do you need from us?</p>
    <div class="row">
      <div class="col-md-3 mb-2">
        <div class="border border-dark rounded-5 p-2 h-100">
          <p class="fw-bold text-center">I'm Personal</p>
          <p>
            For clients who are intending to use their website for personal use.
            We would recommend the Small Website Hosting Package for £1, and nothing more than the Medium Website Hosting Package for £2, depending on your requirements.
          </p>
          <a href="/webhosting" class="btn btn-primary fw-bold btn-block">Pricing</a>
        </div>
      </div>
      <div class="col-md-3 mb-2">
        <div class="border border-dark rounded-5 p-2 h-100">
          <p class="fw-bold text-center">I'm a Small Business</p>
          <p>
            For clients who own or manage a small business.
            We would recommend the Small Website Hosting Package for £1 if you only need 1 email, or the Medium Website Hosting Package for £2 if you need more.
          </p>
          <a href="/webhosting" class="btn btn-primary fw-bold btn-block">Pricing</a>
        </div>
      </div>
      <div class="col-md-3 mb-2">
        <div class="border border-dark rounded-5 p-2 h-100">
          <p class="fw-bold text-center">I'm a Business</p>
          <p>
            For clients who own or manage a buisness or ecommerce.
            We would recommend the Medium Website Hosting Package for £2 depending on the requirements and size of the website that you need.
          </p>
          <a href="/webhosting" class="btn btn-primary fw-bold btn-block">Pricing</a>
        </div>
      </div>
      <div class="col-md-3 mb-2">
        <div class="border border-dark rounded-5 p-2 h-100">
          <p class="fw-bold text-center">I'm an Enterprise</p>
          <p>
            For clients who own or manage a large buisness or franchise.
            We would recommend the Nitro Website Hosting Package for £3, depending on the size, domains and email accounts that you require.
          </p>
          <a href="/webhosting" class="btn btn-primary fw-bold btn-block">Pricing</a>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
<div class="container py-4">
    <p class="h2 text-center fw-bold">Find the perfect domain name</p>
    <div class="row mb-4 mb-md-5">
      <div class="col-md-9 col-12 mx-auto">
        <div class="bg-white rounded-pill shadow p-3">
          <form action="" method="post" autocomplete="off">
            <div class="row no-gutters">
              <div class="col-lg-10 col-md-9 col-sm-10 col-9 align-self-center">
                <input class="form-control form-control-lg shadow-none border-0" placeholder="Search for a domain...">
              </div>
              <div class="col-lg-2 col-md-3 col-sm-2 col-3">
                <button type="submit" class="btn btn-primary btn-lg btn-block rounded-pill text-white"><i class="fa-solid fa-magnifying-glass"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col mb-2">
        <div class="card card-body rounded-9 p-4 border-0 shadow-sm text-center tld">
          <p class="h5 fw-bold m-0">.com</p>
          <p class="h5 fw-bold m-0 text-primary">£9.99</p>
        </div>
      </div>
      <div class="col mb-2">
        <div class="card card-body rounded-9 p-4 border-0 shadow-sm text-center tld">
          <p class="h5 fw-bold m-0">.net</p>
          <p class="h5 fw-bold m-0 text-primary">£9.99</p>
        </div>
      </div>
      <div class="col mb-2">
        <div class="card card-body rounded-9 p-4 border-0 shadow-sm text-center tld">
          <p class="h5 fw-bold m-0">.org</p>
          <p class="h5 fw-bold m-0 text-primary">£8.99</p>
        </div>
      </div>
      <div class="col mb-2">
        <div class="card card-body rounded-9 p-4 border-0 shadow-sm text-center tld">
          <p class="h5 fw-bold m-0">.xyz</p>
          <p class="h5 fw-bold m-0 text-primary">£2.49</p>
        </div>
      </div>
      <div class="col mb-2">
        <div class="card card-body rounded-9 p-4 border-0 shadow-sm text-center tld">
          <p class="h5 fw-bold m-0">.uk</p>
          <p class="h5 fw-bold m-0 text-primary">£7.99</p>
        </div>
      </div>
    </div>
</div>
</section>
<section class="bg-primary-gradient">
  <div class="container py-4">
    <div class="row">
      <div class="col-12 mx-auto text-center text-white">
        <p class="h5 fw-normal m-0">Our customers say <strong>Great</strong><img src="/img/stars/stars-4.svg" height="25" class="mx-3"><strong><?php echo $tp['score'] ?></strong> out of 5 based on <strong><?php echo $tp['of']; ?> reviews</strong></p>
      </div>
    </div>
  </div>
</section>
<section class="bg-white">
  <div class="container py-4">
    <div class="row">
      <div class="col-12">
        <h1 data-text="Student Discount" class="text-center">Student Discount</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 mb-2">
        <p class="lead fw-bold">We know that money is important to students</p>
        <p>
          With the Amethyst Hosting Student Discount, you can get 6 Months Free
          Website Hosting with a 1 month purchase of the "Small" or "Medium"
          Website Hosting Package, or 3 months free with the purchase of our"Nitro"
          Website Hosting Package.<br>
          All you have to do is register with your school, college or university account email,
          or create a ticket sending us your student badge or ID.
        </p>
      </div>
      <div class="col-lg-6 mb-2">
        <p class="lead fw-bold">The Amethyst Hosting Exclusive</p>
        <p>
          We can almost guarantee that a discount like this cannot be found anwhere else for students.
          Amethyst hosting has always been proud of affordability, so we ensure our students get the best value for money.
          We know being a student is expensive, and doesn't give a lot, so this offer is for anyone who needs it,
          whether it be for a personal project, work, studying, or even all three.
        </p>
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
