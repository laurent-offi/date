      <h4> FAITES LA BONNE RENCONTRE</h4>
      <div class="container-fluid">
          <div class="row">

        <?php foreach ($profiles as $key => $value) {
        $idimage = $key; ?>

              <div class="col-md-3">
                  <div class="card">
                      <img class="profilImg" src="assets/img/hommes/<?= $idimage; ?>.png" class="card-img-top">
                      <div class="card-body">
        <?php 
        if (is_array($value)) {
            foreach ($value as $key => $value) {
                echo $value; ?>
                          <p class="card-text"></p>
                              <?php } ?>
                          <a href="#" class="btn" role="button" aria-pressed="true">LIKE ♡</a>
                      </div>
                  </div>
              </div>
        <?php } } ?>


          </div>
      </div>
  
  </body>

  </html>