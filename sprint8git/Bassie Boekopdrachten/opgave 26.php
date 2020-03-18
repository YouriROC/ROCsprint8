<?php
$gewerkteuren = 45;
$uurtarief = 15;
$bonus = 100;
$bruto = $gewerkteuren * $uurtarief;
$belasting = 0.40 * $bruto;
$belasting2 = 0.45* $bruto;
$brutobruto = $bruto + $bonus;
if($gewerkteuren <=40){
    echo "Uw basissalaris is: €".$bruto;
    echo"<br> Uw belasting is:€".$belasting;
    echo"<br> Uw nettobedrag is:€".$bruto - $belasting;
}
elseif($gewerkteuren > 40){
    echo "Uw basissalaris is: €".$bruto;
    echo"<br> Uw basissalaris plus bonus is :€".$brutobruto;
    echo"<br> Uw belasting is:€". $belasting2;   
}
?>