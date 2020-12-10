<?php include './Customer_view.php';?>
<?php
    
   if (isset($_SESSION['clogin']) and $_SESSION['clogin']==TRUE){
        try{
           
           ?>
<link rel="stylesheet" href="Bootstrap.css">
<link rel="stylesheet" href="Bootstrap1.js">
<link rel="stylesheet" href="Bootstrap2.js">
<link rel="stylesheet" href="Bootstrap3.js">

    <?php
        

        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        
    }
     else
            {
               header("Location:BookTable.html");
            }
    ?>