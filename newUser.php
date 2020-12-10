<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//    echo $_POST['username']." ".$_POST['password']." ".$_POST['repassword'];
    session_start();
    if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['repassword']))
    {
        try{
            $dbhandler = new PDO('mysql:host=localhost;dbname=rms','root','');
            // echo "Connection is established...<br/>";
            $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $query=$dbhandler->prepare("select username from admin where username=? or email=?");
            $query->execute(array($_POST['username'],$_POST['email']));
            $count=$query->rowcount();
            if($count > 0)
			{
			    header("Location:signup.php?msg=User already exist..");
			}
			else
			{			
                            if($_POST['password']===$_POST['repassword'])
                            {

                                $query=$dbhandler->prepare("insert into admin (first_name,last_name,username,password,email,mobile_no) values (?,?,?,?,?,?)");
                                $query->execute(array($_POST['firstname'],$_POST['lastname'],$_POST['username'],$_POST['password'],$_POST['email'],$_POST['ph_no']));
                                header("Location:Admin_view.php");
                            }
                            else
                            {
                                header("Location:signup.php?msg=password didn't match..");    
                            }
            }
        }
        catch(PDOException $e){
                echo $e->getMessage();
                die();
        }
    }
    else{
        header("Location:signup.php");
    }
?>