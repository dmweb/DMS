<?php
include_once('resources/init.php');

if(isset($_POST['title'],$_POST['act'],$_POST['characters'],$_POST['contents'],$_POST['videoname'],$_POST['category'])){
    
    $errors = array();
    
    $title      = trim($_POST['title']);
    $contents   = trim($_POST['contents']);
	$act 	    = trim($_POST['act']);
    $characters = trim($_POST['characters']);
    $videoname = trim($_POST['videoname']);
    
    if(empty($title)){
     $errors[] = '*You need a title!';
    }
    else if(strlen($title)>255){
     $errors[] = '*The title can not be longer than 255 characters';   
    }
    
    if(empty($contents)){
     $errors[] = '*You need a description!';   
    }
	
    if(empty($act)){
     $errors[] = '*You need an act name!';   
    }
	
   if(empty($characters)){
     $errors[] = '*You need to name the actors!';   
    }
	
    if(!category_exists('id',$_POST['category'])){
    $errors[] = '*That category does not exists';   
    }
	
    if(empty($videoname)){
     $errors[] = '*You need to name the video!';   
    }
    
    if(empty($errors)){
        add_post($title,$act,$characters,$contents,$videoname,$_POST['category']);
        
        $id = mysql_insert_id();
        
        header("Location:index.php?id={$id}");
        die();
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
<?php
foreach(get_categories() as $category){
?>
<div class="cmsnav"><h3><a href="category.php?id=<?php echo $category['id'];?>"><?php echo $category['name']; ?></a></h3></div>
<?php  
}
?>
</div>
		<div class="logout">Hello <?=$_SESSION['sess_user'];?>! <a href="../logout.php">Logout</a></div>
		<div class="heading"><h1>DMS - Add Content</h1></div>
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
			<div class="add-heading"><h2>Add Content</h2></div>
			<form action='upload_file.php' method='post' enctype="multipart/form-data">
				<div class="add-title">
					<label for='title'>Title</label>
					<input type='text' name='title' size="69" value='<?php if(isset($_POST['title'])) echo $_POST['title']; ?>' />
				</div>
				<div class="add-act">
					<label for='act'>Act Name</label>
					<input type='text' name='act' size="69" value='<?php if(isset($_POST['act'])) echo $_POST['act']; ?>' />
				</div>
				<div class="add-actors">
					<label for='characters'>Actors</label>
					<input type='text' name='characters' size="69" value='<?php if(isset($_POST['characters'])) echo $_POST['characters']; ?>' />
				</div>
				<div class="add-content">
					<label for='contents'>Description</label>
					<textarea name='contents' cols=71 rows=10 ><?php if(isset($_POST['contents'])) echo $_POST['contents']; ?></textarea>
				</div>
				<div class="add-category">
					<label for='category'>Category</label>
					<select name='category'>
						<?php
							foreach(get_categories() as $category){
						?>
						<option value='<?php echo $category['id'] ?>'><?php echo $category['name'] ?></option>
						<?php
						}
						?>
					</select>
				</div>
				<div class="add-videoname">
					<label for='videoname'>Video Name:</label>
					<input type='text' name='videoname' size="20" value='<?php if(isset($_POST['videoname'])) echo $_POST['videoname']; ?>' />
				</div>
				<div class="add-video">
					Upload Video
					<input type="file" name="file" id="file"'>
					<br><small>Must be less than 500MB. Only Video Files.</small>
				</div>
				<div class="add-button"><p><input type='submit' name="submit" value='Submit' /></p></div><br>
			</form>
		<div class="add-error"><?php if(isset($errors) && !empty($errors)){ echo"<ul><li>",implode("</li><li>",$errors),"</li></ul>";
        }
        ?></div>
		</div>
		 <div id="footer"><h3>Powered by DMS &copy; Dean Middleton</h3></div>
	 </div>
</div>
    </body>
</html>
<?php
}
?>
