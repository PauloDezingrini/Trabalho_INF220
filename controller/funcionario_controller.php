<?php

    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;   

    require_once "../conexao.php";
    require "../models/funcionario.model.php";
    require "../service/funcionario.service.php";

    $funcionario = new Funcionario();

    if($acao == 'recuperar'){

        $funcionarioService = new FuncionarioService($conexao,$funcionario);
        $funcionarios = $funcionarioService->recuperar();
    } else if($acao == 'cargo'){

        $funcionario->__set('cargo',$_POST['cargo']);
        $funcionarioService = new FuncionarioService($conexao,$funcionario);
        $funcionarios = $funcionarioService->recuperarPorCargo();

        session_start();
        $_SESSION['cargo'] = $funcionarios;

        header("Location: ../pages/funcionarios.php?buscar=cargo");
    } else if($acao == 'filial'){

        $funcionario->__set('local_trabalho',$_POST['filial']);
        $funcionarioService = new FuncionarioService($conexao,$funcionario);
        $funcionarios = $funcionarioService->recuperarPorFilial();

        session_start();
        $_SESSION['filial'] = $funcionarios;

        header("Location: ../pages/funcionarios.php?buscar=filial");
    } else if($acao == 'cadastrar') {
        $funcionario ->__set('nome', $_POST['nome']);
        $funcionario ->__set('cargo', $_POST['cargo']);
        $funcionario ->__set('local_trabalho', $_POST['filial']);
        $funcionarioService = new FuncionarioService($conexao,$funcionario);
        $funcionarioService->inserir();

        header("Location: ../pages/funcionarios.php");
    } else if($cao = 'atualizar'){
        $funcionario->__set('id',$_POST['func']);
        $funcionario->__set('cargo',$_POST['cargo']);
        $funcionario->__set('local_trabalho',$_POST['filial']);

        $funcionarioService = new FuncionarioService($conexao,$funcionario);
        $nome = $funcionarioService->recuperarPorId();

        $funcionario->__set('nome',$nome[0]->Nome);
        $funcionarioService->atualizar();

        header("Location: ../pages/funcionarios.php");
    }
?>