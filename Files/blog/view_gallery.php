<?php
include_once('resources/midd.php');
$posts = (isset($_GET['image'])) ? get_posts($_GET['image']) : get_posts();
?>
<?php 
session_start();
if(!isset($_SESSION["sess_user"])){
	header("location: ../login.php");
} else {
?>
<!DOCTYPE html>
<html>
    <head>
        <title>DMS - View Gallery</title>
		<link rel="stylesheet" type="text/css" href="resources/cms.css">
    </head>
    <body>
<div id="fullwidth">
<div class="wrapper">
<div id="dmslogo"><img src="images/dmslogo.PNG" /></div>
<div id="navmove">
</div>
		<div class="logout">Hello <?=$_SESSION['sess_user'];?>! <a href="../logout.php">Logout</a></div>
		<div class="heading"><h1>Drama Online - View Gallery</h1></div>
	    <div class="subliner"></div>
	<div class="toolbar">
     <nav>
        <ul>
            <li><a href='index.php' >View all content</a></li>
            <li><a href='add_post.php' >Add Content</a></li>
			<li><a href='add_gallery.php' >Add Gallery</a></li>
			<li><a href='view_gallery.php' >View Gallery</a></li>
            <!--li><a href='' ></a></li-->
        </ul>
     </nav>
     </div>
    


	</div>
    <div class="gallerycmsbox"><h2>Gallery Images</h2>
     <?php
     foreach($posts as $post){
      ?>
            <div class="img-container">
                <img src="images/<?php echo $post['image']; ?>"  width="250"/>
            </div>
     <?php   
     }
     ?>
     </div>
</div>
    </body>
</html>
<?php
}
?>
