<?php

date_default_timezone_set("Brazil/East");

$dataAtual = getdate();
echo "data de hoje ";
echo ($dataAtual["mday"] . "/" . $dataAtual["mon"] . "/".
$dataAtual["year"]);
echo "<br/>";
$dataAtual = getdate();
echo " hora de  hoje ";
echo ($dataAtual["hours"] . ":" . $dataAtual["minutes"] . ":" .
$dataAtual ["seconds"]);


$diaSemana = $dataAtual["wday"];
switch($diaSemana) {

case 0:
	echo "domingo";
break;
case 1:
	echo " segunda ";
break;
case 2:
	echo "terça";
break;
case 3:
	echo "quarta";
break;
case 4:
	echo "quinta";
break;
case 5:
	echo "sexta";
break;
case 6:
	echo "sábado";
break;

}

?>

