<?php
    session_start();
    if(!isset($_SESSION['is_login'])){
        echo "<script>location.href='index.php'</script>";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>DIY.it > Upload_DIYs</title>
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
                <div>
                    <h2 class="text-center text-dark">Upload DIYs</h2>
                    <form>
                        <div class="row form-group">
                            <div class="col-sm-4">
                                <label class="font-weight-bold">First Name :</label>
                                <input type="text" name="fname" class="form-control">
                            </div>
                            <div class="col-sm-4">
                                <label class="font-weight-bold">Last Name :</label>
                                <input type="text" name="lname" class="form-control">
                            </div>
                        </div>
                        <div class="form-group col-sm-8">
                            <label>Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                          
                        <div class="form-group col-md-4">
                            <label for="inputState">Country</label>
                            <select id="inputState" class="form-control">
                              <option selected>Choose...</option>
                              <option>India</option>
                              <option>USA</option>
                              <option>Nepal</option>
                              <option>China</option>
                              <option>England</option>
                              <option>UAE</option>
                              <option>Pakistan</option>
                              <option>Russia</option>
                              <option>Shrilanka</option>
                            </select>
                          </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                              DIY Video
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                            <label class="form-check-label" for="exampleRadios2">
                              DIY Images
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Example file input</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                        
                        <button type="submit" class="btn btn-primary mt-5 px-5">Upload</button>

                      </form>
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