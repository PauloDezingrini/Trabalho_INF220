<?php

    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

    require_once "../conexao.php";
    require "../models/apartamento.model.php";
    require "../service/apartamento.service.php";

    $apartamento = new Apartamento();
    $acao = 'buscar_tipos';
    if($acao == 'buscar_tipos'){
        $apartamento->__set('id_filial',$_POST['cidades']);

        $apartamentoService = new ApartamentoService($conexao,$apartamento);
        $apartamentos = $apartamentoService->recuperarPorFilial();

        $busca = 'reservas_hotel';
        require "../controller/reserva_controller.php";

        echo "<pre>";
        print_r($reservas);
        echo "</pre>";

        session_start();
        $_SESSION['tipos'] = $apartamentos;
        // header("Location: ../pages/reserva.php?email=".$_POST['email']."&tipos=1");   
    }
?>