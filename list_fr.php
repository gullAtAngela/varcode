<?php require_once 'inc/head_fr.php'; ?>
<?php
if (isset($_GET["id"])) {
	$pageID = $_GET["id"];
	if(isset($varCode[$pageID])) {
		$varCode = $varCode[$pageID];
	}
	if (isset($_GET["language"])) {
	$language = $_GET["language"];
	}
}
echo $language;

if (!isset($varCode)) {
header("Location: error.php");
exit();
}
?>
<body>
<header>
	<div class="row">
		<div class="small-12 column">
			<ul class="language">
				<li><a href="list.php?id=<?php echo $pageID ?>">D</a></li>
				<li><a href="list_fr.php?id=<?php echo $pageID ?>">F</a></li>
			</ul>
			<h1>Carte de variation <?php echo $varCode['varCodeID'] ?></h1>
			<span class="additional"><?php echo $varCode['additional'] ?></span>
			<span class="timestamp">
				<?php echo date("d.m.Y"); ?>
			</span>
		</div>
	</div>
	<div class="row">
		<div class="small-12 column">
			<nav>
				<?= '<a class="back float-right" href="index_fr.php"><i class="fa fa-chevron-left" aria-hidden="true"></i> Aperçu</a>'; ?>
			</nav>
		</div>
	</div>
</header>
<div class="row">
	<div class="small-12 column">
		<ul class="varCodeList no-bullet">
		<?php 
			$position = 0;
			if (is_array($varCode)) {
				if ($varCode['varCodeID'] == '700') {
					foreach ($varCode as $key => $value) {
					if (is_array($value)) {
							echo "<li><span class=\"title\">Seersucker</span></li>\n";
						foreach ($value as $number => $code) {
						$position = $position + 1;
						echo list_view($number, $code);
							if ($position == 20) {
					 			echo "\t\t</ul>\n";
								echo "\t\t<ul class=\"varCodeList no-bullet\">\n";	
								echo "\t\t<li><span class=\"title\">Satin</span></li>\n";	
					 		}
					 		if ($position == 40) {
					 			echo "\t\t</ul>\n";
								echo "\t\t<ul class=\"varCodeList no-bullet\">\n";	
								echo "\t\t<li><span class=\"title\">Flanelle</span></li>\n";	
					 		}
					 		if ($position == 60) {
					 			echo "\t\t</ul>\n";
								echo "\t\t<ul class=\"varCodeList no-bullet\">\n";	
								echo "\t\t<li><span class=\"title\">Renforcé et Lin et Percale et Polycotton et Chambray</span></li>\n";	
					 		}
					 		if ($position == 80) {
					 			echo "\t\t</ul>\n";
								echo "\t\t<ul class=\"varCodeList no-bullet\">\n";	
								echo "\t\t<li><span class=\"title\">Jersey</span></li>\n";	
					 		}
					 	}
				 	}
				}
				exit;
				} else {
					foreach ($varCode as $key => $value) {
						if (is_array($value)) {
							foreach ($value as $number => $code) {
							$position = $position + 1;
							echo list_view($number, $code);
					
								if ($position == 33 || $position == 66) {
						 			echo "\t\t</ul>\n";
									echo "\t\t<ul class=\"varCodeList no-bullet\">\n";	
						 		}
						 	}
					 	}
					}
				}
			}
		 ?>
		</ul>
	</div>
</div>
<?php require_once 'inc/footer_fr.php'; ?>
</body>
</html>