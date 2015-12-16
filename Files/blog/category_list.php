<?php
include_once('resources/init.php');
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
        <title>Category List</title>
		        <style>
            ul{list-style: none;}
            li{display: inline; margin-right: 20px;}
            .toolbar {margin-left: 25px; width: 450px; height: 40px; background-color: #F7F7F7; border: 1px solid black; text-align: center; padding-bottom: 10px;}
           	.wrapper {width: 500px; height: 500px; background: #F7F7F7; padding: 25px 15px 25px 10px; 
   						 color: #888;
   						 text-shadow: 1px 1px 1px #FFF;
   						 border:1px solid #E4E4E4;  text-align: center; margin: 0 auto;}
         	
         	/* unvisited link */
a:link {
    color: #FF0000;
    text-decoration: none;
}

/* visited link */
a:visited {
    color: #5C5C5C;
    text-decoration: none;
}

/* mouse over link */
a:hover {
    color: #D92E2E;
    text-decoration: none;
}

/* selected link */
a:active {
    color: #D92E2E;
    text-decoration: none;
    
}
         	.logout {float: right;}
        </style>
    </head>
    <body>
    <div class="wrapper">
    <div class="logout">Hello <?=$_SESSION['sess_user'];?>! <a href="../logout.php">Logout</a></div>
     <h1>Blog Posts</h1>
	 <h2>Categories</h2>
	 <div class="toolbar">
	<nav>
        <ul>
            <li><a href='index.php' >Index</a></li>
            <li><a href='add_post.php' >Add a Post</a></li>
            <li><a href='add_category.php' >Add Category</a></li>
            <li><a href='category_list.php' >Category List</a></li>
            <!--li><a href='' ></a></li-->
        </ul>
     </nav>
     </div>
     <?php
     foreach(get_categories() as $category){
     ?>
      <p><a href="category.php?id=<?php echo $category['id'];?>"><?php echo $category['name']; ?></a> -
      <a href="delete_category.php?id=<?php echo $category['id'];?>">Delete</a></p> 
     <?php  
     }
     ?>
     </div>
    </body>
</html>
<?php
}
?>
