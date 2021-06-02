FROM wyveo/nginx-php-fpm:php80
#instalando e limpando cache das dependências linux
RUN apt-get update && apt-get install -y \
    vim \ 
    curl
RUN apt-get clean && rm -Rf /var/lib/apt/lists/*
#Copia configuração do nginx
RUN rm -Rf /etc/nginx/conf.d/default.conf
COPY ./.docker/nginx/conf.d/default.conf /etc/nginx/conf.d/default.conf
#enviando arquivos para diretórios html e ajustando permissões
RUN rm -rf /usr/share/nginx/html
COPY . /usr/share/nginx
RUN chmod -R 775 /usr/share/nginx/storage/*
#link simbólico para funcionamento do nginx
RUN ln -s /usr/share/nginx/public /usr/share/nginx/html