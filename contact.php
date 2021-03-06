<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Contact Us | London | AJL Group</title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />

  <!-- CSS -->
  <link rel="stylesheet" href="css/custom.css">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,400i,700|Oswald:300,400,700&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <!-- for mobile site -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

  <!-- CONTACT FORM SCRIPT -->
  <?php
  // define variables and set to empty values
  $name = $email = $phone = $company = $subject = $message = "";
  $nameErr = $emailErr = $phoneErr = $companyErr = $subjectErr = $messageErr = "";
  $success = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])){
      $nameErr = "Name is required.";
    } else {
      $name = test_input($_POST["name"]);
      $nameErr = "";
      if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
 	    $nameErr = "Only letters and white space allowed.";
      }
    }

    if (empty($_POST["email"])){
      $emailErr = "Email is required.";
    } else {
      $email = test_input($_POST["email"]);
      $emailErr = "";
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format.";
      }
    }

    if (empty($_POST["phone"])){
      $phoneErr = "";
    } else {
      $phone = test_input($_POST["phone"]);
      $phoneErr = "";
      if (!preg_match("/^[0-9 + ( )]{0,20}$/",$phone)) {
        $phoneErr = "Only 0-9, +, () allowed.";
      }
    }

    if (empty($_POST["company"])){
      $companyErr = "";
    } else {
       $company = test_input($_POST["company"]);
    }

    if (empty($_POST["subject"])){
      $subjectErr = "Subject is required.";
    } else {
      $subject = test_input($_POST["subject"]);
      $subjectErr = "";
    }

    if (empty($_POST["message"])){
      $messageErr = "Message is required.";
    } else {
      $message = test_input($_POST["message"]);
      $messageErr = "";
    }
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST" && $nameErr == "" && $emailErr == "" && $phoneErr == "" && $companyErr == "" && $subjectErr == "" && $messageErr == "") {
    $to = "spiller.riley@gmail.com";
    $emailSubject = "Contact Form Submission";
    $txt = "<b>From:</b> " .$name. "<br><b>Email:</b> " .$email. "<br><b>Phone:</b> " .$phone. "<br><b>Company:</b> " .$company. "<br><b>Subject:</b> " .$subject. "<br><b>Message:</b><br>" .$message;
    $headers = "reply-to: ".$email. "\r\n";
    $headers .= "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    mail($to,$emailSubject,$txt,$headers)
      or die();
    $success = "Mail sent successfully! We&#39;ll have someone with you soon.";
  }
  ?>

  <!-- begin NAVBAR -->
    <!--<div class="container pt-0 pb-0">-->
      <nav class="navbar navbar-expand-lg navbar-dark bg-black pt-0 pb-0 sticky-top">
        <div class="container-fluid pt-0 pb-0 pr-md-5 pl-md-5 pr-sm-0 pl-sm-0 pr-0 pl-0">
        <a class="navbar-brand" href="index.html"><img src="./media/logos/logo-design-dark-blue.png" style="height: 40px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent" role="navigation">
          <ul class="nav navbar-nav ml-auto text-sm-center text-center">
            <a class="nav-link" href="expertise.html">
              <li class="nav-item">
                EXPERTISE
              </li>
            </a>
            <a class="nav-link" href="distribution.html">
              <li class="nav-item">
                DISTRIBUTION
              </li>
            </a>
            <a class="nav-link" href="sports-marketing.html">
              <li class="nav-item">
                SPORTS MARKETING
              </li>
            </a>
            <a class="no-underline" href="#">
              <li class="nav-item active">
                CONTACT
              </li>
            </a>
          </ul>
        </div>
      </div>
      </nav>
    <!--</div>-->
  <!-- end NAVBAR -->

  <!-- begin JUMBOTRON -->
  <div class="jumbotron-custom text-center d-block pt-0 pb-0 pl-0 pr-0">
    <div class="spotlight-bg contact-bg"></div>
    <h1 class="col-12 d-flex align-items-center justify-content-center" data-aos="zoom-in">
      <span><b>CONTACT AJL GROUP</b></span>
    </h1>
    <div class="pointer-down">
      <div class="gray-bar"></div>
      <img src="./media/site/gray-bg-triangle.png">
      <div class="gray-bar"></div>
    </div>
  </div>
  <!-- end JUMBOTRON -->

  <!-- begin ARTICLE -->
  <div class="container-fluid bg-gray">
  <article class="container d-flex flex-wrap justify-content-center pt-4" aria-label="Contact Form AJL Group">
      <!-- CONTACT FORM -->
      <div class="col-lg-9 col-md-10 col-sm-12 col-12 mb-4">
        <div class="grid-item-text no-decoration" data-aos="fade-right">
          <h3 class="text-center mb-4">We&#39;d Love to Hear from You!</h3>
          <p class="text-center">Please direct all enquiries below, and we will get back to you in a timely manner.</p>
            <!-- FORM -->
            <?php if($success!=""){echo "
            	<center>
                <h4 class='text-success'>".$success."</h4><br>
  				<img src='./media/logos/logo-design-dark-blue-lg.png'>
                </center>
  			";}?>
            <form id="contact" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="<?php if ($success != ""){echo "d-none";}else{echo "d-flex flex-wrap";}?>">
              <div class="col-sm-6 col-12">
                <div class="form-group">
                  <input type="text" class="form-control" name="name" placeholder="*Your Name" value="<?php echo $name;?>">
                  <span class="text-danger"><?php echo $nameErr;?></span>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" placeholder="*Email" value="<?php echo $email;?>">
                  <span class="text-danger"><?php echo $emailErr;?></span>
                </div>
              </div>
              <div class="col-sm-6 col-12">
                <div class="form-group">
                  <input type="tel" class="form-control" name="phone" placeholder="Phone Number" value="<?php echo $phone;?>">
                  <span class="text-danger"><?php echo $phoneErr;?></span>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="company" placeholder="Company Name" value="<?php echo $company;?>">
                  <span class="text-danger"><?php echo $companyErr;?></span>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" placeholder="*Message Subject" value="<?php echo $subject;?>">
                  <span class="text-danger"><?php echo $subjectErr;?></span>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" placeholder="*What&#39;s on your mind? Please enter your enquiry here." rows="6"><?php echo $message;?></textarea>
                  <span class="text-danger"><?php echo $messageErr;?></span>
                </div>
                <div class="form-group">
                  <center><button type="submit">Send Message</button></center>
                </div>
              </div>
            </form>
        </div>
      </div>
  </article>
  </div>
  <!-- end ARTICLE -->

  <!-- begin FOOTER -->
  <footer>
    <div class="container-fluid bg-dark-gray pt-5">
      <div class="container" data-aos="fade-right">
        <div class="row d-flex justify-content-center flex-wrap">
          <img src="media/site/location-map.png" class="col-xl-5 col-lg-6 col-md-5 col-12 d-sm-block d-none">
          <img src="media/site/location-map-mobile.png" class="d-sm-none d-block mb-3" style="border: 1px solid #666; width: 100%">
          <div class="col-xl-4 col-lg-6 col-md-7 col-12 text-md-right text-center">
            <h6><b>CONTACTS</b></h6>
            <p>
              Tel: <a href="tel:+44(0)2077314730"><b>+44(0)2077314730</b></a><br>
              Email: <a href="mailto:info@ajlgroup.co.uk"><b>info@AJLGroup.co.uk</b></a>
            </p>
            <p>
              Bramham Gardens SW5 0HQ<br>
              London, England
            </p>
            <p>
              <a href="#" class="icon"><i class="fa fa-facebook fa-lg"></i></a>
              <a href="#" class="icon"><i class="fa fa-instagram fa-lg"></i></a>
              <a href="#" class="icon"><i class="fa fa-twitter fa-lg"></i></a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid bg-black  btm-links pt-1 pb-1">
      <div class="row d-flex justify-content-between align-items-center flex-wrap">
        <div class="col-xl-4 col-md-6 col-sm-12 col-12 text-xl-left text-center d-sm-block d-none" role="navigation">
          <a href="index.html">HOME</a>&nbsp; | &nbsp;
          <a href="expertise.html">EXPERTISE</a>&nbsp; | &nbsp;
          <a href="distribution.html">DISTRIBUTION</a>&nbsp; | &nbsp;
          <a href="sports-marketing.html">SPORTS MARKETING</a>&nbsp; | &nbsp;
          <a href="contact.php">CONTACT</a>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12 col-12 d-sm-block d-none text-md-center text-xl-center text-center">
          Copyright &copy; 2020 AJL Group. Developed by <a href="mailto:spiller.riley@gmail.com" target="_blank">Riley <i class="fa fa-sm fa-smile-o ml-1"></i></a>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12 col-12 text-xl-right text-center">
          <i class="fa fa-phone"></i> &nbsp; <a href="tel:+44(0)2077314730"> +44(0)2077314730</a> <i class="fa fa-envelope"></i> &nbsp; <a href="mailto:info@ajlgroup.co.uk"> info@AJLGroup.co.uk</a>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 1000,
      once: true,
    });
  </script>
</body>
</html>
