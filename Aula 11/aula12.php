<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    require_once "banco.php";

    $u = $_POST["usuario"] ?? null;
    $s = $_POST["'senha"] ?? null;

    if (is_null($u) || is_null($s)) {
        require "form-login.php";
    } else {

        $q = "SELECT usuario, nome, senha FROM usuarios WHERE usuario='$u'";

        $busca = $banco->query($q);
        print_r($busca);
        if ($busca->num_rows > 0) {

            $usu = $busca->fetch_object();

            if ($s === $usu->senha) {
                echo "Login :)";
            } else {
                require "form-login.php";
                echo "Senha incorreta :(";
            }
        }
    }
    ?>
</body>

</html>