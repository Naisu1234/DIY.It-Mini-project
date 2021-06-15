<?php
    session_start();
    if(!isset($_SESSION['is_login'])){
        echo "<script>location.href='index.php'</script>";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>DIY.it > Home</title>
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
                <h2>Welcome to the world of DIYs!!</h2>
                <p style="width: 90%; background-color: #dabac8; color: black; padding: 1%;">
                    A platform to create and learn DIYs. Play with some DIYs, create your own DIYs and let other's to get inspired by you!!!!
                </p>
                <table>
                    <tr class="Home">
                        <td style="width: 60%; margin-right: 0.5%; margin-left: 5%;">
                            <div class="card" style="width: 18rem;">
                                <img src="img/kitchenh.jpg" class="card-img-top" alt="Kitchen DIYs">
                                <div class="card-body">
                                  <h5 class="card-title">KITCHEN DIYs</h5>
                                  <p class="card-text" style="background-color: white; color: black; padding-right: 7%">Wanna learn something awesome and useful DIYs for your kitchen just click View More!!! </p>
                                  <a href="Kitchen.php" class="btn btn-primary">View More</a>
                                </div>
                            </div>
                        </td>
                        <td style="width: 60%; margin-right: 4%; height: 90%; margin-left: 1%;">
                            <div class="card" style="width: 18rem;">
                                <img src="img/fashion1.jpg" class="card-img-top" alt="fashion DIYs">
                                <div class="card-body">
                                  <h5 class="card-title">FASHION DIYs</h5>
                                  <p class="card-text" style="background-color: white; color: black; padding-right: 7%">Learn some of the best fashion DIYs with us and turn your old clothes into new and stylish ones by just one click. </p>
                                  <a href="fashion.php" class="btn btn-primary">View More</a>
                                </div>
                            </div>
                        </td>
                        <td style="width: 60%; margin-right: 4%; margin-left: 5%;">
                            <div class="card" style="width: 18rem;">
                                <img src="img/rooomh.webp" class="card-img-top" alt="Room DIYs">
                                <div class="card-body">
                                  <h5 class="card-title">ROOM DIYs</h5>
                                  <p class="card-text" style="background-color: white; color: black; padding-right: 7%">Turn your room in a new and dashing one with us by just clicking View More!!!! </p>
                                  <a href="Room.php" class="btn btn-primary">View More</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>    
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