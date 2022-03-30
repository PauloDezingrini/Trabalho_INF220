<?php
    require_once "../conexao.php";
    require "../models/reserva.model.php";
    require "../service/reserva.service.php";
    require "../models/cliente.model.php";
    require "../service/cliente.service.php";
    require "../models/hospedagem.model.php";
    require "../service/hospedagem.service.php";
    require "../models/apartamento.model.php";
    require "../service/apartamento.service.php";

    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

    $reserva = new Reserva();

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

        $cliente = new Cliente();
        $cliente->__set('email',$_GET['email']);
        $clienteService = new ClienteService($conexao,$cliente);

        $nome = $clienteService->recuperarPorEmail();

        $reserva->__set('id',$_POST['reserva']);
        $reservaService = new ReservaService($conexao,$reserva);

        $infos = $reservaService->recuperarPorId();
        
        session_start();
        $_SESSION['nome'] = $nome;
        $_SESSION['infos_reserva'] = $infos;

        header("Location: ../pages/admin.php?email=".$_GET['email']);
    } else if($acao=='fazer_check_in'){
        $hospedagem = new Hospedagem();
        $apartamento = new Apartamento();

        $hospedagem->__set('email_cliente',$_POST['email']);

        session_start();
        $id_filial = $_SESSION['infos_reserva'][0]->Reservado_onde;
        $hospedagem->__set('id_filial',$id_filial);

        $tipo = $_SESSION['infos_reserva'][0]->Id_tipo;

        $apartamento->__set('id_filial',$id_filial);
        $apartamento->__set('id_tipo',$tipo);

        $apartamentoService = new ApartamentoService($conexao,$apartamento);
        $apart = $apartamentoService->recuperarPorFilial_Tipo();
        
        $num_ap = $apart[0]->Num_Ap;

        $apartamento->__set('num_ap',$num_ap);
        $apartamento->__set('ocupado',1);

        
        echo "<pre>";
        print_r($tipo);
        print_r($apart);
        print_r($_POST);
        echo "</pre>";
        $apartamentoService->atualizar();

        $hospedagem->__set('num_ap',$num_ap);
        $hospedagemService = new HospedagemService($conexao,$hospedagem);
        $hospedagemService->inserir();
        header("Location: ../pages/admin.php?check_in=".$num_ap);
    }
?>