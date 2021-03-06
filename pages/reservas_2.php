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
                                <li><a href="login.php">Login</a></li>
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
                        <label>Confirma????o de senha</br></label>
                        <input id="cfsenha" type="password" placeholder="Confirme sua senha" name="cfsenha" />
                    </div>
                </div>
    
                <div class="linha">
                    <div class="coluna col6">
                        <label>Nacionalidade</br></label>
                        <select name="paises" id="paises">
                            <option value="Brasil" selected="selected">Brasil</option>
                            <option value="Afeganist??o">Afeganist??o</option>
                            <option value="??frica do Sul">??frica do Sul</option>
                            <option value="Alb??nia">Alb??nia</option>
                            <option value="Alemanha">Alemanha</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Arg??lia">Arg??lia</option>
                            <option value="Arm??nia">Arm??nia</option>
                            <option value="Ar??bia Saudita">Ar??bia Saudita</option>
                            <option value="Austr??lia">Austr??lia</option>
                            <option value="??ustria">??ustria</option>
                            <option value="Azerbaij??o">Azerbaij??o</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belize">Belize</option>
                            <option value="Benim">Benim</option>
                            <option value="Bermudas">Bermudas</option>
                            <option value="Bielorr??ssia">Bielorr??ssia</option>
                            <option value="Bol??via">Bol??via</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Brunei">Brunei</option>
                            <option value="Bulg??ria">Bulg??ria</option>
                            <option value="Burundi">Burundi</option>
                            <option value="But??o">But??o</option>
                            <option value="B??lgica">B??lgica</option>
                            <option value="B??snia e Herzegovina">B??snia e Herzegovina</option>
                            <option value="Cabo Verde">Cabo Verde</option>
                            <option value="Camar??es">Camar??es</option>
                            <option value="Camboja">Camboja</option>
                            <option value="Canad??">Canad??</option>
                            <option value="Catar">Catar</option>
                            <option value="Cazaquist??o">Cazaquist??o</option>
                            <option value="Chade">Chade</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Chipre">Chipre</option>
                            <option value="Col??mbia">Col??mbia</option>
                            <option value="Comores">Comores</option>
                            <option value="Coreia do Norte">Coreia do Norte</option>
                            <option value="Coreia do Sul">Coreia do Sul</option>
                            <option value="Costa do Marfim">Costa do Marfim</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Cro??cia">Cro??cia</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Dinamarca">Dinamarca</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Egito">Egito</option>
                            <option value="Emirados ??rabes Unidos">Emirados ??rabes Unidos</option>
                            <option value="Equador">Equador</option>
                            <option value="Eritreia">Eritreia</option>
                            <option value="Esc??cia">Esc??cia</option>
                            <option value="Eslov??quia">Eslov??quia</option>
                            <option value="Eslov??nia">Eslov??nia</option>
                            <option value="Espanha">Espanha</option>
                            <option value="Estados Unidos">Estados Unidos</option>
                            <option value="Est??nia">Est??nia</option>
                            <option value="Eti??pia">Eti??pia</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Filipinas">Filipinas</option>
                            <option value="Finl??ndia">Finl??ndia</option>
                            <option value="Fran??a">Fran??a</option>
                            <option value="Gab??o">Gab??o</option>
                            <option value="Gana">Gana</option>
                            <option value="Ge??rgia">Ge??rgia</option>
                            <option value="Granada">Granada</option>
                            <option value="Gr??cia">Gr??cia</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guiana">Guiana</option>
                            <option value="Guin??">Guin??</option>
                            <option value="Guin?? Equatorial">Guin?? Equatorial</option>
                            <option value="Guin??-Bissau">Guin??-Bissau</option>
                            <option value="G??mbia">G??mbia</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hungria">Hungria</option>
                            <option value="Indon??sia">Indon??sia</option>
                            <option value="Inglaterra">Inglaterra</option>
                            <option value="??ndia">??ndia</option>
                            <option value="Iraque">Iraque</option>
                            <option value="Irlanda">Irlanda</option>
                            <option value="Ir??">Ir??</option>
                            <option value="Isl??ndia">Isl??ndia</option>
                            <option value="Israel">Israel</option>
                            <option value="It??lia">It??lia</option>
                            <option value="I??men">I??men</option>
                            <option value="Jamaica">Jamaica</option>
                            <option value="Jap??o">Jap??o</option>
                            <option value="Jord??nia">Jord??nia</option>
                            <option value="Laos">Laos</option>
                            <option value="Lesoto">Lesoto</option>
                            <option value="Let??nia">Let??nia</option>
                            <option value="Lib??ria">Lib??ria</option>
                            <option value="Litu??nia">Litu??nia</option>
                            <option value="Luxemburgo">Luxemburgo</option>
                            <option value="L??bano">L??bano</option>
                            <option value="L??bia">L??bia</option>
                            <option value="Macau">Macau</option>
                            <option value="Maced??nia">Maced??nia</option>
                            <option value="Madag??scar">Madag??scar</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Maldivas">Maldivas</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Mal??sia">Mal??sia</option>
                            <option value="Marrocos">Marrocos</option>
                            <option value="Maurit??nia">Maurit??nia</option>
                            <option value="Maur??cia">Maur??cia</option>
                            <option value="Mold??via">Mold??via</option>
                            <option value="Mong??lia">Mong??lia</option>
                            <option value="Montenegro">Montenegro</option>
                            <option value="Mo??ambique">Mo??ambique</option>
                            <option value="M??xico">M??xico</option>
                            <option value="M??naco">M??naco</option>
                            <option value="Nam??bia">Nam??bia</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Nicar??gua">Nicar??gua</option>
                            <option value="Nig??ria">Nig??ria</option>
                            <option value="Noruega">Noruega</option>
                            <option value="Nova Zel??ndia">Nova Zel??ndia</option>
                            <option value="N??ger">N??ger</option>
                            <option value="Om??">Om??</option>
                            <option value="Palau">Palau</option>
                            <option value="Palestina">Palestina</option>
                            <option value="Panam??">Panam??</option>
                            <option value="Papua-Nova Guin??">Papua-Nova Guin??</option>
                            <option value="Paquist??o">Paquist??o</option>
                            <option value="Paraguai">Paraguai</option>
                            <option value="Peru">Peru</option>
                            <option value="Pol??nia">Pol??nia</option>
                            <option value="Porto Rico">Porto Rico</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Qu??nia">Qu??nia</option>
                            <option value="Reino Unido">Reino Unido</option>
                            <option value="Rep??blica Checa">Rep??blica Checa</option>
                            <option value="Rep??blica do Congo">Rep??blica do Congo</option>
                            <option value="Rep??blica Dominicana">Rep??blica Dominicana</option>
                            <option value="Rom??nia">Rom??nia</option>
                            <option value="Ruanda">Ruanda</option>
                            <option value="R??ssia">R??ssia</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Singapura">Singapura</option>
                            <option value="Som??lia">Som??lia</option>
                            <option value="Sud??o">Sud??o</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Su??cia">Su??cia</option>
                            <option value="Su????a">Su????a</option>
                            <option value="S??rvia">S??rvia</option>
                            <option value="S??ria">S??ria</option>
                            <option value="Tadjiquist??o">Tadjiquist??o</option>
                            <option value="Tail??ndia">Tail??ndia</option>
                            <option value="Taiwan">Taiwan</option>
                            <option value="Tun??sia">Tun??sia</option>
                            <option value="Turquemenist??o">Turquemenist??o</option>
                            <option value="Turquia">Turquia</option>
                            <option value="Ucr??nia">Ucr??nia</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Uruguai">Uruguai</option>
                            <option value="Uzbequist??o">Uzbequist??o</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Vietname">Vietname</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                            <option value="Z??mbia">Z??mbia</option>
                        </select>
                    </div>

                    <div class="coluna col6">
                        <label>Telefone</br></label>
                        <input id="tel" type="tel" placeholder="(__) ____-____" name="tel" />
                    </div>
                </div>
    
                <div class="linha">
                    <div class="coluna col12">
                        <label>Endere??o</br></label>
                        <input class="box" id="end" type="text" placeholder="Digite seu endere??o" name="end" />
                    </div>
                </div>

                <div class="linha">
                    <div class="coluna col12">
                        <input class="button" type="submit" value="Registrar" />
                    </div>
                    <div class="coluna col12">
                        <a class="button" href="login.php"> Fazer Login </a>
                    </div>
                </div>
            </form>
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