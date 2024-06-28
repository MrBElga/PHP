<?php
    //init session
    session_start();

    //define one new control constant 
    define('CONTROL',true);

    //verify if the user is logged in
    $usuario_logado = $_SESSION['user'] ?? null;

    //veryfy URL route
    if(empty($usuario_logado)){
        $rota = 'login';
    }else{
        $rota = $_GET['rota'] ?? 'home';
    }

    //analise the route
    $rotas = [
        'login' => 'login.php',
        'home' => 'home.php',
        'logout' => 'logout.php',
        'about' => 'about.php',
        'contact' => 'contact.php',
        'services' => 'services.php'
    ];

    if(!key_exists($rota,$rotas)){
       die('acesso negado');
    }
    require_once $rotas[$rota];
    
?>