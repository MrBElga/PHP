<?php defined('CONTROL') or die('Acesso negado'); ?>

<nav class="header">
    <div class="container">
        <a href="index.php?rota=home">Home</a>
        <a href="index.php?rota=about">About</a>
        <a href="index.php?rota=services">Services</a>
        <a href="index.php?rota=contact">Contact</a>
        
        <?php if (!empty($usuario_logado)) : ?>
            <div class="user-info">
                Logado como: <?= htmlspecialchars($usuario_logado['user']); ?>
            </div>
        <?php endif; ?>
    </div>
</nav>

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    .header {
        background-color: #333;
        color: #fff;
        padding: 10px 0;
    }

    .header .container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        max-width: 960px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .header a {
        color: #fff;
        text-decoration: none;
        padding: 10px 15px;
    }

    .header a:hover {
        background-color: #555;
        border-radius: 5px;
    }

    .user-info {
        color: #fff;
    }

    @media screen and (max-width: 600px) {
        .header .container {
            flex-direction: column;
            align-items: flex-start;
        }

        .header a {
            display: block;
            padding: 10px 0;
            margin-bottom: 10px;
        }
    }
</style>
