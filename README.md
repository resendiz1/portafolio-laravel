<h1>Descripción</h1>

<p>
Este es un pequeño proyecto que se realizo con ayuda de un tutorial, este proyecto es basicamente un CRUD que nos ayuda a gestionar proyectos en un portafolio
</p>



<h1>Instalación y requerimientos</h1>
Para poder ejecutar el proyecto se necesita: -> Algun servidor Apache con base de datos como XAMPP, Laragon, Lampp, etc. -> Composer

1.- Se clona el proyecto en la carpeta del servidor apache <br>
2.- se realiza un composer install para instalar lo que se necesita <br>
3.- Se configura el archivo .env <br>
4.- Realiza las migraciones <br>
5.- Genera un usuario para acceder mediante tinker <b> User::factory()->create(['email' => 'email@mail.com']) </b> <br>


Listo, con eso ya deberia funcionar perfectamente
