README — CampusBooking(Actividad Autónoma 1 – Laravel)
Descripción del Proyecto

CampusBooking Lite es un módulo básico para gestionar Espacios (aulas, salas, laboratorios) y Reservas dentro de una sede educativa.
El sistema permite realizar operaciones CRUD: crear, listar, editar y eliminar.
No requiere autenticación, filtros ni validaciones avanzadas de traslape de horarios.

Este proyecto fue desarrollado para la Actividad Autónoma 1 de Laravel.

Alcance

El sistema incluye:

2 entidades principales:

Espacio

Reserva

Características obligatorias:

Migraciones completas

Modelos con $fillable y relaciones:

Espacio tiene muchas reservas (hasMany)

Reserva pertenece a un espacio (belongsTo)

Controladores tipo Resource

Vistas Blade:

index, create, edit y partials/form para ambas entidades

Relación 1–N totalmente funcional

Mensajes flash (success) en creación, edición y eliminación

Selección de Espacio mediante <select> en la creación/edición de reservas

Navegación básica entre listas

Fuera del alcance:

Login / autenticación

Soft delete

Búsqueda o filtrado

Validación de traslape de reservas

Requisitos

Antes de iniciar, asegúrate de tener instalado:

PHP 8.1+

Composer

MySQL o MariaDB

Laravel 10+ (incluido mediante Composer)

Extensiones PHP:

pdo, pdo_mysql, mbstring, openssl, tokenizer

Instalación
1️. Clonar el repositorio
git clone <URL_DEL_REPOSITORIO>
cd campus_booking

2️. Instalar dependencias
composer install

3️. Configurar el archivo .env

Duplica el archivo de ejemplo:

cp .env.example .env


Luego edita los valores de tu base de datos:

DB_DATABASE=campus_booking
DB_USERNAME=root
DB_PASSWORD=

4️. Generar la clave de Laravel
php artisan key:generate

5️. Ejecutar migraciones
php artisan migrate

Ejecutar el servidor
php artisan serve


Accede en el navegador a:

http://127.0.0.1:8000

Estructura Principal del Proyecto
app/
 ├── Models/
 │     ├── Espacio.php
 │     └── Reserva.php
 ├── Http/
 │     └── Controllers/
 │          ├── EspacioController.php
 │          └── ReservaController.php

resources/
 └── views/
       ├── layout.blade.php
       ├── espacios/
       │     ├── index.blade.php
       │     ├── create.blade.php
       │     ├── edit.blade.php
       │     └── partials/form.blade.php
       └── reservas/
             ├── index.blade.php
             ├── create.blade.php
             ├── edit.blade.php
             └── partials/form.blade.php

Funciones Implementadas
Espacios

Crear nuevo espacio

Listar espacios con paginación

Editar y actualizar espacios

Eliminar espacio

Validaciones:

nombre, tipo, ubicacion → required string

capacidad → integer ≥ 1

Reservas

Crear reserva para un espacio

Listar reservas con paginación

Mostrar el nombre del espacio vía relación

Editar y actualizar reservas

Eliminar reserva

Validaciones:

espacio_id must exist in espacios

Fechas y horas correctas (date, time format)


Autor

Proyecto realizado por:
Jose Daniel Muñoz Velandia
