<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
header("Content-Type: text/html; charset=UTF-8", true);

require_once ('../model/Pessoa.php');
require_once ('../dao/PessoaDAO.php');

$dao = null;

try {

    if (!empty($_POST["id"])) {
        $dao = new PessoaDAO();
        $obj = $dao->getById($_POST["id"]);

        // TODO: Escrever código para alterar pessoa
        echo "Não implementado";

    } else {
        header('Erro', true, 422);
        echo "ID não informado";
    }

} catch (Exception $e){
    header('Erro', true, 500);
    echo $e->getMessage();
}


