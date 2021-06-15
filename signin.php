<?php
    include('dbconnection.php');
    session_start();
    if(!isset($_SESSION['is_login'])){
        if(isset($_REQUEST['submitbtn'])){
            //check for empty input fields
            if($_REQUEST['uemail']=="" || $_REQUEST['upswd']==""){
                $msg = "All Fields Are required.";
            }else{
                $email = mysqli_real_escape_string($conn , trim($_REQUEST['uemail']));
                $pwd = mysqli_real_escape_string($conn , trim($_REQUEST['upswd']));
                $sql = "SELECT email, pwd FROM sign_in WHERE email = '$email'";
                $result = $conn->query($sql);
                if($result->num_rows == 1){
                    $row = $result->fetch_assoc();
                    if($pwd == $row['pwd']){
                        $_SESSION['is_login'] = true;
                        $_SESSION['email'] = $email;
                        echo "<script>location.href='Home.php'</script>";
                    }else{
                        $msg = "incorrect password";
                    }
                }
            }
        }
    }else{
        echo "<script>location.href='Home.php'</script>";
    }
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title>DIY.it > SignIn</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <link rel="stylesheet" href="CSSDummy.css">
    </head>
    <body>
    <nav style="width: 100%; height: 20%; background-attachment: fixed; background-color: #d1d9d9;">
            <img src="img/DIY.it.png" alt="DIY.it" style="width: 9.5%; padding-left: 3%; padding-top: 1%; padding-bottom: 1%;">
        </nav>
    <div class="MainC">

            <div class="SubC">
                <center><h2>Sign In</h2></center>
                <hr>
                <form method="post">
                <center>
                    <table cellspacing="30%">
                        <center>
                            <tr>
                                <td>
                                    <label class="label">Email Address</label>
                                    <input type="email"  class="form-control" name="uemail" placeholder="Email address" required autofocus>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="label">Password</label>
                                    <input type="password"  class="form-control" name="upswd" placeholder="Password" required autofocus>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <center><button class="btn btn-primary" name="submitbtn" type="submit">SignIn</button></center> 
                                </td>
                            </tr>
                            </center>
                    </table>
                    
                    <?php if(isset($msg)){ echo $msg; } ?>
                </form>
                <a href="signup.php">
                    Not a user??<br>
                    SignUp now!!!
                </a>
                </center>
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