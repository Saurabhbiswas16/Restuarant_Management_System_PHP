<?php include './Admin_view.php';?> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Admin.css">
</head>
<body>
    <form action="Inserted.php" method="POST" class="signup" enctype="multipart/form-data">
         <div class="login">
    <?php
     
     if (isset($_SESSION['login']) and $_SESSION['login']==TRUE ) {
        try{
             
     
                   
           echo '<h1>Insert items</h1>'
            
           .  '<p>Category Id<input type="text" name="id" placeholder="id" ></p>'
           .  '<p>Name<input type="text" name="name" placeholder="name" ></p>'
           . '<p>Description<input type="text" name="description" placeholder="write description"></p>'
           . '<p>Price<input type="text" name="price" placeholder="price" ></p>'
           . '<p>Image<img src="" style="width:70px;height:70px"></p>'
                   . '<p> <input type="file" name="myfile" id="myfile"></p>'
          
       
            
        
        .'<p class="submit"><input type="submit" name="commit" value="Insert"></p>.';
           
        }
        
        catch(PDOException $ex)
        {
            echo $ex->getMessage();
            die();
        }
    }
    else
        header("Location:Admin_login.php");
?>
        </div>
    </form>
</body>
</html>
