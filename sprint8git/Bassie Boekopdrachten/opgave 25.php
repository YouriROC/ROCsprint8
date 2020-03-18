<?php
$gewerkteuren = 40;
$uurtarief = 15.00;
$bonus = 100.00;
$bruto = $gewerkteuren * $uurtarief;
$belasting = 0.40 * $bruto;
$netto = $bruto - $belasting;
if($gewerkteuren <=40){
    echo "Uw basissalaris is: €".$bruto;
    echo"<br> Uw belasting is:€". $belasting;
    echo"<br> Uw nettobedrag is:€". $netto;
}
?>

