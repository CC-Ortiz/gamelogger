# GameLogger

## 1. Nombre de la aplicación

**GameLogger**

GameLogger es una aplicación web desarrollada con Laravel que permite a los usuarios llevar un registro de los videojuegos que han jugado y mantener organizado su historial de videojuegos.

## 2. Problema o necesidad

Con el tiempo, una persona puede jugar una gran cantidad de videojuegos y olvidar cuáles ha terminado, cuáles ha jugado o qué opinión tenía sobre ellos.

GameLogger busca solucionar esta necesidad proporcionando un espacio donde el usuario pueda **registrar y consultar su historial de videojuegos** de una manera sencilla y organizada.

## 3. Requisitos básicos

Para ejecutar GameLogger se necesita tener instalado:

* PHP 8.2 o superior.
* Composer.
* Laravel.
* MySQL.
* Un servidor local como XAMPP, Laragon o similar.
* Un navegador web.
* Node.js y NPM, si el proyecto requiere compilar recursos.

## 4. Puesta en funcionamiento

### 1. Clonar o descargar el proyecto

Descargar el proyecto y abrirlo desde una terminal.

### 2. Instalar las dependencias

Ejecutar:

```bash
composer install
```

### 3. Crear el archivo `.env`

Copiar el archivo `.env.example` y crear un archivo llamado `.env`.

```bash
cp .env.example .env
```

En Windows también se puede copiar manualmente el archivo `.env.example` y renombrarlo como `.env`.

### 4. Generar la clave de Laravel

Ejecutar:

```bash
php artisan key:generate
```

### 5. Configurar la base de datos

Crear una base de datos MySQL para GameLogger y configurar los datos de conexión en el archivo `.env`.

Ejemplo:

```env
DB_DATABASE=gamelogger
DB_USERNAME=root
DB_PASSWORD=
```

### 6. Ejecutar las migraciones

```bash
php artisan migrate
```

### 7. Iniciar el servidor

```bash
php artisan serve
```

Después de iniciar el servidor, abrir en el navegador:

```text
http://127.0.0.1:8000
```

## Tecnologías utilizadas

* Laravel
* PHP
* MySQL
* Bootstrap
* HTML
* Blade
