<?php
include_once('resources/midd.php');

if(isset($_POST['image'])){
    
    $errors = array();
    
    $image  = trim($_POST['image']);
        
    if(empty($errors)){
        add_post($image);	
    }
}
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
        <title>DMS - Add Content</title>
		<link rel="stylesheet" type="text/css" href="resources/cms.css">
    </head>
    <body>
<div id="fullwidth">

        <div class="wrapper">
<div id="dmslogo"><img src="images/dmslogo.PNG" /></div>
<div id="navmove">
</div>
		<div class="logout">Hello <?=$_SESSION['sess_user'];?>! <a href="../logout.php">Logout</a></div>
		<div class="heading"><h1>DMS - Add Gallery</h1></div>
		 <div class="subliner"></div>
         <div class="toolbar">
			<nav>
				<ul>
					<li><a href='index.php' >View all content</a></li>
					<li><a href='add_post.php' >Add Content</a></li>
					<li><a href='add_gallery.php' >Add Gallery</a></li>
					<li><a href='view_gallery.php' >View Gallery</a></li>
				</ul>
			</nav>
		</div>
		<div class="dramacontainer">
			<div class="add-heading"><h2>Add Images</h2></div>
			<div class="gallery-addbox"></div>
			<form action='upload_image.php' method='post' enctype="multipart/form-data">
				<div class="add-image">
					<label for='image'>Image Name: </label>
					<input type='text' name='image' size="20" value='<?php if(isset($_POST['image'])) echo $_POST['image']; ?>' />
				</div><br>
				<div class="add-imagefile">
					Upload Images
					<input type="file" name="file" id="file">
					<br><small>Must be less than 10MB. Only Image Files.</small>
				</div><br>
				<div class="add-button"><p><input type='submit' name="submit" value='Submit' /></p></div><br>
			</form>
		</div>
		 <div id="footer"><h3>Powered by DMS &copy; Dean Middleton</h3></div>
	 </div>
</div>
    </body>
</html>
<?php
}
?>
