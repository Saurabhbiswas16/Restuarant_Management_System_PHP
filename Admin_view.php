<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    session_start();
?>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="NavBackend.css">
    </head>
    <body>
        <?php
            if (isset($_SESSION['login']) and $_SESSION['login']==TRUE){
                try{
                    $dbhandler = new PDO('mysql:host=localhost;dbname=rms','root','');
                    $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                    echo'<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">'
                   .' <button onclick="w3_close()" class="w3-bar-item w3-large">Close &times;</button>'
                    .'<a href="signup.php" class="w3-bar-item w3-button">New Admin User</a>'
                   .' <a href="Customer_info_view.php" class="w3-bar-item w3-button">Customer details</a>'
                    .'<a href="fooditems.php" class="w3-bar-item w3-button">Food details</a>'
                            .'<a href="Insertitem.php" class="w3-bar-item w3-button">Insert Food Item</a>'
                             .'<a href="EmployeeDetails.php" class="w3-bar-item w3-button">Employee Details</a>'
                            .'<a href="Insertem.php" class="w3-bar-item w3-button">Insert Employee Details</a>'
                            .'<a href="Logout.php" class="w3-bar-item w3-button">Log Out</a>'
                  .'</div>';
                   echo '<div class="w3-teal">'
                    .'<button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">☰</button>'
                    .'<div class="w3-container">'
                      .'<h1>Welcome to paradise</h1>'
                    .'</div></div>';
                    echo '<script>'
                            ,'function w3_open() {'
                              .'document.getElementById("mySidebar").style.display = "block";'
                            .'}'

                            .'function w3_close() {'
                              .'document.getElementById("mySidebar").style.display = "none";'
                            .'}'
                            .'</script>';
                            
                  
                    

                }
                catch(PDOException $e )
                {
                    echo $e->getMessage();
                    die();  
            
                }
            }
            else
            {
               header("Location:Admin_login.php");
            }
        ?>
    </body>
</html>
