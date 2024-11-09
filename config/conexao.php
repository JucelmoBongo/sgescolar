<?php
$servidor="localhost";
$user="root";
$password="";
$banco="gestao_frotas";
// PDO defin uma interface de conexao a bd

$conexao = new \PDO("mysql:host=$servidor;dbname=$banco",$user,$password);
?>