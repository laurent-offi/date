 <footer class="foot">
          <div class="text-center p-3">
              © 2021 Copyright: Sarah Charef Laurent Courcelle <br />
              <a href="legalmentions">Mention légal </a>

            <form method="post" action="theme_controllers.php">

            	<?php if($_COOKIE['theme'] == "light") { ?>
             		<button name="switch" class="switch"><i class="far fa-sun"></i></button>
             	<?php } else if($_COOKIE['theme'] == "dark") { ?>
             		<button name="switch" class="switch"><i class="far fa-moon"></i></button>
             	<?php } ?>
         	</form>

          </div>

</footer>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script type="text/javascript" src="assets/js/AOS.js"></script>