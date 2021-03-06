<?php

    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

    // $buscar = isset($_GET['buscar']) ? $_GET['buscar'] : $buscar;  

    
    require_once "../conexao.php";
    require "../controller/hotel_controller.php";
    require "../models/reserva.model.php";
    require "../service/reserva.service.php";

    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;   
    $reserva = new Reserva();
    
    if($acao =='preparar_reserva'){

        $reserva->__set('n_pessoas',$_POST['guest']);
        $reserva->__set('data_saida',$_POST['checkin']);
        $reserva->__set('data_entrada',$_POST['checkout']);
        $reserva->__set('id_hotel',$_POST['cidades']);
        $reserva->__set('id_tipo',$_POST['tipo']);
        $reserva->__set('email_cliente',$_POST['email']);

        $reservaService = new ReservaService($conexao,$reserva);
        $reservaService->inserir();

        session_start();
        $_SESSION['id_filial'] = $_POST['cidades'];
        header("Location: ../index.php?reservado=1");
    } else if(isset($busca) && $busca='reservas=hotel'){
        
        session_start();
        $reserva->__set('id_hotel', $_SESSION['id_filial']);

        $reservaService = new ReservaService($conexao,$reserva);
        $reservas  = $reservaService->recuperarPorFilial();
    }
?>