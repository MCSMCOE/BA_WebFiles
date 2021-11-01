<?php


// Account details
	$apiKey = urlencode('B3emiOeG0kg-nKdBLOM27yOmLd0FG3r0g7jhMRhII2');
	
	// Message details
	
	$mobile = $_POST['mobile'];	 
	$name = $_POST['name'];	
	
	
	$branch=$_POST['branch'];	
	
	$numbers = array($mobile);
	$sender = urlencode('TXTLCL');
	$message = rawurlencode('Dear '.$name.'You have requested for the Branch: '.$branch.'Enter the OTP: 7680 to complete the registration proceess');
 
	$numbers = implode(',', $numbers);
 
	// Prepare data for POST request
	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
 
	// Send the POST request with cURL
	$ch = curl_init('https://api.textlocal.in/send/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	
	// Process your response here
	echo $response;

?>