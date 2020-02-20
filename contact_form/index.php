<?php

  $result="";

  if(isset($_POST['submit'])){
    require 'php__mailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;

    $mail->Host='smtp.gmail.com';
    $mail->Port=587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';
    $mail->Username='kevthedev00@gmail.com';
    $mail->Password='Kodegistics@2019';

    $mail->setFrom($_POST['email'],$_POST['name']);
    $mail->addAddress('kevthedev00@gmail.com');
    $mail->addReplyTo($_POST['email'],$_POST['name']);

    $mail->isHTML(true);
    $mail->Subject='Form Submission: ' .$_POST['subject'];
    $mail->Body='<h1 algn=center>Name:' .$_POST['name'].'<br>Email: '.$_POST['email']. '<br>Message: '.$_POST['message'].'</h1>';

    if(!$mail->send()){
      $result="Something went wrong. Please try again.";
    } else {
      $result="Thanks ".$_POST['name']. " for reaching out to me. I look forward to speaking with you about this opportunity!";
    }
  }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Contact - MyPortfolio</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700|Raleway:400,700&display=swap"
    rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="vendor/aos/aos.css" rel="stylesheet">
  <link href="vendor/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  
  <!-- Font Awesome Type Kit -->
  <script src="https://kit.fontawesome.com/d457faf8c6.js" crossorigin="anonymous"></script>

  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>

  <div class="collapse navbar-collapse custom-navmenu" id="main-navbar">
    <div class="container py-2 py-md-5">
      <div class="row align-items-start">
        <div class="col-md-2">
          <ul class="custom-menu">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About Me</a></li>
            <li><a href="skills.html">Skills</a></li>
            <li><a href="works.html">Works</a></li>
            <li class="active"><a href="contact.html">Contact</a></li>
          </ul>
        </div>
        <div class="col-md-6 d-none d-md-block  mr-auto">
          <div class="tweet d-flex">
            <a href="https://github.com/KevoCodo"><span class="icofont-github text-white mt-2 mr-3"></span></a>
            <div>
              <p><em>I also have a freelance business website. <br> <a href="https://kodegistics.com" style="color:lightblue;;">Check it out!</a></em></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-none d-md-block">
          <h3>Hire Me</h3>
          <p>What you will get from me: go getter, self starter, fast learner, out of the box thinker, marketing strategist, strong researcher, great culture fit employee, easy going, people-person, and honest/dependable. <br> <a href="mailto:kevthedev00@gmail.com" style="color:lightblue;">kevthedev00@gmail.com</a></p>
        </div>
      </div>

    </div>
  </div>

  <nav class="navbar navbar-light custom-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">MyPortfolio.</a>

      <a href="#" class="burger" data-toggle="collapse" data-target="#main-navbar">
        <span></span>
      </a>

    </div>
  </nav>

  <main id="main">

    <div class="site-section pb-0 site-portfolio">
      <div class="container">

        <div class="row mb-5 align-items-end">
          <div class="col-md-6" data-aos="fade-up">
            <h2>Contact</h2>
            <p class="mb-0">Web development is truly my passion. I enjoy building things and constantly learning new workflows and various tools and best practices that can make me a better developer.  I am a fast learner and thrive in an environment that is fast pace and allows for me to be challenge daily.  I also enjoy learning new technologies. If I sound like a great culture fit and you are ready to add more value to your organization, let's chat! Thank you for stopping by!
            </p>
          </div>

        </div>

        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0" data-aos="fade-up">
            
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <label for="name">Email</label>
                  <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-12 form-group">
                  <label for="name">Subject</label>
                  <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-12 form-group">
                  <label for="name">Message</label>
                  <textarea class="form-control" name="message" placeholder="What's on your mind?" cols="30" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                  <div class="validate"></div>
                </div>


                <!--<div class="col-md-12 mb-3">
                    <div class="loading">Loading</div>
                  <div class="error-message">Your message was not sent. Try again.</div>
                  <div class="sent-message"><?= $result; ?></div>
                </div>-->

                <div class="col-md-6 form-group">
                  <input type="submit" class="readmore d-block w-100" value="Send Message">
                  <div class="sent-message"><?= $result; ?></div>
                </div>
              </div>

            </form>

          </div>

          <div class="col-md-4 ml-auto order-2" data-aos="fade-up">
            <ul class="list-unstyled">
              <li class="mb-3">
                <strong class="d-block mb-1">Address</strong>
                <span>110 Seabreeze Way, Newnan, Georgia, USA</span>
              </li>
              <li class="mb-3">
                <strong class="d-block mb-1">Phone</strong>
                <a href="tel:+16015496210"><span>+1 601 549 6210</span></a>
              </li>
              <li class="mb-3">
                <strong class="d-block mb-1">Email</strong>
                <span>kevthedev00@gmail.com</span>
              </li>
            </ul>
          </div>

        </div>

      </div>

    </div>
  </main>
<!--Scroll to Top Button-->
<a id="button"><i class="fas fa-angle-up" style='font-size:3em;'></i></a>


  <footer class="footer mt-5 pt-5" role="contentinfo">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <p class="mb-1">&copy; Kevin Gay. All Rights Reserved</p>
        </div>
        <div class="col-sm-6 social text-md-right">
          <a href="#"><span class="social"><img src="https://img.icons8.com/ios/50/000000/heroku.png" width="20"></span></a>
          <a href="https://www.linkedin.com/in/kevin-gay-6aa5b746/"><span class="icofont-linkedin"></span></a>
          <a href="https://github.com/KevoCodo"><span class="icofont-github"></span></a>
          <a href="#"><span class="icofont-dribbble"></span></a>
          <a href="https://www.behance.net/kevingay3"><span class="icofont-behance"></span></a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Vendor JS Files -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/jquery/jquery-migrate.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="vendor/easing/easing.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>
  <script src="vendor/isotope/isotope.pkgd.min.js"></script>
  <script src="vendor/aos/aos.js"></script>
  <script src="vendor/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>

</body>

</html>
<?php>?