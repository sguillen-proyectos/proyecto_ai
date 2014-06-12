## Proyecto Inteligencia Artificial

# Integración inteligente bases de datos con bases de conocimiento
Proyecto de la materia Inf-354 de la Universidad Mayor de San Andrés

Se necesita tener composer instalado, para las dependencias y redis con  configuracion
por defecto para las estructuras de datos

Servidor Redis:
###
$ ./redis-server
###

Deployment:
###
$ composer install
###

Crear base de datos, and data seeder:
###
$ ./artisan migrate
    $ ./artisan db:seed
###
