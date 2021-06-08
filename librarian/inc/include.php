<?php
ob_start();
include '../lib/Session.php' ;
Session::init();
include '../lib/Database.php' ;
include '../helpers/Format.php';

spl_autoload_register(function($class){
  include_once "classes/".$class.".php";

});

$lb = new Librarian();
$ad  = new Addbook();
$fm   = new Format();
$ct = new Category();
$bk = new Book();
$sc = new Search();


?>
