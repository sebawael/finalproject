<?php
require('admin/includes/connect.php');
session_start();
// to calculate sum of price &number of product in cart
$num=$sum=0;
  if (!empty($_SESSION['order'])){ 

  foreach ($_SESSION['product'] as $key) {
        $query="SELECT * from product where pro_id=$key ";
        $result=mysqli_query($conn,$query); 
        while ($product=mysqli_fetch_assoc($result)) {
         $productcart[]=$product ;}}

        
        $max=count($_SESSION['order']);
        for($i=0;$i<$max;$i++){
        $sum= $sum+ $_SESSION['order'][$i]['price']; 
       $num=count($_SESSION['order']);
  }}
     

function redirect($location=Null){
    if($location!=Null){
      echo "<script>
          window.location='{$location}'
        </script>"; 
    }else{
      echo 'error location';
    }}


    function product_exists($pid){
    $pid=intval($pid);
    $max=count($_SESSION['product']);
    $flag=0;
    for($i=0;$i<$max;$i++){
      if($pid==$_SESSION['product'][$i]){
        $flag=1;
         echo '<script language="javascript">';
      echo 'alert("Item is already in the cart")';
      echo '</script>';
        return $flag;
        break;
      }
    }
    return $flag;
  }

 function productc_exists($pid){
    $pid=intval($pid);
    $max=count($_SESSION['order']);
    $flag=0;
    for($i=0;$i<$max;$i++){
      if($pid==$_SESSION['order'][$i]){
        $flag=1;
         echo '<script language="javascript">';
      echo 'alert("Item is already in the cart")';
      echo '</script>';
        return $flag;
        break;
      }
    }
    return $flag;
  }

  function addtoordercart($pid,$q,$price){
    if($pid<1 or $q<1) return;
    if (!empty($_SESSION['order'])){
      
      if(is_array($_SESSION['order'])){
        if(productc_exists($pid)) return;
        $max=count($_SESSION['order']);
        $_SESSION['order'][$max]['productid']=$pid;
        $_SESSION['order'][$max]['qty']=$q;
        $_SESSION['order'][$max]['price']=$price;}
        else{
         $_SESSION['order']=array();
         $_SESSION['order'][0]['productid']=$pid;
         $_SESSION['order'][0]['qty']=$q;
         $_SESSION['order'][0]['price']=$price;}}

          else{
         $_SESSION['order']=array();
         $_SESSION['order'][0]['productid']=$pid;
         $_SESSION['order'][0]['qty']=$q;
         $_SESSION['order'][0]['price']=$price;}
       }


  
?>