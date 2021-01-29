<?php

	$url = $_SERVER['HTTP_REFERER'];

	if (isset($_POST["switch"])) {
		if($_COOKIE['theme'] == "light") {
			setcookie("theme", "dark", time()+3600);
			header('Location: ' . $url);
		} else if ($_COOKIE['theme'] == "dark") {
			setcookie("theme", "light", time()+3600);
			header('Location: ' . $url);
		}
	}