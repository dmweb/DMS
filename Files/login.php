<!doctype html>
<html>
<head>
<title>Login</title>
<style>
.logbox { 
	margin-left:auto;
    margin-right:auto;
    max-width: 500px;
    background: #00adef;
    padding: 25px 15px 25px 10px;
    font: 12px Georgia, "Times New Roman", Times, serif;
    color: #888;
  border-bottom: 3px solid #ec008b;}

.logbox h3 {    
	font-size: 25px;
    padding: 0px 0px 10px 0px;
    display: block;
    border-bottom: 3px solid #ec008b;
    margin: -10px -15px 30px -10px;
    color: #fff;
	text-align: center;


	
	}
	
.button {
	background: #ec008b;
    border: none;
    padding: 10px 25px 10px 25px;
    color: #FFF;
    border-radius: 0px;
    cursor: pointer;
	margin-left: 68%;
}

.button:hover { background: #c40075}

input[type="text"], input[type="password"] {
    border: 1px solid #DADADA;
    color: #888;
    height: 30px;
    margin-bottom: 16px;
    margin-right: 6px;
    margin-top: 2px;
    outline: 0 none;
    padding: 3px 3px 3px 5px;
    width: 60%;
    font-size: 12px;
    line-height:15px;
    box-shadow: inset 0px 1px 4px #ECECEC;
    -moz-box-shadow: inset 0px 1px 4px #ECECEC;
    -webkit-box-shadow: inset 0px 1px 4px #ECECEC;
	
}

label {   
	float: left;
    width: 20%;
    text-align: right;
    padding-right: 10px;
    margin-top: 10px;
    color: #fff;
	text-decoration: bold;
	font-size: 18px;
	}
	
</style>
</head>
<body>
<div class="logbox">
<h3>DMS - Login</h3>
<form action="check_login.php" method="POST" enctype="multipart/form-data">
<label>Username:</label><input type="text" name="user"><br/>
<label>Password:</label><input type="password" name="pass"><br />	
<input class="button" type="submit" value="Login" name="submit" />
</form>
</div>
</body>
</html>