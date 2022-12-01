<?php
include('../config.php');
$p = 'Web Hosting';
include('../inc/head.php');
?>
<body class="bg-light text-black">
<?php include('../inc/nav.php'); ?>
<!-- Jumbotron -->
<section class="jumbotron">
  <div class="polygon h-100 bg-primary-gradient"></div>
  <div class="container py-3 py-md-5">
    <div class="row align-items-center">
      <div class="col-lg-7 col-md-10 col-12 mx-auto mb-4 mb-md-5 mb-lg-0 text-center text-lg-start">
        <p class="h1 fw-bold">Website Hosting</p>
        <p class="lead"><i class="fa-solid fa-check me-2"></i>Fast, reliable and secure</p>
        <p class="lead"><i class="fa-solid fa-check me-2"></i>For business or personal use</p>
        <p class="lead"><i class="fa-solid fa-check me-2"></i>Affordable and competitive pricing</p>
        <p class="lead"><i class="fa-solid fa-check me-2"></i>24 Hour Expert Support</p>
      </div>
      <div class="col-lg-5 d-none d-lg-block position-relative">
        <img src="/img/showcase2.png" alt width="400" height="525" class="img-fluid shadow-lg rounded-9">
        <div class="hero-trustpilot rounded-9 bg-white p-4 position-absolute shadow">
          <div class="trustpilot-logo">
            <a href="https://www.trustpilot.com/review/amethysthosting.co.uk" target="_blank">
              <img src="/img/trustpilot-light.svg" class="img-fluid">
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
              <img src="/img/trustpilot-light.svg" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container py-4">
    <div class="row">
      <div class="col-lg-4 d-none d-lg-block">
        <div class="card h-100 p-3 shadow">
          <p class="h2 m-0 text-center">Small</h2>
          <p class="lead m-0 fw-bold text-primary text-center">£1<span class="fw-normal small text-muted">/mo</span></p>
          <hr>
          <p class="lead m-0"><strong>2</strong> Subdomains</p>
          <p class="lead m-0"><strong>0</strong> Addon Domains</p>
          <p class="lead m-0"><strong>5</strong> SQL Databases</p>
          <p class="lead m-0"><strong>1</strong> Email Account</p>
          <p class="lead m-0"><strong>5GB</strong> SSD Storage</p>
          <p class="lead m-0"><strong>Unmetered</strong> Bandwidth</p>
          <p class="lead m-0"><strong>2GB</strong> RAM</p>
          <p class="lead m-0"><strong>2TBPS</strong> DDOS Protection</p>
          <p class="lead m-0"><strong>1</strong> Core CPU</p>
          <p class="lead m-0"><strong>Free</strong> Daily Backups</p>
          <p class="lead m-0"><strong>Free</strong> Malware Scanning</p>
          <p class="lead m-0"><strong>Free</strong> SSL Certificates</p>
          <p class="lead m-0"><strong>200+</strong> One Click Installs</p>
          <a class="btn btn-primary btn-block btn-lg mt-3">Buy Now</a>
        </div>
      </div>
      <div class="col-lg-4 d-none d-lg-block">
        <div class="card h-100 p-3 shadow">
          <p class="h2 text-center m-0">Medium</h2>
          <p class="lead m-0 fw-bold text-primary text-center">£2<span class="fw-normal small text-muted">/mo</span></p>
          <hr>
          <p class="lead m-0"><strong>5</strong> Subdomains</p>
          <p class="lead m-0"><strong>1</strong> Addon Domains</p>
          <p class="lead m-0"><strong>20</strong> SQL Databases</p>
          <p class="lead m-0"><strong>20</strong> Email Accounts</p>
          <p class="lead m-0"><strong>10GB</strong> SSD Storage</p>
          <p class="lead m-0"><strong>Unmetered</strong> Bandwidth</p>
          <p class="lead m-0"><strong>2GB</strong> RAM</p>
          <p class="lead m-0"><strong>2TBPS</strong> DDOS Protection</p>
          <p class="lead m-0"><strong>1</strong> Core CPU</p>
          <p class="lead m-0"><strong>Free</strong> Daily Backups</p>
          <p class="lead m-0"><strong>Free</strong> Malware Scanning</p>
          <p class="lead m-0"><strong>Free</strong> SSL Certificates</p>
          <p class="lead m-0"><strong>200+</strong> One Click Installs</p>
          <a class="btn btn-primary btn-block btn-lg mt-3">Buy Now</a>
        </div>
      </div>
      <div class="col-lg-4 d-none d-lg-block">
        <div class="card h-100 p-3 shadow">
          <p class="h2 m-0 text-center">Nitro</h2>
          <p class="lead m-0 fw-bold text-primary text-center">£3<span class="fw-normal small text-muted">/mo</span></p>
          <hr>
          <p class="lead m-0"><strong>Unmetered</strong> Subdomains</p>
          <p class="lead m-0"><strong>Unmetered</strong> Addon Domains</p>
          <p class="lead m-0"><strong>Unmetered</strong> SQL Databases</p>
          <p class="lead m-0"><strong>Unmetered</strong> Email Accounts</p>
          <p class="lead m-0"><strong>Unmetered</strong> SSD Storage</p>
          <p class="lead m-0"><strong>Unmetered</strong> Bandwidth</p>
          <p class="lead m-0"><strong>2GB</strong> RAM</p>
          <p class="lead m-0"><strong>2TBPS</strong> DDOS Protection</p>
          <p class="lead m-0"><strong>1</strong> Core CPU</p>
          <p class="lead m-0"><strong>Free</strong> Daily Backups</p>
          <p class="lead m-0"><strong>Free</strong> Malware Scanning</p>
          <p class="lead m-0"><strong>Free</strong> SSL Certificates</p>
          <p class="lead m-0"><strong>200+</strong> One Click Installs</p>
          <a class="btn btn-primary btn-block btn-lg mt-3">Buy Now</a>
        </div>
      </div>
      <div class="col-12 d-lg-none my-2">
        <div class="card p-3 shadow">
          <div class="container">
            <div class="row">
              <div class="col-12 col-sm-3 d-flex flex-column align-items-center justify-content-center"> 
                <p class="h2 m-0">Small</p>
                <p class="m-0 fw-bold text-primary">£1  <span class="fw-normal small text-muted">/mo</span></p>
              </div>
              <div class="col d-flex flex-column align-items-center justify-content-center"> 
                <p class="m-0 small"><strong>2</strong> Subdomains</p>
                <p class="m-0 small"><strong>0</strong> Addon Domains</p>
                <p class="m-0 small"><strong>5</strong> SQL Databases</p>
                <p class="m-0 small"><strong>1</strong> Email Account</p>
                <p class="m-0 small"><strong>5GB</strong> SSD Storage</p>
              </div>
              <div class="col-12 col-xs-4 col-sm-3">
                <a class="btn btn-primary btn-block btn-lg d-flex justify-content-center align-items-center h-100">Buy</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 d-lg-none my-2">
        <div class="card p-3 shadow">
          <div class="container">
            <div class="row">
              <div class="col-12 col-sm-3 d-flex flex-column align-items-center justify-content-center"> 
                <p class="h2 m-0">Medium</p>
                <p class="m-0 fw-bold text-primary">£2<span class="fw-normal small text-muted">/mo</span></p>
              </div>
              <div class="col d-flex flex-column align-items-center justify-content-center"> 
                <p class="m-0 small"><strong>5</strong> Subdomains</p>
                <p class="m-0 small"><strong>1</strong> Addon Domains</p>
                <p class="m-0 small"><strong>20</strong> SQL Databases</p>
                <p class="m-0 small"><strong>20</strong> Email Accounts</p>
                <p class="m-0 small"><strong>10GB</strong> SSD Storage</p>
              </div>
              <div class="col-12 col-xs-4 col-sm-3">
                <a class="btn btn-primary btn-block btn-lg d-flex justify-content-center align-items-center h-100">Buy</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 d-lg-none my-2">
        <div class="card p-3 shadow">
          <div class="container">
            <div class="row">
              <div class="col-12 col-sm-3 d-flex flex-column align-items-center justify-content-center"> 
                <p class="h2 m-0">Nitro</p>
                <p class="m-0 fw-bold text-primary">£3<span class="fw-normal small text-muted">/mo</span></p>
              </div>
              <div class="col d-flex flex-column align-items-center justify-content-center"> 
                <p class="m-0 small"><strong>Unmetered</strong> Subdomains</p>
                <p class="m-0 small"><strong>Unmetered</strong> Addon Domains</p>
                <p class="m-0 small"><strong>Unmetered</strong> SQL Databases</p>
                <p class="m-0 small"><strong>Unmetered</strong> Email Accounts</p>
                <p class="m-0 small"><strong>Unmetered</strong> SSD Storage</p>
              </div>
              <div class="col-12 col-xs-4 col-sm-3">
                <a class="btn btn-primary btn-block btn-lg d-flex justify-content-center align-items-center h-100">Buy</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 my-2">
        <div class="card p-3 shadow">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-4 col-md-12 d-flex justify-content-center align-items-center">
                <p class="h3 mb-3 mb-lg-0">Not Sure?</p>
              </div>
              <div class="col-lg-4 col-md-6 col-xs-12 d-flex justify-content-center align-items-center">
                <p class="m-0">If you're not sure, you can always contact us! We'll help you pick what's right for you.</p>
              </div>
              <div class="col-lg-4 col-md-6 col-xs-12">
                <a class="btn btn-primary btn-block d-flex justify-content-center align-items-center h-100">Contact Us</a>
              </div>
            </div>
          </div>
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
<?php include('../inc/footer.php'); ?>
</body>
</html>
