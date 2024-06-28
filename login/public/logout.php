<?php 
    defined('CONTROL') or die('acesso negado');
    session_destroy();

    header('location: index.php?rota=login');
?>
