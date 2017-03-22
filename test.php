<?php

	require_once('config.php');

	@$email = $_POST['email'];
	@$pass = $_POST['pass'];
	
	if($email!=""){
		$result = true;

		if($result){
			$product['name'] = "oil";
			$product['desc'] = "desc";

			$response['success'] = true;			
			$response['error'] = false;			
			$response['msg'] = $product;

			echo json_encode($response);
		}
	}
?>