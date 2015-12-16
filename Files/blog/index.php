<?php
include_once('resources/init.php');
//$posts = (isset($_GET['id'])) ? get_posts($_GET['id']) : get_posts();
$posts = get_posts((isset($_GET['id']))? $_GET['id'] : null);
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
        <title>DMS - Drama Online</title>
		<link rel="stylesheet" type="text/css" href="resources/cms.css">
    </head>
    <body>
<div id="fullwidth">
<div class="wrapper">
<div id="dmslogo"><img src="images/dmslogo.PNG" /></div>
<div id="navmove">
<?php
foreach(get_categories() as $category){
?>
<div class="cmsnav"><h3><a href="category.php?id=<?php echo $category['id'];?>"><?php echo $category['name']; ?></a></h3></div>
<?php  
}
?>
</div>
		<div class="logout">Hello <?=$_SESSION['sess_user'];?>! <a href="../logout.php">Logout</a></div>
		<div class="heading"><h1>Drama Online - All Content</h1></div>
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
     <?php
     foreach($posts as $post){
      ?>
	 <div class="line-breaker"></div>
     <div class="dramacontainer">
		<div class="videocon">
			<video width="320" height="180" controls>
				<source src="images/<?php echo $post['videoname']; ?>" type="video/mp4">
			</video>
		</div>
		<div id="test-display">
		<div class="playheader"><h2><a href='index.php?id=<?php echo $post['post_id']; ?>' >Performance : <?php echo $post['title']; ?></a></h2></div>
			<div class="postdetails">
				<p>
					Posted on <?php echo date('d-m-y h:i:s',strtotime($post['date_posted'])); ?>
					In <a href='category.php?id=<?php echo $post['category_id']; ?>' ><?php echo $post['name']; ?></a>
				</p>
			</div>
			<div class="act-name">Act Name : <?php echo $post['act']; ?></div>
			<div class="actors">Actors : <?php echo $post['characters']; ?></div>
			<div class="contents" align="left">Description : <?php echo nl2br($post['contents']); ?></div><br>
			<div class="options">
				<ul>
					<li><a href='edit_post.php?id=<?php echo $post['post_id']; ?>' >Edit This Post</a></li>
					<li><a href='delete_post.php?id=<?php echo $post['post_id']; ?>' >Delete This Post</a></li>
				</ul>
			</div>
		</div>
     <?php   
     }
     ?>
	 <div id="footer"><h3>Powered by DMS &copy; Dean Middleton</h3></div>
     </div>
	</div>
</div>
    </body>
</html>
<?php
}
?>
