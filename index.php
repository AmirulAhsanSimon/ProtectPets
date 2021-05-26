<?php include 'header.php'; ?>
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/animal.jpg" alt="Los Angeles" width="1000" height="500">
      <div class="carousel-caption">
        <h3>LOVE ANIMAL</h3>
        <p>Save animal serve community!</p>
      </div>   
    </div>
    
    <div class="carousel-item">
      <img src="img/animal1.jpg" alt="" width="1000" height="500">
      <div class="carousel-caption">
        <h3>SAVE ANIMAL</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<section class="my-5">
  <!-- Heading floating 2 section text and image -->
  <div class="py-5">
    <h3 class="text-center">Why this website</h3>
  </div>
  <div class = "container-fluid"> 
  <div class="row">
    <!--image of floating 2 section text and image -->
    <div class="col-lg-6 col-md-6 col-12">
       <img src="img/why.jpg" class="img-fluid aboutimg">
    </div>
    <!--text of floating 2 section text and image -->
    <div class="col-lg-6 col-md-6 col-12">
       <h2 class="display-4">Save homeless animals </h2>
        <p class="py-5">Share a rescue post through our website and save a life for our ecosystem.
        Your kindness can save a life. If you want to rescue any anmial, you can check news and rescue those animal through this website. </p>      
      
    </div>
  </div>
</div>  
<div class="jumbotron">
  <img src="img/new.jpg">
  <h1>Why animals are important</h1>
  <p>The animal is everywhere in a humans life if talk about food or to keeping them as a pet. Some animals are a source of earning for few people, some are living with them as their family member. I will be sharing my own experience with you guys to let you know what I feel about the importance of animals to man.

I have my experience with our pet German shepherd, his name was Stevie. when my wife was pregnant we had that sweet dog. He would come to her and keep his head on her belly most of the time. Then my daughter was born after a few months. What I noticed is Stevie was exited same as I was when he saw my daughter the first time. He liked playing with her a lot and enjoying and making my daughter laugh. he lived for about four and a half year after my daughter born.

what I felt is he would understand that my daughter was a child and never to harm her. He would recognize her and enjoy playing with her.</p>
<h4>
YOU WILL ALWAYS BE THERE IN OUR HEART STEVIE.</h4>
</div>
<footer>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <div class="container">
    <div class="sec aboutus m-right">
      <h2>About us</h2>
      <p>We provided a website for animal welfare. Our goal is safe animals, safe ecosystem. This is a nonprofit project. </p>
      <ul class="sci">
      <li><a href="https://www.facebook.com/Protect-Pets-105525271471970"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
      <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
      <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
      <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
    </ul>   
    </div>
    <div class="sec quickLinks ml-auto">
      <h2>Quick Links</h2>
      <ul>
        <li><a href="#">About</a></li>
        <li><a href="#">FAQ</a></li>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Helps</a></li>
        <li><a href="#">Terms & Conditions</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>
    <div class="w 30 ml-auto">
      <form action="userinfo.php" method="post">
        <div class="form-group">
          <label>Email</label>
          <input type="text" name="email" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Mobile</label>
          <input type="text" name="mobile" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Comments</label>
          <textarea class="form-control"></textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-success">Submit</button>
      </form>
    </div>
    
  </div>
  
</footer>

<?php include 'footer.php'; ?>
</body>
</html>
