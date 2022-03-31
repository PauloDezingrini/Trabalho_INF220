<?php

    require_once "../conexao.php";
    require "../models/hospedagem.model.php";
    require "../service/hospedagem.service.php";
    require "../models/conta.model.php";
    require "../service/conta.service.php";
    require "../models/apartamento.model.php";
    require "../service/apartamento.service.php";

    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

    $hospedagem = new Hospedagem();
    if($acao == 'buscar_hospedagem'){
        $hospedagem->__set('email_cliente',$_POST['email']);
        $hospedagemService = new HospedagemService($conexao,$hospedagem);

        $hosps = $hospedagemService->recuperarPorEmail();

        session_start();
        $_SESSION['hosp'] = $hosps;

        header("Location: ../pages/admin.php");
    } else if($acao == 'fazer_check_out'){

        $hospedagem->__set('id',$_POST['hospedagem']);
        $hospedagemService = new HospedagemService($conexao,$hospedagem);
        $hosp = $hospedagemService->recuperarPorId();

        $hospedagem->__set('check_in',$hosp[0]->check_in);
        $hospedagem->__set('check_out',$_POST['checkout']);
        $hospedagem->__set('num_ap',$hosp[0]->N_Ap);
        $hospedagem->__set('id_filial',$hosp[0]->Id_filial);
        $hospedagem->__set('email_cliente',$hosp[0]->Email_cliente);
        $hospedagemService->atualizar();

        $data_out = new DateTime($hospedagem->__get('check_out'));
        $data_in = new DateTime($hospedagem->__get('check_in'));
        $data_diff = $data_out->diff($data_in);
        $data_diff2 = $data_diff->format('%a');
        
        $conta = new Conta();
        $apartamento = new Apartamento();

        $conta->__set('id',$_POST['hospedagem']);
        $contaService = new ContaService($conexao,$conta);
        $conta1 = $contaService->recuperarPorId();
        $conta->__set('valor_restaurante',$conta1[0]->Valor_restaurante);
        $conta->__set('valor_total',$conta1[0]->Valor_total);
        
        $apartamento->__set('num_ap',$hospedagem->__get('num_ap'));
        $apartamento->__set('id_filial',$hospedagem->__get('id_filial'));
        $apartamento->__set('ocupado',0);
        $apartamentoService = new ApartamentoService($conexao,$apartamento);
        $tipo = $apartamentoService->recuperarTipo();
        $apartamento->__set('id_tipo',$tipo->Id_tipo);
        $diaria = ($apartamentoService->recuperarDiaria())[0]->Diaria;

        $apartamentoService->atualizar();

        $valor_total = $diaria * $data_diff2 + $conta->__get('valor_restaurante') + $conta->__get('valor_total');
        $conta->__set('valor_total',$valor_total);
        $contaService->atualizar();

        header("Location: ../pages/admin.php?exibir_total=".$valor_total);
    }
?>