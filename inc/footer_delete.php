<footer>
	<div>
		<address>
			<strong>Angela Bruderer AG</strong><br>
			eCommerce<br>
			<?php
			if (!empty($varCode['varCodeID'])) {
				echo "Variationskarte" . " " . $varCode['varCodeID'] . " | " . $varCode['additional'];
			}
			?>
		</address>
		<br>
		<address>
			<strong>Thomas Gull</strong><br>
			<a href="mailto:thomas.gull@angela-bruderer.ch">thomas.gull@angela-bruderer.ch</a>
		</address>
	</div>
</footer>
<div class="small-12 small-centered">
	<ul id="copyright" class="no-bullet">
		<li>©2013 - <?php echo date("Y") ?> | all rights reserved
		<li>design and art by <a href="http://www.gulldesign.ch">gulldesign.ch</a></li>
	</ul>
</div>

	<script src="js/vendor/jquery.js"></script>
	<script src="js/vendor/what-input.js"></script>
	<script src="js/vendor/foundation.js"></script>
	<script src="js/app.js"></script>
</body>
</html>
