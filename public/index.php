<?php

	$page = "Inscription";
	
	require_once('../core/boot.php');

	require_once('../controllers/register_controllers.php');


	if(isset($_COOKIE['name']) && $_COOKIE['firstname'] && $_COOKIE['email'] && $_COOKIE['age'] && $_COOKIE['gender'] && $_COOKIE['zipcode']) {
		header('Location: lovers');
	} else {
		include('../views/register_views.php');
	}

	require_once('bases/footer.php');