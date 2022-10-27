<?php
//buscamos o codigo que conecta no SGBD
require_once '../banco de dados/conecta.php';
//apenas para ficar mais facil
//com o dado enviado pelo usuario
$id = $_GET['id'];

$id = preg_replace('/\D/' , '', $id);


if ($bd->exec("DELETE FROM alunos WHERE id = $id") ){

    $apagado = true;

}else{

    $apagado = false;
}

include 'index.php';