<form action="" method="get">
    <label style="display:block;" for="letra"> Digite uma letra</label>
    <input name="letra" type="">

    <br>

    <button style="padding: 10;" type="submit">Enviar</button>
</form>

<?php 

$letra = $_GET["letra"];

if(strtolower($letra) == "a" || strtolower($letra) == "e" || strtolower($letra) == "i" || strtolower($letra) == "o" || strtolower($letra) == "u"){
    echo "A letra é uma vogal";
}else{
    echo "A letra é uma consoante";
}

?>