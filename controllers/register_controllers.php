<?php

	if(isset($_POST) && !empty($_POST)) {
		extract($_POST);
		$valid = true;


	if (isset($_POST["register"])) {
		$name = stripslashes(htmlentities(strtoupper(trim($_POST["name"]))));
		$firstname = stripslashes(htmlentities(ucfirst(trim($_POST["firstname"]))));
		$email = stripslashes(htmlentities(ucfirst(trim($_POST["email"]))));
		$age = stripslashes(htmlentities(trim($_POST["age"])));
		$gender = stripslashes(htmlspecialchars(ucfirst(trim($_POST["gender"]))));
		$zipcode = stripslashes(htmlspecialchars(trim($_POST["zipcode"])));
		

			if(empty($name)) {
				$error_name = "Le nom doit être renseigné.";
			}

			if(empty($firstname)) {
				$error_firstname = "Le prénom doit être renseigné.";
			}

			if(empty($email)) {
				$error_email = "L'adresse email doit-être renseignée.";
			}

			if(empty($age)) {
				$error_age = "l'âge doit-être renseigné.";
			}

			if(empty($gender)) {
				$error_gender = "Le genre doit-être renseigné.";
			}

			if(empty($zipcode)) {
				$error_zipcode = "Le code postal doit-être renseigné.";
			}


		if(!empty($name && $firstname && $email && $age && $gender && $zipcode)) {
			
			$regex = "/^[A-Z][\p{L}-]*$/is";


			if(!preg_match($regex, $name)) {
					$valid = false;
					$error_name = "Le nom est invalide.";
			}

			if(!preg_match($regex, $firstname)) {
					$valid = false;
					$error_firstname = "Le prénom est invalide.";
			}

			if(!preg_match("/^[a-z0-9\-_.]+@[a-z]+\.[a-z]{2,3}$/i", $email)) {
					$valid = false;
					$error_email = "L'adresse email est invalide. (Exemple@email.com).";
			}

			if(!preg_match("/^([0-9])+$/is", $age)) {
					$valid = false;
					$error_age = "L'âge n'est pas approprié. (Exemple : 18)";
			} else {
				if($age < 18) {
					$valid = false;
					$error_age = "Vous devez avoir plus de 18 ans pour pouvoir vous inscrire.";
				}
			}

			if(!preg_match("/^[0-9]{5}$/", $zipcode)) {
					$valid = false;
					$error_zipcode = "Le code postal est invalide.";
			}




		} 
	}
}