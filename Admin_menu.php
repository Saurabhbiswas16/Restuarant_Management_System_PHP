<?php include './Admin_view.php';?>
<?php
    
    if (isset($_SESSION['login']) and $_SESSION['login']==TRUE){
        try{
           ?>
<link rel="stylesheet" href="Bootstrap.css">
<link rel="stylesheet" href="Bootstrap1.js">
<link rel="stylesheet" href="Bootstrap2.js">
<link rel="stylesheet" href="Bootstrap3.js">
<div class="row" >
    <div class="col-sm-4">
    <div class="card" >
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  </div>
  </div>
     <div class="col-sm-4">
  <div class="card" >
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
 </div>
</div>
<?php
        } catch (Exception $ex) {

        }
    }
    ?>