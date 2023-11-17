<?php 

require "./vendor/autoload.php";
require "app/models/produto.php";
require "app/classes/email.php";
require_once "services/Search.php";
require_once "jobs/Register.php";


$produto = new asw\jobs\Register;

echo $produto->register();
