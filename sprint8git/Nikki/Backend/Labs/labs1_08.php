<!DOCTYPE html>
<html lang="nl">
<head>
<meta http-equiv="Content-Type"
content="text/html;
charset=UTF-8" />
</head>

<body>
<!-- Opdracht 29 -->
    <form action="labs1_08.verwerken.php" method="post">
        Uw achternaam :
        <input type="text" name="achternaam"><br>
        Uw voornaam:
        <input type="text" name="voornaam"><br>
        Uw straat:
        <input type="text" name="straat"><br>
        Uw postcode:
        <input type="text" name="postcode"><br>
        Uw plaats:
        <input type="text" name="plaats"> <br>

        <input type="hidden" name="opleiding" value="false">
        <br>Kies een opleiding: <br>
        <input type="radio" name="opleiding" value="ict"> ICT <br>
        <input type="radio" name="opleiding" value="eng"> Engels <br>
        <input type="radio" name="opleiding" value="tech"> Techniek <br>
        <input type="radio" name="opleiding" value="ned"> Nederlands <br>
        <br>
        <input type="submit" name="submit" value="Versturen">
    </form>
</body>
</html>
