<?php
    if($_SERVER['REQUEST_METHOD'] !== 'POST') {
        header('Location: index.php?rota=login');
        exit;
    }

    $usuario = $_POST['text_usuario'] ?? null;
    $senha = $_POST['text_senha'] ?? null;

    if(is_null($usuario) || is_null($senha)) {
        header('Location: index.php?rota=login');
        exit;
    }

    $db = new Database();
    $params = [
        ':usuario' => $usuario
        
    ];
    
    $sql = 'SELECT * FROM usuarios WHERE usuario = :usuario';

    $result = $db->query($sql, $params);

    if($result['status'] === 'error') {
        header('Location: index.php?rota=404');
        exit;
    }

    if(count($result['data']) === 0) {
        $_SESSION['erro'] = 'Usuário ou senha inválidos';

        header('Location: index.php?rota=login');
        exit;
    }

    if(password_verify($senha, $result['data'][0]->senha) === false) {
        $_SESSION['erro'] = 'Usuário ou senha inválidos';

        header('Location: index.php?rota=login');
        exit;
    }

    $_SESSION['usuario'] = $result['data'][0]->usuario;

    header('Location: index.php?rota=home');
?>