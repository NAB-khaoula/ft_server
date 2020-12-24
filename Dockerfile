FROM debian:buster
RUN apt update
RUN apt install -y nginx && service nginx start 
RUN apt install -y mariadb-server
RUN apt-get install -y php-mbstring php-zip php-gd php-xml php-pear php-gettext php-cli php-fpm php-cgi php-mysql 
RUN apt install -y wget
RUN wget https://files.phpmyadmin.net/phpMyAdmin/4.9.0.1/phpMyAdmin-4.9.0.1-all-languages.tar.gz
RUN tar -zxvf phpMyAdmin-4.9.0.1-all-languages.tar.gz 
RUN rm -f phpMyAdmin-4.9.0.1-all-languages.tar.gz 
RUN mv phpMyAdmin-4.9.0.1-all-languages phpmyadmin
RUN mv phpmyadmin/config.sample.inc.php phpmyadmin/config.inc.php
RUN mv phpmyadmin var/www/html
COPY /srcs/config.inc.php /var/www/html/phpmyadmin/config.inc.php
RUN chmod 777 /var/www/html/phpmyadmin
RUN chown -R www-data:www-data /var/www/html/phpmyadmin
COPY ./srcs/query.sql /query.sql
COPY ./srcs/localhost.sql /localhost.sql 
RUN service mysql start && mysql -u root < "/localhost.sql" && mysql -u root < "/query.sql"
RUN wget http://wordpress.org/latest.tar.gz
RUN tar xzf latest.tar.gz
RUN mv wordpress /var/www/html
RUN rm -f latest.tar.gz
RUN chown -R www-data:www-data /var/www/html/wordpress
RUN chmod -R 755 /var/www/html/wordpress
COPY ./srcs/wp-config.php /var/www/html/wordpress
RUN service php7.3-fpm start
COPY ./srcs/default /etc/nginx/sites-available/default
COPY ./srcs/self-signed.conf /etc/nginx/snippets/self-signed.conf
RUN openssl req -subj "/C=MA/ST=CASABLANCA/L=CS/O=JIJI/CN=localhost" -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/nginx-selfsigned.key -out /etc/ssl/certs/nginx-selfsigned.crt
RUN nginx -t
COPY ./srcs/script.sh /script.sh
EXPOSE 80 443
ENTRYPOINT bash script.sh