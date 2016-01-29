## Descripcion 

La aplicacion permite el registro de usuarios en una base de datos, una vez registrado el usuario puede iniciar sesion y votar su pelicula favorita para los oscar. 

## Motivacion 

Queriamos poder realizar una encuesta para saber la pelicula preferida de nuestro circulo de amigos.

## Estructura 

La pagina contiene los siguientes ficheros con sus respectivas funciones: 

-menu.php : Es la pagina principal donde el usuario podra introducir sus datos para registrarse o iniciar sesion.
-form.php : Interactua con la base de datos y gestiona los registros y los inicios de sesion.
-votoControl.php : Se encarga de recoger los votos de los usuarios y los almacena en la base de datos.
-Conexion.php : Contiene informacion necesaria para conectarse a la base de datos.
-ContadorVotos.php : Contiene una funcion que recoge todo los votos de cada pelicula y muestra el porcentaje de votos de cada pelicula.

## Sistema de votos

Guardamos los votos de los usuarios en la base de datos, cada usuario solo puede votar una vez, al entrar en la pagina ContadorVotos.php una funcion php guarda el voto en la
base de datos y modifica el porcentaje.

## Acceso

Para acceder a la pagina la pondremos una vez terminada en un servicio de hosting.

## Software utilizado

Hemos utilizado Bootstrap para el CSS y la estructura de la pagina, para el registro utilizamos un formulario php con conexion a base de datos (phpMyAdmin),
el javascript de la pagina viene tambien incluido con Bootstrap.