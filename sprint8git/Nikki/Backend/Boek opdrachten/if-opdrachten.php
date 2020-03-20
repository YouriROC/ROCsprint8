<?php
    //opgave 24
    $gewerkteuren = 45;
    $uurtarief = 15;
    $bonus = 100;
    $bruto = $gewerkteuren * $uurtarief;
    $metBonus = $bruto + $bonus;
    //Opgave 28
    $belasting = ($gewerkteuren < 40 ? "belasting is 40%" : "belasting is 45%");

    echo $belasting;
    echo "<br>";
    if ($gewerkteuren <= 40) {
        echo "uw basissalaris is: € ".$bruto;
        echo "<br>Uw belasting is: € ". 0.40*$bruto;
        //opgave 25
        echo "<br>Uw nettobedrag is: € ". 0.60*$bruto;
    }
    //Opgave 26
    elseif ($gewerkteuren > 40) {
        echo "Uw basissalaris is: € ".$bruto;
        echo "<br>Uw basissalaris plus bonus is: € ".$metBonus;
        echo "<br>Uw belasting is: € ". 0.45*$bruto;
        //Opgave 27
        echo "<br>Uw nettobedrag is: € ". 0.55*$bruto;
    }
    
    
?>