<!DOCTYPE html>
	<html>
	<body>

				<div data-aos="fade-up" id="register" class="card shadow mb-5 col-7 text-left bg-white card-center">
				  	<ul class="list-group list-group-flush">

					  <div class="mb-3 row">
					    <label class="col-sm-3 col-form-label"><i class="fa fa-user"></i> <b>Nom :</b></label>
					    <div class="col-sm-9">
					      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $name; ?>">
					    </div>
					  </div>

					<div class="mb-3 row">
					    <label class="col-sm-3 col-form-label"><i class="fa fa-user"></i> <b>Prénom :</b></label>
					    <div class="col-sm-9">
					      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $firstname; ?>">
					    </div>
					</div>

					 <div class="mb-3 row">
					    <label class="col-sm-3 col-form-label"><i class="fas fa-envelope"></i> <b>Adresse email :</b></label>
					    <div class="col-sm-9">
					      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $email; ?>">
					    </div>
					 </div>

					<div class="mb-3 row">
					    <label class="col-sm-3 col-form-label"><i class="fa fa-star"></i> <b>Âge :</b></label>
					    <div class="col-sm-9">
					      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $age; ?> ans">
					    </div>
					</div>

					<div class="mb-3 row">
					    <label class="col-sm-3 col-form-label"><i class="fas fa-calendar-alt"></i> <b>Votre genre :</b></label>
					    <div class="col-sm-9">
					      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $gender; ?>">
					    </div>
					</div>

					<div class="mb-3 row">
					    <label class="col-sm-3 col-form-label"><i class="fas fa-calendar-alt"></i> <b>Genre recherché :</b></label>
					    <div class="col-sm-9">
					      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $sort_gender; ?>">
					    </div>
					</div>

					<div class="mb-3 row">
					    <label class="col-sm-3 col-form-label"><i class="fas fa-venus-mars"></i> <b>Code postal :</b></label>
					    <div class="col-sm-9">
					      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $zipcode; ?>">
					    </div>
					</div>

				 </ul>

				 <div class="mb-3 row text-center pt-3">

				 	<label class="col-sm-6"><button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-times-circle"></i> Supprimer toute trace</button></label>
				 	<label class="col-sm-6"><button type="button" class="btn btn-info"><i class="fas fa-money-bill-wave"></i> Take my money</button></label>

				 </div>
 
				</div>


					<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Supprimer votre compte</h5>
					        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					      </div>
					      <div class="modal-body">
					        En cliquant sur confirmer, vous allez supprimer votre compte et être redirigé vers l'inscription.
					      </div>
					      	<form method="post" action="removeMember_controllers.php">
					      		<div class="modal-footer">
					       		 <button type="submit" name="remove" class="btn btn-primary">Confirmer</button>
					     		</div>
					  		</form>
					    </div>
					  </div>
					</div>


	</body>
</html>