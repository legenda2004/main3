<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perec Travel - Горящие туры</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
    <header class="header">
        <h1 class="title">🔥 Горящие предложения</h1>
        <p class="subtitle">Самые выгодные туры со скидками до 70%</p>
    </header>

    <div class="webview-container">
        <div class="tv-hot-tours tv-moduleid-9966763"></div>
        <div class="loading" id="loading">
            <div class="spinner"></div>
            <p>Загрузка горящих туров...</p>
        </div>
    </div>

    <section class="info-section">
        <h2 class="info-title">Почему горящие туры?</h2>
        <div class="features">
            <div class="feature">
                <h3 class="feature-title">💰 Экономия</h3>
                <p class="feature-text">Скидки до 70% от первоначальной стоимости</p>
            </div>
            <div class="feature">
                <h3 class="feature-title">⚡ Быстро</h3>
                <p class="feature-text">Быстрое оформление и вылет в ближайшие даты</p>
            </div>
            <div class="feature">
                <h3 class="feature-title">🎯 Уникально</h3>
                <p class="feature-text">Уникальные предложения, которые быстро заканчиваются</p>
            </div>
        </div>
    </section>
</div>

<script type="text/javascript" src="//tourvisor.ru/module/init.js"></script>
<script>
    // Скрываем индикатор загрузки после загрузки модуля
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(function() {
            document.getElementById('loading').style.display = 'none';
        }, 3000); // Скрываем через 3 секунды (имитация загрузки)
    });
</script>
</body>
</html>