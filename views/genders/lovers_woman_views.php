<!DOCTYPE html>
	<html>
	<body>

		<?php

		if($sort_gender == "man") {
				echo "Vous recherchez des hommes";
		} else if ($sort_gender == "woman") {
			echo "Vous recherchez des femmes";
		} else if($sort_gender == "all") {
			require_once('lovers_woman_views.php');
		}


		?>


	</body>
</html>