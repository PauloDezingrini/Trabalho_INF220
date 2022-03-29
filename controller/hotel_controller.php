<?php

    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;
    

    if($acao == 'inserir' || $acao == 'atualizar' ){
        require "../conexao.php";
        require "../models/hotel.model.php";
        require "../service/hotel.service.php";

    } else if($acao == 'recuperar' || $acao == 'remover') {
        require "conexao.php";
        require "models/hotel.model.php";
        require "service/hotel.service.php";
    }

    $hotel = new Hotel();
    
    if($acao == 'inserir'){
        
        $hotel->__set('cidade', $_POST['cidade']);
        $hotel->__set('estado', $_POST['estado']);
        
        $hotelService = new HotelService($conexao,$hotel);
        $hotelService->inserir();
    
        header('Location: ../form_hoteis.php?inclusao=1');
    } else if($acao == 'recuperar'){

        $hotelService = new HotelService($conexao,$hotel);
        $hoteis = $hotelService->recuperar();

    } else if($acao == 'atualizar'){

        $hotel->__set('id',$_POST['id']);
        $hotel->__set('estado',$_POST['estado']);
        $hotel->__set('cidade',$_POST['cidade']);

        $hotelService = new HotelService($conexao,$hotel);
        
        if($hotelService->atualizar() != 0)
            header('Location: ../lista_hoteis.php');

    } else if($acao == 'remover'){

        $hotel->__set('id',$_GET['id']);
        $hotelService = new HotelService($conexao,$hotel);
        $hotelService->remover();

        header('Location: lista_hoteis.php');
    }
?>