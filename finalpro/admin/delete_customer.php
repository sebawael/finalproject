<?php
require ('includes/connect.php');
$query ="delete from customer where customer_id={$_GET['id']} ";
mysqli_query($conn,$query) ;
header ("location:customer.php");
?>