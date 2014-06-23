tsi-php
=======

Sistema que permite al usuario de forma interactiva buscar inmuebles que se ajusten a sus necesidades. Cuenta con un sistema interno manejado por el personal de la inmobiliaria que le permite hacer un ABM tanto de inmuebles como de usuarios. Usando tecnologías como PHP, CSS, patrón MVC y servidor web Apache.

#Pre Requisitos:

1. PHP v. 5.5 o mayor.

#Instalación

1. Ejecutar el script SQL (tsi-php.sql) incluido el proyecto.
2. Ya que github no trackea carpetas vacías, no puede hacerse cambios en los permisos de la carpeta /assets. Por ende, para evitar error de **missing /assets folder**, es necesario ejecutar en consola:  

  ```bash
    chmod -R 0777 /assets.
  ```
3. Para evitar el warning **Failed to create scaled version: thumbnail** al usar **jQuery-File-Upload** plugin, en necesario instalar la librería GD de php:

  ```bash
    sudo apt-get install php5-gd
  ```
4. Por temas de seguridad, el Key de la API de Google no es pública, por ende, hay que [generarla](https://developers.google.com/maps/documentation/javascript/tutorial) y cambiar en el método init() del archivo [InmuebleController.php](/protected/controllers/InmuebleController.php):

  ```php
    $cs->registerScriptFile('http://maps.googleapis.com/maps/api/js?key=GMAPS_API&sensor=true');
  ```
5. Para ingresar a la applicación:
    **Nombre de usuario:** admin
    **Password:** admin

#Toolbox

+ **Yii MVC Framework:** [Homepage](https://www.yiiframework.com/)
+ **Twitter Boostrap 3:** Uno de los más populares Front-End Framework. [Homepage](https://getbootstrap.com/)
+ **Yii Booster:** Yii widgets que usa librerías y estilos de Twitter Boostrap. Bootstrap para Yii. [Homepage](https://yiibooster.clevertech.biz/)
+ **JQuery File Upload:** Widget para el manejo de uploads de fotos, archivos, imagenes con soporte para varios lenguajes servidores (PHP, Ruby, Phyton, etc.) [Homepage](https://blueimp.github.io/jQuery-File-Upload/)
+ **Api Google Maps versión 3:** Librería Javascript para el manejo de la popular API de Google Maps. [Homepage](https://developers.google.com/maps/documentation/javascript/?hl=es)


