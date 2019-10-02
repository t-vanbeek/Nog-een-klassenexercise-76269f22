<?php
$klas = readline("Wie zitten er in de klas?");
$klasgenoten = explode(" ", $klas);

echo "De studenten in de klas zijn:" . PHP_EOL;
foreach ($klasgenoten as $klasgenoot){
    echo "$klasgenoot".PHP_EOL;
}
?>