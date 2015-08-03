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

function trim_language_url( $data_url )
{

	$a = $data_url;
	$parts = parse_url($a);
	$queryParams = array();
	parse_str( @$parts['query'] , $queryParams);
	unset( $queryParams['lang'] );
	$queryString = http_build_query($queryParams);
	$url = $parts['path'] . '?' . $queryString;
	return $url;
}

?>