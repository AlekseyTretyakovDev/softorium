**Тестовое задание для Софториум**

Структура проекта:

html: index.html - страница, style.css - стили, script.js - скрипт

php: info.php - сведения о php, services.php - скрипт сбора имен и ip, Dockerfile - сборка образа с драйверами для PostgreSQL

ssl: папка для ssl-сертификата

nginx: конфиг веб-сервера

.env: переменная окружения для PostgreSQL

docker-compose.yml: манифест докера для поднятия контейнера


Запуск осуществляется из корня проекта, где лежит docker-compose.yml с помощью команды **docker-compose up -d**

portainer открывается на стандартном порту 9000
