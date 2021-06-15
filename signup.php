<?php
  include('dbConnection.php');
  if(isset($_REQUEST['submitbtn']))
  {
    //check for empty fields
    if(($_REQUEST['uname'])=="" ||($_REQUEST['uemail'])=="" ||($_REQUEST['uphone'])=="" ||($_REQUEST['upswd'])==""){
      $msg= '<div class="alert alert-warning mt-3" role="alert">All Fields are Required</div>';
    }else{
      $sql = "SELECT uemail FROM sign_up WHERE uemail = '".$_REQUEST['uemail']."'";
      $result = $conn->query($sql);
      if($result->num_rows == 1){
        $msg= '<div class="alert alert-warning mt-3" role="alert">This Email is Already Registerd</div>';
      }else{
        // assigning variables
        $u_name = $_REQUEST['uname'];
        $u_email = $_REQUEST['uemail'];
        $u_phn = $_REQUEST['uphone'];
        $u_pswd = $_REQUEST['upswd'];
        
        $sql = "INSERT INTO sign_up(uname,uemail,uphone,upswd) VALUES('$u_name','$u_email','$u_phn','$u_pswd')";
        //instert into db
        if($conn->query($sql) == TRUE){
          $msg= '<div class="alert alert-success mt-3" role="alert">Account Created Successfully.</div>';
          echo "<script>location.href='Home.php'</script>";
        }else{
          $msg= '<div class="alert alert-danger mt-3" role="alert">Unable To Create Account</div>';
        }
      }
    }
  }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>DIY.it > SignUp</title>
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
                <center><h2>Sign Up</h2></center>
                <hr>
                <form method="post">
                    <table cellspacing="30%">
                        <center>
                            <tr>
                                <td>
                                    <label class="label">Name</label>
                                    <input type="text"  class="input form-control" name="uname" placeholder="name" required autofocus>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="label">Email Address</label>
                                    <input type="email"  class="input form-control" name="uemail" placeholder="Email address" required autofocus>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="label">Phone Number</label>
                                    <input type="tel" id="inputPassword" class="input form-control" name="uphone" placeholder="Phone number" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="label">Password</label>
                                    <input type="password"  class="input form-control" name="upswd" placeholder="Password" required autofocus>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <center><button class="btn btn-primary" name="submitbtn" type="submit">Confirm</button></center>
                                    <?php if(isset($msg)){ echo $msg; } ?> 
                                </td>
                            </tr>
                            </center>
                    </table>
                </form>
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