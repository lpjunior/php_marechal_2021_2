<?php
require 'php/conexao.php';

if ($_POST) {
    $usuario = $_POST['txtUsuario'];
    $senha  = $_POST['txtSenha'];

    $sql = "select usuario, senha from usuario where usuario = '{$usuario}' and senha = '{$senha}'";
    
    $link = getConnection();
    mysqli_multi_query($link, $sql);
    $result = mysqli_store_result($link);
    $rows = mysqli_fetch_object($result);

    if ($rows) {
        echo "Logado com sucesso<br>";
    } else {
        echo "Não logou. Tente novamente!<br>";
    }
    echo $sql;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <fieldset>
        <form action="" method="post">
            <legend>Acesso Restrita</legend>
            <div>
                <label for="usuarioID">Usuario</label>
                <input type="text" name="txtUsuario" id="usuarioID">
            </div>
            <div>
                <label for="senhaID">Senha</label>
                <input type="text" name="txtSenha" id="senhaID">
            </div>
            <button type="submit">Login</button>
        </form>
    </fieldset>
</body>

</html>