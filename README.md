**Тестовое задание для Софториум**

Структура проекта:

html: index.html - страница, style.css - стили, script.js - скрипт

php: info.php - сведения о php, services.php - скрипт сбора имен и ip, Dockerfile - сборка образа с драйверами для PostgreSQL

ssl: папка для ssl-сертификата

nginx: конфиг веб-сервера

.env: переменная окружения для PostgreSQL

docker-compose.yml: манифест докера для поднятия контейнера


Запуск осуществляется из корня проекта, где лежит docker-compose.yml с помощью команды **docker-compose up -d**


Для установки SSL при наличии домена:

Заменить **yourdomain.com** на домен в:
   - docker-compose.yml
   - nginx/nginx.conf
     
Запустите Certbot для получения сертификата:
**sudo docker-compose run --rm certbot certonly --webroot --webroot-path=/var/lib/letsencrypt --email your-email@example.com --agree-tos --no-eff-email -d yourdomain.com**

Перезапустить nginx docker-compose restart nginx
