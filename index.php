<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perec Travel - Поиск туров</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
    <header class="header">
        <h1 class="title">Perec Travel</h1>
        <p class="subtitle">Найдите свой идеальный тур</p>
    </header>

    <div class="webview-container">
        <div class="tv-search-form tv-moduleid-9974416"></div>
        <div class="loading" id="loading">
            <div class="spinner"></div>
            <p>Загрузка поиска туров...</p>
        </div>
    </div>

    <section class="info-section">
        <h2 class="info-title">Как найти тур?</h2>
        <div class="info-steps">
            <div class="step">
                <div class="step-number">1</div>
                <p class="step-text">Выберите направление и даты</p>
            </div>
            <div class="step">
                <div class="step-number">2</div>
                <p class="step-text">Укажите количество туристов</p>
            </div>
            <div class="step">
                <div class="step-number">3</div>
                <p class="step-text">Нажмите "Найти туры"</p>
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