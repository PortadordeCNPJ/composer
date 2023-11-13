<?php 

require "vendor/autoload.php";

$produto = new app\models\Produto;

echo $produto->create();