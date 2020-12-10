 <?php
     session_start();
     if (isset($_SESSION['login']) and $_SESSION['login']==TRUE ){
        try{
            $dbhandler = new PDO('mysql:host=localhost;dbname=rms','root','');
            // echo "Connection is established...<br/>";
            $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            if(!empty($_FILES["myfile"]["name"]))
            {
                
                $target_location="./images/Database/".basename($_FILES["myfile"]["name"]);
                if(! (move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_location)))
                    echo "Error: " . $_FILES["myfile"]["error"] . "<br>";
                $query=$dbhandler->prepare("insert into fooditems_details (category_id,fooditem_name,fooditem_description,fooditem_price,fooditem_img) values (?,?,?,?,?)");
                $query->execute(array($_POST['id'],$_POST['name'],$_POST['description'],$_POST['price'],$target_location));
                 header("Location:Admin_view.php");
        }
           
        
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }

     }
      else {
          header("Location:Admin_login.php");
      }
      ?>