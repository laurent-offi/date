<meta charset="utf-8">
<link rel="icon" href="../assets/img/favicon.ico" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


<?php if($_COOKIE['theme'] == "dark") { ?>

	<?php if($page != "Rechercher des célibataires") { ?>
	<link rel="stylesheet" type="text/css" href="../assets/css/darkmodestyle.css">
	<?php } ?>


	<?php if($page == "Rechercher des célibataires") { ?>
	<link rel="stylesheet" type="text/css" href="../assets/css/darkmodestyle1.css">
	<?php } ?>

	<link rel="stylesheet" type="text/css" href="../assets/css/darkmodefooter.css">



<?php } else { ?>

	<?php if($page != "Rechercher des célibataires") { ?>
	<link rel="stylesheet" type="text/css" href="../assets/css/lightmodestyle.css">
	<?php } ?>

	<link rel="stylesheet" type="text/css" href="../assets/css/lightmodefooter.css">

	<?php if($page == "Rechercher des célibataires") { ?>
	<link rel="stylesheet" type="text/css" href="../assets/css/lightmodestylecss.css">
	<?php } ?>

<?php } ?>



<link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
		integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
