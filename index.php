<?php 

	require_once 'vendor/autoload.php';
	require_once 'inc/functions.php';

	$loader = new Twig_Loader_Filesystem('tpl');
	$twig = new Twig_Environment($loader);

	$req = trim($_SERVER["REQUEST_URI"], '/');

	$page = $req == '' ? 'home' : $req;
	if (isset($_GET['page'])) $page = $_GET['page'];
	
	$action = '';
	if (isset($_GET['action'])) $action = $_GET['action'];

	echo basename($_SERVER['REQUEST_URI']);

	/* ------------------- Loads Images in the folder ------- */
	$data = array();
	if ( $page == 'gallery' ) {
		$dir = 'img/gallery';
		$files = array_diff(scandir($dir), array('..', '.'));
		$data['gallery'] = $files;
	}
	if ( $page == 'gallery-drills' ) {
		$dir = 'img/gallery-drills';
		$files = array_diff(scandir($dir), array('..', '.'));
		$data['gallery'] = $files;
	}
	if ( $page == 'parts' ) {
		$dir = 'img/parts';
		$files = array_diff(scandir($dir), array('..', '.'));
		$data['gallery'] = $files;
	}
	if ( $page == 'services' ) {
		$dir = 'img/services';
		$files = array_diff(scandir($dir), array('..', '.'));
		$data['services'] = $files;
	}

	/* ------------------- Contact Form --------------------- */
	$alert_msg = null;
	if ( $action == 'send-inquiry' ) {
		$alert_msg = submitInquiry();
	}

	try {
		echo $twig->render($page.'.html.twig', 
			array(
				'pagename' 	=> $page,
				'data'		=> $data,
				'alert_msg' => $alert_msg
			)
		);
	} catch(Exception $e) {
		echo $twig->render('404.html.twig');
	}

?>