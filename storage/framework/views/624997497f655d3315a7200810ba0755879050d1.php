<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/weather.css">
</head>
<body>
<div class="weather-wrapper">
    <div class="weather-main">
        <div class="weather-main-image">
            <img src="<?php echo e(asset("storage/weather-icons/". $weatherService->generalInformation()->getIcon().'.png')); ?>"
                 alt="weather-icon">
        </div>
        <div class="weather-main-info">
            <h1><?php echo e($weatherService->generalInformation()->getNameCity()); ?></h1>
            <p><?php echo e($weatherService->generalInformation()->getDescription()); ?></p>
        </div>
    </div>
    <div class="weather-date">
        <p>температура <?php echo e($weatherService->temperatures()->getTemperature()); ?> °C, ощущается
            как <?php echo e($weatherService->temperatures()->getFeelsLikeTemperature()); ?> °C</p>
        <p>давление <?php echo e($weatherService->pressure()->getPressure()); ?>,
            влажность <?php echo e($weatherService->pressure()->getHumidity()); ?> %</p>

    </div>
</div>

</body>
</html>
<?php /**PATH C:\OpenServer\domains\php-laravel\resources\views/weather/index.blade.php ENDPATH**/ ?>