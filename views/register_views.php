<!DOCTYPE html>
	<html lang="fr">
	<body>

			<div class="container text-center">
		  		<div class="row align-items-start">
		    	<div data-aos="flip-up" class="col-sm">
		      		<img src="assets/img/logo.png">
		      		<div class="col-sm"><span class="slogan">Rencontrez des célibataires, et commencez votre aventure dès maintenant !</span></div>
		      		<div class="col-sm"><img class="responsive" src="assets/img/vector_01.png"></div>
		    	</div>




		    <div class="col-sm">
				<div data-aos="fade-up" id="register" class="card shadow mb-5 bg-white">
				  	<ul class="list-group list-group-flush">
				  	<h1>Inscription</h1>
					  	<form method="post">
							<div class="input-group mb-3">
								<span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
							    <input type="text" name="name" class="form-control" placeholder="Nom" value="<?php if(isset($name)) { echo $name; } ?>">
						  	</div>

						  	<?php if(isset($error_name)) { ?>
							<p class="error"><i class="fas fa-exclamation-triangle"></i> <?php echo $error_name; ?></p>
							<?php } ?>

						  	<div class="input-group mb-3">
						  		<span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
							    <input type="tewt" name="firstname" class="form-control" placeholder="Prénom" value="<?php if(isset($firstname)) { echo $firstname; } ?>">
						  	</div>

						  	<?php if(isset($error_firstname)) { ?>
						  	<p class="error"><i class="fas fa-exclamation-triangle"></i> <?php echo $error_firstname; ?></p>
							<?php } ?>

							<div class="input-group mb-3">
								<span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
							    <input type="email" name="email" class="form-control" placeholder="Adresse email" value="<?php if(isset($email)) { echo $email; } ?>">
						  	</div>

						  	<?php if(isset($error_email)) { ?>
							<p class="error"><i class="fas fa-exclamation-triangle"></i> <?php echo $error_email; ?></p>
							<?php } ?>

							<div class="input-group mb-3">
								<span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar-alt"></i></span>
							    <input type="text" name="age" class="form-control" placeholder="Âge" value="<?php if(isset($age)) { echo $age; } ?>">
						  	</div>

						  	<?php if(isset($error_age)) { ?>
						  	<p class="error"><i class="fas fa-exclamation-triangle"></i> <?php echo $error_age; ?></p>
							<?php } ?>


						  	<div class="input-group mb-3">
						  		<span class="input-group-text"><i class="fas fa-venus-mars"></i></span>
								<select class="form-select" name="gender">
								  <option value="Homme">Je suis un homme</option>
								  <option value="Femme">Je suis une femme</option>
								  <option value="Non-Binaire">Je suis non-binaire</option>
								</select>
						  	</div>

						  	<?php if(isset($error_gender)) { ?>
							<p class="error"><i class="fas fa-exclamation-triangle"></i> <?php echo $error_gender; ?></p>
							<?php } ?>



						  	<div class="input-group mb-3">
						  		<span class="input-group-text"><i class="fas fa-venus-mars"></i></span>
								<select class="form-select" name="search_gender">
								  <option value="Homme">Je recherche un homme</option>
								  <option value="Femme">Je recherche une femme</option>
								  <option value="Tout">Je recherche tout</option>
								</select>
						  	</div>

						  	<?php if(isset($error_search_gender)) { ?>
							<p class="error"><i class="fas fa-exclamation-triangle"></i> <?php echo $error_search_gender; ?></p>
							<?php } ?>








							<div class="input-group mb-3">
								<span class="input-group-text" id="basic-addon1"><i class="fa fa-map"></i></span>
							    <input type="text" name="zipcode" class="form-control" placeholder="Code postal" value="<?php if(isset($zipcode)) { echo $zipcode; } ?>">
						  	</div>

						  	<?php if(isset($error_zipcode)) { ?>
						  	<p class="error"><i class="fas fa-exclamation-triangle"></i> <?php echo $error_zipcode; ?></p>
							<?php } ?>

						
		  					<button type="submit" name="register" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> S'inscrire</button>
						</form>
					</ul>
				</div>

			</div>
	</body>
</html>