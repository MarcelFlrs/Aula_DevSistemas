<form action="" method="get">
    <label style="display:block;" for=" num1"> Digite seu ano de nascimento ▼</label>
    <input name="ano" type="text">
    <br>

    <button style="padding: 10;" type="submit">Enviar</button>
</form>

<?php

    $ano = $_GET["ano"];
    $idade = 2024 - $ano;

    if ($idade >= 18 && $idade < 70) {
        echo "Olha, com {$idade} anos tu precisa votar primão!";
        
    } else if(($idade > 16 && $idade < 18)||$idade > 70){
        echo "Legal, se quiser votar com {$idade} anos, você pode!  ";
        
    } else{
        echo "Ih, tu n pode votar com {$idade} anos não!!";
    }

?>