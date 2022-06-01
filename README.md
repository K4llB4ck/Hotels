## Installation
Clone el repositorio

    git clone git@github.com:K4llB4ck/Hotels.git

Cambiar a la carpeta del repositorio

    cd hotels

Instala todas las dependencias usando composer

    composer install

Copie el archivo env de ejemplo y realice los cambios de configuración necesarios en el archivo .env

    cp .env.example .env

Generar una nueva clave de aplicación

    php artisan key:generate

Ejecute las migraciones de la base de datos ( **establezca la conexión de la base de datos en .env antes de migrar**)

    php artisan migrate

Ejecute la siembra de datos 

    php artisan db:seed

**Rellena la base de datos con datos iniciales, incluye los tipos de cuarto, acomodaciones etc**

Inicie el servidor de desarrollo local

    php artisan serve

## Variables de entorno

- `.env` - Las variables de entorno se pueden configurar en este archivo.

***Note*** : puede configurar rápidamente la información de la base de datos y hacer que la aplicación funcione completamente.


# API de prueba

Ejecute el servidor de desarrollo de laravel

    php artisan serve

Ahora se puede acceder a la API en

    http://localhost:8000/api/v1

Encabezados de solicitud

| **Required** 	| **Key**              	| **Value**            	|
|----------	|------------------	|------------------	|
| Yes      	| Content-Type     	| application/json 	|
| Yes      	| Accept 	        | application/json  |

