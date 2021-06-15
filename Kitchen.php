<?php
    session_start();
    if(!isset($_SESSION['is_login'])){
        echo "<script>location.href='index.php'</script>";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>DIY.it</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <link rel="stylesheet" href="CSSDummy.css">
    </head>
    <body>
        <nav style="width: 100%; height: 25%; background-color: rgb(87, 48, 61); background-image: url(img/hbg2.jpg); background-attachment: fixed;">
            <img src="img/DIY.it.png" alt="DIY.it" style="width: 10%; padding-left: 3%; padding-top: 1.5%; padding-bottom: 1.5%;">
            <a href="Home.php"><button type="button" class="btn btn-dark" style="margin-left: 4%; color: #ce97b0; margin-right: 1%; width: 12%;">Home</button></a>
            <a href="BlogD.php"><button type="button" class="btn btn-dark" style="margin-left: 1%; width: 12%; color: #ce97b0; margin-right: 1%;">Blogs</button></a>
            <a href="UploadDIYs.php"><button type="button" class="btn btn-dark" style="margin-left: 1%; width: 12%; color: #ce97b0; margin-right: 1%;">Upload DIYs</button></a>
            <a href="AboutUsD.php"><button type="button" class="btn btn-dark" style="margin-left: 1%; color: #ce97b0; margin-right: 1%; width: 12%;">About Us</button></a>
        </nav>
        <container class="MainC">
        <h1 class="animate__fadeInUp">
            Kitchen DIY : Know How to work with ease.
        </h1>
        <div class="SubC">
        &nbsp;
         &nbsp;
        &nbsp;
        <h2>
            1. DIY Herb Planter Cutting Board
        </h2>
        <center><img src="img/bgimg1.jpg" class="BgImg"></center>
        &nbsp;
        <h4>
            Cooking with fresh herbs is an easy way to enhance your meal, so make it easier to add herbs to your favorite dish with a planter that doubles as a cutting board. This way you can pick a few leaves off your favorite herb and chop them up on the cutting board before tossing them into whatever dish you are making.
        </h4>
        &nbsp;
        &nbsp;
        <h2>
            2. DIY Abstract Painted Plates
        </h2>
        <center><img src="img/bgimg2.jpg" class="BgImg"></center>
        &nbsp;
        <h4>
            For your next celebration, skip the paper plates and make some reusable brightly colored plates that you can paint with abstract designs. Here, low-cost and plain Ikea plates are brightened up with ceramic paints.
        </h4>
        &nbsp;
        &nbsp;
        <h2>
            3. DIY Painted Cabinets
        </h2>
        <center><img src="img/bgimg3.jpg" class="BgImg"></center>
        &nbsp;
        <h4>
            Give your kitchen a makeover by painting your cabinets. It's a fun and dramatic change that does not cost a lot of money to do. Use liquid sandpaper to make the project easier to handle.
        </h4>
        &nbsp;
        &nbsp;
        <h2>
            4. DIY Kitchen Storage Jars
        </h2>
        <center><img src="img/bgimg4.jpg" class="BgImg"></center>
        &nbsp;
        <h4>
            Store all your essential ingredients like sugar and flour in some simple yet beautiful DIY storage jars. Black porcelain paint is the key to this project.
        </h4>
        &nbsp;
        &nbsp;
        <h2>
            5. DIY Kitchen Rug
        </h2>
        <center><img src="img/bgimg5.jpg" class="BgImg"></center>
        &nbsp;
        <h4>
            Decorate your kitchen floor with a custom rug. The fabric will provide you a soft spot to stand on when you do the dishes. You'll need a sewing machine for this project.
        </h4>
        </div>
        &nbsp;
        &nbsp;
        <hr>
        &nbsp;
        <div class="SubCC">
        <h2 style="margin-bottom:2%;" class="animate__zoomIn">
            MORE DIYs FOR KITCHEN
        </h2>
        <img src="img/More1.jpg" class="MRImg">
        <img src="img/More2.jpg" class="MRImg">
        <img src="img/More3.jpg" class="MRImg">
        </div>
        <div>
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
        </div>
        </container>

    </body>
</html>