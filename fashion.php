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
            Fashion DIYs : Style your clothes stunningly.
        </h1>
        <div class="SubC">
        &nbsp;
         &nbsp;
        &nbsp;
        <h2>
            1. Color Group Matching
        </h2>
        <center><img src="img/fashionbg1.png" class="BgImg"></center>
        &nbsp;
        <h4>
            Assess what you own and look at the color, nothing else. What do you see? A rainbow? Monochrome? If you are someone who loves to wear every color at once, try creating some new outfits by opting for a single color. This can create variations on your usual style just by changing up the combinations of your clothes.
        </h4>
        &nbsp;
        &nbsp;
        <h2>
            2. Layers, Layers, Layers!
        </h2>
        <center><img src="img/fashionbg2.jpg" class="BgImg"></center>
        &nbsp;
        <h4>
            When Marilyn Monroe sang “Diamonds are a girl’s best friend,” she was wrong – in fact, layering is a girl’s best friend. Layering is often thought of as a winter trope. While this is true (ideal for adding warmth), layering can also be cool in summer if you get the fabric combinations correct.
        </h4>
        &nbsp;
        &nbsp;
        <h2>
            3.Go all out with color
        </h2>
        <center><img src="img/fashionbg3.jpg" class="BgImg"></center>
        &nbsp;
        <h4>
            If you want your ensemble to have personality, forget everything you know about what colors "go together." There are no rules! Combine neons, neutrals, pastels, and more into one outfit to make it purposeful and to stand out.
        </h4>
        &nbsp;
        &nbsp;
        <h2>
            4. Wear a matching set
        </h2>
        <center><img src="img/fashionbg4.jpg" class="BgImg"></center>
        &nbsp;
        <h4>
            This is one of the easiest ways to look chic. Any coordinating two-piece like a pantsuit, skirt suit, knit set, or even sweatsuit looks automatically fashionable. Then all you have to do is pick out your shoes and other accessories to go with it.
        </h4>
        &nbsp;
        &nbsp;
        <h2>
            5. Pair a blazer with a graphic tee
        </h2>
        <center><img src="img/fashionbg5.jpg" class="BgImg"></center>
        &nbsp;
        <h4>
            A luxe blazer over an edgier graphic T-shirt paired with jeans pulls off that "high-low" look. It's an effortless 'fit that's both casual and dressed up, no matter where you're heading.
        </h4>
        </div>
        &nbsp;
        &nbsp;
        <hr>
        &nbsp;
        <div class="SubCC">
        <h2 style="margin-bottom:2%;" class="animate__zoomIn">
            MORE DIYs FOR FASHION
        </h2>
        <img src="img/fashion11.jpg" class="MRImg">
        <img src="img/fashion22.jpg" class="MRImg">
        <img src="img/fashion2.jpg" class="MRImg">
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