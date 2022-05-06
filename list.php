<?php
$pageTitle = "Variationskarten";
include_once '../_template/head.php';
date_default_timezone_set('Europe/Zurich');
include_once 'inc/config.php';
include 'inc/varcode.php';

if (isset($_GET["id"])) {
	$pageID = $_GET["id"];
	if (isset($varCode[$pageID])) {
		$varCode = $varCode[$pageID];
	}
	if (isset($_GET["language"])) {
		$language = $_GET["language"];
	}
}

// echo $language;

if (!isset($varCode)) {
	header("Location: error.php");
	exit();
}
?>

<body>
	<div class="container">
		<?php include_once '../_template/header.php'; ?>
		<div class="row">
			<div class="col-sm-12 col-md-8">
				<!-- <ul class="list-inline">
				<li class="list-inline-item"><a href="list.php?id=<?php echo $pageID ?>">D</a></li>
				<li class="list-inline-item"><a href="list_fr.php?id=<?php echo $pageID ?>">F</a></li>
			</ul> -->
				<h1><?= $pageTitle ?> | <?php echo $varCode['varCodeID'] ?></h1>
				<span class="additional"><?php echo $varCode['additional'] ?></span>
				<span class="timestamp">
					<?php echo date("d.m.Y"); ?>
				</span>
			</div>
		</div>
		<div class="row justify-content-end mb-3">
			<div class="col-sm-2 text-end">
				<a class="btn btn-primary" href="index.php" role="button"><i class="fa fa-chevron-left" aria-hidden="true"></i> Übersicht</a>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<ul class="varCodeList">
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
											echo "\t\t<li><span class=\"title\">Barchent</span></li>\n";
										}
										if ($position == 60) {
											echo "\t\t</ul>\n";
											echo "\t\t<ul class=\"varCodeList no-bullet\">\n";
											echo "\t\t<li><span class=\"title\">Renforcé & Leinen & Perkal & Polycotton & Chambray</span></li>\n";
										}
										if ($position == 80) {
											echo "\t\t</ul>\n";
											echo "\t\t<ul class=\"varCodeList no-bullet\">\n";
											echo "\t\t<li><span class=\"title\">Jersey & Mikrofaser</span></li>\n";
										}
									}
								}
							}
						}
						if ($varCode['varCodeID'] == '701') {
							foreach ($varCode as $key => $value) {
								if (is_array($value)) {
									echo "<li><span class=\"title\">...</span></li>\n";
									foreach ($value as $number => $code) {
										$position = $position + 1;
										echo list_view($number, $code);
										if ($position == 20) {
											echo "\t\t</ul>\n";
											echo "\t\t<ul class=\"varCodeList no-bullet\">\n";
											echo "\t\t<li><span class=\"title\">Mako-Satin</span></li>\n";
										}
										if ($position == 40) {
											echo "\t\t</ul>\n";
											echo "\t\t<ul class=\"varCodeList no-bullet\">\n";
											echo "\t\t<li><span class=\"title\">...</span></li>\n";
										}
										if ($position == 60) {
											echo "\t\t</ul>\n";
											echo "\t\t<ul class=\"varCodeList no-bullet\">\n";
											echo "\t\t<li><span class=\"title\">...</span></li>\n";
										}
										if ($position == 80) {
											echo "\t\t</ul>\n";
											echo "\t\t<ul class=\"varCodeList no-bullet\">\n";
											echo "\t\t<li><span class=\"title\">...</span></li>\n";
										}
									}
								}
							}
						}
						if ($varCode['varCodeID'] == '702') {
							foreach ($varCode as $key => $value) {
								if (is_array($value)) {
									echo "<li><span class=\"title\">...</span></li>\n";
									foreach ($value as $number => $code) {
										$position = $position + 1;
										echo list_view($number, $code);
										if ($position == 20) {
											echo "\t\t</ul>\n";
											echo "\t\t<ul class=\"varCodeList no-bullet\">\n";
											echo "\t\t<li><span class=\"title\">...</span></li>\n";
										}
										if ($position == 40) {
											echo "\t\t</ul>\n";
											echo "\t\t<ul class=\"varCodeList no-bullet\">\n";
											echo "\t\t<li><span class=\"title\">...</span></li>\n";
										}
										if ($position == 60) {
											echo "\t\t</ul>\n";
											echo "\t\t<ul class=\"varCodeList no-bullet\">\n";
											echo "\t\t<li><span class=\"title\">...</span></li>\n";
										}
										if ($position == 80) {
											echo "\t\t</ul>\n";
											echo "\t\t<ul class=\"varCodeList no-bullet\">\n";
											echo "\t\t<li><span class=\"title\">...</span></li>\n";
										}
									}
								}
							}
						}
						if ($varCode['varCodeID'] == '703') {
							foreach ($varCode as $key => $value) {
								if (is_array($value)) {
									echo "<li><span class=\"title\">...</span></li>\n";
									foreach ($value as $number => $code) {
										$position = $position + 1;
										echo list_view($number, $code);
										if ($position == 20) {
											echo "\t\t</ul>\n";
											echo "\t\t<ul class=\"varCodeList no-bullet\">\n";
											echo "\t\t<li><span class=\"title\">...</span></li>\n";
										}
										if ($position == 40) {
											echo "\t\t</ul>\n";
											echo "\t\t<ul class=\"varCodeList no-bullet\">\n";
											echo "\t\t<li><span class=\"title\">...</span></li>\n";
										}
										if ($position == 60) {
											echo "\t\t</ul>\n";
											echo "\t\t<ul class=\"varCodeList no-bullet\">\n";
											echo "\t\t<li><span class=\"title\">Leinen</span></li>\n";
										}
										if ($position == 80) {
											echo "\t\t</ul>\n";
											echo "\t\t<ul class=\"varCodeList no-bullet\">\n";
											echo "\t\t<li><span class=\"title\">...</span></li>\n";
										}
									}
								}
							}
						}
						if ($varCode['varCodeID'] == '704') {
							foreach ($varCode as $key => $value) {
								if (is_array($value)) {
									echo "<li><span class=\"title\">...</span></li>\n";
									foreach ($value as $number => $code) {
										$position = $position + 1;
										echo list_view($number, $code);
										if ($position == 20) {
											echo "\t\t</ul>\n";
											echo "\t\t<ul class=\"varCodeList no-bullet\">\n";
											echo "\t\t<li><span class=\"title\">...</span></li>\n";
										}
										if ($position == 40) {
											echo "\t\t</ul>\n";
											echo "\t\t<ul class=\"varCodeList no-bullet\">\n";
											echo "\t\t<li><span class=\"title\">...</span></li>\n";
										}
										if ($position == 60) {
											echo "\t\t</ul>\n";
											echo "\t\t<ul class=\"varCodeList no-bullet\">\n";
											echo "\t\t<li><span class=\"title\">Perkal</span></li>\n";
										}
										if ($position == 80) {
											echo "\t\t</ul>\n";
											echo "\t\t<ul class=\"varCodeList no-bullet\">\n";
											echo "\t\t<li><span class=\"title\">...</span></li>\n";
										}
									}
								}
							}
						}
						if ($varCode['varCodeID'] == '705') {
							foreach ($varCode as $key => $value) {
								if (is_array($value)) {
									echo "<li><span class=\"title\">...</span></li>\n";
									foreach ($value as $number => $code) {
										$position = $position + 1;
										echo list_view($number, $code);
										if ($position == 20) {
											echo "\t\t</ul>\n";
											echo "\t\t<ul class=\"varCodeList no-bullet\">\n";
											echo "\t\t<li><span class=\"title\">...</span></li>\n";
										}
										if ($position == 40) {
											echo "\t\t</ul>\n";
											echo "\t\t<ul class=\"varCodeList no-bullet\">\n";
											echo "\t\t<li><span class=\"title\">...</span></li>\n";
										}
										if ($position == 60) {
											echo "\t\t</ul>\n";
											echo "\t\t<ul class=\"varCodeList no-bullet\">\n";
											echo "\t\t<li><span class=\"title\">Polycotton</span></li>\n";
										}
										if ($position == 80) {
											echo "\t\t</ul>\n";
											echo "\t\t<ul class=\"varCodeList no-bullet\">\n";
											echo "\t\t<li><span class=\"title\">...</span></li>\n";
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
	</div>
	<?php include '../_template/footer.php'; ?>