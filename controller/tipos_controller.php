<?php

    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;
    
    require_once "../conexao.php";
    require "../models/tipo.model.php";
    require "../service/tipo.service.php";

    $tipo = new Tipo();

    if($acao == 'recuperar'){
        $tipoService = new TipoService($conexao,$tipo);
        $tipos = $tipoService->recuperar();
    } else if($acao == 'cadastro'){
        $tipo->__set('diaria',$_POST['diaria']);
        $tipo->__set('n_cama_casal',$_POST['n_camas_casal']);
        $tipo->__set('n_cama_solteiro',$_POST['n_camas_solteiro']);
        $tipo->__set('tv',$_POST['tv']);
        $tipo->__set('frigobar',$_POST['frigobar']);
        $tipo->__set('adaptado',$_POST['adaptado']);
        $tipoService = new TipoService($conexao,$tipo);
        $tipoService->inserir();
        
        header("Location ../pages/tipos.php");
    }

?>