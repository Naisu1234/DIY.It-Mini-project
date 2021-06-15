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
            Room DIYs : Get a new vibe in your room!!!
        </h1>
        <div class="SubC">
        &nbsp;
         &nbsp;
        &nbsp;
        <h2>
            1. DIY Wall Clock
        </h2>
        <center><img src="img/roombg1.jpeg" class="BgImg"></center>
        &nbsp;
        <h4>
            Want some cute new decor ideas for your room? When it comes to the best DIY teen bedroom ideas, this adorable clock is a winner. Wake up to a peacock every morning when you make this fun wall decor idea.
        </h4>
        &nbsp;
        &nbsp;
        <h2>
            2. Air Plant Pot
        </h2>
        <center><img src="img/roombg2.webp" class="BgImg"></center>
        &nbsp;
        <h4>
            Cute DIY room decor does not have to be complicated or expensive. When it comes to our favorite DIY teen room decor ideas, creative projects like these crafty pots are some of our favorites. Add some air plants to them and create the perfect DIY gift idea for teens, as upkeep of the plants is super simple, no green thumb or babysitting required.
        </h4>
        &nbsp;
        &nbsp;
        <h2>
            3.DIY Picture Frame
        </h2>
        <center><img src="img/roombg3.jpg" class="BgImg"></center>
        &nbsp;
        <h4>
            When it comes to cheap decorating ideas for teen rooms, I love cardboard. Whether you want to decorate the door creatively or add simple wall decor ideas like this one, cardboard is cheap and can be picked up at the dollar store, comes in lots of colors and patterns, and it will not harm the walls. Add cardboard frames around photos and prints to make a creative statement on the walls, then switch it up when you are ready for something new.
        </h4>
        &nbsp;
        &nbsp;
        <h2>
            4. DIY Pom Pom Tassel Garland
        </h2>
        <center><img src="img/roombg4.jpg" class="BgImg"></center>
        &nbsp;
        <h4>
            Looking for a super colorful but easy to make idea to decorate your bedroom or your teen daughter’s room? Make pom poms out of rainbow yarn and add them to the walls for decor. These look awesome hanging on any wall, but we love styling them over the bed and I’ve even seen them over a desk, adding a pop of color and creativity wherever you need it.
        </h4>
        &nbsp;
        &nbsp;
        <h2>
            5. Dyed Mini Rug
        </h2>
        <center><img src="img/roombg5.jpg" class="BgImg"></center>
        &nbsp;
        <h4>
            This DIY rug idea is dyed sheepskin, and it actually does not have to be pink. It can be turquoise, aqua, magenta, navy, orange, purple or lavender, blue or yellow, pretty much choose your favorite color and learn how to make this crafty rug that makes a nice place to put your feet when you get out of bed every morning.
        </h4>
        </div>
        &nbsp;
        &nbsp;
        <hr>
        &nbsp;
        <div class="SubCC">
        <h2 style="margin-bottom:2%;" class="animate__zoomIn">
            MORE DIYs FOR ROOM
        </h2>
        <img src="img/room11.jpg" class="MRImg">
        <img src="img/room22.jpg" class="MRImg">
        <img src="img/room2.jpg" class="MRImg">
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