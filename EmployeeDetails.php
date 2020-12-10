<?php include './Admin_view.php';?>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

   // session_start();
    if (isset($_SESSION['login']) and $_SESSION['login']==TRUE){
        try{
            $dbhandler = new PDO('mysql:host=localhost;dbname=rms','root','');
            $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 	
             $sql1="select * from employee_details";
             $query=$dbhandler->query($sql1);
   ?>
 <html dir="ltr"><head>
        <title>Employee Details</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<table border="1" width="100%" height="100%" >
 <thead>
              <tr>
                    <td valign="center" align="center">
                        <h2>Id</h2>
                    </td>
                   
                    <td valign="center" align="center">
                        <h2>Name</h2>
                    </td>
                    <td valign="center" align="center">
                        <h2>Address</h2>
                    </td>
                    <td valign="center" align="center">
                        <h2>City</h2>
                    </td>
                    
                    
                    <td valign="center" align="center">
                        <h2>State</h2>
                    </td>
                    <td valign="center" align="center">
                        <h2>Pincode</h2>
                        
                    <td valign="center" align="center">
                        <h2>Email ID</h2>
                    </td>
                    <td valign="center" align="center">
                        <h2>Mobile No.</h2>
                    </td>
                    
                </tr>
   </thead> 
   <?php
            
            while($_r=$query->fetch(PDO::FETCH_ASSOC)){
                $f_id=$_r['employee_id'];
                $name=$_r['employee_name'];
                $city=$_r['employee_city'];
                $address=$_r['employee_address'];
                $state=$_r['employee_state'];
                $pincode=$_r['employee_pincode'];
                $mobile=$_r['employee_mobileno'];
                $email=$_r['employee_emailid'];
                
                echo '<tr>'
                                .'<td align="center">'.$f_id.'</td>'
                                .'<td align="center">'.$name.'</td>'
                                .'<td align="center">'.$address.'</td>'
                                .'<td align="center">'.$city.'</td>'
                                .'<td align="center">'.$state.'</td>'
                                .'<td align="center">'.$pincode.'</td>'
                                .'<td align="center">'.$email.'</td>'
                                .'<td align="center">'.$mobile.'</td>'
                                
                                
                                .'<td align="center"><a href="Updateem.php?id='.$f_id.'">Update</td>'
                                .'<td align="center"><a href="Deleteem.php?id='.$f_id.'">Delete</td>'
                                
                                
                     .'</tr>'; 
            }
             echo'</tbody>'
                    .'</table>';
                    
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

    
