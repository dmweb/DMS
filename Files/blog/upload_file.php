<?php
    if(isset($_FILES['file'])) {
        $file = $_FILES['file'];

        // File Properties
        $file_name = $file['name'];
        $file_tmp = $file['tmp_name'];
        $file_size = $file['size'];
        $file_error = $file['error'];
        
        // Workout file Extention
        $file_ext = explode('.', $file_name);
        $file_ext = strtolower(end($file_ext));
        
        $allowed = array('mp4', 'MP4', 'avi', 'AVI', 'flv', 'FLV', 'mkv', 'MKV');
        
        if(in_array($file_ext, $allowed)) {
            if($file_error === 0) {
                if($file_size <= 2e+8) {
                    
                   $file_destination = 'images/' . $file_name;
                   
                   if(move_uploaded_file($file_tmp, $file_destination)) {
                   include('add_post.php');
                   }
                    
                }
            }
        } else {
            echo "An error has occured : No files were uploaded or File was not a video format !";
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            body {background: #e3e3e3;}
            .back {color: #2b2b2b; margin-top: 5px;}
        </style>
    </head>
    <body><div class="back"><a href="index.php">Go Back</a></div></body>
</html>