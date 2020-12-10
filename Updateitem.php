<?php include './Admin_view.php';?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Admin.css">
</head>
<body>
    <form action="Updated.php" method="POST" class="signup" enctype="multipart/form-data">
         <div class="login">
    <?php
     
     if (isset($_SESSION['login']) and $_SESSION['login']==TRUE and isset($_GET['id'])) {
        try{
             $id=$_GET['id'];
             $_SESSION['id']=$id;
            $dbhandler = new PDO('mysql:host=localhost;dbname=rms','root','');
            // echo "Connection is established...<br/>";
            $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
            $query=$dbhandler->prepare("select * from fooditems_details where fooditem_id=?");
            $query->execute(array($id));
           
           
           
                 $_r=$query->fetch(PDO::FETCH_ASSOC);

           
           
             $name=$_r['fooditem_name'];
                $description=$_r['fooditem_description'];
                $price=$_r['fooditem_price'];
                $foodimg=$_r['fooditem_img'];
           echo '<h1>Update items</h1>'
            
           .  '<p>Id<input type="text" name="id" value='.$id.' disabled></p>'
           .  '<p>Name<input type="text" name="name" value='.$name.' ></p>'
           . '<p>Description<input type="text" name="description" value='.$description.'></p>'
           . '<p>Price<input type="text" name="price" value='.$price.' ></p>'
           . '<p><img src="'.$foodimg.'" style="width:70px;height:70px"></p>'
                   . '<p> <input type="file" name="myfile" id="myfile"></p>'
          
       
            
        
        .'<p class="submit"><input type="submit" name="commit" value="update"></p>.';
           
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
