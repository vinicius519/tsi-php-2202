<?php


//dados para nos conectarmos ao sgbd
$dsn = 'mysql:dbname=senac;host=localhost';
$user = 'root';
$pass = '';

//conectamos ao sgbd
$bd = new PDO($dsn, $user, $pass);

var_dump($bd);