<?php

    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;
        
    require "../conexao.php";
    require "../models/tipo.model.php";
    require "../service/tipo.service.php";
    require "../models/apartamento.model.php";
    require "../service/apartamento.service.php";

    $apartamento = new Apartamento();

    if($acao = 'buscar_tipos'){
        $apartamento->__set('id_filial',$_POST['cidades']);
        echo $apartamento->__get('id_filial');
        // $apartamento->__set('id_filial',1);

        $apartamentoService = new ApartamentoService($conexao,$apartamento);
        $apartamentos = $apartamentoService->recuperarPorFilial();


        echo "<pre>";
        print_r($apartamentos);
        echo "</pre>";
        session_start();
        $_SESSION['tipos'] = $apartamentos;
        header("Location: ../pages/reserva.php?email=".$_POST['email']."&tipos=1");   
    }
?>