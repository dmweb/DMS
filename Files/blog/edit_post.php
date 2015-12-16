<?php
include_once('resources/init.php');
$post = get_posts($_GET['id']);
if(isset($_POST['title'],$_POST['act'],$_POST['characters'],$_POST['contents'],$_POST['category'])){
    
    $errors = array();
    
    $title      = trim($_POST['title']);
    $contents   = trim($_POST['contents']);
    $act   = trim($_POST['act']);
    $characters   = trim($_POST['characters']);
    
    if(empty($title)){
     $errors[] = 'You need a title!';
    }
	
    if(empty($act)){
     $errors[] = 'You need an act name!';
    }
	
	if(empty($characters)){
     $errors[] = 'You need to name the actors!';
    }
	
    else if(strlen($title)>255){
     $errors[] = 'The title can not be longer than 255 characters';   
    }
    
    if(empty($contents)){
     $errors[] = 'You need a description!';   
    }
    if(!category_exists('id',$_POST['category'])){
    $errors[] = 'That category does not exists';   
    }
    
    if(empty($errors)){
        edit_post($_GET['id'],$title,$act,$characters,$contents,$_POST['category']);
       
        header("Location:index.php?id={$post[0]['post_id']}");
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
        <title>DMS - Edit Content</title>
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
		<div class="heading"><h1>DMS - Content Editor</h1></div>
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
		<div class="edit-heading"><h2>Edit Content</h2></div>
        <form action='' method='post'>
			<div class="edit-title">
				<label for='title'>Title</label>
				<input type='text' name='title' size="69" value='<?php echo $post[0]['title']; ?>' />
			</div>
			<div class="edit-act">
				<label for='act'>Act Name</label>
				<input type='text' name='act' size="69" value='<?php echo $post[0]['act']; ?>' />
			</div>
			<div class="edit-actors">
				<label for='characters'>Actors</label>
				<input type='text' name='characters' size="69" value='<?php echo $post[0]['characters']; ?>' />
			</div>
			<div class="edit-content">
				<label for='contents'>Content</label>
				<textarea name='contents' cols=71 rows=10><?php echo $post[0]['contents']; ?></textarea>
			</div>
			<div class="edit-category">
				<label for='category'>Category</label>
				<select name='category'>
        <?php
        foreach(get_categories() as $category){
         $selected = ($category['name'] == $post[0]['name']) ? 'selected' : '';   
         ?>
         <option value='<?php echo $category['id'] ?>' <?php echo $selected; ?> ><?php echo $category['name'] ?></option>
         <?php
        }
        ?>
				</select>
			</div>
		<div class="edit-button"><p><input type='submit' value='Edit Post' /></p></div><br>
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
