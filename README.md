<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

# Comandos útiles
- composer global require laravel/installer: Comando para instalar laravel
- new laravel app: Comando para crear un nuevo proyecto
- npm run watch: Comando para crear un servidor y que los cambios se reflejen cada vez que se guarden
- composer require s-ichikawa/laravel-sendgrid-driver: Comando para instalar sendgrid
- composer require laravel/breeze --dev
- php artisan breeze:install: Comando para que cree controladores y vistas para la autenticación 
- npm i laravel-mix: Comando para installar laravel mix para que los cambios se reflejen al instante
- composer require laravel/ui
- php artisan ui bootstrap: Comando para instalar bootstrap
- php artisan route:list: Comando para ver la lista de rutas creadas en el archivo web
- php artisan make:model Project: Comando para crear un nuevo modelo
- php artisan migrate:fresh: Comando para refrescar la migración, borra todos los datos almacenados en las tablas
- php artisan make:migration create_projects_table: Comando para crear una nueva tabla
- php artisan migrate:rollback --step=1: Comando para deshacer la migración anterior
- php artisan migrate:rollback: Comando para deshacer una migración
- php artisan migrate: Comando para hacer la migración
- php artisan make:mail MessageReceived: Comando para crear un mail
- php artisan make:controller MessagesController: Comando para crear un controlador
