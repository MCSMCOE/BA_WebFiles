<?php
echo 'working';
echo $receipientno = $_POST['mobile'];	 
$msgtxt=$_POST['branch'];	
if(preg_match( '/^[A-Z0-9]{10}$/', $receipientno) && !empty($msgtxt)) {
 
$ch = curl_init();
$user="smspromo@kascsathy.ac.in:omorpsms@";
$senderID="TEST SMS"; 
curl_setopt($ch,CURLOPT_URL,  "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
$buffer = curl_exec($ch);
if(empty ($buffer))
{ echo " buffer is empty "; }
else
{ echo $buffer;
	echo 'Message Sent Successfully';
 } 
curl_close($ch); 
}


?>