<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$nomeBD= "controle_notebooks";
// $dsn="mysql:host={$servidor};port=3306;dbname={$nomeBD};charset=utf8";

/* try 
{
    // Conectando
    $pdo = new PDO($dsn, $usuario, $senha);
} 
catch (PDOException $e) 
{
    // Se ocorrer algum erro na conexão
    die($e->getMessage());
}
 */

//criando conexao
$mysqli = new mysqli($servidor, $usuario,$senha,$nomeBD);

//testando conexao com o banco de dados
if ($mysqli->connect_errno){
    echo "Falha ao conectar: {". $mysqli->connect_errno . "} " . $mysqli->connect_error;
}

/* Muda o charset do banco para utf8 */
$mysqli->set_charset("utf8")
?>