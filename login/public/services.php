<?php
defined('CONTROL') or die('acesso negado')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .main-content {
            max-width: 960px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .main-content h2 {
            margin-top: 0;
        }
        .main-content p {
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <?php require_once 'nav.php'; ?>

    <div class="main-content">
        <h2>Our Services</h2>
        <p>We offer a wide range of services to meet your needs. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
        <p>Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta.</p>
    </div>

    <footer class="footer">
        <p>&copy; 2024 My Website. All rights reserved.</p>
    </footer>
</body>
</html>
