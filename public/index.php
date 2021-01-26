<?php

	require_once('../core/boot.php');


	if(isset($_COOKIE['user'])) {
		include('../views/home_views.php');
	} else {
		include('../views/login_views.php');
	}

	require_once('bases/footer.php');