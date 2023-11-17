<?php 

require_once "../vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT']);
$dotenv->load();

var_dump($_ENV["DATABASE"]);