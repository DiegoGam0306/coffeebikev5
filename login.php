<?php
use Illuminate\Database\Capsule\Manager as DB;

require 'vendor\autoload.php';
require 'config\database.php';

$user = DB::table('usuarios')->where('nombreusuario', $_POST['usuario'])->first();
$mensaje = '';
if ($user->password == $_POST['password']) {
    $mensaje = "<h1> Bienvenido {$user->nombreusuario}</h1>
    <br><a href='inicio.html'>Entrar al Sistema del negocio</a>";
} else {
    $mensaje = "<h1>¡Oh no! ¡El usario y/o contraseña son incorrectos!</h1>
    <br><a href='index.html'>Volver a intentar</a>";
}

echo $mensaje;