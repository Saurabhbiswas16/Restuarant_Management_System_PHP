<?php include './Customer_view.php';?>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

   // session_start();
   if (isset($_SESSION['clogin']) and $_SESSION['clogin']==TRUE){
        try{
            $dbhandler = new PDO('mysql:host=localhost;dbname=rms','root','');
            $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 	
             $sql1="select * from fooditems_details where category_id=8";
             $query=$dbhandler->query($sql1);
             $_SESSION['catid']=8;
        ?>
<html dir="ltr"><head>
        <title>Main Course</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<table border="1" width="100%" height="100%" >
 <thead>
              <tr>
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
                    <td></td>
                </tr>
   </thead>              
                <?php
                                
            while($_r=$query->fetch(PDO::FETCH_ASSOC)){
                $f_id=$_r['fooditem_id'];
                $name=$_r['fooditem_name'];
                $description=$_r['fooditem_description'];
                $price=$_r['fooditem_price'];
                $foodimg=$_r['fooditem_img'];
                
                echo '<tr>'
                   . '<td align="center">'.$name.'</td>'
                        
                   .' <td>'
                       .' <p>'
                            .$description.' </p></td>'
                      
                    .'<td align="center">'.$price.' </td>'
                    
                    .'<td>'
                        .'<img src="'.$foodimg.'" alt=""  style="max-height:70%; max-width:100%">'
                        .'</td>';
                       $_SESSION['o_id']=$f_id; 
                   
//                   .'<td align="center">'
//                        . '<a href="Order.php?id='.$f_id.'">Order</a> </td>'
                        ?>
                       <html>
   <head>   
      <script type = "text/javascript">
         <!--
            function getConfirmation() {
               var retVal = confirm("Do you want to place the order?");
               if( retVal == true ) {
                  window.open("http://localhost/Php_RMS/Order.php");
                  return true;
               } else {
                  window.open("http://localhost/Php_RMS/Dal.php");
                  return false;
               }
            }
         //-->
      </script>     
   </head>
   
   <body>
          
      <form>
         <td><input type = "button" value = "Order" onclick = "getConfirmation();" /></td>
      </form>      
   </body>
</html> 
                    <?php '</tr>';
            }
             echo'</tbody>'
                    .'</table>';
             ?>
   </html>
   <?php
        }
        
        
                    
        
        catch(PDOException $ex)
        {
            echo $ex->getMessage();
            die();
        }
    }
    else
        header("Location:BookTable.html");
?>
