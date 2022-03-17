<?php

 include("condb.php");



if(isset($_POST['submit']))
{
  // get the post records
  $name = $_POST['name'];
  $phone = $_POST['number'];
  $order = $_POST['order'];
  $quantity = $_POST['quantity'];
  $Occasion =$_POST['Occasion'];
  $date_time =$_POST['date'];
  $address =$_POST['address'];
  $message = $_POST['message'];

  // database insert SQL code
$rs = mysqli_query($conn, "INSERT INTO  formorder (name, phone, Occasion, order, quantity, date_time,address,message) VALUES ('$name', '$phone', '$order', '$quantity', '$Occasion','$date_time','$address','$message')");


echo '<script>alert(" we received your order and we will contact you soon :)")</script>';

  }


?>
