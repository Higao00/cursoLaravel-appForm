FROM wyveo/nginx-php-fpm:php80
#Copia configuração do nginx
RUN rm -Rf /etc/nginx/conf.d/default.conf
COPY ./.docker/nginx/conf.d/default.conf /etc/nginx/conf.d/default.conf
#enviando arquivos para diretórios html e ajustando permissões
RUN rm -rf /usr/share/nginx/html
COPY . /usr/share/nginx
RUN chmod -R 777 /usr/share/nginx/*
#link simbólico para funcionamento do nginx
RUN ln -s /usr/share/nginx/public /usr/share/nginx/html