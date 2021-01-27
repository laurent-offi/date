<?php

	if(isset($_POST['remove'])) {
		setcookie("name", "", time()-3600);
		setcookie("firstname", "", time()-3600);
		setcookie("email", "", time()-3600);
		setcookie("age", "", time()-3600);
		setcookie("gender", "", time()-3600);
		setcookie("search_gender", "", time()-3600);
		setcookie("zipcode", "", time()-3600);

		header('Location: /');
	}