<div class="card my-2 p-3">
    <div>
        <?= $wheater_info['info'] ?? '' ?>
    </div>
    <div class="d-flex align-items-center">
        <div class="me-5">
            <img src="https:<?= $wheater_info['current_icon'] ?? $wheater_info['icon'] ?>" alt="">
        </div>
        <?php if (!empty($wheater_info['temperature'])) : ?>
            <div class="me-5">
                <h1>
                    <h3><?= $wheater_info['temperature'] ?>°C</h3>
                </h1>
            </div>
        <?php endif; ?>
        
        <div class="me-5">
            <?= $wheater_info['condition'] ?? '' ?>
        </div>

        <?php if (!empty($wheater_info['max_temp'])) : ?>
            <div class="me-5">
                Dia: <?= $wheater_info['date'] ?>
            </div>
            <div class="me-5">
                Maxima: <?= $wheater_info['max_temp'] ?>°C
            </div>
            <div class="me-5">
                Minima: <?= $wheater_info['min_temp'] ?>°C
            </div>
        <?php endif; ?>
    </div>
</div>
