<?php 

require "vendor/autoload.php";

$produto = new services\Search;

echo $produto->search();