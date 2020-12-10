 <?php
     session_start();
     if (isset($_SESSION['login']) and $_SESSION['login']==TRUE ){
        try{
            $dbhandler = new PDO('mysql:host=localhost;dbname=rms','root','');
            // echo "Connection is established...<br/>";
            $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            if(!empty($_FILES["myfile"]["name"]))
            {
                echo 'hiiIF';
                $target_location="./images/image/".basename($_FILES["myfile"]["name"]);
                if(! (move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_location)))
                    echo "Error: " . $_FILES["myfile"]["error"] . "<br>";
                $query=$dbhandler->prepare("update fooditems_details set fooditem_name=?,fooditem_description=?,fooditem_price=?,fooditem_img=? where fooditem_id=?");
                $query->execute(array($_POST['name'],$_POST['description'],$_POST['price'],$target_location,$_SESSION['id']));
            }
            else
            {
                echo 'hiiELSE';
                $query=$dbhandler->prepare("update fooditems_details set fooditem_name=?,fooditem_description=?,fooditem_price=? where fooditem_id=?");
                 $query->execute(array($_POST['name'],$_POST['description'],$_POST['price'],$_SESSION['id']));
            }
             //$_SESSION['username']=$_POST['username'];
             //$_SESSION['profile_pic']=$new;
             
             header("Location:fooditems.php");
        
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }

     }
      else {
         echo 'hello'; 
      }
      ?>