<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Oswald:wght@500;700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="contact_styles.css">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<nav class="navbar navbar-expand-lg  fixed-top" >
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-transparent fixed-top" > -->
      <div class="container">
          
        <a class="navbar-brand" href="#"><img class="f1logo" src="images/logo.png" height="80px" width="100%"></a>
        <button class="navbar-toggler ml-auto"  type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="  my-toggler" ></span>
          <span class="toggle-line"></span>
          <span class="toggle-line"></span>
          <span class="toggle-line"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            
            <li class="nav-item ">
              <a class="nav-link active" aria-current="page" href="index.html">HOME</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                SEASONS
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">SPONSORS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">JOIN US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">CONTACT</a>
            </li>
          </ul>
  
        </div>
      </div>
    </nav>
<body>
  <div class="container">
    <div class="contactUs">
      <div class="title">
      <h2>Get in Touch</h2>
    </div>
    <div class="box">
      <!-- Form -->
      <div class="contact form">
        <h3>Send a Message</h3>
        <form action="" method="post">
          <div class="formBox">
            <div class="row50">
              <div class="inputBox">
                <span>First Name</span>
                <input type="text" name="fname" placeholder="John">
              </div>
              <div class="inputBox">
                <span>Last Name</span>
                <input type="text" name="lname" placeholder="Doe">
              </div>
            </div>

            <div class="row50">
              <div class="inputBox">
                <span>Email</span>
                <input type="text" name="email" placeholder="johndoe@gmail.com">
              </div>
              <div class="inputBox">
                <span>Mobile</span>
                <input type="text" name="mobile" placeholder="+91 8281182358">
              </div>
            </div>

            <div class="row100">
              <div class="inputBox">
                <span>Message</span>
                <textarea name="msg"  placeholder="Write Your message here.."></textarea>
              </div>
              </div>

              <div class="row100">
                <div class="inputBox">
                  <input type="submit" name="send" value="Send">
                </div>
                </div>

          </div>
        </form>
      </div>

      
      <!-- Info box -->
      <div class="contact info">
        <h3>Contact Info</h3>
        <div class="infoBox">
          <div>
            <span><ion-icon name="location"></ion-icon></span>
            <p>Rajiv Gandhi Institute of Technology,Mumbai<br>India</p>
          </div>

          <div>
            <span><ion-icon name="mail"></ion-icon></span>
            <a href="mailto:kamaan551@gmail.com">kamaan551@gmail.com</a>
          </div>

          <div>
            <span><ion-icon name="call"></ion-icon></span>
            <a href="tel:+918291192358">8291192358</a>
          </div>
          <!-- Social Media Links -->
          <ul class="sci">
            <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
            <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
            <li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
            <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
          </ul>
        </div>
      </div>


      <!-- Map -->
      <div class="contact map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.6890513082717!2d72.82113937507748!3d19.12129248209269!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c9e13ef12003%3A0x5767a74a751ccaf9!2sRajiv%20Gandhi%20Institute%20of%20Technology!5e0!3m2!1sen!2sin!4v1686393629716!5m2!1sen!2sin"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
    </div>
  </div>

  <footer class="text-center text-lg-start text-muted myfooter">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->
  
      <!-- Right -->
      <div>
        <a href="https://www.facebook.com/help/192946630752330" class="me-4 link-secondary facebook">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 link-secondary twitter">
          <i class="fab fa-twitter"></i>
        </a>
        <!-- <a href="" class="me-4 link-secondary">
          <i class="fab fa-google"></i>
        </a> -->
        <a href="" class="me-4 link-secondary instagram">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 link-secondary linkedin">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->
  
    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3 text-secondary"></i>Company name
            </h6>
            <p>
              Here you can use rows and columns to organize your footer content. Lorem ipsum
              dolor sit amet, consectetur adipisicing elit.
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Products
            </h6>
            <p>
              <a href="#!" class="text-reset">Angular</a>
            </p>
            <p>
              <a href="#!" class="text-reset">React</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Vue</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Laravel</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Useful links
            </h6>
            <p>
              <a href="#!" class="text-reset">Pricing</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Settings</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Orders</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Help</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3 text-secondary"></i> New York, NY 10012, US</p>
            <p>
              <i class="fas fa-envelope me-3 text-secondary"></i>
              info@example.com
            </p>
            <p><i class="fas fa-phone me-3 text-secondary"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print me-3 text-secondary"></i> + 01 234 567 89</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
      © 2021 Copyright:
      <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>



  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if(isset($_POST['send'])){


  
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $mobile=$_POST['mobile'];
  $email=$_POST['email'];
  $msg=$_POST['msg'];



//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function


//Load Composer's autoloader
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
                       //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'jayeshkharol08@gmail.com';                     //SMTP username
    $mail->Password   = 'dpljmkgydhgzhbzg';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('jayeshkharol08@gmail.com', 'Mailer');
    $mail->addAddress('mamtakharol05@gmail.com', ' recipient ');     //Add a recipient
    

    //Attachments
      //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Test form';
    $mail->Body    = "First Name -$fname  <br> Last Name -$lname  <br> Email -$email <br> Mobile -$mobile  <br> Message  -$msg";
  

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}



}
?>
