<?php
echo ("welke operatie wil je uitvoeren? (+, -)"). PHP_EOL;
$keuze = readline("");
echo ("eerste getal?").PHP_EOL;
$nummer1 = readline("");
echo ("tweede getal?").PHP_EOL;
$nummer2 = readline("");

if($keuze === "+"){
    $antwoord = $nummer1 + $nummer2;
    echo ("uw resultaat is: "). $antwoord;
}


else if($keuze === "-"){
    $antwoord = $nummer1 - $nummer2;
    echo ("uw resultaat is: "). $antwoord;
}

?>