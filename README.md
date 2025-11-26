# Perec Travel - Страницы поиска туров

Этот проект содержит веб-страницы для поиска туров и просмотра горящих предложений с использованием модулей Tourvisor.

## Структура проекта

- `index.php` - Главная страница с поиском туров
- `hot-tours.php` - Страница с горящими турами
- `styles.css` - Общие стили для всех страниц

## Использование

1. Склонируйте репозиторий
2. Откройте `index.php` в браузере для доступа к поиску туров
3. Откройте `hot-tours.php` для просмотра горящих предложений

## Размещение на GitHub Pages

Для размещения на GitHub Pages необходимо скомпилировать PHP-файлы в статические HTML:

```bash
# Установка необходимых инструментов
curl -sS https://getcomposer.org/installer | php
php composer.phar require voku/static-html-output

# Генерация статических файлов
vendor/bin/static-html-output deploy --target=github-pages