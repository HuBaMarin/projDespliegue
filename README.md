## Proceso de Pre-Instalación
>Crear carpeta node_modules
```sh
npm install 
```

> Actualizar carpeta node_modules
```sh
npm update 
```

>Crear la carpeta vendor
```php 
composer install 
```

> Actualizar carpeta vendor
```php 
composer update 
```

## Proceso de Post-Instalación (linux o windows)
> Para ejecutar el proyecto en el navegador
 ```sh
   docker-compose up -d
```

> Compilar los estilos de tailwind
```php
npm run dev
```

## Otros procesos

> Ejecutar las pruebas
```php
docker-compose exec app php artisan test
```

> Migrar tablas y borrarlas

```php
docker-compose exec app php artisan migrate:fresh --seed
```

## Ubuntu

> Dependencias para el proyecto y otros pasos

```
sudo apt-get install php-mysql php-xml php-curl
```

>borrar node_modules, vendor y .lock 

>para el node

```
nvm install 
```

> para el composer
> 
```
sudo apt install composer
```

cambiar archivo env-development por .env

crear bbdd en phpmyadmin

```
sudo /opt/lampp/lampp start/restart/stop
```

```
sudo apt-get install nodejs npm
```




