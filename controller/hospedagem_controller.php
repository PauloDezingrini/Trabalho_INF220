<?php
    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

    require_once "../conexao.php";
    require "../models/hospedagem.model.php";
    require "../service/hospedagem.service.php";
    require "../models/hotel.model.php";
    require "../service/hotel.service.php";

    $hospedagem = new Hospedagem();
    $hotel = new Hotel();

    if($acao == 'recuperar'){

        $hospedagemService = new HospedagemService($conexao,$hospedagem);
        $hospedagens = $hospedagemService->recuperar();

        $hotelService = new HotelService($conexao,$hotel);
        $hoteis = $hotelService->recuperar();
    } else if($acao == 'data'){
        $data = new DateTime($_POST['data']);

        $hospedagemService = new HospedagemService($conexao,$hospedagem);
        $hospedagens = $hospedagemService->recuperar();

        foreach($hospedagens as $keys => $hospedagem){
            $data_in = new DateTime($hospedagem->check_in);
            $data_ou = new DateTime($hospedagem->check_out);
            $data_null = new DateTime('0000-00-00');

            if($data_in==$data_null || !($data_in <= $data && $data <= $data_ou ))
                unset($hospedagens[$keys]);

        }
        session_start();
        $_SESSION['data'] = $hospedagens;
        header("Location: ../pages/hospedagem.php?buscar=data");
    } else if($acao = 'filial') {
        $hospedagem->__set('id_filial',$_POST['filial']);
        $hospedagemService = new hospedagemService($conexao,$hospedagem);
        $hospedagens = $hospedagemService->recuperarPorFilial();

        session_start();
        $_SESSION['filial'] = $hospedagens;
        header("Location: ../pages/hospedagem.php?buscar=filial");
    }
?>