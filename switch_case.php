<?php

echo "Que dia é hoje?";

$diaDaSemana = date('w');

switch ($diaDaSemana) {

    case 0:
        echo "Domingo";

    case 1:
        echo "Segunda";
    case 2:
        echo "Terça";

    case 3:
        echo "Quarta";
    
    case 4:
       echo "Quinta";
    case 5:
        echo "Sexta";
    case 6:
        echo "Sábado";
    
}



?>