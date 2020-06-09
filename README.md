<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Acerca de este proyecto

Proyecto desarrollado para la materia de ingeniería de software 2, Universidad Tecnologica de Pereira Semestre I 2020.

Este proyecto es un aplicativo web que tiene por objetivo proveer un servicio informativo para el municipio de Santuario, Risaralda.
Hemos implementado el framework de Laravel. 

## Prerequisitos

Para poder poner en marcha este proyecto es necesario previamente contar con los siguientes elementos : 

- Php7.x 
- Composer ( [Sitio Web Oficial](https://getcomposer.org/))
- Motor de base de datos: **MariaDB** o **MySQL**
- Editor, recomendacion VSCode
- terminal o shell 

Para el desarrollo, se utilizo sistema operativo Debian version 10, Base de datos MySQL. todo el proyecto 
se desarrollo gracias a la [documentacion oficial](https://laravel.com/docs). 

## Puesta en Marcha
1. Clonamos el repo : 
    ```sh
    $ git clone https://github.com/MelissaEscobar/santurismo.git
    ```
2. Ingresamos a la carpeta y realizamos la instalacion de las dependencias con composer
    ```sh
    $ cd santurismo 
    santurismo$ composer install
    ```
3. Una vez tenemos las dependencias de Laravel instaladas, es necesario configurar nuestro archivo de entorno .env 
    ```sh
    santurismo$ cp .env.example .env
    ```
4. Creamos nuestra base de datos y corremos la migraciones y cambios en la base de datos  
    ```sh
    santurismo$ php artisan migrate
    ```
    Obtendras una salida como la siguiente : 
    ```sh
    Migration table created successfully.
    Migrating: 2014_10_12_000000_create_users_table
    Migrated:  2014_10_12_000000_create_users_table (0.23 seconds)
    Migrating: 2014_10_12_100000_create_password_resets_table
    Migrated:  2014_10_12_100000_create_password_resets_table (0.18 seconds)
    Migrating: 2019_08_19_000000_create_failed_jobs_table
    Migrated:  2019_08_19_000000_create_failed_jobs_table (0.08 seconds)
    Migrating: 2020_06_08_164138_create_articles_table
    Migrated:  2020_06_08_164138_create_articles_table (0.08 seconds)
    Seeding: UserSeeder
    Seeded:  UserSeeder (0.41 seconds)
    Seeding: ArticleSeeder
    Seeded:  ArticleSeeder (0.26 seconds)
    Database seeding completed successfully.
    ```
5. Ejecutamos y ponemos a correr nuestro servidor localmente
    ```sh
    santurismo$ php artisan serve 
    Laravel development server started: http://127.0.0.1:8000
    [Thu Apr 30 23:33:17 2020] PHP 7.4.5 Development Server (http://127.0.0.1:8000) started
    ```
## Rutas


| Domain | Method   | URI                    | Name             | Action                                                                 | Middleware |
|------- | -------   | ----------------------| -----------------| -----------------------------------------------------------------------| ---------- |
|        | GET|HEAD | /                      |                  | Closure                                                                | web        |
|        | GET|HEAD | api/user               |                  | Closure                                                                | api        |
|        |          |                        |                  |                                                                        | auth:api   |
|        | GET|HEAD | create                 | create           | App\Http\Controllers\HomeController@create                             | web        |
|        |          |                        |                  |                                                                        | auth       |
|        | DELETE   | destroy/{id}           | destroy          | App\Http\Controllers\HomeController@destroy                            | web        |
|        |          |                        |                  |                                                                        | auth       |
|        | GET|HEAD | home                   | home             | App\Http\Controllers\HomeController@index                              | web        |
|        |          |                        |                  |                                                                        | auth       |
|        | POST     | login                  |                  | App\Http\Controllers\Auth\LoginController@login                        | web        |
|        |          |                        |                  |                                                                        | guest      |
|        | GET|HEAD | login                  | login            | App\Http\Controllers\Auth\LoginController@showLoginForm                | web        |
|        |          |                        |                  |                                                                        | guest      |
|        | POST     | logout                 | logout           | App\Http\Controllers\Auth\LoginController@logout                       | web        |
|        | GET|HEAD | password/confirm       | password.confirm | App\Http\Controllers\Auth\ConfirmPasswordController@showConfirmForm    | web        |
|        |          |                        |                  |                                                                        | auth       |
|        | POST     | password/confirm       |                  | App\Http\Controllers\Auth\ConfirmPasswordController@confirm            | web        |
|        |          |                        |                  |                                                                        | auth       |
|        | POST     | password/email         | password.email   | App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail  | web        |
|        | GET|HEAD | password/reset         | password.request | App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm | web        |
|        | POST     | password/reset         | password.update  | App\Http\Controllers\Auth\ResetPasswordController@reset                | web        |
|        | GET|HEAD | password/reset/{token} | password.reset   | App\Http\Controllers\Auth\ResetPasswordController@showResetForm        | web        |
|        | GET|HEAD | register               | register         | App\Http\Controllers\Auth\RegisterController@showRegistrationForm      | web        |
|        |          |                        |                  |                                                                        | guest      |
|        | POST     | register               |                  | App\Http\Controllers\Auth\RegisterController@register                  | web        |
|        |          |                        |                  |                                                                        | guest      |
|        | POST     | store                  | store            | App\Http\Controllers\HomeController@store                              | web        |
|        |          |                        |                  |                                                                        | auth       |

## Miembros de Equipo 

- Melissa Escobar Gutierrez
- Daniela Melo Pineda

## Contribuciones

Para realizar aportes o contribuciones se implementa el [modelo](https://tighten.co/blog/adding-commits-to-a-pull-request/) de pull request.Todos los aportes son bienvenidos de personas 
ajenas a los miembros de equipo


## Licencia

Proyecto de software licenciado bajo licencia [MIT](https://opensource.org/licenses/MIT).
