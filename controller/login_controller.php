<?php

    require_once "../conexao.php";
    require_once "../models/cliente.model.php";
    require_once "../service/cliente.service.php";


    $cliente = new Cliente();
    $cliente->__set('email',$_POST['email']);
    $clienteService = new ClienteService($conexao,$cliente);
    $data = $clienteService->recuperarPorEmail();

    $campo_vazio = empty($_POST['email']) || empty($_POST['senha']);
    if($campo_vazio)
        header("Location: ../index.php");

    if(strcmp($_POST['email'],'Admin@hotel.com') == 0 and $_POST['senha'] == $data[0]->Senha)
        header("Location: ../pages/admin.php");
    else if($_POST['senha'] == $data[0]->Senha)
        header("Location: ../pages/reserva.php?email=".$_POST['email']);
?>
