<?php

    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;
        
    require "../models/tipo.model.php";
    require "../service/tipo.service.php";

    $tipo = new Tipo();

    if($acao = 'recuperar'){
        $tipoService = new TipoService($conexao,$tipo);
        $tipos = $tipoService->recuperar();
    }
?>