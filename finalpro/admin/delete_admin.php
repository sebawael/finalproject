<?php
require ('includes/connect.php');
$query ="delete from admin where admin_id={$_GET['id']} ";
mysqli_query($conn,$query) ;
header ("location:manage_admin.php");
?>