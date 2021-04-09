<?php require_once 'inc/head_fr.php'; ?>
<body>
<header>
<div class="row">
	<div class="small column">
		<ul class="language">
			<li><a href="index.php">D</a></li>
			<li><a href="index_fr.php">F</a></li>
		</ul><h1>Carte de variation <?php echo $pageID ?></h1>
		<?php
		if (!isset($_GET["id"])) {
			$pageID = $_GET["id"];
			echo '<span class="additional">Veuillez sélectionner une carte de variation</span>';
		}
		?>
	</div>
</div>
<div class="row">
	<div class="small-12 column">
		<nav>
			<?php echo navigation($varCode, "fr"); ?>
		</nav>
	</div>
</div>
</header>
<div class="spacer"></div>
<?php require_once 'inc/footer_fr.php'; ?>
</body>
</html>