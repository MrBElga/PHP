<?php
defined('CONTROL') or die('Acesso restrito!');

$api = new ApiConsumer();
$country = $_GET['name'] ?? null;

if (!$country) {
    header('Location: ?route=home');
    die();
}

$countryData = $api->getCountry($country);
if (empty($countryData)) {
    header('Location: ?route=404');
    die();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($countryData[0]['name']['common']) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .card {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .container {
            margin-top: 50px;
        }

        h1 {
            margin-bottom: 20px;
        }

        .display-3 {
            font-size: 2.5rem;
        }

        .m-5 {
            margin: 5rem 0;
        }

        .table th,
        .table td {
            vertical-align: middle;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card p-2 shadow mb-4">
                    <img src="<?= htmlspecialchars($countryData[0]['flags']['png']) ?>" class="card-img-top" alt="Flag of <?= htmlspecialchars($countryData[0]['name']['common']) ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-5">
                    <h1><?= htmlspecialchars($countryData[0]['name']['common']) ?></h1>
                    <table class="table">
                        <tr>
                            <th>Capital</th>
                            <td><?= htmlspecialchars($countryData[0]['capital'][0]) ?></td>
                        </tr>
                        <tr>
                            <th>Região</th>
                            <td><?= htmlspecialchars($countryData[0]['region']) ?></td>
                        </tr>
                        <tr>
                            <th>Sub-Região</th>
                            <td><?= htmlspecialchars($countryData[0]['subregion']) ?></td>
                        </tr>
                        <tr>
                            <th>População</th>
                            <td><?= number_format($countryData[0]['population'], 0, ',', '.') ?></td>
                        </tr>
                        <tr>
                            <th>Área</th>
                            <td><?= number_format($countryData[0]['area'], 2, ',', '.') ?> km<sup>2</sup></td>
                        </tr>
                    </table>
                </div>

            </div>
            <div class="mt-4">
                <a href="?route=home" class="btn btn-primary">Voltar</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-VrEHXtUb+i8/dwEjY5K7daW3tufDDgkv3f10J2y/x1uWllPYTx93T7NaiuTsE4aK" crossorigin="anonymous"></script>
</body>

</html>