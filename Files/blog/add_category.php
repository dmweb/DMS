<?php
include_once('resources/init.php');
if(isset($_POST['name'])){
    $name = trim($_POST['name']);
    
    if(empty($name)){
        $error = 'You must submit the category name';
    }
    else if(category_exists('name',$name)){ 
        $error = 'That category already exists';
    } else if(strlen($name)> 24){
        $error = 'The category name only be up to 24 characters only';
    }

    if(!isset($error)){
        add_category($name);
        header("Location:add_post.php");
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
        <title>Add a Category</title>
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
     <h2>Add Category</h2>
     <p>
        <?php if(isset($error)){
            echo $error;
            } ?>
     </p>
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
     <div>
     <br><br>
      <form action='' method='post'>
        <label for='name'>Name </label>
        <input type='text' name='name' />
        <input type='submit' value='Add Category' />
      </form>
      </div>
      </div>
    </body>
</html>
<?php
}
?>
