<?php

require '../classes/blogClass.php';
$id = $_GET['id'];
$blog = new blog; 


$op=$blog->listonepost($id);
$raw= mysqli_fetch_assoc($op);


if ($_SERVER['REQUEST_METHOD'] == "POST") {

   

    # Create OBJ .... 
   

    $result = $blog->edit($_POST,$id);


    foreach ($result as $key => $value) {
        # code...
        echo '* '.$key.' : '.$value.'<br>';
    }



}

?>
<?php
   
   
 

 ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Insert Post</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Register</h2>

        <form action="<?php echo   htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label for="exampleInputName">title</label>
                <input type="text" class="form-control"    value="<?php echo $raw['title'];  ?>"    required id="exampleInputName" aria-describedby="" name="title" placeholder="Entertitle">
            </div>


            <div class="form-group">
                <label for="exampleInputEmail">content</label>
   
                <textarea type="email" class="form-control" required   aria-describedby="emailHelp" name="content" placeholder="Content">
                <?php echo $raw['content'];  ?>

            </textarea>
           
           
            </div>

            <div class="form-group">
                <label>image</label>
                <input type="file" class="form-control" required  name="image">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


</body>

</html>