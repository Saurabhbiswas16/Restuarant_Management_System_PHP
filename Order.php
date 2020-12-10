
<?php
    session_start();
    if (isset($_SESSION['clogin']) and $_SESSION['clogin']==TRUE){
    $dbhandler = new PDO('mysql:host=localhost;dbname=rms','root','');
            $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 	
             $sql1="select * from fooditems_details where fooditem_id=".$_SESSION['o_id']."";
             $query=$dbhandler->query($sql1);
             
             while($_r=$query->fetch(PDO::FETCH_ASSOC)){
                  $price=$_r['fooditem_price'];
                  $name=$_r['fooditem_name'];
             
             }
             
             $id=$_SESSION['custid'];
             $oid=$_SESSION['o_id'];
             $sql = "INSERT INTO `order_details` (`c_id`, `f_id`, `f_name`, `f_price`) VALUES ('$id', '$oid', '$name', '$price')";
       $query=$dbhandler->query($sql);
       if($_SESSION['catid']==1)
       {
         header('Location:Beverage.php');
       }
       else if($_SESSION['catid']==1)
       {
         header('Location:Beverage.php');
       }
        else if($_SESSION['catid']==2)
       {
         header('Location:Soup.php');
       }
        else if($_SESSION['catid']==3)
       {
         header('Location:Starter.php');
       }
        else if($_SESSION['catid']==4)
       {
         header('Location:Punjabi.php');
       }
        else if($_SESSION['catid']==5)
       {
         header('Location:Veg.php');
       }
        else if($_SESSION['catid']==6)
       {
         header('Location:Roti.php');
       }
        else if($_SESSION['catid']==7)
       {
         header('Location:Rice.php');
       }
        else if($_SESSION['catid']==8)
       {
         header('Location:Dal.php');
       }
        else if($_SESSION['catid']==9)
       {
         header('Location:Desert.php');
       }
    }
    else
        header("Location:BookTable.html");
    
?>