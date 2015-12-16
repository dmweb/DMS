<?php
if(isset($_POST["submit"])){

if(!empty($_POST['user']) && !empty($_POST['pass'])) {
	$user=$_POST['user'];
	$pass= md5($_POST['pass']);
	
	$con=mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('blog') or die("cannot select DB");

	$query=mysql_query("SELECT * FROM login WHERE username='".$user."' AND password='".$pass."'");
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
	while($row=mysql_fetch_assoc($query))
	{
	$dbusername=$row['username'];
	$dbpassword=$row['password'];
	}

	if($user == $dbusername && $pass == $dbpassword)
	{
	session_start();
	$_SESSION['sess_user']=$user;

	/* Redirect browser */
	header("Location: blog/index.php");
	}
	} else {
	echo "Invalid username or password!";
	}

} else {
	echo "All fields are required!";
}
}
?> <a href="login.php">Go Back</a>