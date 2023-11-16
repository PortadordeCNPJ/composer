<?php 

require "vendor/autoload.php";

$produto = new app\models\Produtos;

echo $produto->create();
