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
                        <li><a href="php/login.php">Login</a></li>
                    </ul>
                    <ul class="side-nav" id="mobile-demo">
                        <li><a href="#empreendimentos">Nossos Projetos</a></li>
                        <li><a href="#obras">Nossas Obras</a></li>
                        <li><a href="#sobre">Sobre</a></li>
                        <li><a href="#contato">Contato</a></li>
                        <li><a href="php/login.php">Login</a></li>
                    </ul>
                    </div>
                </div>
            </nav>
        </div>
    <div class="container">
        <div class="row">
            <form class="col s12 center">
            <div class="row">
                <div class="input-field col s12 m4">
                <input id="first_name" type="text" class="validate">
                <label for="first_name">Usuario</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m4">
                <input id="email" type="email" class="validate">
                <label for="email">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m4">
                <input id="password" type="password" class="validate">
                <label for="password">Senha</label>
                </div>
            </div>
            </form>
        </div>
    </div>


    
    
    <!-- JS Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <!-- script js -->
    <script src="js/js-index.js"></script>

</body>

</html>