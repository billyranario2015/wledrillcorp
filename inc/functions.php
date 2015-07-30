<?php  

function submitInquiry()
{
	$to      = 'billy.ranario@must.edu.ph';
	$subject = 'From '.$_POST['client_name'];
	$message = '<p class="text-justify">'
			  . $_POST['client_msg']
			  .'</p>'
			  .'<p>Reply on this email: ' . $_POST['client_email']
			  .'</p>';

	$response = '';
	
	$mail = mail($to, $subject, $message);
	if( $mail ){
		$response = 'success';
	}else{
		$response = 'error';
	}
	return $response;
}

?>