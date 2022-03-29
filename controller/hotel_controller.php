<?php
    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;
    
    if($acao == 'inserir'){

        require "../conexao.php";
        require "../models/hotel.model.php";
        require "../service/hotel.service.php";

        $hotel = new Hotel();
        $hotelService = new HotelService($conexao,$hotel);
        $hotel->__set('cidade', $_POST['cidade']);
        $hotel->__set('estado', $_POST['estado']);
    
        $hotelService->inserir();
    
        header('Location: ../form_hoteis.php?inclusao=1');
    } else if($acao == 'recuperar'){

        require "conexao.php";
        require "models/hotel.model.php";
        require "service/hotel.service.php";
        
        $hotel = new Hotel();
        $hotelService = new HotelService($conexao,$hotel);
        $hoteis = $hotelService->recuperar();
    } else if($acao == 'atualizar'){

    }
?>