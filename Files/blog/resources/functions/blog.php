<?php

function add_post($title,$act,$characters,$contents,$videoname,$category){
    $title      = mysql_real_escape_string($title);
    $act        = mysql_real_escape_string($act);
    $characters = mysql_real_escape_string($characters);
    $contents   = mysql_real_escape_string($contents);
    $videoname   = mysql_real_escape_string($videoname);
    $category   = (int)$category;
        
    mysql_query("INSERT INTO `posts` SET
                `cat_id`     = {$category},
                `title`      = '{$title}',
                `contents`   = '{$contents}',
                `act`        = '{$act}',
                `characters`   = '{$characters}',
                `videoname`   = '{$videoname}',
                `date_posted`= NOW()");
        
}

function edit_post($id,$title,$act,$characters,$contents,$category){
    $id         = (int)$id;
    $title      = mysql_real_escape_string($title);
    $act     = mysql_real_escape_string($act);
    $characters     = mysql_real_escape_string($characters);
    $contents   = mysql_real_escape_string($contents);

    $category   = (int)$category;
    
    mysql_query("UPDATE `posts` SET
                `cat_id`     = {$category},
                `title`      = '{$title}',
                `act`      = '{$act}',
                `characters` = '{$characters}',
                `contents`   = '{$contents}'
                WHERE `id` = {$id}");  
}

function add_category($name){
  $name = mysql_real_escape_string($name);
  
  mysql_query("INSERT INTO `categories` SET `name` = '{$name}'");
}

function delete($table, $id){
    $table = mysql_real_escape_string($table);
    $id    = (int)$id;
    
    mysql_query("DELETE FROM `{$table}` WHERE `id`= {$id} ");
    
}

function get_posts($id = null, $cat_id = null){
    $posts = array();
    $query = "SELECT
              `posts`.`id` AS `post_id` ,
               `categories`.`id` AS `category_id`,
               `title`,`act`,`characters`,`contents`,`videoname`,`date_posted`,
               `categories`.`name`
               FROM `posts`
               INNER JOIN `categories` ON `categories`.`id` = `posts`.`cat_id` " ;
                              
    if(isset($id)){
        $id = (int)$id;
        $query .= " WHERE `posts`.`id` = {$id} ";
             }
    if(isset($cat_id)){
        $cat_id = (int)$cat_id;
        $query .= " WHERE `cat_id` = {$cat_id} ";
             }         
        
    $query .= "ORDER BY `post_id` DESC";
    
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

function category_exists($field,$name){
    $name = mysql_real_escape_string($name);
    $field = mysql_real_escape_string($field);
    
    $query = mysql_query("SELECT COUNT(1) FROM categories WHERE `{$field}` = '{$name}'");
    
    return(mysql_result($query,0) == 0)?false : true;
}