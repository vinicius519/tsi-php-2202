<?php


//dados para nos conectarmos ao sgbd
$dsn = 'mysql:dbname=senac;host=localhost;port=3307';
$user = 'root';
$pass = '';

//conectamos ao sgbd
$bd = new PDO($dsn, $user, $pass);

