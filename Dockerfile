# PHPとApacheがインストールされた公式イメージを使用
FROM php:8.3-apache

# Laravelが依存するPHPの拡張機能をインストール
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd \
    && docker-php-ext-install pdo pdo_mysql

# Composerをインストール
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# ドキュメントルートをLaravelのpublicディレクトリに設定
WORKDIR /var/www/html

# Apacheの設定ファイルを編集してDocumentRootを変更
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# Apacheのmod_rewriteを有効にする（Laravelには必要）
RUN a2enmod rewrite

# コンテナ起動時にApacheを起動
CMD ["apache2-foreground"]
