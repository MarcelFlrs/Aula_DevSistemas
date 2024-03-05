<?php

    $altura = 1.80;
    $peso = 70;
    $imc = $peso / (pow($altura, 2));

    echo  "O imc do usuário é: " . number_format($imc, 2);

?>