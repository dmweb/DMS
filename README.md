# Deans Management System

DMS is a CMS that I developed for my schools drama department. It runs on a responsive design flat coded with HTML5, CSS3 and JQUERY functions. It runs on a PHP back-end framework "DMS" which I developed and is connected via a database for content storing. 

![image](http://i.imgur.com/L9Mq3Wf.png?1)


## Features

* Open-Source fully customisable back-end 
* Open-Source customisable responsive website template
* Local hosting compatible
* JQUERY Responsive Navigation Implemented


## Installation

* Create a database in phpmyadmin called **blog**
* Then import **blog.sql** into that database

Make sure your phpmyadmin authentication details match **Files\blog\resources\config.inc.php**

```php
$config['db_host']  = 'localhost';
$config['db_user']  = 'root';
$config['db_pass']  = '';
$config['db_name']  = 'blog';
```


Also make sure your phpmyadmin authentication details match **Files\check_login.php**

```php
$con=mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('blog') or die("cannot select DB");
```


## Login Details
```
Username: admin
Password: admin
```


## Get in touch!

If you're using DMS, I'd love to hear from you. Drop me a line and tell me what you think!


## Contributing

1. Fork it
2. Create your feature branch (`git checkout -b my-new-feature`)
3. Commit your changes (`git commit -am 'Add some feature'`)
4. Push to the branch (`git push origin my-new-feature`)
5. Create new Pull Request
