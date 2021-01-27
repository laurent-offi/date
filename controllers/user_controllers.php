<?php

	if(!$_COOKIE['name'] && !$_COOKIE['firstname'] && !$_COOKIE['email'] && !$_COOKIE['age'] && !$_COOKIE['gender'] && !$_COOKIE['zipcode']) 
	{
			header('Location: /');
	}

		$name = stripslashes(htmlspecialchars($_COOKIE['name']));
		$firstname = stripslashes(htmlspecialchars($_COOKIE['firstname']));
		$email = stripslashes(htmlspecialchars($_COOKIE['email']));
		$age = stripslashes(htmlspecialchars($_COOKIE['age']));
		$gender = stripslashes(htmlspecialchars($_COOKIE['gender']));
		$sort_gender = stripslashes(htmlspecialchars($_COOKIE['search_gender']));
		$zipcode = stripslashes(htmlspecialchars($_COOKIE['zipcode']));

	