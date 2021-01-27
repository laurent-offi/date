<?php

	if(!$_COOKIE['name'] && !$_COOKIE['firstname'] && !$_COOKIE['email'] && !$_COOKIE['age'] && !$_COOKIE['gender'] && !$_COOKIE['zipcode']) 
	{
			header('Location: /');
	}

		$sort_gender = stripslashes(htmlspecialchars($_COOKIE['search_gender']));




	