INSTRUCCIONES PARA LA EJECUCIÓN DEL PROYECTO:
*`npm install` comando para instalar dependencias de compilacion como lo es Laravel mix
*`composer install` comando para instalar composer y poder ejecutar el proyecto
*Configurar archivo .env del proyecto para la conexion a la base de datos
*crear base de datos "prueba"
*`php artisan migrate` commando para crear las tablas dentro de la base de datos
*`php artisan serve` para ver ejecutar y ver el proyecto
*ejecutar comandos en carpeta del proyecto
*si el archivo .env no se encuentra crear uno en la raiz del proyecto y copiar el siguiente codigo no olvides modificar los datos de la BD para la conexion:
//////////////////////////////////////////////////////////////////////////////
APP_NAME=PruebaTecnica
APP_ENV=local
APP_KEY=base64:ePrCmBVMJxRS3j3JE7k7i1yKDd9uMR2RWysgKCUX3zY=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=prueba
DB_USERNAME=root
DB_PASSWORD=Ibsenyael98

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DRIVER=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
