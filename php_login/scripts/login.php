<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="card bg-light p-5 shadow mt-5">
                    <h3>LOGIN</h3>
                    <hr>
                    <form action="?rota=login_submit" method="post">
                        <div class="mb-3">
                            <label for="text_usuario" class="form-label">Usuário</label>
                            <input type="text" class="form-control" id="text_usuario" name="text_usuario" required>
                        </div>
                        <div class="mb-3">
                            <label for="text_senha" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="text_senha" name="text_senha" required>
                        </div>
                        <div>
                            <input type="submit" value="Entrar" class="btn btn-secondary w-100">
                        </div>
                    </form>
                    <?php
                        if (isset($_SESSION['erro'])) {
                            echo '<div class="alert alert-danger mt-3">' . $_SESSION['erro'] . '</div>';
                            unset($_SESSION['erro']);
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
