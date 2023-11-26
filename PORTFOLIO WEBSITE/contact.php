<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Personal Portfolio Website</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body style="background-color: aqua;">
    <div class="container">
      <div class="sidebar sidebar2">
        Rohit Gupta
        <nav>
          <ul>
            <li><a href="/">HOME</a></li>
            <li><a href="/about.html">ABOUT</a></li>
            <li><a href="/intro.html">SKILLS</a></li>
            <li><a href="/project.html">PROJECTS</a></li>
            <li><a href="/contact.php">CONTACT</a></li>
           
          </ul>
        </nav>
      </div>
      <div class="main">
          <div class="hamburger">
              <img class="ham" src="hamb.png" alt="hamburger image" width="23px">
              <img class="cross" src="close.png" alt="cross image" width="23px">
          </div>
  </div>
        <div class="contactform">
            <h1>Contact me for work/general Enquiries</h1>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="clientname" class="form-label"><b>Enter Full Name:</b></label><br>
                    <input type="text" class="form-control" name="t1" id="clientemail" aria-describedby="emailHelp" placeholder="Please Enter Your Full Name" required><br><br>
                  <label for="clientemail" class="form-label"><b>Email address:</b></label><br>
                  <input type="email" class="form-control" name="t2" id="clientemail" aria-describedby="emailHelp" placeholder="Please Enter Your Email-address" required>
                  <div id="emailHelp" class="form-text">We'll never share your email & phone with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="clientphone" class="form-label"><b>Phone Number:</b></label><br>
                  <input type="password" class="form-control" name="t3" id="clientphone" placeholder="Please Enter Your Phone Number"><br><br>
                  <label for="clientenquiry" class="form-label"><b>Enquiry:</b></label><br>
                  <input type="text" class="form-control" name="t4" id="clientemail" aria-describedby="emailHelp" placeholder="Please Enter Your Enquiry" required>
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="isclient">
                  <label class="form-check-label" for="isclient">I want you to work on a project with me</label>
                </div>
                <button type="submit" class="btn btn-primary" id="btn-1" name="sub">Submit</button>
                <div class="socials">
                  <a href="https://twitter.com/rohitgu74315419" target="_blank">
                    <img width="50" height="50" src="https://img.icons8.com/ios-filled/50/twitterx--v1.png" alt="twitterx--v1"/>
                  <a href="https://www.instagram.com/real_rohit_gupta_45/" target="_blank">
                    <img width="48" height="48" src="https://img.icons8.com/fluency/48/instagram-new.png" alt="instagram-new"/>
                  </a>
                  <a href="https://linkedin.com/in/rohit-gupta-437b3525a" target="_blank">
                    <img width="48" height="48" src="https://img.icons8.com/fluency/48/linkedin.png" alt="linkedin"/></a>
                  <a href="https://github.com/rohit730398777" target="_blank">
                    <img width="50" height="50" src="https://img.icons8.com/ios-filled/50/github.png" alt="github"/>
                  </a>
  
              </form>
              <?php
                if(isset($_POST['sub']))
                {
                   $con=mysqli_connect("localhost","root","","contactphp");
                   if($con){
                    echo "Connection Successfull...";
                   }
                   else{
                    echo "connection UnSuccessfull...";
                   }

                   $fullname=$_POST['t1'];
                   $email=$_POST['t2'];
                   $phone=$_POST['t3'];
                   $enquiry=$_POST['t4'];

                  //Queries mysqli
                 $qr="insert into contact(fullname,email,mobile,enquiry)values('$fullname','$email','$phone','$enquiry')";
                
                 //Variables response
                 $res=mysqli_query($con,$qr);
                 if($res)
                 {
                   echo "ThankYou For Contact Us..";
                 }
                 else{
                  echo "record not inserted..";
                 }



                }



              ?>

              
        </div>
      </div>
    </div>
    <script src="script.js"></script>
  </body>
</html>
