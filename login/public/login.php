<?php
    defined('CONTROL') or die('acesso negado');
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $usuario = $_POST['usuario'] ?? null;
        $senha = $_POST['senha'] ?? null;
        $erro = null;
        if(empty($usuario)  || empty($senha)){
            $erro = 'usuario e senha são obrigatório';
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="index.php?rota=login" method="post">
        <h3>Login</h3>
        <div>
            <input type="text" name="usuario" placeholder="usuario">
        </div>
        <div>
            <input type="password" name="senha" placeholder="senha">
        </div>
        <button type="submit">Entrar</button>
        <?php if(!empty($erro)) : ?>
            <P style="color : red"><?= $erro; ?></P>
        <?php endif; ?>
       
         
</body>
</html>