<?php
    require_once "../conexao.php";
    require "../models/reserva.model.php";
    require "../service/reserva.service.php";
    require "../models/cliente.model.php";
    require "../service/cliente.service.php";

    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

    $reserva = new Reserva();
    $cliente = new Cliente();

    if($acao == 'buscar_reservas'){
        $reserva->__set('email_cliente',$_POST['email']);
        $reserva_service = new ReservaService($conexao,$reserva);

        $reservas = $reserva_service->recuperarPorEmail();

        // echo '<pre>';
        // print_r($reservas);
        // echo '</pre>';
        session_start();
        $_SESSION['reservas'] = $reservas;

        header("Location: ../pages/admin.php?email=".$_POST['email']);
    } else if ($acao=='buscar_infos'){
        $cliente->__set('email',$_GET['email']);
        $clienteService = new ClienteService($conexao,$cliente);

        $nome = $clienteService->recuperarPorEmail();

        $reserva->__set('id',$_POST['reserva']);
        $reservaService = new ReservaService($conexao,$reserva);

        $infos = $reservaService->recuperarPorId();
        
        session_start();
        $_SESSION['nome'] = $nome;
        $_SESSION['infos_reserva'] = $infos;


        // echo '<pre>';
        // print_r($_SESSION['nome']);
        // print_r($_SESSION['infos_reserva']);
        // echo '</pre>';
        header("Location: ../pages/admin.php?email=".$_GET['email']);
    }
?>