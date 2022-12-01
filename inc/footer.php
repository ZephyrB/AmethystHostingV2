<footer class="bg-black text-white text-center text-lg-start">
  <div class="container p-4">
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <img class="mb-3" src="/img/logo.png" width="190"><br>
        <p>
          <strong>Amethyst Hosting LTD</strong><br>
          Hosting Made Affordable<br>
          <strong>Company Number:</strong> 13831250<br>
          <strong>ICO Registration Number:</strong> ZB287820
        </p>
        <img class="mb-1" src="/img/trustpilot-dark.svg" width="190"><br>
        <img class="mb-1" src="/img/stars/stars-4.svg" width="190"><br>
        Rated <?php echo $tp['score']; ?>/5 by <?php echo $tp['of']; ?> reviews
      </div>
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <p class="h5 mb-0">Services</h5>
        <ul class="list-unstyled">
          <li><a href="#!" class="text-light">Website Hosting</a></li>
          <li><a href="#!" class="text-light">Domain Registration</a></li>
          <li><a href="#!" class="text-light">Minecraft Server Hosting</a></li>
          <li><a href="#!" class="text-light">Garry's Mod Server Hosting</a></li>
          <li><a href="#!" class="text-light">FiveM Server Hosting</a></li>
          <li><a href="#!" class="text-light">CS:GO Server Hosting</a></li>
          <li><a href="#!" class="text-light">Discord Bot Hosting</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <p class="h5 mb-0">Social Media</h5>
        <ul class="list-unstyled">
          <li><a href="#!" class="text-light">TrustPilot</a></li>
          <li><a href="#!" class="text-light">Facebook</a></li>
          <li><a href="#!" class="text-light">Instagram</a></li>
          <li><a href="#!" class="text-light">Twitter</a></li>
          <li><a href="#!" class="text-light">Discord</a></li>
        </ul>
        <p class="h5 mb-0">Resources</h5>
        <ul class="list-unstyled mb-0">
          <li><a href="#!" class="text-light">Blog</a></li>
          <li><a href="#!" class="text-light">Business Resources</a></li>
          <li><a href="#!" class="text-light">Network Status</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <p class="h5 mb-0">Company</h5>
        <ul class="list-unstyled">
          <li><a href="#!" class="text-light">About Us</a></li>
          <li><a href="#!" class="text-light">Careers</a></li>
          <li><a href="#!" class="text-light">Blog</a></li>
          <li><a href="#!" class="text-light">Contact Us</a></li>
          <li><a href="#!" class="text-light">Report Abuse</a></li>
          <li><a href="#!" class="text-light">Partnerships</a></li>
          <li><a href="#!" class="text-light">Terms & Conditions</a></li>
          <li><a href="#!" class="text-light">Privacy Policy</a></li>
        </ul>
        <p class="h5 mb-0">Support</h5>
        <ul class="list-unstyled">
          <li><a href="#!" class="text-light">Clientarea</a></li>
          <li><a href="#!" class="text-light">Knowledge Base</a></li>
          <li><a href="#!" class="text-light">Create Ticket</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    Copyright © 2022 <a class="text-light" href="/">Amethyst Hosting LTD</a>
  </div>
</footer>
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
<script type="text/javascript" src="/js/mdb.min.js"></script>
<script type="text/javascript"></script>