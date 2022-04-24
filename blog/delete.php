<?php

require '../classes/blogClass.php';

$id = $_GET['id']; 

# Validate Id .... 



    $blog = new blog();
   $op= $blog->delete($id);


    if($op){
        $message = ["Success" => "Raw Removed"];
    }else{
        $message = ["Error" => "Error Try Again"];
    }



# Set Session ... 
$_SESSION['Message'] = $message; 

header("Location: index.php"); ?>