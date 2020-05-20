<?php 


function redirect($location=Null){
    if($location!=Null){
      echo "<script>
          window.location='{$location}'
        </script>"; 
    }else{
      echo 'error location';
    }}

  function removetocart($pid){
		$pid=intval($pid);

		$max=count($_SESSION['product']);
		for($i=0;$i<$max;$i++){
			if($pid==$_SESSION['product'][$i]){
       
				unset($_SESSION['product'][$i]);
        unset($_SESSION['order'][$i]['productid']);

				break;
			}
		}
		$_SESSION['product']=array_values($_SESSION['product']);
	}

  function Delete(){
   
    if(isset($_GET['id'])) {
      removetocart($_GET['id']);
      $countcart =isset($_SESSION['product'])? count($_SESSION['product']) : "0";
      if($countcart==0){unset($_SESSION['product']);}
      redirect("shopping-cart.php");
      
    }}

 function add(){
$pid=$_GET['id'];
$price=$_GET['price'];
$qty=$_GET['qty'];
addtoordercart($pid,$qty,$price);
if(!product_exists($pid)){
// []to make assoc array because we have multiple pro_id
$_SESSION['product'][]=$pid;

}}


    function Edit(){
      if (isset($_GET['id'])){   
       $max=count($_SESSION['order']);
       $pid=$_GET['id'];
       for($i=0;$i<$max;$i++){
        if($pid == $_SESSION['product'][$i]){
         if (isset($_GET['qty'])){ 
          $qty=$_GET['qty'];
          $_SESSION['order'][$i]['qty']=$qty;}
          if (isset($_GET['price'])){ 
            $price=$_GET['price'];
            $pricetot=$price * $qty ;
            $_SESSION['order'][$i]['price']=$pricetot;}

          }
        } 
      }
    }
    
 
    ?>
 
