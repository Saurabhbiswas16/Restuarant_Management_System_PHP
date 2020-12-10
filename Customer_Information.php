<?php
    try
    {
        session_start();
        $db=new PDO("mysql:host=localhost;dbname=rms","root","");
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $name=$_POST['customer_name'];
        $address=$_POST['customer_address'];
        $city=$_POST['customer_city'];
        $state=$_POST['customer_state'];    
        $pincode=$_POST['customer_pincode'];
        $email=$_POST['customer_emailid'];
        $mobile=$_POST['customer_mobileno'];
        $total=$_POST['customer_total'];
        $_SESSION['clogin']=TRUE;
        
        $sql = "INSERT INTO `customer_information` (`customer_name`, `customer_address`, `customer_city`, `customer_state`, `customer_pincode`, `customer_mobileno`, `customer_emailid`, `customer_total`,`customer_id`) VALUES ('$name', '$address', '$city', '$state', '$pincode', '$mobile', '$email', '$total',NULL)";
       $statement = $db->query($sql);
      $id = $db->lastInsertId('customer_id');
             $_SESSION['custid']=$id;
        header("location:/Php_RMS/Menuitems.php");
    } catch (Exception $ex) 
    {
        echo $ex->getMessage();
    }
?>
