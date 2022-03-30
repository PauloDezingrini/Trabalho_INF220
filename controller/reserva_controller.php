<?php

    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;   

    require "../controller/hotel_controller.php";
    require "../controller/tipo_controller.php";
    require "../models/reserva.model.php";
    require "../models/cliente.model.php";
    require "../service/reserva.service.php";


    $reserva = new Reserva();

?>