<?php

    $consulta = $_GET['consulta'];

    require_once "../conexao.php";

    if($consulta == '1'){
        $query = 'Select C.Nome, C.Email, C.Telefone  
                  from hospedagem as H 
                  inner join cliente as C
                  inner join hoteis as Ho
                  on H.Email_cliente = C.Email and H.Id_filial = Ho.Id_filial and Ho.Cidade = "Rio de Janeiro"
                  and H.check_in <= "2022-03-01" and H.check_out >= "2022-02-26"';


        $stmt = $conexao->prepare($query);
        $stmt->execute();
        $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);

        session_start();
        $_SESSION['resultado'] = $resultados;

        echo '<pre>';
        print_r($_SESSION['resultado']);
        echo '</pre>';

        header("Location: ../pages/consulta.php?resultado=1");
    } else if($consulta == '2') {
        $query = 'select C.Id_func,C.nome
                  from camareira as C
                  inner join serviços as S
                  inner join hoteis as H
                  on C.Id_func = S.Id_func and S.Id_filial = H.Id_filial
                  and H.cidade = "Rio de Janeiro" and S.N_Ap = 401 and
                  S.Data >= "2022-02-26" and S.Data <= "2022-03-01"';

        $stmt = $conexao->prepare($query);
        $stmt->execute();
        $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);

        session_start();
        $_SESSION['resultado'] = $resultados;

        header("Location: ../pages/consulta.php?resultado=2");
    } else if($consulta == '3') {
        $query = 'select H.Cidade,Ho.N_Ap, Cl.Nome
                  from consumo_frigobar as C
                  inner join cliente as Cl
                  inner join hospedagem as Ho
                  inner join hoteis as H
                  on C.Conta = Ho.Id_hosp and Ho.Email_cliente = Cl.Email and H.Id_filial = Ho.Id_filial
                  and C.Produto = "RedBull"';
        $stmt = $conexao->prepare($query);
        $stmt->execute();
        $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);

        session_start();
        $_SESSION['resultado'] = $resultados;

        header("Location: ../pages/consulta.php?resultado=3");
    } else if($consulta == '4') {
        $query = 'select H.cidade,COUNT(A.Num_ap) as NúmeroApartamentos
                  from tipo as T
                  inner join apartamentos as A
                  inner join hoteis as H
                  on H.Id_filial = A.Id_filial and T.Id_tipo = A.Id_tipo
                  and T.N_cama_casal = 1
                  group by(H.Id_filial)';

        $stmt = $conexao->prepare($query);
        $stmt->execute();
        $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);

        echo '<pre>';
        print_r($resultados);
        echo '</pre>';

        session_start();
        $_SESSION['resultado'] = $resultados;

        header("Location: ../pages/consulta.php?resultado=4");
    } else if($consulta == '5') {
        $query = 'select distinct C.Nome
                  from reservas as R
                  inner join hoteis as H
                  inner join cliente as C
                  on C.Email = R.Email_cliente and R.Reservado_onde = H.id_filial
                  and H.Cidade = "Rio de Janeiro" and R.cancelado = 1';
        
        $stmt = $conexao->prepare($query);
        $stmt->execute();
        $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);

        echo '<pre>';
        print_r($resultados);
        echo '</pre>';

        session_start();
        $_SESSION['resultado'] = $resultados;

        header("Location: ../pages/consulta.php?resultado=5");
    } else if($consulta == '6') {
        $query = 'select H.Cidade, Cl.Nome, (C.Valor_total + C.Valor_restaurante) as Total
                  from conta as C
                  inner join hospedagem as Ho
                  inner join cliente as Cl
                  inner join hoteis as H
                  on C.Id_hosp = Ho.Id_hosp and Ho.Email_cliente = Cl.Email
                  and Ho.Id_filial = H.Id_filial
                  order by(C.Valor_total + C.Valor_restaurante) desc limit 5';
        $stmt = $conexao->prepare($query);
        $stmt->execute();
        $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);

        echo '<pre>';
        print_r($resultados);
        echo '</pre>';

        session_start();
        $_SESSION['resultado'] = $resultados;

        header("Location: ../pages/consulta.php?resultado=6");
    }
?>