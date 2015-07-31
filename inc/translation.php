<?php 

/* --------------------- HOMEPAGE TRANSLATION ---------------------- */
	require_once 'class.translation.php';

	if(isset($_GET['lang']))
		$translate = new Translator($_GET['lang']);
	else
		$translate = new Translator('en');

	$req = trim($_SERVER["REQUEST_URI"], '/');

	$page = $req == '' ? 'home' : $req;
	
	if (isset($_GET['page'])) $page = $_GET['page'];

	if ( $page == '' ) {
		# code...
	}

?>