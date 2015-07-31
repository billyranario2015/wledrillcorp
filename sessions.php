<?php 

/* --------------------- SESSIONS ---------------------- */

if ( @$_GET['lang'] == 'ph' ) {
	$_SESSION['dir']  = 'tpl-ph';
}else if( @$_GET['lang'] == 'en' )
	$_SESSION['dir']  = 'tpl';
?>