<?php
//index.php

$error = '';
$name = '';
$email = '';
$subject = '';
$message = '';

function clean_text($string)
{
	$string = trim($string);
	$string = stripslashes($string);
	$string = htmlspecialchars($string);
	return $string;
}

if(isset($_POST["submit"]))
{
	if(empty($_POST["name"]))
	{
		$error .= '<p><label class="text-danger">Please Enter your Name</label></p>';
	}
	else
	{
		$name = clean_text($_POST["name"]);
		if(!preg_match("/^[a-zA-Z ]*$/",$name))
		{
			$error .= '<p><label class="text-danger">Only letters and white space allowed</label></p>';
		}
	}
	if(empty($_POST["email"]))
	{
		$error .= '<p><label class="text-danger">Please Enter your Email</label></p>';
	}
	else
	{
		$email = clean_text($_POST["email"]);
		if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$error .= '<p><label class="text-danger">Invalid email format</label></p>';
		}
	}
	if(empty($_POST["subject"]))
	{
		$error .= '<p><label class="text-danger">Subject is required</label></p>';
	}
	else
	{
		$subject = clean_text($_POST["subject"]);
	}
	if(empty($_POST["message"]))
	{
		$error .= '<p><label class="text-danger">Message is required</label></p>';
	}
	else
	{
		$message = clean_text($_POST["message"]);
	}
	if($error == '')
	{
		require 'class/class.phpmailer.php';
		$mail = new PHPMailer;
		$mail->IsSMTP();								//Sets Mailer to send message using SMTP
		$mail->Host = 'smtp.gmail.com';		//Sets the SMTP hosts of your Email hosting, this for Godaddy
		$mail->Port = '587';								//Sets the default SMTP server port
		$mail->SMTPAuth = true;							//Sets SMTP authentication. Utilizes the Username and Password variables
		$mail->Username = 'karyaj999@gmail.com';					//Sets SMTP username
		$mail->Password = 'iyalah90';					//Sets SMTP password
		$mail->SMTPSecure = 'tls';							//Sets connection prefix. Options are "", "ssl" or "tls"
		$mail->From = $_POST["email"];					//Sets the From email address for the message
		$mail->FromName = $_POST["name"];				//Sets the From name of the message
		$mail->AddAddress('karyaj999@gmail.com', 'Name');		//Adds a "To" address
		$mail->AddCC($_POST["email"], $_POST["name"]);	//Adds a "Cc" address
		$mail->WordWrap = 50;							//Sets word wrapping on the body of the message to a given number of characters
		$mail->IsHTML(true);							//Sets message type to HTML				
		$mail->Subject = $_POST["subject"];				//Sets the Subject of the message
		$mail->Body = $_POST["message"];				//An HTML or plain text message body
		if($mail->Send())								//Send an Email. Return true on success or false on error
		{
			$error = '<label class="text-success">Thank you for contacting us</label>';
		}
		else
		{
			$error = '<label class="text-danger">There is an Error</label>';
		}
		$name = '';
		$email = '';
		$subject = '';
		$message = '';
	}
}

?>

<!doctype html>
<html lang="id">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="it">
    <meta name="keywords"
        content="Sakai, Indopratama, Raya, Sakai Indopratama Raya, logistik, bisnis ,onepage, clean, modern, company,it">
    <meta name="author" content="PegaSoft">

    <!--Icon-->
    <link rel="shortcut icon" href="assets/img/logo/icon.png">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/themify/themify-icons.css">

    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <link rel="stylesheet" href="assets/css/all.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

    <title>Sakai Indopratama Raya</title>
</head>


<body class="top-header">
    <!-- LOADER TEMPLATE -->
    <div id="page-loader">
        <div class="loader-icon fa fa-spin colored-border"></div>
    </div>
    <!-- /LOADER TEMPLATE -->

    <!-- NAVBAR
    ================================================= -->
    <nav class="navbar navbar-expand-lg navbar-dark trans-navigation fixed-top navbar-togglable">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img class="logoSakai" src="assets/img/logo/web-logo.png" />
            </a>
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>

            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <!-- Links -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link js-scroll-trigger" href="index.php">
                            Home
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="index.php#about" class="nav-link js-scroll-trigger">
                            About Us
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a href="index.php#services-2" class="nav-link js-scroll-trigger">
                            Services
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a href="index.php#products" class="nav-link js-scroll-trigger">
                            Products
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a href="contact.php" class="nav-link">
                            Contact Us
                        </a>
                    </li>
                </ul>
            </div> <!-- / .navbar-collapse -->
        </div> <!-- / .container -->
    </nav>

    <!-- HERO
    ================================================== -->
    <section class="page-banner-area page-contact">
        <div class="overlay"></div>
        <!-- Content -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-12 col-12 text-center">
                    <div class="page-banner-content">
                        <h1 class="display-4 font-weight-bold">Got a question?</h1>
                        <p>We'd love to talk about how we can help you.</p>
                    </div>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>

    <!-- SECTIONS
    ================================================== -->
    <section id="contact-info">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="contact-info-block text-center">
                        <i class="pe-7s-map-marker"></i>
                        <h4>Alamat</h4>
                        <p class="lead">Jl. Karya Sejati, no. 144, Polonia, Medan. 15540.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="contact-info-block text-center">
                        <i class="pe-7s-mail"></i>
                        <h4>Email</h4>
                        <p class="lead">cs@sakaindo.com</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="contact-info-block text-center">
                        <i class="pe-7s-phone"></i>
                        <h4>Phone Number</h4>
                        <p class="lead">+62-855 7232 3132</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="contact">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-8 col-lg-6">
                    <h5>Leave a Message</h5>
                    <!-- Heading -->
                    <h2 class="section-title mb-2 ">
                        Tell us about <span class="font-weight-normal">yourself</span>
                    </h2>

                    <!-- Subheading -->
                    <p class="mb-5 ">
                        Whether you have questions or you would just like to say hello, contact us.
                    </p>

                </div>
            </div> <!-- / .row -->

            <div class="row">
                <div class="col-lg-6">
                    <!-- Contacts Form -->
                    <?php if(!empty($error)):?>
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success contact__msg">
                            <?php echo $error; ?>
                            </div>
                        </div>
                    </div>
                    <?php endif;?>
					
					<form method="post">
                    <div class="row">
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Your name
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group">
                                    <input type="text" name="name" placeholder="Enter Name" class="form-control" value="<?php echo $name; ?>" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Your email address
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group ">
                                    <input type="text" name="email" class="form-control" placeholder="Enter Email" value="<?php echo $email; ?>" />
                                    </div>
                                </div>
                            </div>

                            <div class="w-100"></div>

                            <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Subject
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group">
                                    <input type="text" name="subject" class="form-control" placeholder="Enter Subject" value="<?php echo $subject; ?>" />
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->
                        </div>
                            <!-- Input -->
                            <div class="form-group mb-5">
                                <label class="h6 small d-block text-uppercase">
                                    How can we help you?
                                    <span class="text-danger">*</span>
                                </label>

                                <div class="input-group">
                                    <textarea name="message" rows="4" class="form-control" placeholder="Hi there, I would like to ..."><?php echo $message; ?></textarea>
                                </div>
                            </div>
                            <!-- End Input -->

						<div class="form-group" align="center">
                            <input type="submit" name="submit" value="Submit" class="btn btn-primary btn-circled" />
                            <p class="small pt-3">We'll get back to you in 1-2 business days.</p>
						</div>
					</form>
                    <!-- End Contacts Form -->
                </div>

                <div class="col-lg-6 col-md-6">
                    <!-- START MAP -->
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.0835765033717!2d98.66482497212523!3d3.56824136709118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303130266d616e25%3A0xd6183eae27673238!2sJl.+Karya+Sejati%2C+Polonia%2C+Kec.+Medan+Polonia%2C+Kota+Medan%2C+Sumatera+Utara+20157!5e0!3m2!1sid!2sid!4v1564471466744!5m2!1sid!2sid"
                        width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <!-- END MAP -->
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER
    ================================================== -->
    <footer class="section " id="footer">
        <div class="overlay footer-overlay"></div>
        <!--Content -->
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-lg-4 col-sm-12">
                    <div class="footer-widget">
                        <!-- Brand -->
                        <a href="#" class="footer-brand text-white">
                            SAKAI
                        </a>
                        <p>
                            Vi sitter här i Venten och spelar lite DotA.<br>
                            och pushar på och smeker, med motståndet vi leker<br>
                            Vi sitter här i Venten och spelar lite DotA<br>
                            och springer runt och creepar, och motståndet vi sleepar
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 ml-lg-auto col-sm-12">
                    <div class="footer-widget">
                        <h3>Account</h3>
                        <!-- Links -->
                        <ul class="footer-links ">
                            <li>
                                <a href="#">
                                    Terms and conditions
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Privacy policy
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Affiliate services
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Help and support
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Frequently Asked Question
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="col-lg-2 col-sm-6">
                    <div class="footer-widget">
                        <h3>Tentang</h3>
                        <!-- Links -->
                        <ul class="footer-links ">
                            <li>
                                <a href="#">
                                    Layanan
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Tentang Kami
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Paket
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Kontak
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-6">
                    <div class="footer-widget">
                        <h3>Socials</h3>
                        <!-- Links -->
                        <ul class="list-unstyled footer-links">
                            <li><a href="#"><i class="fab fa-facebook-f"></i>Facebook</a></li>
                            <li>
                                <a href="#"><i class="fab fa-twitter"></i>Twitter
                                </a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i>Pinterest
                                </a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i>linkedin
                                </a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i>YouTube
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div> <!-- / .row -->


            <div class="row text-right pt-5">
                <div class="col-lg-12">
                    <!-- Copyright -->
                    <p class="footer-copy ">
                        &copy; Copyright <span class="current-year"><a href="index.html">SAKAI INDOPRATAMA
                                RAYA</a></span> .
                    </p>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </footer>



    <!--  Page Scroll to Top  -->
    <a class="scroll-to-top js-scroll-trigger" href=".top-header">
        <i class="fa fa-angle-up"></i>
    </a>

    <!-- JAVASCRIPT
    ================================================== -->
    <!-- Global JS -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>

    <!-- Plugins JS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/contact.js"></script>

    <!-- Slick JS -->
    <script src="assets/js/jquery.easing.1.3.js"></script>
    <script src="assets/js/slick.min.js"></script>

    <!-- Theme JS -->
    <script src="assets/js/theme.js"></script>


</body>

</html>