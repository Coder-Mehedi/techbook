<?php 
session_start();

if(isset($_POST['arabic'])) {
	$_SESSION['ar'] = $_POST['arabic'];
}

if(isset($_POST['english'])) {
	$_SESSION['ar'] = null;
}

if($_SESSION['ar']){
	get_template_part( 'index-ar');
} else {
	get_template_part( 'index-en' );
}

