<?php include './Admin_view.php';?> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Admin.css">
</head>
<body>
    <form action="Insertedem.php" method="POST" class="signup" enctype="multipart/form-data">
         <div class="login">
    <?php
     
     if (isset($_SESSION['login']) and $_SESSION['login']==TRUE ) {
        try{
             
     
                   
            echo '<h1>Insert Employee Details</h1>'
            
           
           .  '<p>Name<input type="text" name="name"  placeholder="name" ></p>'
           . '<p>Address<input type="text" name="address" placeholder="Address" ></p>'
           . '<p>City<input type="text" name="city" placeholder="City"></p>'
           
           .  '<p>State<input type="text" name="state" placeholder="State" ></p>'
           . '<p>Pincode<input type="text" name="pincode" placeholder="Pincode"></p>'
           . '<p>Mobile Number<input type="text" name="mobile" placeholder="Mobile NUmber"></p>'
           . '<p>Email id<input type="text" name="email" placeholder="Email Id" ></p>'          
       
            
        
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
