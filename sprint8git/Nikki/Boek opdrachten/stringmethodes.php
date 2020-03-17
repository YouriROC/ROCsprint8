<!-- Opdracht 31 -->
<form name="form" action="" method="post">
    <input required type="text"
    name="naam" placeholder="naam" /> <br>
    <input required type="text"
    name="straat" placeholder="straat" /> <br>
    <input required type="text"
    name="postcode" placeholder="postcode" /> <br>
    <input required type="text"
    name="plaats" placeholder="plaats" /> <br>
    <input required type="email"
    name="e-mail" placeholder="E-mailadres" /><br><br>
    <textarea name="commentaar"
    placeholder="Typ hier je commentaar in..."
    rows=4></textarea><br><br>
    <input type="submit"
    name="submit" value="Submit" /> 
</form>

<?php
//  opdracht 32
    if(isset($_POST["submit"])){
        $naam = htmlspecialchars($_POST["naam"]);
        $straat = htmlspecialchars($_POST["straat"]);
        $postcode = htmlspecialchars($_POST["postcode"]);
        $plaats = htmlspecialchars($_POST["plaats"]);
        $email = htmlspecialchars($_POST["e-mail"]);
        $commentaar = htmlspecialchars($_POST["commentaar"]);

//  opdracht 33
        $naam = trim($naam);
        $straat = trim($straat);
        $postcode = trim($postcode);
        $plaats = trim($plaats);
        $email = trim($email);
        $commentaar = trim($commentaar);

//  opdracht 34
        $plaats = strtoupper($plaats);
        if($plaats == "AMSTERDAM"){
            $bezorgkosten = 10.00;
        }
        elseif($plaats == "UTRECHT"){
            $bezorgkosten = 20.00;
        }
        else{
            $bezorgkosten = 30.00;
        }
        echo "<br>Bezorgkosten: " . $bezorgkosten;

//  opdracht 35
        $email = strtolower($email);
        echo "<br>E-mailadres: " . $email;

//  opdracht 36
        $naam = ucfirst($naam);
        echo "<br>Naam: " . $naam;

//  opdracht 37
        $emailarray = explode("@", $email);
        $user = $emailarray[0];
        $domain = $emailarray[1];
        echo "<br>User: " . $user;
        echo "<br>Domain: " . $domain;

// ! opdracht 38
        if(strlen($postcode != 7)){
            echo "<br>Postcode incorrect ingevuld.";
        }

//  opdracht 39
        $postcodePrefix = substr($postcode,0,4);
        $postcodeSuffix = substr($postcode,5,2);
        echo "<br>Postcode prefix: " . $postcodePrefix;
        echo "<br>Postcode suffix: " . $postcodeSuffix;

// opdracht 40
        $nl = strpos($email, ".nl");
        $be = strpos($email, ".be");
        $fr = strpos($email, ".fr");
        if($nl > 0) {echo "<br>Nederlands E-mailadres";}
        if($be > 0) {echo "<br>Belgisch E-mailadres";}
        if($fr > 0) {echo "<br>Frans E-mailadres";}

//  opdracht 41
        $commentaar = nl2br($commentaar);

//  opdracht 42
        $scheldwoorden = array("debiel", "laf", "gestoord");
        $commentaar = str_replace($scheldwoorden, "***", $commentaar);
        echo "<br>Commentaar: <br> " . $commentaar;
    }

?>