<form action="" method="get">
    <label style="display:block;" for=" num1"> Digite um valor em metros ▼</label>
    <input name="num1" type="text">
    <br>
</form>

<?php

    $metros = $_GET["num1"];

    echo $metros . " metros são " . $metros * 100 . " centímetros";

?>