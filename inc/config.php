<?php

function list_view ($number, $code) {
	echo "\t\t\t<li>";
	echo '<span class="lightNumber">' . $number . '</span>' . '&nbsp;&nbsp;' . $code;
	echo "</li>\n";
}

function navigation($varCode, $language = 'de') {
	foreach ($varCode as $pageID => $code) {
		if ($language == 'fr') {
			echo '<a class="cardIndex" href="list_fr.php?id=' . $pageID . '">';
		} else {
			echo '<a class="cardIndex" href="list.php?id=' . $pageID . '">';
		}
		echo "<strong>" . $code["varCodeID"] . "</strong>";
		echo " " . $code["additional"];
		echo '</a>';
	}
}