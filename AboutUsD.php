<?php
    session_start();
    if(!isset($_SESSION['is_login'])){
        echo "<script>location.href='index.php'</script>";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>DIY.it > About Us</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <link rel="stylesheet" href="CSSDummy.css">
    </head>
    <body>
        <nav style="width: 100%; height: 25%;  background-image: url(img/hbg2.jpg); background-attachment: fixed; background-repeat: no-repeat;">
            <img src="img/DIY.it.png" alt="DIY.it" style="width: 10%; padding-left: 3%; padding-top: 1.5%; padding-bottom: 1.5%;">
            <a href="Home.php"><button type="button" class="btn btn-dark" style="margin-left: 4%; color: #ce97b0; margin-right: 1%; width: 12%;">Home</button></a>
            <a href="BlogD.php"><button type="button" class="btn btn-dark" style="margin-left: 1%; width: 12%; color: #ce97b0; margin-right: 1%;">Blogs</button></a>
            <a href="UploadDIYs.php"><button type="button" class="btn btn-dark" style="margin-left: 1%; width: 12%; color: #ce97b0; margin-right: 1%;">Upload DIYs</button></a>
            <a href="AboutUsD.php"><button type="button" class="btn btn-dark" style="margin-left: 1%; color: #ce97b0; margin-right: 1%; width: 12%;">About Us</button></a>
          </nav>
        <div class="MainC">
            <div class="SubC">
                <center><h2 class="animate__zoomIn">About Us</h2></center>
                <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100 CIMG" src="img/aboutimg1.jpg" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h2 class="CC">Create till you get satisfied!!</h2>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100 CIMG" src="img/aboutimg2.jpg" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h2 class="CC">Style it in your own way</h2>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100 CIMG" src="img/aboutimg3.jpg" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h2 class="CC">Have fun and DO IT YOURSELF</h2>
                        </div>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only"></span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only"></span>
                    </a>
                  </div>
                  <div class="CLPS">
                    <p style="width: 80%; margin-left: 9%;">
                        <button class="btn btn-light" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                          Our Team
                        </button>
                    </p>
                    <div class="collapse" id="collapseExample" style="width: 80%; margin-left: 9%; margin-bottom: 2%;">
                        <div class="card card-body">
                          We actually don't have a team, we have a DIY family. We have so many helping hands including content department, design department and a lot more. 
                        </div>
                    </div>
                  </div>
                 
                  <div class="CLPS">
                    <p style="width: 80%; margin-left: 9%;">
                        <button class="btn btn-light" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                          Our Work
                        </button>
                    </p>
                    <div class="collapse" id="collapseExample" style="width: 80%; margin-left: 9%; margin-bottom: 2%;">
                        <div class="card card-body">
                         We provide the platform to people who loves to learn and create DIYs. We give every person a fair chance through which they can gain the best DIYs possible to learn and work on.
                        </div>
                    </div>
                  </div>

                  <div class="CLPS">
                    <p style="width: 80%; margin-left: 9%;">
                        <button class="btn btn-light" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                          Our Vision
                        </button>
                    </p>
                    <div class="collapse" id="collapseExample" style="width: 80%; margin-left: 9%; margin-bottom: 2%;">
                        <div class="card card-body">
                          Vision of DIY.It is to create a platform full of DIYs which can create the whole world a beautiful and creative place.
                        </div>
                    </div>
                  </div>
            </div>
            <div style="background-image: url(img/finalbg3.jpg); background-attachment: fixed;">
                <center>
                    <h5 class="footer">Follow Us On
                  <br>
                    <img src="img/instagram.png" class="FooterI">
                    <img src="img/mail.png" class="FooterI">
                    <img src="img/twitter.png" class="FooterI">
                    <img src="img/fb.png" class="FooterI">
                    </h5>   
                </center>
              </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>