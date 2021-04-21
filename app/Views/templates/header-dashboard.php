<?php 
session_start();

$servidor = "localhost";
$usuario = "root";
$senhaserver = "";
$dbnome = "interiorimoveis";

$conn = mysqli_connect($servidor,$usuario,$senhaserver, $dbnome);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Interior Imóveis - Encontre sua casa, ou seu apartamento aqui</title>

    <!-- Bootstrap CSS -->
    <!-- Compiled and minified CSS -->
    <link href="../../../public/css/materialize.min.css" rel="stylesheet">
    <link href="../../../public/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../public/css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="../../../public/images/favicon.png" />
</head>

<body>
    <script src="../../../public/js/jquery.min.js"></script>
    <script src="../../../public/js/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="../../../public/js/bootstrap.min.js"></script>
    <script src="../../../public/js/main.js"></script>
    <script src="../../../public/js/materialize.min.js"></script>

    <!-- INICIO NAV-BAR -->
    <header>
        
            <nav id="navegacao" class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <!-- <a class="navbar-brand" href="#">Navbar w/ text</a> -->
                    <img class="image-logo" src="../../../public/images/favicon.png" href="index.php" alt="Imagem da logo">

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span id="menu" class="navbar-toggler-icon">MENU</span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="index">Início</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="anunciar-imoveis">Anunciar Imóveis</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index-imoveis-disponiveis">Imóveis Disponíveis</a>
                            </li>
                            

                        </ul>
                    </div>
                </div>
            </nav>
        
            <?php 
                $query = "select * from usuario where email = '". $_SESSION['email']."' ";
                $resultado = mysqli_query($conn, $query);
                $dados_banco = mysqli_fetch_array($resultado);

                $_SESSION['celular'] = $dados_banco['celular'];
                $_SESSION['nome'] = $dados_banco['nome'];
                $_SESSION['idu'] = $dados_banco['id'];
                $_SESSION['cidade'] = $dados_banco['cidade'];
                $_SESSION['caminho'] = $dados_banco['caminho_foto'];
            ?>

            <b><h4 id="msg-dashboard">Olá, <?php echo $dados_banco['nome'] ?>! Administre seus anúncios, Solicitações e muito mais.</h4></b>
            <br>    
            <ul id="slide-out" class="sidenav">
                <li><div class="user-view">// 
                <div class="background">
                    <img src="https://www.significados.com.br/foto/paisagem-natural-significados.jpg">
                </div>
                <a href="#user"><img class="circle" src="../../../public/images/img_usuario/ <?php echo $_SESSION['caminho'];?> "></a>
                <a href="#name"><span class="white-textName"></span><?php echo $dados_banco['nome'] ?></a>
                
                </div></li>
                <li><a href="#meus-anuncios">Meus Anúncios</a></li>
                <li><a href="#solicitacoes-Disponiveis">Solicitações de Imóveis</a></li>
                <li><a href="#minhas-solicitacoes">Minhas Solicitações</a></li>
                <li><div class="divider"></div></li>
                <li><a class="subheader"></a></li>
                <li><a class="waves-effect" href="deslogar">Sair</a></li>
            </ul>
            <!-- <img src="../../../public/images/apps.png" alt=""> -->
            <a href="#" data-target="slide-out" data-toggle="sidenav" class="sidenav-trigger"><i class="large material-icons"><img style="margin-left: 200% !important;" src="../../../public/images/apps.png" alt=""></i></a>
        </div>
    </header>
    <div class="principal">

    