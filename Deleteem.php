<?php
     session_start();
     if (isset($_SESSION['login']) and $_SESSION['login']==TRUE and isset($_GET['id'])) {
        try{
             $id=$_GET['id'];
             $_SESSION['id']=$id;
            $dbhandler = new PDO('mysql:host=localhost;dbname=rms','root','');
            // echo "Connection is established...<br/>";
            $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
            $query=$dbhandler->prepare("delete from employee_details where employee_id=?");
            $query->execute(array($id));
            header("Location:EmployeeDetails.php");
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