<?php

session_start();
//start session
require_once ('CreateDb.php');
require_once ('./component.php');

//create instance of createdb class
$database= new CreateDb("Productdb","Producttb");

if(isset($_POST['add'])){
  //print_r($_POST['product_id']);
if(isset($_SESSION['cart'])){

$item_array_id =  array_column($_SESSION['cart'],"product_id");

if(in_array($_POST['product_id'],$item_array_id)){
  echo "<script>alert('Product is already added in the cart..!')</script>";
  echo "<script> window.location='index.php' </script>";
 }else{

$count=count($_SESSION['cart']);
$item_array=array(
  'product_id'=>$_POST['product_id']);

  $_SESSION['cart'][$count]=$item_array;

}
}else{
  $item_array=array(
    'product_id'=>$_POST['product_id']
  );

  //Create new session variables
  $_SESSION['cart'][0]=$item_array;
  print_r($_SESSION['cart']);
}
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
  content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Shopping Cart</title>

  <!--Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css"/>

  <!-- Bootstrap CDN -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

          <link rel="stylesheet" href="style.css">
</head>

<body>


<?php

require_once ("header.php");
?>
<div class="container">
  <div class="row text-center py-5">
   <?php
    $result=$database->getData();
    while($row = mysqli_fetch_assoc($result)){
        component($row['product_name'],$row['product_price'],$row['product_image'],$row['description'],$row['price'],$row['id']);
    }
    ?>

   </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>
