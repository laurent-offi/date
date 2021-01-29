<?php

	require_once('title.php');
	require_once('../public/assets/links/stl.php');

	if(!isset($_COOKIE['theme'])) {
		setcookie("theme", "light", time()+3600);
	}