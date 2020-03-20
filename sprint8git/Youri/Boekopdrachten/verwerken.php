<form name="form"
action=""
method="post">
<input required type ="text"
name="naam" placeholder="Naam" /><br>
<input required type="text"
name="postcode" placeholder="Postcode" /><br>
<input required type="text"
name="straat" placeholder="Straat" /><br>
<input required type="text"
name="plaats" placeholder="Plaats" /><br>
<input required type ="email"
name="e-mail" placeholder="E-maladres" /><br><br>
<textarea name="commentaar"
placeholder="Typ je commentaar in ..."
rows = 4></textarea><br>
<input type="radio" name="taal" value="N"> Nederlands
<input type="radio" name="taal" value="E"> Engels
<input type="radio" name="taal" value="S"> Spaans
<input type="submit"
name="submit" value="Submit" />
</form>
<?php
if(isset($_POST["submit"]) ){
    if(empty($_POST["naam"]) ){
        echo "Naam niet ingevuld.";
    }
    else{
        $naam = $_POST["naam"];
        $taal = $_POST["taal"];
        if($taal == "N") {
            echo "Goedendag ". $naam;
        }
        elseif($taal == "E") {
            echo "Good morning ". $naam;
        }
        elseif($taal == "S") {
            echo "Buenos dias ". $naam;
        }
        else{
            echo "Taal niet ingevuld";
        }
    }
}