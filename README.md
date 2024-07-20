## Proceso de Pre-Instalación
>Crear carpeta node_modules
```
npm install 
``` 

>Crear la carpeta vendor
```php 
composer install 
```

## Proceso de Post-Instalación
> Para ejecutar el proyecto en el navegador
```php
php artisan serve &
```

> Compilar los estilos de tailwind
```php
npm run dev
```

## Otros procesos

> Ejecutar las pruebas
```php
php artisan test
```

> Migrar tablas y borrarlas

```php
php artisan migrate:fresh --seed

```
## Ubuntu
> Dependencias para el proyecto y otros pasos 
sudo apt-get install php-mysql
sudo apt-get install php-xml
sudo apt-get install php-curl


>borrar node_modules, vendor y .lock 
> para el node (ubuntu)
nvm install 

> para el composer
sudo apt install composer

crear archivo .env

crear bbdd en phpmyadmin

sudo /opt/lampp/lampp start/restart/stop

sudo apt-get install nodejs npm

> En la carpeta del proyecto
composer install
npm install

> Para ejecutar el proyecto
npm run dev
php artisan migrate:fresh --seed
