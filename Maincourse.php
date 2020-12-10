<?php include './Customer_view.php';?>
<?php
    
   if (isset($_SESSION['clogin']) and $_SESSION['clogin']==TRUE){
        try{
           
           ?>
<link rel="stylesheet" href="Bootstrap.css">
<link rel="stylesheet" href="Bootstrap1.js">
<link rel="stylesheet" href="Bootstrap2.js">
<link rel="stylesheet" href="Bootstrap3.js">
<div class="row" >
    
     <div class="col-sm-4">
  <div class="card" >
      <img src="images/Static/Punjabi.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Punjabi</h5>
    <p class="card-text">Distinctively Punjabi cuisine is known for its rich, buttery flavours along with the extensive vegetarian and meat dishes. </p>
    <a href="Punjabi.php" class="btn btn-primary">Order Punjabi</a>
 </div>
</div>
     </div>
         <div class="col-sm-4">
    <div class="card" >
        <img src="images/Static/Veg.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Veg</h5>
    <p class="card-text">Indian cuisine is favored by vegetarians due to the many varied and tasty options, from a chickpea curry to garlic-tinged lentils to paneer cheese in a rich sauce. </p>
    <a href="Veg.php" class="btn btn-primary">Order Veg</a>
  </div>
  </div>
  </div>
          <div class="col-sm-4">
    <div class="card" >
        <img src="images/Static/RIce.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Rice</h5>
    <p class="card-text">Rice consists of white or brown grains taken from a cereal plant. You cook rice and usually eat it with meat or vegetables.</p>
    <a href="Rice.php" class="btn btn-primary">Order Rice</a>
  </div>
  </div>
  </div>
    <br>
          <div class="col-sm-4">
    <div class="card" >
        <img src="images/Static/Roti.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Roti</h5>
    <p class="card-text">Roti (also known as chapati) is a round flatbread native to the Indian subcontinent made from stoneground wholemeal flour, traditionally known as atta, and water that is combined into a dough.</p>
    <a href="Roti.php" class="btn btn-primary">Order Roti</a>
  </div>
  </div>
  </div>
          <div class="col-sm-4">
    <div class="card" >
        <img src="images/Static/Dal.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Dal</h5>
    <p class="card-text">dal is one of the staple dishes in Indian cuisine. Different types of lentils are used in Indian cooking.</p>
    <a href="Dal.php" class="btn btn-primary">Order Dal</a>
  </div>
  </div>
  </div>
     </div>

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