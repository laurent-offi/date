<?php


	$page = "Rechercher des célibataires";

	require_once('../core/boot.php');

	require_once('../public/bases/header.php');

	require_once('../controllers/lovers_controllers.php');

	

	if($_COOKIE['search_gender'] == "Homme") {
		require_once('../controllers/man_controllers.php');
	} else if($_COOKIE['search_gender'] == "Femme") {
		require_once('../controllers/woman_controllers.php');
	}

	require_once('../views/lovers_views.php');


	require_once('bases/footer.php');