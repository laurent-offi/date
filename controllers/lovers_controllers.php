<?php

	if(!$_COOKIE['name'] && !$_COOKIE['firstname'] && !$_COOKIE['email'] && !$_COOKIE['age'] && !$_COOKIE['gender'] && !$_COOKIE['zipcode']) 
	{
			header('Location: /');
	}

		$sort_gender = stripslashes(htmlspecialchars($_COOKIE['gender']));


		if($sort_gender == "Man") {
			echo "Vous recherchez des hommes.";
		} else if ($sort_gender == "Woman") {
			echo "Vous recherchez des femmes";
		} else if($sort_gender == "All") {
			echo "Vous recherchez tout !";
		}



	