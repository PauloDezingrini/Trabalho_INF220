<?php
    require "../conexao.php";
    require "../models/hotel.model.php";
    require "../service/hotel.service.php";

    $hotel = new Hotel();
    $hotel->__set('cidade', $_POST['cidade']);
    $hotel->__set('estado', $_POST['estado']);

    $hotelService = new HotelService($conexao,$hotel);
    $hotelService->inserir();

    echo'<pre>';
    print_r($hotel);
    print_r($conexao);
    echo'</pre>';
?>