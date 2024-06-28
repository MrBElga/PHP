<?php
    defined('CONTROL') or die('acesso negado');
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $usuario = $_POST['user'] ?? null;
        $senha = $_POST['password'] ?? null;
        $erro = null;
        if(empty($usuario)  || empty($senha)){
            $erro = 'usuario e senha são obrigatório';
        }

        if (empty($erro)) {
            $usuarios = require_once __DIR__ . '/../inc/users.php';
            foreach ($usuarios as $u) {
                if ($u['user'] == $usuario && password_verify($senha, $u['password'])) {
                    $_SESSION['user'] = $u;

                    header('location: index.php?rota=home');
                }
            }
            $erro = 'Usuário ou senha inválidos';
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #71b7e6, #9b59b6);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color: white;
            padding: 40px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            text-align: center;
            max-width: 400px;
            width: 100%;
        }
        .login-container h3 {
            margin-bottom: 30px;
            color: #333;
            font-size: 24px;
        }
        .login-container img {
            width: 120px;
            margin-bottom: 20px;
            border-radius: 30%;
        }
        .login-container input {
            width: 100%;
            padding: 15px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        .login-container button {
            width: 100%;
            padding: 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
        }
        .login-container button:hover {
            background-color: #45a049;
        }
        .login-container .error {
            color: red;
            margin-top: 20px;
        }
        .login-container a {
            display: block;
            margin-top: 20px;
            color: #007BFF;
            text-decoration: none;
        }
        .login-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <img src="./images/nata.jpeg" alt="NATA Logo">
        <h3>Login</h3>
        <form action="index.php?rota=login" method="post">
            <div>
                <input type="email" name="user" placeholder="Usuario" >
            </div>
            <div>
                <input type="password" name="password" placeholder="Senha" >
            </div>
            <button type="submit">Entrar</button>
            <?php if(!empty($erro)) : ?>
                <p class="error"><?= $erro; ?></p>
            <?php endif; ?>
        </form>
        <a href="#">Esqueceu a senha?</a>
    </div>
</body>
</html>

