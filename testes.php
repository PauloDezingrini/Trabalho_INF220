<?php 
    $DSN = 'mysql:host = localhost;dbname=hoteis_bom_sono';
    $usuario = 'root';
    $senha = '';

    try{
        $conexao = new PDO($DSN,$usuario,$senha);

    }catch(PDOException $e){
        echo'<pre>';
        print_r($e);
        echo '<pre>';
    }

    $query = '
        insert into consumo_frigobar(
            Produto ,Quantidade, Data_consumo, Valor_unitário, Anotado_por, Conta
        ) values (
            "Água", "2", "2022-03-28","2.50","29","1"
        )
    ';

    $conexao->exec($query);

?>