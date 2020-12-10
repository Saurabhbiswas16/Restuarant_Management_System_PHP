 <?php
     session_start();
     if (isset($_SESSION['login']) and $_SESSION['login']==TRUE ){
        try{
            $dbhandler = new PDO('mysql:host=localhost;dbname=rms','root','');
            // echo "Connection is established...<br/>";
            $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
           
                 
                $query=$dbhandler->prepare("insert into employee_details (employee_name,employee_address,employee_city,employee_state,employee_pincode,employee_mobileno,employee_emailid) values (?,?,?,?,?,?,?)");
                $query->execute(array($_POST['name'],$_POST['address'],$_POST['city'],$_POST['state'],$_POST['pincode'],$_POST['mobile'],$_POST['email']));
                 header("Location:Admin_view.php");
        }
        catch (Exception $ex) {
            echo $ex->getMessage();
        }
           
        
        } 
        

     
      else {
          header("Location:Admin_login.php");
      }
      ?>