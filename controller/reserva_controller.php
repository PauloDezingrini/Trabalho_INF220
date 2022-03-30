<?php

    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;   

    require "../controller/hotel_controller.php";
    require "../controller/tipo_controller.php";
    require "../models/reserva.model.php";
    require "../service/reserva.service.php";


    $reserva = new Reserva();
    echo $_POST['cidades'];
    if($_GET['acao']=='reservar'){
        $reserva->__set('n_pessoas',$_POST['guest']);
        $reserva->__set('data_saida',$_POST['checkin']);
        $reserva->__set('data_entrada',$_POST['checkout']);
        $reserva->__set('id_hotel',$_POST['cidades']);
        $reserva->__set('id_tipo',1);
        $reserva->__set('email_cliente',$_POST['email']);

        $reservaService = new ReservaService($conexao,$reserva);
        $reservaService->inserir();

        // header("Location: ../index.php");
    }

?>