<?php include_once('blog/resources/init.php'); ?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Mahu Drama Online</title>
		<meta name="description" content="Mahu Drama Online is a website designed for students in seek for Drama Standard visual exemplars.">
		<meta name="author" content="Dean Middleton">
		
		<link rel="stylesheet" href="css/html5reset.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/col.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/3cols.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
		<link rel="stylesheet" type="text/css" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		
		<!-- JS Files -->
		<script src="js/jquery-1.7.2.min.js"></script>
		<script src="js/modernizr-2.5.3-min.js"></script>
		<script src="js/responsivegridsystem.js"></script>
		<script src="js/selectivizr-min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="js/simpleMobileMenu.js"></script>
		
	</head>
	
	<body>
		<div class="page_container">
			<div class="header_container">
				<div class="wrapper">
					<div class="section group">
						<div class="login-link"><a href="login.php">Login</a></div>
						<header class="col span_1_of_3">
							<div class="logo">
								<img src="images/logo.png" alt="logo.png" />
							</div>
						</header>
						<nav class="col span_2_of_3">
						<!-- Responsive Nav -->
						<div id="nav-box">
							<div class="cf">
								<div class="navigation">
									<nav>
										<a href="javascript:void(0)" class="smobitrigger ion-navicon-round"><span>Menu</span></a>
											<ul class="mobimenu">
												<li><a href="index.php">Home</a></li>
												<li><a href="about.php">About</a></li>
												<li><a href="#">Students</a>
											<ul>
											<div class="arrow-up"></div>
											<li><?php
foreach(get_categories() as $category){
?>
<a href="students.php?id=<?php echo $category['id'];?>"><div class="dwcolor"><?php echo $category['name']; ?></div></a>
<?php  
}
?></li>
											</ul>
			
											</li>
											<li><a href="gallery.php">Gallery</a></li>
											<li><a href="contact.php"><div class="nav-active">Contact</div></a></li>
											</ul>
									</nav>
								</div>
							</div>
						</div>
						</nav>
					</div>
				</div>
			</div>

			<section class="page-subheader-lol"><h1>Contact Us</h1></section>
		
	<section id="main_content_container">
			<div class="wrapper">
		<div class="maxwidthcontact">
		<div id="contactpage-infobox">
			<div class="contactpage-info">
						<h2>Contact</h2><br>
						<p>Phone : 09 425 8039</p><br>
						<p>Email : mahudrama@gmail.com</p><br>
						<p>Address : Woodcocks Road, Warkworth</p>
					</div>
					<div class="contactmap-info">
					<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d9082.37008888284!2d174.66188516259825!3d-36.40670950922362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x6d0cde82e8614f6b%3A0xd9c358f570e40cb!2smahurangi+college!3m2!1d-36.405671999999996!2d174.6569216!5e0!3m2!1sen!2snz!4v1441617013739" width="250" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
		</div>
		
		<div class="mail-contactbox">
		<section id="contact">
        <div class="containr">
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="*Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="*Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="*Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
		</div>
		</div>
		</div>
	</section>
		
    <section id="info_container">
		<div class="wrapper">
			
		</div>
	</section>
			<footer>
				<div class="footer-info">
					<div class="social-info">
						<h2>Follow Us!<h2>
						<div class="social_img">
							<a href="https://www.facebook.com/mahudrama?fref=ts" target='_blank'><img src="images/facebook.png" alt="facebook.png" /></a>
							<a href="#"><img src="images/youtube.png" alt="youtube.png" /></a>
						</div>
					</div>
					<div class="contact-info">
						<h2>Contact</h2><br>
						<p>Phone : 09 425 8039</p><br>
						<p>Email : mahudrama@gmail.com</p><br>
						<p>Address : Woodcocks Road, Warkworth</p>
					</div>
					<div class="map-info">
					<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d9082.37008888284!2d174.66188516259825!3d-36.40670950922362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x6d0cde82e8614f6b%3A0xd9c358f570e40cb!2smahurangi+college!3m2!1d-36.405671999999996!2d174.6569216!5e0!3m2!1sen!2snz!4v1441617013739" width="250" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
			</footer>
			<footer>
				<div class="footer-end">
					<div class="copyright">Powered by DMS &copy; Mahurangi College Drama Online</div>
				</div>
			</footer>
		</div>
		
    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

		<script type="text/javascript">

		jQuery(document).ready(function($) {
			$('.smobitrigger').smplmnu();
		});

		</script>
		
	</body>
	
</html>