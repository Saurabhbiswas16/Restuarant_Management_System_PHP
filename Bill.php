
<?php
session_start();
    if (isset($_SESSION['clogin']) and $_SESSION['clogin']==TRUE){
         try{
            $dbhandler = new PDO('mysql:host=localhost;dbname=rms','root','');
            $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 	
             $sql1="select * from order_details where c_id=".$_SESSION['custid']."";
             $query=$dbhandler->query($sql1);
             ?>
<html dir="ltr"><head>
        <title>Main Course</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form action="Clogout.php" method="POST" class="container">
<table border="1" width="100%" height="100%" >
 <thead>
              <tr>
                    <td valign="center" align="center">
                        <h1>Name</h1>
                    </td>
                    <td valign="center" align="center">
                        <h1>Price</h1>
                    </td>
              </tr>
 <style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
  width: 50%;
}
.td {
    font-size: 200px;
}
</style>
              
   </thead> 
<?php
             $sum=0;
              while($_r=$query->fetch(PDO::FETCH_ASSOC)){
                  $name=$_r['f_name'];
                  $price=$_r['f_price'];
                  echo '<tr>'
                   . '<td align="center">'.$name.'</td>'
                    .'<td align="center">'.$price.' </td>'  
                   .'</tr>';
                      
                   
                  $sum=$sum+$price;
              }
              echo '<tr>'
                   . '<h3><td align="center">Total Bill</td></h3>'
                    .'<td align="center">'.$sum.' </td>'  
                   .'</tr>'
                    .'<h1><tr>'
                      .'<td colspan=2 align="center">'
                      .'<button class="button">Pay</button>'
                      .'</td>'
                      .'</tr></h1>';
              
              
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

