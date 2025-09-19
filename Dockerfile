# --- Этап 1: Установка зависимостей Composer ---
# Мы используем многоэтапную сборку, чтобы кэшировать vendor и ускорить будущие сборки
FROM composer:2 as composer_stage
WORKDIR /app
COPY database/ database/
COPY composer.json composer.json
COPY composer.lock composer.lock
# Устанавливаем зависимости без dev-пакетов
RUN composer install --no-interaction --no-plugins --no-scripts --no-dev --prefer-dist --optimize-autoloader

# --- Этап 2: Сборка финального образа ---
# Используем официальный образ PHP 8.2 с FPM (идеально для Nginx)
FROM php:8.2-fpm

# Устанавливаем системные пакеты и необходимые расширения PHP для Laravel
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    nginx \
    supervisor \
 && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Очищаем кэш apt
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Настраиваем рабочую директорию
WORKDIR /var/www/html

# Копируем код приложения
COPY . .

# Копируем зависимости, установленные на первом этапе
COPY --from=composer_stage /app/vendor/ ./vendor/

# Копируем наши конфигурационные файлы для Nginx и Supervisor
COPY docker/nginx.conf /etc/nginx/sites-available/default
COPY docker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Выдаем права на запись для Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Открываем порт 8080, который слушает Cloud Run
EXPOSE 8080

# Запускаем Supervisor, который будет управлять Nginx и PHP-FPM
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
