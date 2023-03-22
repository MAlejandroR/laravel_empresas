<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Clonar el proyecto y levantarlo
Clono el proyecto 
```shell
git clone https://.....
cd laravel_empresas
composer update
npm install
```
* Verifico que tenga el fichero .env, sino lo consigo y genero la clave
```shell
php artisan key:gen
```
* Cargo las bases de datos de mi docker [docker_file](./docker-compose.yaml)
```shell
#al estar funcionando con dokcer, lo levanto. El fichero se aporta e 
docker compose up -d
php artisan migrate 
```
*Levanto el proyecto y verfico su funcionamieto (el & es para no perder el terminal y ejecutar el proceso en backgroud)
```shell
php artisan serve &
npm run dev
```
* Accedo a http://localhost:8000 y verfico que todo funciona




## Proyecto empresas
Creo el proyecto nuevo 
```shell
laravel new Empresas
```

### Requisitos
## R1 instalar autenticación
Me ubico en el directorio del proyecto y ejecuto las siguientes instruccionesw 
1.- Instalo breeze, me crará una carpete an ***vendor/laravel/breeze***
```shell
composer require "laravel/breeze"
```
2.- Publico las vistas, controladores, rutas en mi proyecto
```shell
php artisan breeze:install 
```
3.- Instalo las herramientas de front (taildwind)
```shell
npm install 
```
4.- Pongo en funcionamiento el servidor de bases de datos
cargo el fichero docker-composer.yaml en el directorio del proyecto
[Fichero docker-compose.yaml](./docker-compose.yaml)
```shell
docker compose up -d
```
5.- Configuro el fichero  ***.env*** para configurar la base de datos (ver credenciales en el fichero ***yaml***)
```shell
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=23306
DB_DATABASE=empresa
DB_USERNAME=manuel
DB_PASSWORD=manuel
```
6.- Ejecuto las migraciones
```shell
php artisan migrate
```
7.- Arranco las herramientas de cliente

```shell
npm run dev
```

8.- Puedo probar que está todo bien instalado, pruebo a loguearme

Abro el servidor y me conecto a la aplicación.

```shell
php artisan serve &
```
## [ Diseño de pantallas ](./documentacion/diseño_layout.md)






