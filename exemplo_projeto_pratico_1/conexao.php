<?php

$sgbd="mysql";
$host ="db4free,net:3306";
$usuario="lucas_silva";
$senha="";
$bd="localhostlucas_s";

$conexao = new PDO("$sgbd:host=$host;dbname=$bd",$usuario,$senha);

?>