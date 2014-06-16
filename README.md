tsi-php
=======

Sistema que permite al usuario de forma interactiva inmuebles que se ajusten a sus necesidad. Cuenta con un sistema interno manejado por el personal interno de la inmobiliaria que le permite hacer un ABM tanto de inmuebles como de usuarios. Usando tecnologías como PHP, CSS y patrón MVC.

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

#Toolbox

+ **Yii MVC Framework:** [Homepage](https://www.yiiframework.com/)
+ **Twitter Boostrap 3:** Uno de los más populares Front-End Framework. [Homepage](https://getbootstrap.com/)
+ **Yii Booster:** Yii widgets que usa librerías y estilos de Twitter Boostrap. Bootstrap para Yii. [Homepage](https://yiibooster.clevertech.biz/)
+ **JQuery File Upload:** Widget para el manejo de uploads de fotos, archivos, imagenes con soporte para varios lenguajes servidores (PHP, Ruby, Phyton, etc.) [Homepage](https://blueimp.github.io/jQuery-File-Upload/)
+ **Api Google Maps versión 3:** Librería Javascript para el manejo de la popular API de Google Maps. [Homepage](https://developers.google.com/maps/documentation/javascript/?hl=es)


