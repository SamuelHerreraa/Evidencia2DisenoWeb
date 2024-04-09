# Proyecto de Gestión de Alumnos y Carreras

Este proyecto es una aplicación web desarrollada en Laravel para la gestión de alumnos y carreras en una institución educativa. Permite a los usuarios iniciar sesión, agregar y consultar alumnos y carreras, así como cerrar sesión de manera segura.

## Características principales

- **Inicio de sesión**: Los usuarios pueden iniciar sesión en la aplicación utilizando sus credenciales.
- **Cierre de sesión**: Los usuarios pueden cerrar sesión de manera segura en la aplicación.
- **Autenticación**: La aplicación utiliza el sistema de autenticación de Laravel para proteger las rutas y acciones relevantes.
- **Agregar alumnos**: Los usuarios pueden agregar nuevos alumnos proporcionando su nombre, apellidos, fecha de nacimiento, carrera y estatus.
- **Agregar carreras**: Los usuarios pueden agregar nuevas carreras proporcionando su nombre y descripción.
- **Consultar alumnos**: Los usuarios pueden ver una lista de todos los alumnos registrados en la aplicación.
- **Consultar carreras**: Los usuarios pueden ver una lista de todas las carreras registradas en la aplicación.

## Base de datos

La aplicación utiliza una base de datos MySQL para almacenar la información de los alumnos y las carreras. La estructura de la base de datos incluye las siguientes tablas:

- **students**: Almacena la información de los alumnos, incluyendo su nombre, apellidos, fecha de nacimiento, carrera y estatus.
- **careers**: Almacena la información de las carreras, incluyendo su nombre y descripción.

## Instalación

1. Clona el repositorio en tu máquina local.
2. Instala las dependencias del proyecto utilizando Composer: `composer install`.
3. Copia el archivo `.env.example` y renómbralo como `.env`. Configura tu base de datos en este archivo.
4. Genera una nueva clave de aplicación: `php artisan key:generate`.
5. Ejecuta las migraciones para crear las tablas de la base de datos: `php artisan migrate`.
6. Inicia el servidor de desarrollo: `php artisan serve`.

¡Ahora puedes acceder a la aplicación en tu navegador!
