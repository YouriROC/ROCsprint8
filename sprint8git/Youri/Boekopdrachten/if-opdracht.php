<?php
$gewerkteuren = 45;
$uurtarief = 15.00;
$bonus = 100.00;
$bruto = $gewerkteuren * $uurtarief;

if($gewerkteuren <= 40){
    $belasting = 0.40*$bruto;
    $netto = $bruto - $belasting;
    echo "Uw basissalaris is: € ". $bruto;
    echo "<br>Uw belasting is: € ". $belasting;
    echo "<br>Uw nettobedrag is: € ". $netto;
}
elseif($gewerkteuren > 40){
    $belasting = 0.45*$bruto;
    $netto = $bruto - $belasting;
    echo "Uw basissalaris is: € ". $bruto;
    $bruto = $bruto + $bonus;
    echo "<br>Uw basissalaris plus bonus is: € ". $bruto;
    echo "<br>Uw belastng is: € ". $bruto;
    echo "<br>Uw nettobedrag is: € ". $netto;
}

$procent = (<br>$belasting < 40% ? "Belasting is 40%" : " ");

?>