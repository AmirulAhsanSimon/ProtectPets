<?php 
session_start();
include 'header.php';
include ('functions/functions.php');
?>
<?php 
     if(isset($_GET['logout'])) {
     session_destroy();
      if ($_SESSION['user'] == 'user') {
        header("Location:loginuser.php");;
      }elseif($_SESSION['user'] == 'volunteer'){
        header("Location:login.php");;
      }
     }
 ?>
<?php
if ( isset($_SESSION['username'])) {

}else{
     header("Location: index.php");
     exit();
}
 ?>
<!DOCTYPE html>
<html>
<head>
     <title><?php echo "$username"; ?></title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <a class="navbar-brand" href="#">Welcome to ProtectPets</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    </ul>
    <form class="form-inline my-2 my-lg-0">
     <a href="?logout" class=" mr-1" type="button">Hello, <?php echo $_SESSION['username']; ?></a>
          <a href="?logout" class="btn btn-outline-success" type="submit">logout</a>
    </form>
  </div>
</nav>
<div class="row">
  <div id="insert_post" class="col-sm-12">
    <center>
    <form action="homeu.php?id=<?php echo $user_id ?>" method="post" id="f" enctype="multipart/form-data">
    <textarea class="form-control" id="content" rows="4" name="content" placeholder="Here give the rescue posts!"></textarea><br>
    <label class="btn btn-warning" id="upload_image_button">Select Image
    <input type="file" name="upload_image" size="30">
    </label>
    <button id="btn-post" class="btn btn-success" name="sub">Post</button>
    </form>
    <?php insertPost();?>
    </center>
  </div>
</div>
<div class="row">
  <div class="col-sm-12">
    <center><h2><strong>News Feed</strong></h2><br></center>
   
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
