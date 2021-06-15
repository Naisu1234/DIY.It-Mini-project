<?php
    session_start();
    if(!isset($_SESSION['is_login'])){
        echo "<script>location.href='index.php'</script>";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>DIY.it > Blogs</title>
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
        <div class="MainC">
            <div class="SubC">
                <h2>Blogs :</h2>
                <hr>
                &nbsp;
                <div>
                    <h3>Fashion Blogs :</h3>
                    <p style="width: 95%; margin-top: 1%; padding: 2%; margin-left: 1%; padding-right: 4%;">
                        1.Add a pop of color to your wardrobe with a handmade bauble necklace.<br>
                        2.Try bleach painting your clothing. It's easy and inexpensive!<br>
                        3.Make this lightweight and summery wax print hobo bag.<br>
                        4.Put a big bright heart on your clothing with this easy tutorial!<br>
                        5.Replace the back of a shirt with a bandana. Cute, huh? <br>
                         
                        <a href="fashion.php"><button type="button" class="btn btn-dark" style="margin-top: 1%;">View More</button></a>
                    </p>
                    <img src="img/fashion2.jpg" class="BlogI">
                    <img src="img/fashion11.jpg" class="BlogI">
                    <img src="img/fashion22.jpg" class="BlogI">
                    &nbsp;
                    &nbsp;
                    <hr style="margin-top: 2%; color: black;">
                    
                    <h3 style="margin-top: 1%;">Kitchen DIY Blogs :</h3>
                    <p style="width: 95%; margin-top: 1%; padding: 2%; margin-left: 1%; padding-right: 4%;">
                        1.Add a pop of color to your wardrobe with a handmade bauble necklace.<br>
                        2.Try bleach painting your clothing. It's easy and inexpensive!<br>
                        3.Make this lightweight and summery wax print hobo bag.<br>
                        4.Put a big bright heart on your clothing with this easy tutorial!<br>
                        5.Replace the back of a shirt with a bandana. Cute, huh? <br>
                         
                        <a href="Kitchen.php"><button type="button" class="btn btn-dark" style="margin-top: 1%;">View More</button></a>
                    </p>
                    <img src="img/kitchen2.jpg" class="BlogI">
                    <img src="img/kitchen11.jpg" class="BlogI">
                    <img src="img/kitchen22.jpg" class="BlogI">
                    &nbsp;
                    &nbsp;
                    <hr style="color: black; margin-top: 2%;">
                    
                    <h3 style="margin-top: 1%;">DIY Room Blogs :</h3>
                    <p style="width: 95%; margin-top: 1%; padding: 2%; margin-left: 1%; padding-right: 4%;">
                        1.Add a pop of color to your wardrobe with a handmade bauble necklace.<br>
                        2.Try bleach painting your clothing. It's easy and inexpensive!<br>
                        3.Make this lightweight and summery wax print hobo bag.<br>
                        4.Put a big bright heart on your clothing with this easy tutorial!<br>
                        5.Replace the back of a shirt with a bandana. Cute, huh? <br>
                         
                        <a href="Room.php"><button type="button" class="btn btn-dark" style="margin-top: 1%;">View More</button></a>
                    </p>
                    <img src="img/room2.jpg" class="BlogI">
                    <img src="img/room11.jpg" class="BlogI">
                    <img src="img/room22.jpg" class="BlogI">
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
        

    </body>
</html>