tsi-php
=======

Sistema que permite al usuario de forma interactiva inmuebles que se ajusten a sus necesidad. Cuenta con un sistema interno manejado por el personal interno de la inmobiliaria que le permite hacer un ABM tanto de inmuebles como de usuarios. Usando tecnologías como PHP, CSS, MVC etc etc.

#Instalación

1. Ejecutar el script SQL (tsi-php.sql) incluido el proyecto.
2. Ya que github no trackea carpetas vacías, no puede hacerse cambios en los permisos de la carpeta /assets. Por ende, para evitar error de **missing /assets folder**, es necesario ejecutar en consola:  

```bash
  chmod -R 0777 /assets.
```
3. para evitar el warning **Failed to create scaled version: thumbnail** al usar **jQuery-File-Upload** plugin, en necesario instalar la librería GD de php:

```bash
  sudo apt-get install php5-gd
```

