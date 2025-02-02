<?php
require __DIR__.'/vendor/autoload.php';

define('TITLE','EDITAR CLIENTE');

use \App\Entity\Cliente;

//validação de id
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: index.php?status=error');
    exit;
}

//CONSULTA VAGA
$obCliente = Cliente::getCliente($_GET['id']);

//validar vaga
if(!$obCliente instanceof Cliente) {
    header('location: index.php?status=error');
    exit;
}

//validação do post
if(isset($_POST['nome'], $_POST['email'], $_POST['telefone'], $_POST['endereco'])){


    $obCliente->nome = $_POST['nome'];
    $obCliente->email = $_POST['email'];
    $obCliente->telefone = $_POST['telefone'];
    $obCliente->endereco = $_POST['endereco'];
    $obCliente->Atualizar();

    header('location: index.php?status=success');
    exit;
    
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formcli.php';
include __DIR__.'/includes/footer.php';

