<?php
    $acao='recuperar';
    require "../controller/hotel_controller.php"
?>

<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <title>Hotel Bom Sono - Hotéis</title>
        <link rel="stylesheet" href="../css/normalize.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Source+Serif+4:ital,wght@0,300;0,400;0,500;0,700;1,400;1,500&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="../css/style.css" />
    
    
        <script>

            function editar(id, txt_estado,txt_cidade) {
                let form = document.createElement('form')
                form.action = '../controller/hotel_controller.php?acao=atualizar'
                form.method = 'post'

                let inputCidade = document.createElement('input')
                inputCidade.type = 'text'
                inputCidade.name = 'cidade'
                inputCidade.value = txt_cidade
                inputCidade.className = 'default_2'
                
                let inputEstado = document.createElement('input')
                inputEstado.type = 'text'
                inputEstado.name = 'estado'
                inputEstado.value = txt_estado
                inputEstado.className = 'default_2'
                
                let inputId = document.createElement('input')
                inputId.type = 'hidden'
                inputId.name = 'id'
                inputId.value = id
                
                let button = document.createElement('input')
                button.type = 'submit'
                button.innerHTML = 'Atualizar'
                button.className = 'button3'
                
                form.appendChild(inputEstado)
                form.appendChild(inputCidade)
                form.appendChild(inputId)
                form.appendChild(button)
                
                let estado = document.getElementById('loc_'+id)
                
                estado.innerHTML = ''
                estado.insertBefore(form, estado[0])
            }

            function remover(id){
                location.href='lista_hoteis.php?acao=remover&id='+id
            }
        </script>
    
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
                        <h1 class="logo">Cadastrar novos hotéis</h1>   
                    </div>
                </div>
            </section>

            <!-- Em action="#" envio de dados .php-->
            <form action="../controller/hotel_controller.php?acao=inserir" method="post">
        
                <div class="linha">
                    <div class="coluna col4">
                        <label>Cidade</br></label>
                        <input class="default_4" id="test_0" type="text" name="cidade" />
                    </div>

                    <div class="coluna col4">
                        <label>Estado</br></label>
                        <input class="default_4" id="test_0" type="text" name="estado" />
                    </div>

                    
                    <?php if(isset($_GET['inclusao']) && $_GET['inclusao'] == 1) { ?>
                        <div class="linha color_text2">
                            <p>Inserido com sucesso</p>
                        </div>
                    <?php } ?>
                </div>
                
                <div class="linha">

                    <div class="coluna col6">
                        </br>
                        <input class="button" type="submit" value="Cadastrar" />
                    </div>
                </div>

            </form>

            <hr>

            <?php foreach($hoteis as $keys =>$hotel){ ?>

                <div class="linha">
                    
                    <div id="loc_<?= $hotel->Id_filial ?>" class="coluna col5">
                        <?= $hotel->Id_filial ?> -
                        <i> <?= $hotel->Estado ?> </i>
                        <i> <?= $hotel->Cidade ?> </i>
                        <i onclick="editar(<?= $hotel->Id_filial ?>, '<?= $hotel->Estado ?>','<?= $hotel->Cidade ?>')"><img src="../img/icon_edit.png" class="img_1"></i>
                        <i onclick="remover(<?= $hotel->Id_filial ?>)"><img src="../img/trash_icon.png" class="img_1"></i>
                    </div>
               
                </div>
                <br>
            <?php } ?>

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