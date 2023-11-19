<?php
include_once 'includes/session.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php 
            echo "HELLO WORLD-$title";
        ?>
    </title>
    <link href="./css/styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body style="background-color: rgb(69, 138, 141);">
  <nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary" style="border-radius:10px;">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
        <img src="images/logo.bmp" alt="Bootstrap" width="50" height="50">
    </a>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <ul class="navbar-nav mr-auto">
              <?php
                if(!isset($_SESSION['user_id'])){
              ?>
                <li class="nav-item">
                  <a style="color:orangered;" class="nav-link active" id="head" href="login.php">Sign In</a>
                </li>
                <li class="nav-item">
                    <a style="color:orangered;" class="nav-link active" id="head" href="sign_up.php">Sign Up</a>
                </li>
              <?php } else{ ?>
                <a style="color:orangered;" class="nav-link active" id="head" href=".\interact.php?id=<?php echo $_SESSION['user_id']?>"><span class="sr-only">Hello <?php echo $_SESSION['user_name'] ?>!</span></a>
                <li class="nav-item">
                  <a style="color:orangered;" class="nav-link active" id="head" href="logout.php">Sign Out</a>
                </li>
              <?php }?>
        </ul>
        <li class="nav-item">
          <a class="nav-link active" style="color:orangered;" id="head" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" style="color:orangered;" id="head" href="courses.php">Explore</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" style="color:orangered;" id="head" href="communicate.php">Communicate</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" style="color:orangered;" id="head" href="help.php">Help</a>
        </li>
      </ul>
    </div>
  </div>
</nav>