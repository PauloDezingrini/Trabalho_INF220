<?php

    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

    require_once "../conexao.php";
    require "../models/apartamento.model.php";
    require "../service/apartamento.service.php";

    $apartamento = new Apartamento();
    $acao = 'buscar_tipos';
    if($acao == 'buscar_tipos'){
        $apartamento->__set('id_filial',$_POST['cidades']);

        $apartamentoService = new ApartamentoService($conexao,$apartamento);
        $apartamentos = $apartamentoService->recuperarApartamentoPorTipos(); //Número de apartamentos por tipo naquela filial

        $busca = 'reservas_hotel';
        require "../controller/reserva_controller.php"; // Chama o reserva_controller pra buscar as reservas naquele périodo desejado


        //Lógica responsável por determinar se tem reservas daquele tipo disponível ou não naquele período
        $data_entrada = new DateTime($_POST['checkin']);
        $data_saida = new DateTime($_POST['checkout']);
        foreach($reservas as $keys => $reserva){
            $data_entrada_reserva = new DateTime($reserva->Data_entrada);
            $data_saida_reserva = new DateTime($reserva->Data_saida);
            $liberada = ($data_entrada_reserva <= $data_entrada && $data_saida_reserva <= $data_entrada)  || ($data_entrada_reserva > $data_entrada && $data_saida <= $data_entrada_reserva);
            if(!$liberada){
                foreach($apartamentos as $index => $aps){
                    if($aps->Id_tipo == $reserva->Id_tipo){
                        $aps->quant --;
                        if($aps->quant == 0)
                            unset($apartamentos[$index]);
                    }
                }
            } 
        }


        echo "<pre>";
        print_r($reservas);
        print_r($data_entrada);
        print_r($data_saida);
        print_r($apartamentos);
        echo "</pre>";

        session_start();
        $_SESSION['tipos'] = $apartamentos;
        header("Location: ../pages/reserva.php?email=".$_POST['email']."&tipos=1");   
    }
?>