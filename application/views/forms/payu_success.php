<?php
//echo"<pre>";print_r($_POST);exit;
$status=$_POST["status"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];
$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$surl=$_POST["field2"];
$furl=$_POST["field3"];
$email=$_POST["email"];
$salt="eCwWELxi";

If (isset($_POST["status"]) && $_POST["status"] =="success") {
  
                  }
	else {	  

        $retHashSeq = $key.'|'.$txnid.'|'.$amount.'|'.$firstname.'|'.$email.'|'.$productinfo.'|'.$surl.'|'.$furl.'|||||||||||';

         }

		 $hash = hash("sha512", $retHashSeq);
		 print_r($hash); echo"<pre>";print_r($posted_hash);exit;
       if ($hash != $posted_hash) {
	       echo "Invalid Transaction. Please try again";
		   }
	   else {
           	   
          echo "<h3>Thank You. Your order status is ". $status .".</h3>";
          echo "<h4>Your Transaction ID for this transaction is ".$txnid.".</h4>";
          echo "<h4>We have received a payment of Rs. " . $amount . ". Your order will soon be shipped.</h4>";
           
		   }         
?>