<?php
require ('includes/connect.php');
$query = "DELETE from product where pro_id={$_GET['id']} ";
mysqli_query($conn,$query) ;
header ("location:manage_product.php");
?>
