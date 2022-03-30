<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <title>Hotel Bom Sono - Reservas</title>
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
                                <li><a href="reservas_2.php">reservas</a></li>
                                <li><a href="#">contato</a></li>
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
                        <h1 class="logo">Finalize sua reserva</h1>   
                    </div>
                </div>
            </section>

            <!-- Em action="#" envio de dados .php-->
            <form action="../controller/cliente_controller.php?acao=inserir&tipos=0" method="post">
                <div class="linha">
                    <div class="coluna col12">
                        <label>E-mail</br></label>
                        <input class="box" id="email" type="email" placeholder="Digite seu e-mail" name="email" />
                    </div>
                </div>
    
                <div class="linha">
                    <div class="coluna col6">
                        <label>Nome</br></label>
                        <input id="nome" type="text" placeholder="Digite seu nome" name="nome" />
                    </div>
                    <div class="coluna col6">
                        <label>Sobrenome</br></label>
                        <input id="sbnome" type="text" placeholder="Digite seu sobrenome" name="sbnome" />
                    </div>
                </div>
    
                <div class="linha">
                    <div class="coluna col6">
                        <label>Senha</br></label>
                        <input id="senha" type="password" placeholder="Digite sua senha" name="senha" />
                    </div>
                    <div class="coluna col6">
                        <label>Confirmação de senha</br></label>
                        <input id="cfsenha" type="password" placeholder="Confirme sua senha" name="cfsenha" />
                    </div>
                </div>
    
                <div class="linha">
                    <div class="coluna col6">
                        <label>Nacionalidade</br></label>
                        <select name="paises" id="paises">
                            <option value="Brasil" selected="selected">Brasil</option>
                            <option value="Afeganistão">Afeganistão</option>
                            <option value="África do Sul">África do Sul</option>
                            <option value="Albânia">Albânia</option>
                            <option value="Alemanha">Alemanha</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Argélia">Argélia</option>
                            <option value="Armênia">Armênia</option>
                            <option value="Arábia Saudita">Arábia Saudita</option>
                            <option value="Austrália">Austrália</option>
                            <option value="Áustria">Áustria</option>
                            <option value="Azerbaijão">Azerbaijão</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belize">Belize</option>
                            <option value="Benim">Benim</option>
                            <option value="Bermudas">Bermudas</option>
                            <option value="Bielorrússia">Bielorrússia</option>
                            <option value="Bolívia">Bolívia</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Brunei">Brunei</option>
                            <option value="Bulgária">Bulgária</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Butão">Butão</option>
                            <option value="Bélgica">Bélgica</option>
                            <option value="Bósnia e Herzegovina">Bósnia e Herzegovina</option>
                            <option value="Cabo Verde">Cabo Verde</option>
                            <option value="Camarões">Camarões</option>
                            <option value="Camboja">Camboja</option>
                            <option value="Canadá">Canadá</option>
                            <option value="Catar">Catar</option>
                            <option value="Cazaquistão">Cazaquistão</option>
                            <option value="Chade">Chade</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Chipre">Chipre</option>
                            <option value="Colômbia">Colômbia</option>
                            <option value="Comores">Comores</option>
                            <option value="Coreia do Norte">Coreia do Norte</option>
                            <option value="Coreia do Sul">Coreia do Sul</option>
                            <option value="Costa do Marfim">Costa do Marfim</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Croácia">Croácia</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Dinamarca">Dinamarca</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Egito">Egito</option>
                            <option value="Emirados Árabes Unidos">Emirados Árabes Unidos</option>
                            <option value="Equador">Equador</option>
                            <option value="Eritreia">Eritreia</option>
                            <option value="Escócia">Escócia</option>
                            <option value="Eslováquia">Eslováquia</option>
                            <option value="Eslovênia">Eslovênia</option>
                            <option value="Espanha">Espanha</option>
                            <option value="Estados Unidos">Estados Unidos</option>
                            <option value="Estônia">Estônia</option>
                            <option value="Etiópia">Etiópia</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Filipinas">Filipinas</option>
                            <option value="Finlândia">Finlândia</option>
                            <option value="França">França</option>
                            <option value="Gabão">Gabão</option>
                            <option value="Gana">Gana</option>
                            <option value="Geórgia">Geórgia</option>
                            <option value="Granada">Granada</option>
                            <option value="Grécia">Grécia</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guiana">Guiana</option>
                            <option value="Guiné">Guiné</option>
                            <option value="Guiné Equatorial">Guiné Equatorial</option>
                            <option value="Guiné-Bissau">Guiné-Bissau</option>
                            <option value="Gâmbia">Gâmbia</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hungria">Hungria</option>
                            <option value="Indonésia">Indonésia</option>
                            <option value="Inglaterra">Inglaterra</option>
                            <option value="Índia">Índia</option>
                            <option value="Iraque">Iraque</option>
                            <option value="Irlanda">Irlanda</option>
                            <option value="Irã">Irã</option>
                            <option value="Islândia">Islândia</option>
                            <option value="Israel">Israel</option>
                            <option value="Itália">Itália</option>
                            <option value="Iêmen">Iêmen</option>
                            <option value="Jamaica">Jamaica</option>
                            <option value="Japão">Japão</option>
                            <option value="Jordânia">Jordânia</option>
                            <option value="Laos">Laos</option>
                            <option value="Lesoto">Lesoto</option>
                            <option value="Letônia">Letônia</option>
                            <option value="Libéria">Libéria</option>
                            <option value="Lituânia">Lituânia</option>
                            <option value="Luxemburgo">Luxemburgo</option>
                            <option value="Líbano">Líbano</option>
                            <option value="Líbia">Líbia</option>
                            <option value="Macau">Macau</option>
                            <option value="Macedônia">Macedônia</option>
                            <option value="Madagáscar">Madagáscar</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Maldivas">Maldivas</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Malásia">Malásia</option>
                            <option value="Marrocos">Marrocos</option>
                            <option value="Mauritânia">Mauritânia</option>
                            <option value="Maurícia">Maurícia</option>
                            <option value="Moldávia">Moldávia</option>
                            <option value="Mongólia">Mongólia</option>
                            <option value="Montenegro">Montenegro</option>
                            <option value="Moçambique">Moçambique</option>
                            <option value="México">México</option>
                            <option value="Mônaco">Mônaco</option>
                            <option value="Namíbia">Namíbia</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Nicarágua">Nicarágua</option>
                            <option value="Nigéria">Nigéria</option>
                            <option value="Noruega">Noruega</option>
                            <option value="Nova Zelândia">Nova Zelândia</option>
                            <option value="Níger">Níger</option>
                            <option value="Omã">Omã</option>
                            <option value="Palau">Palau</option>
                            <option value="Palestina">Palestina</option>
                            <option value="Panamá">Panamá</option>
                            <option value="Papua-Nova Guiné">Papua-Nova Guiné</option>
                            <option value="Paquistão">Paquistão</option>
                            <option value="Paraguai">Paraguai</option>
                            <option value="Peru">Peru</option>
                            <option value="Polônia">Polônia</option>
                            <option value="Porto Rico">Porto Rico</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Quênia">Quênia</option>
                            <option value="Reino Unido">Reino Unido</option>
                            <option value="República Checa">República Checa</option>
                            <option value="República do Congo">República do Congo</option>
                            <option value="República Dominicana">República Dominicana</option>
                            <option value="Romênia">Romênia</option>
                            <option value="Ruanda">Ruanda</option>
                            <option value="Rússia">Rússia</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Singapura">Singapura</option>
                            <option value="Somália">Somália</option>
                            <option value="Sudão">Sudão</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Suécia">Suécia</option>
                            <option value="Suíça">Suíça</option>
                            <option value="Sérvia">Sérvia</option>
                            <option value="Síria">Síria</option>
                            <option value="Tadjiquistão">Tadjiquistão</option>
                            <option value="Tailândia">Tailândia</option>
                            <option value="Taiwan">Taiwan</option>
                            <option value="Tunísia">Tunísia</option>
                            <option value="Turquemenistão">Turquemenistão</option>
                            <option value="Turquia">Turquia</option>
                            <option value="Ucrânia">Ucrânia</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Uruguai">Uruguai</option>
                            <option value="Uzbequistão">Uzbequistão</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Vietname">Vietname</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                            <option value="Zâmbia">Zâmbia</option>
                        </select>
                    </div>

                    <div class="coluna col6">
                        <label>Telefone</br></label>
                        <input id="tel" type="tel" placeholder="(__) ____-____" name="tel" />
                    </div>
                </div>
    
                <div class="linha">
                    <div class="coluna col12">
                        <label>Endereço</br></label>
                        <input class="box" id="end" type="text" placeholder="Digite seu endereço" name="end" />
                    </div>
                </div>

                <div class="linha">
                    <div class="coluna col12">
                        <input class="button" type="submit" value="Reservar" />
                    </div>
                </div>
            </form>
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