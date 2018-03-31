<?php
    $erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>VNM Engenharia - Home</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <!-- arquivo de estilo css -->
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    
    
</head>

<body>

    

    <header id="top-page" class="scrollspy">

        <div class="navbar-fixed">
            <nav class="blue darken-4">
                <div class="container">
                    <div class="nav-wrapper">
                        <a href="#top-page" class="brand-logo"><img style="padding-top: 10px;" src="imagens/VNM.jpeg" height="50px" width="97px"></a>
                        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                        <ul class="right hide-on-med-and-down">
                            <li><a href="#empreendimentos">Nossos Projetos</a></li>
                            <li><a href="#obras">Nossas Obras</a></li>
                            <li><a href="#sobre">Sobre</a></li>
                            <li><a href="#contato">Contato</a></li>
                            <li class="login">
                                <a class="site-nav__link dropdown-button" data-activates="features-dropdown" data-beloworigin="true" data-constrainwidth="false" data-hover="false">
                                    Login<i class="material-icons right">arrow_drop_down</i>
                                </a>
                                <ul id="features-dropdown" class="site-nav__submenu dropdown-content">
                                    <form method="post" action="validar_acesso.php" id="formLogin">
                                    <li>
                                        <div class="input-field">
                                            <input id="user" type="text" class="validate" name="usuario">
                                            <label for="user">Usuário</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="input-field">
                                            <input id="password" type="password" class="validate" name="senha">
                                            <label for="password">Senha</label>
                                        </div>
                                    </li>
                                    <li>
                                        <button class="btn waves-effect waves-light center" type="submit" name="action" id="btnLogin">Login
                                                <i class="material-icons right">send</i>
                                        </button>
                                    </li>
                                    </form>  
                                    <li>
                                        <?php
                                            if($erro == 1){
                                                echo '<font color= "#FF0000">Usuario e/ou senha inválido(s)</font>';
                                            }
                                        ?>
                                    </li>                                  
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <ul class="side-nav" id="mobile-demo">
            <li><a href="#empreendimentos">Nossos Projetos</a></li>
            <li><a href="#obras">Nossas Obras</a></li>
            <li><a href="#sobre">Sobre</a></li>
            <li><a href="#contato">Contato</a></li>
            <li><a class="dropdown-trigger" data-target="dropdown1">Login<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>

        

        <div class="section no-pad-bot" id="index-banner">
            <div class="container">
              <br><br><br><br>
              <h1 class="header center blue-text">VNM Engenharia</h1>
              <div class="row center">
                <h3 class="header col s12 light">Seu lar se encontra aqui</h3>
              </div>
              <br><br><br><br>
            </div>
        </div>

    </header>

    <main>

        <div id="empreendimentos" class="blue darken-1 scrollspy">
            <div class="container section ">
                <div class="row texto-empreendimentos center col s12 m6 l4  ">
                    <h2>Nossos Projetos</h2>
                </div>
                <div class="row">
                    <div class="col s12 m6 l4">
                        <div class="card hoverable">
                            <div class="card-image">
                            <img src="imagens/projeto.jpg">
                            <span class="card-title">Empreendimento 1</span>
                            </div>
                            <div class="card-content">
                            <p>Explicação breve dos detalhes deste item</p>
                            </div>
                            <div class="card-action">
                            <a href="empreendimento.html" class="waves-effect waves-yellow">Confira o projeto!</a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l4">
                        <div class="card hoverable">
                            <div class="card-image">
                            <img src="imagens/projeto.jpg">
                            <span class="card-title">Empreendimento 1</span>
                            </div>
                            <div class="card-content">
                            <p>Explicação breve dos detalhes deste item</p>
                            </div>
                            <div class="card-action">
                            <a href="empreendimento.html">Confira o projeto!</a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l4">
                        <div class="card hoverable">
                            <div class="card-image">
                            <img src="imagens/projeto.jpg">
                            <span class="card-title">Empreendimento 1</span>
                            </div>
                            <div class="card-content">
                            <p>Explicação breve dos detalhes deste item</p>
                            </div>
                            <div class="card-action">
                            <a href="empreendimento.html">Confira o projeto!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="obras" class="scrollspy">
            <div class="container section">
                <div class="row center">
                    <h2>Nossas Obras</h2>
                </div>
                <div class="row">
                    <div class="col s12 m6 l4">
                        <div class="card hoverable">
                            <div class="card-image">
                            <img src="imagens/projeto.jpg">
                            <span class="card-title">Empreendimento 1</span>
                            </div>
                            <div class="card-content">
                            <p>Explicação breve dos detalhes deste item</p>
                            </div>
                            <div class="card-action">
                            <a href="obra.html" class="waves-effect waves-yellow">Confira o projeto!</a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l4">
                        <div class="card hoverable">
                            <div class="card-image">
                            <img src="imagens/projeto.jpg">
                            <span class="card-title">Empreendimento 1</span>
                            </div>
                            <div class="card-content">
                            <p>Explicação breve dos detalhes deste item</p>
                            </div>
                            <div class="card-action">
                            <a href="obra.html">Confira o projeto!</a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l4">
                        <div class="card hoverable">
                            <div class="card-image">
                            <img src="imagens/projeto.jpg">
                            <span class="card-title">Empreendimento 1</span>
                            </div>
                            <div class="card-content">
                            <p>Explicação breve dos detalhes deste item</p>
                            </div>
                            <div class="card-action">
                            <a href="obra.html">Confira o projeto!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="sobre" class="blue darken-1 scrollspy">
            <div class="container section">
                <div class="row center">
                    <h2>Sobre</h2>
                </div>
                <div class="row">
                    <div class="col l4">
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus non tempus ex. Donec nisi risus, 
                        vulputatevel luctus non, cursus ac purus. Maecenas metus massa, dictum a dolor eget, faucibus venenatis
                        odio. Curabitur molestie est risus, at hendrerit ex scelerisque vel. Cras pretium lectus vitae felis 
                        feugiat facilisis. Suspendisse ut suscipit neque. Aenean rhoncus luctus congue. Praesent rhoncus tempus 
                        massa, at mattis turpis vehicula vitae. Aliquam erat volutpat. Aenean porttitor ac velit et efficitur. 
                        Donec convallis venenatis sem</p>
                    </div>
                    <div class="col s12 l8">
                        <div class="carousel carousel-slider center">
                            <a class="carousel-item"><img src="imagens/carousel-1.jpeg"></a>
                            <a class="carousel-item"><img src="imagens/carousel-2.jpg"></a>
                            <a class="carousel-item"><img src="imagens/carousel-3.jpg"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main> 

    <footer id="rodape" class="page-footer white">
        <div id="contato" class="container scrollspy">
          <div class="row">
            <div class="col l6 s12">
              <h5 class="black-text">Contato</h5>
              <p class="black-text">Algumas informações de contato</p>
            </div>
            <div class="col l4 offset-l2 s12">
              <h5 class="black-text">Links</h5>
              <ul>
                <li><a class="blue-text text-lighten-1" href="#!">Link 1</a></li>
                <li><a class="blue-text text-lighten-1" href="#!">Link 2</a></li>
                <li><a class="blue-text text-lighten-1" href="#!">Link 3</a></li>
                <li><a class="blue-text text-lighten-1" href="#!">Link 4</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footer-copyright">
          <div class="container black-text">
          © 2018 Dhaniel Mazini
          <a class="blue-text text-lighten-1 right" href="#!">More Links</a>
          </div>
        </div>
    </footer>
    
    <!-- JS Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <!-- script js -->
    <script src="js/js-index.js"></script>

</body>

</html>