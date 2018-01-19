- Realizar git clone https://github.com/sebazamorano/tallerPHP.git
- Ir a la carpeta que se descarga por consola y ejectuar composer update

1. composer init
2. llenar la información
3. ir al archivo composer.json y escribir el autoload
`"autoload": {
           "psr-4": {
               "App\\": "app/"
           }
       }`
4. en console realizar composer update

**_la carpeta app/ es la raíz del proyecto, ahí se declaran el namespace_**