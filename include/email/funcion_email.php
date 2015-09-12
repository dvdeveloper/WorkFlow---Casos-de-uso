<?php
function enviarEmail($email,$asunto,$body){
	require_once 'PHPMailerAutoload.php';
	$mail = new PHPMailer();

	$mail->IsSMTP(); 
	$mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'ssl'; 
	$mail->Host = "p3plcpnl0656.prod.phx3.secureserver.net ";
	$mail->Port = 465; // or 587
	$mail->IsHTML(true);
	$mail->Username = "contact@compresscode.com";
	$mail->Password = "FIoH6ts9";

	$mail->SetFrom("contacto@compresscode.com","Nuevo Contacto compresscode");
	
	$addresses = explode(';', $email);
	foreach ($addresses as $address) {
	    $mail->AddAddress($address);
	}

	
	

	$mail->IsHTML(true); 

	$mail->Subject = $asunto; 
	$mail->Body = $body; 
	$va = $mail->Send();
	return $va;
}
?>