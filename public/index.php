<?php
    
//A cargar los componentes de composer
require '../vendor/autoload.php';

//Crear una instancia de slim
$app = new \Slim\Slim();

//Anadir las rutas
$app->get('/',function()
{
echo
"!Bienvenido!";
});
$app->get('/hola/:nombre',function($nombre)
{
   echo "hola ".$nombre; 
});
$app->run();
