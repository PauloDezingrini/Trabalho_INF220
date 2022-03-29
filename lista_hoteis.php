<?php
    $acao = 'recuperar';
    require "controller/hotel_controller.php"
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste do form para hoteis</title>

    <script>

        function editar(id, txt_estado,txt_cidade) {

            let form = document.createElement('form')
            form.action = 'controller/hotel_controller.php?acao=atualizar'
            form.method = 'post'
            
            let inputCidade = document.createElement('input')
            inputCidade.type = 'text'
            inputCidade.name = 'cidade'
            inputCidade.value = txt_cidade
            
            let inputEstado = document.createElement('input')
            inputEstado.type = 'text'
            inputEstado.name = 'estado'
            inputEstado.value = txt_estado
            
            let inputId = document.createElement('input')
            inputId.type = 'hidden'
            inputId.name = 'id'
            inputId.value = id
            
            let button = document.createElement('button')
            button.type = 'submit'
            button.innerHTML = 'Atualizar'
            
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


    <h1>Listagem de hoteis</h1>

        <?php foreach($hoteis as $keys =>$hotel){ ?>
            <i> <?= $hotel->Id_filial ?> </i>
            <div  " id="loc_<?= $hotel->Id_filial ?>">  
                <i> <?= $hotel->Estado ?>  </i>
                <i> <?= $hotel->Cidade ?> </i>
                <i onclick="editar(<?= $hotel->Id_filial ?>, '<?= $hotel->Estado ?>','<?= $hotel->Cidade ?>')"><img src="images/edit_icon.png" width="12px"></i>
                <i onclick="remover(<?= $hotel->Id_filial ?>)"><img src="images/trash_icon.png" width="12px"></i>
            </div>  
            <br>
        <?php } ?>

</body>
</html>