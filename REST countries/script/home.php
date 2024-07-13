<?php
defined('CONTROL') or die('Acesso restrito!');
//getall
$api = new ApiConsumer();
$countries = $api->getAllCountries();

//get
//$country = $api->getCountry('brazil');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Países</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Países</h1>
                <hr>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-6">
                <p>Lista de países</p>
                <select id="select_country" class="form-select">
                    <option value="">Selecione um país</option>
                    <?php foreach ($countries as $country) : ?>
                        <option value="<?= htmlspecialchars($country) ?>"><?= htmlspecialchars($country) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#select_country').change(function() {
                var country = $(this).val();
                if (country) {
                    window.location.href = `?route=country&name=${encodeURIComponent(country)}`;
                }
            });
        });
    </script>

</body>

</html>