<?php

function add_post($image){
    $image   = mysql_real_escape_string($image);    
    mysql_query("INSERT INTO `gallery` SET `image` = '{$image}'");
}

function get_posts($image = 'image'){
    $posts = array();
    $query = "SELECT `gallery`.`image` AS `gallery_name`,`image` FROM `gallery`";
               
    if(isset($image)){
        $image = $image;
        $query .= " WHERE `gallery`.`image` = {$image} ";
             }    
        
    $query .= "ORDER BY `gallery_name` DESC";
    
    $query = mysql_query($query);
    
    while($row = mysql_fetch_assoc($query)){
    $posts[] = $row;
   }
   return $posts;
}

function get_categories($id = null){
   $categories = array();
   
   $query = mysql_query("SELECT `id`,`name` FROM `categories`");
   
   while($row = mysql_fetch_assoc($query)){
    $categories[] = $row;
   }
   
   return $categories;
}

?>