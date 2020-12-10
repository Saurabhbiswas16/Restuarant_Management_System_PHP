<?php
   session_start();
//    echo 'hihi';
    if(isset($_POST['username']) && isset($_POST['password']))
    {
       
        try{
            $dbhandler = new PDO('mysql:host=localhost;dbname=rms','root','');
            // echo "Connection is established...<br/>";
            $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
            $query=$dbhandler->prepare("select username from admin where username=? and password=?");
            $query->execute(array($_POST['username'],$_POST['password']));
            $count=$query->rowcount();
            if($count > 0)
            {
                 while($r=$query->fetch(PDO::FETCH_ASSOC)){
                    $_SESSION['login']=TRUE;
                    $_SESSION['username']=$r['username'];
                    header("Location:Admin_view.php");
                 }
            }
            else 
            {
              
                header("Location:Admin_login.php?msg=invalid username or password.");
            }
        }
        catch (Exception $ex) 
        {
            echo $ex->getMessage();
        }
    }
    else 
    {
        
        header("Location:Admin_login.php?msg=Please log in first.");
    }
?>
    
      
            
    
 