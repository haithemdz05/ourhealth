# استخدام نسخة PHP رسمية تحتوي على سيرفر Apache ومناسبة للارافل
FROM php:8.2-apache

# تثبيت الإضافات والمكتبات اللازمة لـ Laravel
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    curl \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo_mysql gd bcmath

# تفعيل مود الـ Rewrite الخاص بـ Apache ليعمل نظام الـ Routing في لارافل
RUN a2enmod rewrite

# تغيير مسار الـ Document Root الخاص بـ Apache ليوجه إلى مجلد public
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf

# تثبيت الـ Composer داخل الـ Container
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# نسخ ملفات المشروع إلى الخادم
WORKDIR /var/www/html
COPY . .

# تثبيت حزم الـ Composer للمشروع
RUN composer install --no-dev --optimize-autoloader

# إعطاء الصلاحيات المناسبة لمجلدات التخزين والـ Cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# تحديد البورت الذي سيستمع إليه الخادم
EXPOSE 80

# أمر التشغيل الافتراضي لـ Apache
CMD ["apache2-foreground"]