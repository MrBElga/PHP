<?php defined('CONTROL') or die('acesso negado'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Para ocupar toda a altura da viewport */
        }
        .header {
            background-color: #333;
            color: #fff;
            padding: 15px 0;
            text-align: center;
        }
        .header nav {
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        .header nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
        }
        .header nav a:hover {
            background-color: #555;
            border-radius: 5px;
        }
        .main-content {
            flex: 1; /* Para ocupar o espaço restante */
            padding: 20px;
            text-align: center;
        }
        .main-content h1 {
            margin-top: 0;
            font-size: 32px;
        }
        .main-content p {
            font-size: 18px;
            line-height: 1.6;
        }
        .footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <?php require 'nav.php'?>
    <div class="main-content">
        <h1>Welcome to My Website</h1>
        <p>This is a simple homepage layout. You can customize it to suit your needs.</p>
        
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
        <p>Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta.</p>
        <span><a href="?rota=logout">SAIR</span>
    </div>

    <footer class="footer">
        <p>&copy; 2024 My Website. All rights reserved.</p>
    </footer>
</body>
</html>
