<?php
$boeken = array (
    array ("titel" => "Stoner", "auteur" => "John Williams",
    "genre" => "Fictie", "prijs" => 19.99),
    array ("titel" => "De cirkel", "auteur" => "Dave Eggers",
    "genre" => "Fictie", "prijs" => 22.50),
    array ("titel" => "Rayuela", "auteur" => "Cortázar",
    "genre" => "Fictie", "prijs" => 25.50)
);

function prijslijst() {
    if (in_array("prijs", $boeken)) {
       echo "het werkt.";
    }
    else {
        echo "het werkt niet";
    }
};
array_walk($boeken, "prijslijst");
//print_r($boeken);
?>