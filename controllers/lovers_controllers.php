<?php

	if(!$_COOKIE['name'] && !$_COOKIE['firstname'] && !$_COOKIE['email'] && !$_COOKIE['age'] && !$_COOKIE['gender'] && !$_COOKIE['zipcode']) 
	{
			header('Location: /');
	}

		$sort_gender = stripslashes(htmlspecialchars($_COOKIE['search_gender']));


		if($sort_gender == "man") {
			echo "Vous recherchez des hommes.";
		} else if ($sort_gender == "woman") {
			echo "Vous recherchez des femmes";
		} else if($sort_gender == "all") {
			echo "Vous recherchez tout !";
		}



	