<?php
$totaal = 0;
$gemiddelde = 0;
$albums = array("Citizen of Glass" => 4.5 ,
				"Night" => 9 ,
				"New Eyes" => 5 ,
				"Strange Trails" => 10);
foreach ($albums as $key => $value) {
	echo ($key . " kost $" . $value . PHP_EOL);
}
foreach ($albums as $key => $value) {
	$totaal += $value;
}
echo PHP_EOL;
echo("Het totaalbedrag van alle albums is $" . $totaal . PHP_EOL);
echo("De gemiddelde prijs van alle albums is $" . $totaal / (count($albums)));
?>