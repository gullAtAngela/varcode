<?php
$pageTitle = "Variationskarten";
include_once '../_template/head.php';
date_default_timezone_set('Europe/Zurich');
include_once 'inc/config.php';
include 'inc/varcode.php';
$activNav = "varCode";
?>
<body>
<div class="container">
	<?php include_once '../_template/header.php'; ?>
	<div class="row">
		<div class="col-sm-12 col-md-8">
			<!-- <ul class="list-inline">
				<li class="list-inline-item"><a href="index.php">D</a></li>
				<li class="list-inline-item"><a href="index_fr.php">F</a></li>
			</ul> -->
			<h1><?= $pageTitle ?> <?= $pageID ?? "";?></h1>
			<?php
			if (isset($_GET["id"])) {
				$pageID = $_GET["id"];
				echo '<span class="additional">Bitte wähle eine Variationskarte aus</span>';
			}
			?>     
		</div>
	</div>
	<div class="row mb-5">
		<div class="col-sm-12">
			<nav>
				<?php echo navigation($varCode); ?>
			</nav>
		</div>
	</div>
</div>

<?php include '../_template/footer.php'; ?>