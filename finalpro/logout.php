<?php
require('cart.php');
$ordernum=$_SESSION['ordernumber'];
$query="SELECT * from tableorder  where ordernum='$ordernum'";
$result=mysqli_query($conn,$query);
$order=mysqli_fetch_assoc($result);
$id=$order['summaryid'];

unset($_SESSION['ordernumber']);
unset($_SESSION['product']);
unset($_SESSION['order']);
unset($_SESSION['customerid']);
header ("location:confirmation.php?id=$id");
	?>