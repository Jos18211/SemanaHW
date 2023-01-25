
<?php
/*mostrar errores */

ini_set('display_errors',1);
ini_set('log_errors',1);
ini_set('error_log',1);
ini_set('error_log',"C:/xampp/htdocs/peliculas/php_error_log");
#enacabeza de las solicitudes
#CORS 
header("Access-Contorl-Allow-Origin: *");
header("Access-Contorl-Allow-Headers: *");
header("Access-Contorl-Allow-Methods: *");
#----Requirrimentos basicos clases o librerias----



#***----Agragar todos los modelos----****



#***----Agregar todos los controladores----***


#Enrutador 
#RoutesController.php
require_once "controllers/RoutesController.php";
$index=new RoutesController();
$index->index();
