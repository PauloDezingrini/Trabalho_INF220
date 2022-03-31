<?php
    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

    require_once "../conexao.php";
    require "../models/reserva.model.php";
    require "../service/reserva.service.php";
    require "../models/tipo.model.php";
    require "../service/tipo.service.php";
    require "../models/hotel.model.php";
    require "../service/hotel.service.php";

    $reserva = new Reserva();
    $tipo = new Tipo();
    $hotel = new Hotel();

    if($acao == 'recuperar'){

        $reservaService = new ReservaService($conexao,$reserva);
        $reservas = $reservaService->recuperar();

        $tipoService = new TipoService($conexao,$tipo);
        $tipos = $tipoService->recuperar();

        $hotelService = new HotelService($conexao,$hotel);
        $hoteis = $hotelService->recuperar();
    } else if ($acao == 'email'){

        $reserva->__set('email_cliente',$_POST['email']);
        $reservaService = new ReservaService($conexao,$reserva);
        $reservas = $reservaService->recuperarPorEmail();

        session_start();
        $_SESSION['email'] = $reservas;

        header("Location: ../pages/reservas_adm.php?buscar=email");
    } else if($acao == 'data'){

        $data = new DateTime($_POST['data']);

        $reservaService = new ReservaService($conexao,$reserva);
        $reservas = $reservaService->recuperar();

        foreach($reservas as $keys => $reserva){
            $data_in = new DateTime($reserva->Data_entrada);
            $data_ou = new DateTime($reserva->Data_saida);

            if(!($data_in <= $data && $data <= $data_ou))
                unset($reservas[$keys]);
        }
        session_start();
        $_SESSION['data'] = $reservas;
        header("Location: ../pages/reservas_adm.php?buscar=data");

    } else if($acao == 'tipo'){
        
        $reserva->__set('id_tipo',$_POST['tipo']);
        $reservaService = new ReservaService($conexao,$reserva);
        $reservas = $reservaService->recuperarPorTipo();

        session_start();
        $_SESSION['tipo'] = $reservas;
        header("Location: ../pages/reservas_adm.php?buscar=tipo");
    } else if($acao == 'filial') {
        $reserva->__set('id_hotel',$_POST['filial']);
        $reservaService = new ReservaService($conexao,$reserva);
        $reservas = $reservaService->recuperarPorFilial();

        session_start();
        $_SESSION['filial'] = $reservas;
        header("Location: ../pages/reservas_adm.php?buscar=filial");
    }
?>