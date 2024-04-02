<?php
function data($dia, $mes, $ano)
{
    if ($dia >= 1 && $dia <= 30) {
        switch ($mes) {
            case '01':
                echo "<br>" . $dia . " de janeiro de " . $ano;
                break;
            case '02':
                echo "<br>" . $dia . " de fevereiro de " . $ano;
                break;
            case '03':
                echo "<br>" . $dia . " de março de " . $ano;
                break;
            case '04':
                echo "<br>" . $dia . " de abril de " . $ano;
                break;
            case '05':
                echo "<br>" . $dia . " de maio de " . $ano;
                break;
            case '06':
                echo "<br>" . $dia . " de junho de " . $ano;
                break;
            case '07':
                echo "<br>" . $dia . " de julho de " . $ano;
                break;
            case '08':
                echo "<br>" . $dia . " de agosto de " . $ano;
                break;
            case '09':
                echo "<br>" . $dia . " de setembro de " . $ano;
                break;
            case '10':
                echo "<br>" . $dia . " de outubro de " . $ano;
                break;
            case '11':
                echo "<br>" . $dia . " de novembro de " . $ano;
                break;
            case '12':
                echo "<br>" . $dia . " de dezembro de " . $ano;
                break;
            default:
                echo "Mês Inválido!";
                break;
        }
    } else {
        echo "Dia inválido!";
    }
}

data(02, 07, 2005);
data(17, 02, 1993);
data(24, 01, 2017);