<?php include_once('blog/resources/init.php'); ?>
<?php $posts = get_posts((isset($_GET['id']))? $_GET['id'] : null); ?>
<?php $tmp = 0; ?>
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
												<li><a href="index.php"><div class="nav-active">Home</div></a></li>
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
											 <li><a href="contact.php">Contact</a></li>
											</ul>
									</nav>
								</div>
							</div>
						</div>
						</nav>
					</div>
				</div>
			</div>
			<section id="main_image_container">
				<img src="images/main.jpg" alt="main.jpg" />
			</section>
			<section class="page-subheader"><h1>About Us</h1></section>
		
	<section id="main_content_container">
			<div class="wrapper">
				<article class="col span_2_of_3">
					<div class="home-about"><p>Mahurangi College Drama Online is a website that stores all past performances. Watch the students at their best as they perform extracts from different NCEA Standards. This is the best place to get that visual example of how performances pan out. The drama department of Mahurangi College invites you to browse all the students performances ranging from many categories and acts. Drama is one of the key subjects that gets indviduals to express themselves on stage. <a href="about.php">Read More...</a><p>
					</div>
						</div>
					</div>
				</article>
			</div>
	</section>
	
	<section id="main_content_container">
	<section class="home-latest"><h1>Latest Performances</h1></section>
	<div class="home-videos">
		<div class="vid-box">
	 <?php
     foreach($posts as $post)if ($tmp++ < 6){
      ?>
			<a href="blog/images/<?php echo $post['videoname']; ?>" class="html5lightbox" data-width="1280" data-height="720" >
			<video width="320" height="180" controls>
				<source src="blog/images/<?php echo $post['videoname']; ?>" type="video/mp4">
			</video>
			</a>
	<?php   
     }
     ?>
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
		
		<script type="text/javascript">

		jQuery(document).ready(function($) {
			$('.smobitrigger').smplmnu();
		});

		</script>
		
			<script type="text/javascript" src="html5lightbox/jquery.js"></script>
		<script type="text/javascript" src="html5lightbox/html5lightbox.js"></script>
		
	</body>
	
</html>