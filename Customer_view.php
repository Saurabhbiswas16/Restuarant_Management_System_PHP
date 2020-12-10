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
            if (isset($_SESSION['clogin']) and $_SESSION['clogin']==TRUE){
                try{
                    $dbhandler = new PDO('mysql:host=localhost;dbname=rms','root','');
                    $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                    echo'<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">'
                   .' <button onclick="w3_close()" class="w3-bar-item w3-large">Close &times;</button>'
                    .'<a href="Beverage.php" class="w3-bar-item w3-button">Beverage</a>'
                   .' <a href="Soup.php" class="w3-bar-item w3-button">Soup</a>'
                    .'<a href="Starter.php" class="w3-bar-item w3-button">Starter</a>'
                            .'<a href="Maincourse.php" class="w3-bar-item w3-button">Main course</a>'
                             .'<a href="Desert.php" class="w3-bar-item w3-button">Desert</a>'
                            
                            .'<a href="Bill.php" class="w3-bar-item w3-button">Bill</a>'
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
               header("Location:BookTable.html");
            }
        ?>
    </body>
</html>
