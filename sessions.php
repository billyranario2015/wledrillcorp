<?php 
/* --------------------- SESSIONS ---------------------- */


/* ------------------------------------------------------ */
/* ------------------- FOR TRANSLATIONS ----------------- */
/* ------------------------------------------------------ */

$language = "en";

if ( @$_GET['lang'] )
	$_SESSION['lang']  = $_GET['lang'];

if(isset($_SESSION["lang"]) && $_SESSION["lang"] != ""){
	$language = $_SESSION["lang"];
	include "language/$language/$language.php";
}

?>
