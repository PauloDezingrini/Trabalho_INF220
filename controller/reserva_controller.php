<?php

    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;   

    require "../controller/hotel_controller.php";
    require "../controller/tipo_controller.php";


    // $cliente = new Cliente();
    // $reserva = new Reserva();

    // if($acao = 'inserir'){
    //     $campo_vazio = empty($_POST['email']) || empty($_POST['nome']) || empty($_POST['sbnome']) || empty($_POST['senha']) || empty($_POST['cfsenha']) || empty($_POST['paises']) || empty($_POST['tel']) || empty($_POST['end']);
    //     $senhas_diferentes = ($_POST['senha'] != $_POST['cfsenha']);
    //     if($campo_vazio)
    //         header("Location: ../index.php");
    //     else if($senhas_diferentes)
    //         header("Location: ../index.php");
    //     else {
            
    //         $nome_completo = $_POST['nome'].' '.$_POST['sbnome'];
    //         $cliente->__set('nome',$nome_completo);
    //         $cliente->__set('endereco',$_POST['end']);
    //         $cliente->__set('nac',$_POST['paises']);
    //         $cliente->__set('tel',$_POST['tel']);
    //         $cliente->__set('email',$_POST['email']);
    //         $cliente->__set('senha',$_POST['senha']);
    //         $clienteService = new ClienteService($conexao,$cliente);

    //         $clienteService->inserir();
    //     }

    // }

?>