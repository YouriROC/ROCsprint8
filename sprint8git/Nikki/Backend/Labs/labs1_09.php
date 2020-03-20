<?php
    $brief = "Beste <b> abbonee </b><br>
    U heeft het laatste nummen van ons magazine ontvangen. <br>
    Omdat wij heel graag u als abbonee willen behouden, bieden we
    u een aantrekkelijk en exclusieve korting:
    <br>U betaalt: <b> bedrag met korting </b> in plaats van 65 euro. <br><br>
    Met vriendelijke groet,<br>
    Sam Simons<br>
    Hoofdredacteur<br>";

    echo "oude brief is: <br>" . $brief;

    $brief = str_replace("abbonee", "Jan Davis", $brief);
    $brief = str_replace("bedrag met korting", "50", $brief);

    echo "<br><br>nieuwe brief is: <br>" . $brief;

?>