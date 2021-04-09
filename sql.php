<!DOCTYPE HTML>
<html lang="de">
<head>
<?php date_default_timezone_set('Europe/Zurich'); ?>
<link rel="stylesheet" type="text/css" href="css/style.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="" />
<meta name="keywords" content="" />
<?php 
	include_once 'inc/varCode.php';
	include_once 'inc/config.php';
?>
<title>Variationskarten | Angela Bruderer</title>
</head>
<body>
	<div id="wrapper">
		<header>
			<h1>Variationskarte <?php echo $varCode['varCodeID'] ?></h1>
			<span class="additional"><?php echo $varCode['additional'] ?></span>
			<ul class="language">
				<li><a href="list.php?id=<?php echo $pageID ?>">D</a></li>
				<li><a href="list_fr.php?id=<?php echo $pageID ?>">F</a></li>
			</ul>
			<nav>
			</nav>
		</header>
<?php 
	foreach ($varCode as $value) {
		foreach ($value['code'] as $code) {
			$summary = count($value['code']);
			// echo "INSERT INTO varcode_german (varcode, codeDe, additional) VALUES (\"$value[varCodeID]\", \"$code\", \"$value[additional]\");\n";
			// echo "<br>";
			// foreach ($varCode['varCodeID'] as $varID) {
			
		}
	}
			for ($i = 1, $j = 892; $i <= 99, $j <991; $i++, $j++) {
					echo "UPDATE varcode_german SET variationID=$i WHERE varcode=604 AND id=$j;\n";
				// }
			}
			for ($i = 1, $j = 991; $i <= 99, $j <1090; $i++, $j++) {
					echo "UPDATE varcode_german SET variationID=$i WHERE varcode=610 AND id=$j;\n";
				// }
			}
			for ($i = 1, $j = 1090; $i <= 99, $j <1189; $i++, $j++) {
					echo "UPDATE varcode_german SET variationID=$i WHERE varcode=620 AND id=$j;\n";
				// }
			}
			for ($i = 1, $j = 1190; $i <= 99, $j <1280; $i++, $j++) {
					echo "UPDATE varcode_german SET variationID=$i WHERE varcode=700 AND id=$j;\n";
				// }
			}
	// for ($i = 1; $i < $summary; $i++) {
	// 	echo "UPDATE varcode_german (variationID) VALUES $i WHERE varcode = 002 AND id = $i;\n";
	// }
?>
		<p class="timestamp">
			<?php echo date("d.m.Y"); ?>
		</p>
		<footer>
			<div>
				<address>
					<strong>Angela Bruderer AG</strong><br>
					eCommerce<br>
				</address>
				<address>
					<strong>Thomas Gull</strong><br>
					<a href="mailto:thomas.gull@angela-bruderer.ch">thomas.gull@angela-bruderer.ch</a>
				</address>
			</div>
		</footer>
		<ul id="copyright">
			<li>©<?php echo date("Y") ?> | all rights reserved
			<li>design and art by <a href="http://www.gulldesign.ch">gulldesign.ch</a></li>
		</ul>
	</div>	
</body>
</html>