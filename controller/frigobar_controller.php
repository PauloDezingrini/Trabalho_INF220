<?php
    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

    require_once "../conexao.php";
    require "../models/consumoFrigobar.model.php";
    require "../service/consumoFrigobar.service.php";
    require "../models/conta.model.php";
    require "../service/conta.service.php";
    require "../models/funcionario.model.php";
    require "../service/funcionario.service.php";

    $consumo = new ConsumoFrigobar();
    $conta = new Conta();
    $camareira = new Funcionario();

    if($acao == 'recuperar'){
        
        $consumoService = new ConsumoFrigobarService($conexao,$consumo);
        $consumos = $consumoService->recuperar();

        $contaService = new ContaService($conexao,$conta);
        $contas = $contaService->recuperar();

        $camareiraService = new FuncionarioService($conexao,$camareira);
        $camareiras = $camareiraService->recuperarCamareira();


    } else if($acao == 'conta'){
        $consumo->__set('conta',$_POST['conta']);
        $consumoService = new ConsumoFrigobarService($conexao,$consumo);
        $consumos = $consumoService->recuperarPorConta();

        session_start();
        $_SESSION['conta'] = $consumos;

        header("Location: ../pages/frigobar.php?buscar=conta");
    } else if($acao == 'data') {
        
        $data = new DateTime($_POST['data']);

        $consumoService = new ConsumoFrigobarService($conexao,$consumo);
        $consumos = $consumoService->recuperar();

        foreach($consumos as $keys => $consumo){
            $data_in = new DateTime($consumo->Data_consumo);

            if(!($data == $data_in))
                unset($consumos[$keys]);
        }

        session_start();
        $_SESSION['data'] = $consumos;
        header("Location: ../pages/frigobar.php?buscar=data");
    } else if($acao == 'produto'){
        $consumo->__set('produto',$_POST['produto']);
        $consumoService = new ConsumoFrigobarService($conexao,$consumo);
        $consumos = $consumoService->recuperarPorProduto();

        session_start();
        $_SESSION['produto'] = $consumos;
        header("Location: ../pages/frigobar.php?buscar=produto");
    } else if($acao == 'cadastro') {
        $consumo->__set('produto',$_POST['produto']);
        $consumo->__set('quantidade',$_POST['quantidade']);
        $consumo->__set('data_consumo',$_POST['data']);
        $consumo->__set('valor_unit',$_POST['valor']);
        $consumo->__set('conta',$_POST['conta']);
        $consumo->__set('registrado',$_POST['registrado']);

        $consumoService = new ConsumoFrigobarService($conexao,$consumo);
        $consumoService->inserir();

        $conta->__set('id',$_POST['conta']);
        $contaService = new ContaService($conexao,$conta);
        $cnt = $contaService->recuperarPorId();

        $soma = $_POST['quantidade'] * $_POST['valor'] + $cnt[0]->Valor_total;
        $conta->__set('valor_total',$soma);
        $conta->__set('valor_restaurante',$cnt[0]->Valor_restaurante);
        $contaService->atualizar();
        header("Location: ../pages/frigobar.php");
    }
?>