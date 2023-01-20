<!DOCTYPE html>
<html>
    <head>
        <title>Login Facebook</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;400&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0   '!|a">
    </head>
    <body>
        
        <header>
            <div class="center">
                <div class="logo">
                    <H2>Facebook</H2>
                </div>

                <form method="post" class="form-login">
                    <div class="form-element">
                        <p>Email ou telefone:</p>
                        <input type="email" placeholder="Email ou telefone">
                    </div>
                    <div class="form-element">
                        <p>Senha:</p>
                        <input type="password" placeholder="Senha">
                    </div>
                    <div class="form-element">
                        <input type="submit" name="acao" value="Enviar"  />
                    </div>
                </form>
                <div class="clear"></div>
            </div>
        </header>

        <section class="main">
            <div class="center">
                <div class="img-pessoas">
                    <img src="images/login.jpg" alt="imagem de login">
                </div>
                <div class="abrir-conta">
                    <h2>Abra sua conta</h2>
                    <h3>É gratuito e sempre será.</h3>

                    <form class="criar-conta">
                        <div class="w50">
                            <input type="text" placeholder="Nome">
                        </div>

                        <div class="w50">
                            <input type="text" placeholder="Sobrenome">
                        </div>

                        <div class="w100">
                            <input type="email" placeholder="Email">
                        </div>

                        <div class="w100">
                            <input type="password" placeholder="Senha">
                        </div>

                        <div class="w100">
                            <h2>Data de Nascimento:</h2>
                            <select class="nascimento" name="nascimento-dia" value="1">
                                <?php 
                                for($i = 1; $i <= 31; $i++){
                                ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php } ?>
                            </select>
                            <select class="nascimento" name="nascimento-mes" value="1">
                                <option value="0">Janeiro</option>
                                <option value="1">Fevereiro</option>
                                <option value="2">Março</option>
                                <option value="3">Abril</option>
                                <option value="4">Maio</option>
                                <option value="5">Junho</option>
                                <option value="6">Julho</option>
                                <option value="7">Agosto</option>
                                <option value="8">Setembro</option>
                                <option value="9">Outubro</option>
                                <option value="10">Novembro</option>
                                <option value="11">Dezembro</option>
                            </select>
                            <select class="nascimento" name="nascimento-ano" value="1">
                            <?php 
                                for($i = 1960; $i <= 2023; $i++){
                                ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php } ?>
                            </select>
                            <div class="clear"></div>
                        </div>

                        <div class="w100">
                            <div class="input-radio">
                                <input type="radio" value="Masculino" name="sexo">
                                <h2>Masculino</h2>
                            </div>
                            <div class="input-radio">
                                <input type="radio" value="Feminino" name="sexo">
                                <h2>Feminino</h2>
                            </div>

                            <div class="clear"></div>
                        </div>

                        <div class="w100">
                            <input type="submit" name="acao" value="Cadastrar!">
                        </div>
                    </form>

                </div>


                <div class="clear"></div>
            </div>
        </section>

        <section class="linguas">
            <div class="center">
                    <a class="selected-lingua" href="#">Português (BR)</a>
                    <a href="#">Inglês</a>
                    <a href="#">Espanhol</a>
                    <a href="#">中国人 (Chinês)</a>
                    <a href="#">日本 (Japonês)</a>
                    <a href="#">한국인 (Coreano)</a>

            </div>

            <div style="border:0;padding-top:10px;"class="center">
                    <a href="#">Cadastre-se</a>
                    <a href="#">Entrar</a>
                    <a href="#">Messenger</a>
                    <a href="#">Facebook Lite</a>
                    <a href="#">Celular</a>
                    <a href="#">Encontrar amigos</a>
                    <a href="#">Pessoas</a>
                    <a href="#">Páginas</a>
                    <a href="#">Locais</a>
                    <a href="#">Marketplace</a>
                    <a href="#">Vídeos</a>
                    <a href="#">Grupos</a>
                    <a href="#">Receitas</a>
                    <a href="#">Esportes</a>
                    <a href="#">Look</a>
                    <a href="#">Moments</a>
            </div>
        </section>

    </body>
</html>