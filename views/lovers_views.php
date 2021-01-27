<!DOCTYPE html>
	<html>
	<body>

		<?php

		if($sort_gender == "Homme") {
			require('genders/lovers_man_views.php');
		} else if ($sort_gender == "Femme") {
			require('genders/lovers_woman_views.php');

		}

		?>


	</body>
</html>