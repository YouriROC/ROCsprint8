<?php

    $voornaam = $_POST["voornaam"];
    $achternaam = $_POST["achternaam"];
    $straat = $_POST["straat"];
    $postcode = $_POST["postcode"];
    $plaats = $_POST["plaats"];
    $opleiding = $_POST["opleiding"];

   

    if($opleiding == "ict") {
        echo "deze opleiding zit vol, kies een andere opleiding.";
    }
    else if($opleiding = "eng") {
         echo "Uw gegevens zijn: <br>";
        echo "naam: " . $voornaam . " " . $achternaam . "<br>";
        echo "straat: " . $straat . "<br>";
        echo "postcode: " . $postcode . "<br>";
        echo "plaats: " . $plaats . "<br>";
        echo "U word ingeschreven voor de volgende opleiding: <br> Engels";
    }
    else if($opleiding = "tech") {
        echo "Uw gegevens zijn: <br>";
       echo "naam: " . $voornaam . " " . $achternaam . "<br>";
       echo "straat: " . $straat . "<br>";
       echo "postcode: " . $postcode . "<br>";
       echo "plaats: " . $plaats . "<br>";
       echo "U word ingeschreven voor de volgende opleiding: <br> techniek";
   }
   else if($opleiding = "ned") {
    echo "Uw gegevens zijn: <br>";
   echo "naam: " . $voornaam . " " . $achternaam . "<br>";
   echo "straat: " . $straat . "<br>";
   echo "postcode: " . $postcode . "<br>";
   echo "plaats: " . $plaats . "<br>";
   echo "U word ingeschreven voor de volgende opleiding: <br> nederlands";
};

?>