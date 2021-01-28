<!DOCTYPE html>
	<html>
	<body>

		<?php

		if($sort_gender == "Homme") {
			require('genders/lovers1.php');
		} else if ($sort_gender == "Femme") {
			require('genders/lovers2.php');
		} else {
			echo "Il n'y a personne dans vos recommendations.";
		}
		?>



	</body>
</html>