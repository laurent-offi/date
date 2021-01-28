      <h4> FAITES LA BONNE RENCONTRE</h4>
      <div class="container-fluid">
          <div class="row">

        <?php foreach ($profiles as $key => $value) {

        $n_firstname = $value["$firstname"];
        $n_lastname = $value["$lastname"];
        $n_email = $value["$email"];
        $n_description = $value["$description"];
        $n_age = $value["$age"];
        $n_gender = $value["$gender"];
        $n_zipcode = $value["$zipcode"];


        $idimage = $key; ?>

              <div class="col-md-3">
                  <div data-aos="zoom-in" class="card shadow mb-5">
                      <img class="profilImg" src="assets/img/hommes/<?= $idimage; ?>.png" class="card-img-top">
                      <div class="card-body">

                        <p class="display-6"><b class="name"><?php echo $n_firstname . "." . $n_lastname; ?></b></p>


                        <hr>

                        <div class="infos">
                          <li><b><i class="fas fa-calendar-alt"></i> Age :</b> <?php echo $n_age; ?> ans.</li>
                          <li><b><i class="fas fa-map-marker-alt"></i> Code postal :</b> <?php echo $n_zipcode; ?></li>
                        </div>

                        <hr>

                        <p class="card-text">« <?php echo $n_description; ?> »</p>


                          <a href="#" class="btn" role="button" aria-pressed="true">LIKE ♡</a>
                      </div>
                  </div>
              </div>
        <?php } ?>


          </div>
      </div>
  
  </body>

  </html>