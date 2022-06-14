<?php
use ITEC\DAW\CRUD\db;
include_once "vendor/autoload.php";

$db = new db();
$resultado = $db->Select("SHOW DATABASES;");
print_r($resultado);