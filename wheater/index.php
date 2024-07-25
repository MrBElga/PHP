<?php
    require_once 'inc/config.php';
    require_once 'inc/api.php';


    $city = 'London';
    if(isset($_GET['city'])) {
        $city = $_GET['city'];
    }
    $days = 5;

    $results = Api::getWeather($city, $days);

    if($results['status'] === 'error') {
        echo 'Error: ' . $results['message'];
        exit;
    }

    $data = json_decode($results['data'], true);

    $location = [
        'name' => $data['location']['name'],
        'region' => $data['location']['region'],
        'country' => $data['location']['country'],
        'lat' => $data['location']['lat'],
        'lon' => $data['location']['lon'],
        'current_time' => $data['location']['localtime']
    ];

    $current = [
        'info' => 'Agora:',
        'temperature' => $data['current']['temp_c'],
        'condition' => $data['current']['condition']['text'],
        'current_icon' => $data['current']['condition']['icon'],
        'wind_speed' => $data['current']['wind_kph']
    ];

    $forecast = [];
    foreach ($data['forecast']['forecastday'] as $day) {
        $forecast[] = [
            'info' => null,
            'date' => $day['date'],
            'max_temp' => $day['day']['maxtemp_c'],
            'min_temp' => $day['day']['mintemp_c'],
            'condition' => $day['day']['condition']['text'],
            'icon' => $day['day']['condition']['icon']
        ];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <div class="container-fluid mt-5">
        <div class="row justify-content-center mt-5">
            <div class="col-10 p-5 bg-light text-black">
                <div class="row">
                    <div class="col-9">
                        <h3>Tempo para a cidade <strong><?=$location['name']?></strong></h3>
                        <p class="my-2">Região: <?=$location['region']?> | <?=$location['country']?> |<?= $location['current_time']?>| Previsão para: <strong><?=$days?></strong> dias</p>
                    </div>
                    <div class="col-3 text-end">
                        <select id="" class="form-select">
                            <option value="London">London</option>
                            <option value="New_York">New York</option>
                            <option value="Tokyo">Tokyo</option>
                            <option value="Sao_Paulo">São Paulo</option>
                            <option value="Paris">Paris</option>
                            <option value="Berlin">Berlin</option>
                            <option value="Sydney">Sydney</option>
                            <option value="Moscow">Moscow</option>
                            <option value="Mumbai">Mumbai</option>
                            <option value="Cairo">Cairo</option>
                        </select>
                    </div>
                </div>
                <hr>


                <?php
                    $wheater_info = $current;
                    include 'inc/wheater_info.php';
                ?>
                <?php foreach($forecast as $day) : ?>
                    <?php
                        $wheater_info = $day;
                        include 'inc/wheater_info.php';
                    ?>
                <?php endforeach; ?>
                <?php foreach($forecast as $day) : ?>
                    <?php
                        $wheater_info = $day;
                        include 'inc/wheater_info.php';
                    ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <script>
        const select = document.querySelector('select');
        select.addEventListener('change',function(){
            const city = this.value;
            window.location.href = `index.php?city=${city}`;
        });
    </script>
</body>
</html>
