<?php include './Admin_view.php';?>
<?php
    
    if (isset($_SESSION['login']) and $_SESSION['login']==TRUE){
        try{
            $dbhandler = new PDO('mysql:host=localhost;dbname=rms','root','');
            $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 	
             $sql1="select * from customer_information ";
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
                    <td valign="center" align="center">
                        <h2>No. of Persons</h2>
                    </td>
                    
                </tr>
   </thead> 
   <?php
            while($_r=$query->fetch(PDO::FETCH_ASSOC)){
       
                $name=$_r['customer_name'];
                $address=$_r['customer_address'];
                $city=$_r['customer_city'];
                $state=$_r['customer_state'];    
                $pincode=$_r['customer_pincode'];
                $email=$_r['customer_emailid'];
                $mobile=$_r['customer_mobileno'];
                $total=$_r['customer_total'];
                echo '<tr>'
                                .'<td>'.$name.'</td>'
                                .'<td>'.$address.'</td>'
                                .'<td>'.$city.'</td>'
                                .'<td>'.$state.'</td>'
                                .'<td>'.$pincode.'</td>'
                                .'<td>'.$email.'</td>'
                                .'<td>'.$mobile.'</td>'
                                .'<td>'.$total.'</td>'
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

    
