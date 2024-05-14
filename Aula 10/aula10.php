<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php 
        
        require_once "usuarios.php";

        $usuario = $_POST['usuario'] ?? null;
        $senha = $_POST['senha'] ?? null;

        if(is_null($usuario) && is_null($senha)){
            echo "Fazer Login";
            include_once "form-login.php";
        }else{

            // echo "<br>$usuario <br> $senha";

            if(verUsuarios($usuario, $senha)){
                echo "-- Fazendo Login";
                echo "<br>Bem vindo...";
            }else{
                echo "-- Tente Novamente";
                include_once "form-login.php";
            }

        }
    
    
    ?>



</body>

</html>