
<?php include './Admin_view.php';?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Admin.css">
</head>
<body>
    <form action="newUser.php" method="POST" class="signup">
         <div class="login">
    <?php
    
     if (isset($_SESSION['login']) and $_SESSION['login']==TRUE){
        try{
    
           echo '<h1>Sign up</h1>'
            
       
           .'<p> <input type="text" name="firstname" class="field firstname" id="firstname" placeholder="*Firstname" required></p>'
           .'<p> <input type="text" name="lastname" class="field lastname" id="lastname" placeholder="*Lastname" required></p>'
      
          .'<p>  <input type="text" name="username" class="field username" id="username" placeholder="*Username" required></p>'
       
            .'<p><input type="email" name="email" class="field email" id="email" placeholder="*abc@xyz.com" required></p>'
        
          .'<p>  <input type="tel" name="ph_no" class="field ph-no" id="ph-no" placeholder="*Mobile No." required pattern=".{10}" title="Please provide valid number"></p>'
			
           .' <input type="password" name="password" class="field password" id="password" placeholder="*Password" required>'
          .'<i class="fas fa-eye hidden" data-name="eye" data-index="0" title="Hide Password"></i>'
          .'<i class="fas fa-eye-slash show" data-name="eye-slash" data-index="0" title="Show Password"></i>'
        
          .'<p>  <input type="password" name="repassword" class="field repassword password" id="repassword" placeholder="*Re-Enter Password" required></p>'
          .'<i class="fas fa-eye hidden" data-name="eye" data-index="1" title="Hide Password"></i>'
          .'<i class="fas fa-eye-slash show" data-name="eye-slash" data-index="1" title="Show Password"></i>'
        
       
            
        
        .'<p class="submit"><input type="submit" name="commit" value="Signup"></p>.';
          if(isset($_GET['msg']))
        {
                echo $_GET['msg'];
        }  
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
