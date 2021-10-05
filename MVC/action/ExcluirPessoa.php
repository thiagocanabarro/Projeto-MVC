<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
header("Content-Type: text/html; charset=UTF-8", true);

require_once ('../dao/PessoaDAO.php');

$dao = null;

try {

    // TODO: Escrever código para excluir pessoa
    echo "Não implementado";
    
} catch (Exception $e){
    header('Erro', true, 500);
    echo $e->getMessage();
}


