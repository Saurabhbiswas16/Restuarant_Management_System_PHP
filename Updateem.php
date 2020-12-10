<?php include './Admin_view.php';?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Admin.css">
</head>
<body>
    <form action="Updatedem.php" method="POST" class="signup" enctype="multipart/form-data">
         <div class="login">
    <?php
     
     if (isset($_SESSION['login']) and $_SESSION['login']==TRUE and isset($_GET['id'])) {
        try{
             $id=$_GET['id'];
             $_SESSION['id']=$id;
            $dbhandler = new PDO('mysql:host=localhost;dbname=rms','root','');
            // echo "Connection is established...<br/>";
            $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
            $query=$dbhandler->prepare("select * from employee_details where employee_id=?");
            $query->execute(array($id));
           
           
           
                 $_r=$query->fetch(PDO::FETCH_ASSOC);

           
           
             
                $name=$_r['employee_name'];
                $city=$_r['employee_city'];
                $address=$_r['employee_address'];
                $state=$_r['employee_state'];
                $pincode=$_r['employee_pincode'];
                $mobile=$_r['employee_mobileno'];
                $email=$_r['employee_emailid'];
           echo '<h1>Update items</h1>'
            
           .  '<p>Id<input type="text" name="id" value='.$id.' disabled></p>'
           .  '<p>Name<input type="text" name="name" value='.$name.' ></p>'
           . '<p>Address<input type="text" name="address" value='.$address.' ></p>'
           . '<p>City<input type="text" name="city" value='.$city.'></p>'
           
           .  '<p>State<input type="text" name="state" value='.$state.' ></p>'
           . '<p>Pincode<input type="text" name="pincode" value='.$pincode.'></p>'
           . '<p>Mobile Number<input type="text" name="mobile" value='.$mobile.' ></p>'
           . '<p>Email id<input type="text" name="email" value='.$email.' ></p>'
           
          
       
            
        
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
