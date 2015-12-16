<?php
include_once('config.inc.php');

mysql_connect(DB_HOST,DB_USER,DB_PASS);
mysql_select_db(DB_NAME);

include_once('functions/gallery_query.php');
