<?php
    session_start();
    if(isset($_SESSION['reservas']))
        $reservas = $_SESSION['reservas'];
    if(isset($_SESSION['infos_reserva'])){
        $infos = $_SESSION['infos_reserva'];
        $nome = $_SESSION['nome'];
    }
    if(isset($_SESSION['hosp']))
        $hosps = $_SESSION['hosp']
?>

<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <title>Hotel Bom Sono - Qualidade e Conforto</title>
        <link rel="stylesheet" href="../css/normalize.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Source+Serif+4:ital,wght@0,300;0,400;0,500;0,700;1,400;1,500&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="../css/style.css" />
    </head>


    <body>

        <div class="header">
            <div class="linha">
                <header>
                    <div class="coluna col4">
                        <h1 class="logo">HOTEL BOM SONO</h1>
                    </div>
                    <div class="coluna col8">
                        <nav>
                            <ul class="menu inline sem-marcador">
                                <li><a href="../index.php">home</a></li>
                                <li><a href="reservas_adm.php">reservas</a></li>
                                <li><a href="hoteis.php">hotéis</a></li>
                                <li><a href="clientes.php">clientes</a></li>
                                <li><a href="funcionarios.php">Funcionários</a></li>
                                <li><a href="hospedagem.php">Hospedagem</a></li>
                                <li><a href="frigobar.php">Frigobar</a></li>
                                <li><a href="#">Contas</a></li>
                                <li><a href="#">Serviços</a></li>
                                <li><a href="#">Tipos</a></li>
                            </ul>
                        </nav>
                    </div>
                </header>
            </div>
        </div>

        <div class="form linha">

            <section>
                <div class="linha">
                    <div class="coluna col12">
                        <h1 class="logo">Check In</h1>   
                    </div>
                </div>
            </section>

            <form action="../controller/check_in_controller.php?acao=buscar_reservas" method="POST">

                <div class="linha">
                    <label>Email : </label>
                    <input type="text" name="email" id="email"/>

                    <input type="submit" value="Procurar" class="button">

                    <hr>
                </div>

            </form>

            <form action='<?= '../controller/check_in_controller.php?acao=buscar_infos&email='.$_GET['email']?>' method="POST">

                <div class="linha">
                    <label >Reservas: </label>
                    <select name="reserva" id="cidades">
                        <?php foreach($reservas as $keys => $reserva) { ?>
                            <option value="<?= $reserva->Id_reserva ?>"> <?= $reserva->Id_reserva ?> </option>
                        <?php } ?> 
                    </select>

                    <input type="submit" value="Procurar" class="button">

                    <hr>
                </div>
            </form>

            <?php if(isset($_GET['exibir'])) { ?>
                <div class="linha">
                    <label class="label">Cliente: </label>
                    <p class="color_text"> <?= $nome[0]->Nome; ?> </p>
                </div>
    
                <div class="linha">
                    <label class="label">Data de Entrada Estimada: </label>
                    <p class="color_text"> <?= $infos[0]->Data_entrada; ?> </p>
                </div>
    
                <div class="linha">
                    <label class="label">Data de Saída Estimada: </label>
                    <p class="color_text"> <?= $infos[0]->Data_saida; ?> </p>
                </div>
    
                <div class="linha">
                    <label class="label">Número de pessoas: </label>
                    <p class="color_text"> <?= $infos[0]->N_pessoas; ?> </p>
                </div>
    
                <div class="linha">
                    <label class="label">Tipo Reservado: </label>
                    <p class="color_text"> <?= $infos[0]->Id_tipo; ?> </p>
                </div>
            <?php } ?>

            <div class="linha">
                <center>
                    <form action="../controller/check_in_controller.php?acao=fazer_check_in" method="POST">
                        <?php if(isset($_GET['email'])) { ?>
                            <input type="text" value ="<?= $_GET['email'] ?>" hidden name='email'>
                            
                            <label class="checkin">Data: </label>
                            <input id="checkin" type="date" name="checkin" />
                        <?php } ?>
                        <input type="submit" value="Check-In" class="button">
                    </form>
                </center>
            </div>

            <?php if(isset($_GET['check_in'])) { ?>
                <div class="linha">
                    <center>
                        <p class="color_text">Check-In feito com sucesso. Você será hospedado no quarto <?= $_GET['check_in'] ?></p>
                    </center>
                </div>
            <?php } ?>
            <hr>
        

            <!-- Começo do Check-out -->
            <div class="linha">
                <section>
                    <div class="linha">
                        <div class="coluna col12">
                            <h1 class="logo">Check Out</h1>   
                        </div>
                    </div>
                </section>

                <form action="../controller/check_out_controller.php?acao=buscar_hospedagem" method="POST">

                    <div class="linha">
                        <label>Email : </label>
                        <input type="text" name="email" id="email"/>

                        <input type="submit" value="Procurar" class="button">

                        <hr>
                    </div>

                </form>

                <form action='../controller/check_out_controller.php?acao=fazer_check_out' method="POST">

                    <div class="linha">
                        <label >Hospedagens: </label>
                        <select name="hospedagem" id="cidades">
                            <?php foreach($hosps as $keys => $hosp) { ?>
                                <option value="<?= $hosp->Id_hosp ?>"> <?= $hosp->Id_hosp ?> </option>
                            <?php } ?> 
                        </select>
                        <hr>
                    </div>

                    <div class="linha">
                        <center>
                            <label class="checkin">Data: </label>
                            <input id="checkin" type="date" name="checkout" />
                            <input type="submit" value="Check-Out" class="button">
                        </center>
                    </div>
                </form>

                <?php if(isset($_GET['exibir_total'])) { ?>
                    <div class="linha">
                        <center>
                            <p class="color_text">Check-Out feito com sucesso. Valor total foi de R$ <?= $_GET['exibir_total'] ?></p>
                        </center>
                    </div>
                <?php } ?>

            </div>    

        </div>

        <div class="footer footer_abs">
            <div class="linha">
                <footer>
                    <div class="coluna col12">
                        <span>&copy; 2022 - Hotel Bom Sono Web</span>
                    </div>
                </footer>
            </div>
        </div>
    </body>
</html>