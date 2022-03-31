<?php
    $acao='recuperar';

    if(isset($_GET['buscar']) && $_GET['buscar'] == 'conta'){
        session_start();
        $consumos = $_SESSION['conta'];
    } else if(isset($_GET['buscar']) && $_GET['buscar'] == 'data'){
        session_start();
        $consumos = $_SESSION['data']; 
    }else if(isset($_GET['buscar']) && $_GET['buscar'] == 'produto') {
        session_start();
        $consumos = $_SESSION['produto']; 
    } else require "../controller/frigobar_controller.php";

?>

<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <title>Hotel Bom Sono - Frigobar</title>
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
                                <li><a href="#">reservas</a></li>
                                <li><a href="hoteis.php">hotéis</a></li>
                                <li><a href="#">clientes</a></li>
                                <li><a href="#">Funcionários</a></li>
                                <li><a href="#">Hospedagem</a></li>
                                <li><a href="#">Frigobar</a></li>
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
                        <h1 class="logo">Cadastro de consumos</h1>   
                    </div>
                </div>
            </section>

            <!-- Em action="#" envio de dados .php-->

            <form action="../controller/frigobar_controller.php?acao=cadastro" method="post">
        
                <div class="linha">
                    <div class="coluna col4">
                        <label>Data</br></label>
                        <input class="default_4" id="test_0" type="date" name="data" />
                    </div>

                </div>

                <div class="linha">
                    <div class="coluna col4">
                        <label>Registrado por</br></label>
                        <select class="default_4" id="test_0" type="text" name="registrado" >
                            <?php foreach($camareiras as $keys => $camareira) { ?>
                                <option value="<?= $camareira->Id_func?>" class="teste"><?= $camareira->Id_func.'-'.$camareira->Nome ?></option>
                            <?php } ?>
                        </select>
                    </div>

                </div>
                
                <div class="linha">
                    <div class="coluna col4">
                        <label">Produto <br></label>
                        <input type="text" name="produto" id="" class="default_4">
                    </div>

                </div>

                <div class="linha">

                    <div class="coluna col8">
                        <label>Quantidade <br></label>
                        <input type="number" name="quantidade" id="" class="default_4">
                    </div>
                </div>
                <div class="linha">

                    <div class="coluna col8">
                        <label>Valor <br></label>
                        <input type="number" name="valor" id="" class="default_4">
                    </div>
                </div>
                <div class="linha">

                    <div class="coluna col8">
                        <label>Conta</br></label>
                        <select class="default_4" id="test_0" type="text" name="conta" >
                            <?php foreach($contas as $keys => $conta) { ?>
                                <option value="<?= $conta->Id_hosp?>" class="teste"><?= $conta->Id_hosp ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="linha">

                    <div class="coluna col8">
                        <input class="default_4" id="test_0" type="submit"  value="Cadastrar"/>
                    </div>
                </div>

            </form>
            
            <section>
                <div class="linha">
                    <div class="coluna col12">
                        <h1 class="logo">Lista de consumos</h1>   
                    </div>
                </div>
            </section>

            <!-- Em action="#" envio de dados .php-->

            <form action="../controller/frigobar_controller.php?acao=data" method="post">
        
                <div class="linha">
                    <div class="coluna col4">
                        <label>Data</br></label>
                        <input class="default_4" id="test_0" type="date" name="data" />
                    </div>

                    <div class="coluna col8">
                        <input type="submit" class="default_2 margin_top" value="Buscar">
                    </div>
                </div>

            </form>
            
            <form action="../controller/frigobar_controller.php?acao=conta" method="post">
        
                <div class="linha">
                    <div class="coluna col4">
                        <label>Conta</br></label>
                        <select class="default_4" id="test_0" type="text" name="conta" >
                            <?php foreach($contas as $keys => $conta) { ?>
                                <option value="<?= $conta->Id_hosp?>" class="teste"><?= $conta->Id_hosp ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="coluna col8">
                        <input type="submit" class="default_2 margin_top" value="Buscar">
                    </div>
                </div>

            </form>

            <form action="../controller/frigobar_controller.php?acao=produto" method="post">
        
                <div class="linha">
                    <div class="coluna col4">
                        <label>Produto</br></label>
                        <input class="default_4" id="test_0" type="text" name="produto" />
                    </div>

                    <div class="coluna col8">
                        <input type="submit" class="default_2 margin_top" value="Buscar">
                    </div>
                </div>

            </form>

            <hr>

            <div class="linha list">
                <div class="coluna col1"> Conta </div>
                <div class="coluna col2"> Anotado Por </div>
                <div class="coluna col2"> Data Consumo </div>
                <div class="coluna col2"> Produto </div>
                <div class="coluna col2"> Quantidade </div>
                <div class="coluna col2"> Valor unitário </div>
            </div>  


            <?php foreach($consumos as $keys =>$consumo){ ?>

                <div class="linha list" id="loc_<?= $consumo->Conta ?>">

                    <div class="coluna col1"> <?= $consumo->Conta ?> </div>
                    <div class="coluna col2 "> <?= $consumo->Anotado_por ?> </div>
                    <div class="coluna col2 teste"> <?= $consumo->Data_consumo?> </div>
                    <div class="coluna col2"> <?= $consumo->Produto ?> </div>
                    <div class="coluna col2"> <?= $consumo->Quantidade ?> </div>
                    <div class="coluna col2"> <?= $consumo->Valor_unitário ?> </div>
               
                </div>
                <br>
            <?php } ?>

        </div>

        <div class="footer">
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