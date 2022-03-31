<?php
    $acao='recuperar';
    require "../controller/hotel_controller.php";


    if(isset($_GET['buscar']) && $_GET['buscar'] == 'cargo'){
        session_start();
        $funcionarios = $_SESSION['cargo'];
    } else if(isset($_GET['buscar']) && $_GET['buscar'] == 'filial') {
        session_start();
        $funcionarios = $_SESSION['filial']; 
    }else require "../controller/funcionario_controller.php";
?>

<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <title>Hotel Bom Sono - funcionarios</title>
    <link rel="stylesheet" href="../css/normalize.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Source+Serif+4:ital,wght@0,300;0,400;0,500;0,700;1,400;1,500&display=swap"
        rel="stylesheet" />
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
                            <li><a href="#">Clientes</a></li>
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
                    <h1 class="logo">Cadastro de funcionários</h1>
                </div>
            </div>
        </section>

        <!-- Em action="#" envio de dados .php-->
        <form action="../controller/funcionario_controller.php?acao=cadastrar" method="post">

            <div class="linha">

                <div class="coluna col4">
                    <label>Nome</br></label>
                    <input class="default_4" id="test_0" type="text" name="nome" />
                </div>

            </div>
            <div class="linha">
                
                <div class="coluna col4">
                    <label>Cargo</br></label>
                    <input class="default_4" id="test_0" type="text" name="cargo" />
                </div>

            </div>

            <div class="linha">
                <div class="coluna col4">
                    <label>Filial</br></label>
                    <select class="default_4" id="test_0" type="text" name="filial">
                        <?php foreach($hoteis as $keys => $hotel) { ?>
                        <option value="<?= $hotel->Id_filial?>" class="teste">
                            <?= $hotel->Id_filial.' - '.$hotel->Cidade ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="linha">
                <div class="coluna col4">
                    <input type="submit" class="default_4" value="Cadastrar">
                </div>
            </div>

        </form>

        <hr>

        <section>
            <div class="linha">
                <div class="coluna col12">
                    <h1 class="logo">Atualizar informações de funcionários</h1>
                </div>
            </div>
        </section>

        <!-- Em action="#" envio de dados .php-->
        <form action="../controller/funcionario_controller.php?acao=atualizar" method="post">

            <div class="linha">
                <div class="coluna col4">
                    <label>Funcionário</br></label>
                    <select class="default_4" id="test_0" type="text" name="func">
                        <?php foreach($funcionarios as $keys => $funcionario) { ?>
                        <option value="<?= $funcionario->Id_func?>" class="teste">
                            <?= $funcionario->Id_func.' - '.$funcionario->Nome ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="linha">
                
                <div class="coluna col4">
                    <label>Cargo</br></label>
                    <input class="default_4" id="test_0" type="text" name="cargo" />
                </div>

            </div>

            <div class="linha">
                <div class="coluna col4">
                    <label>Filial</br></label>
                    <select class="default_4" id="test_0" type="text" name="filial">
                        <?php foreach($hoteis as $keys => $hotel) { ?>
                        <option value="<?= $hotel->Id_filial?>" class="teste">
                            <?= $hotel->Id_filial.' - '.$hotel->Cidade ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="linha">
                <div class="coluna col4">
                    <input type="submit" class="default_4" value="Atualizar">
                </div>
            </div>

        </form>

        <hr>

        <div class="form linha">

            <section>
                <div class="linha">
                    <div class="coluna col12">
                        <h1 class="logo">Lista de funcionários</h1>
                    </div>
                </div>
            </section>

            <!-- Em action="#" envio de dados .php-->
            <form action="../controller/funcionario_controller.php?acao=cargo" method="post">

                <div class="linha">
                    <div class="coluna col4">
                        <label>Cargo</br></label>
                        <input class="default_4" id="test_0" type="text" name="cargo" />
                    </div>

                    <div class="coluna col8">
                        <input type="submit" class="default_2 margin_top" value="Buscar">
                    </div>
                </div>

            </form>

            <form action="../controller/funcionario_controller.php?acao=filial" method="post">

                <div class="linha">
                    <div class="coluna col4">
                        <label>Filial</br></label>
                        <select class="default_4" id="test_0" type="text" name="filial">
                            <?php foreach($hoteis as $keys => $hotel) { ?>
                            <option value="<?= $hotel->Id_filial?>" class="teste">
                                <?= $hotel->Id_filial.' - '.$hotel->Cidade ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="coluna col8">
                        <input type="submit" class="default_2 margin_top" value="Buscar">
                    </div>
                </div>

            </form>


            <hr>

            <div class="linha list">
                <div class="coluna col1"> ID </div>
                <div class="coluna col3"> Nome </div>
                <div class="coluna col2"> Cargo</div>
                <div class="coluna col1"> Filial </div>
            </div>


            <?php foreach($funcionarios as $keys =>$funcionario){ ?>

            <div class="linha list" id="loc_<?= $funcionario->Id_funcionario ?>">

                <div class="coluna col1"> <?= $funcionario->Id_func ?> </div>
                <div class="coluna col3 "> <?= $funcionario->Nome ?> </div>
                <div class="coluna col2"> <?= $funcionario->Cargo?> </div>
                <div class="coluna col1"> <?= $funcionario->Trabalh_em ?> </div>

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