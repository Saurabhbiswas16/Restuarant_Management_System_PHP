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
             $sql1="select * from fooditems_details";
             $query=$dbhandler->query($sql1);
             
      ?>  <html dir="ltr"><head>
        <title>Starter</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 enctype="multipart/form-data">
    </head>
<table border="1" width="100%" height="100%" >
 <thead>
              <tr>
                    <td valign="center" align="center">
                        <h2>Food id</h2>
                    </td>
                    <td valign="center" align="center">
                        <h2>Category id</h2>
                    </td>
                    <td valign="center" align="center">
                        <h2>Name</h2>
                    </td>
                    <td valign="center" align="center">
                        <h2>Description</h2>
                    </td>
                    <td valign="center" align="center">
                        <h2>Price</h2>
                    </td>
                    <td align="center">
                        <h2>Image</h2>
                    </td>
                    
                    
                </tr>
   </thead> 
   <?php
             
            while($_r=$query->fetch(PDO::FETCH_ASSOC)){
                $f_id=$_r['fooditem_id'];
                $c_id=$_r['category_id'];
                $name=$_r['fooditem_name'];
                $description=$_r['fooditem_description'];
                $price=$_r['fooditem_price'];
                $foodimg=$_r['fooditem_img'];
                
                echo '<tr>'
                                .'<td align="center">'.$f_id.'</td>'
                                .'<td align="center">'.$c_id.'</td>'
                                .'<td align="center">'.$name.'</td>'
                                .'<td align="center">'.$description.'</td>'
                                .'<td align="center">'.$price.'</td>'
                                .'<td align="center"><img src="'.$foodimg.'" style="width:70px;height:70px"></td>'
                                .'<td align="center"><a href="Updateitem.php?id='.$f_id.'">Update</td>'
                                .'<td align="center"><a href="Deleteitem.php?id='.$f_id.'">Delete</td>'
                                
                                
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

    
