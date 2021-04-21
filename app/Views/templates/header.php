<?php 
session_start(); // aqui, beleza. sim, quer que eu mostre?
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Interior Imóveis - Encontre sua casa, ou seu apartamento aqui</title>

    <!-- Bootstrap CSS -->
    <link href="../../../public/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../public/css/style.css" rel="stylesheet">
    
    <link rel="shortcut icon" href="../../../public/images/favicon.png" />
</head>

<body>
    
    <script src="../../../public/js/jquery.min.js"></script>
    <script src="../../../public/js/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="../../../public/js/bootstrap.min.js"></script>
    <script src="../../../public/js/main.js"></script>

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
                    <?php 
                        if(!isset($_SESSION['email'])){
                    ?>
                    <a data-target="slide-out" class="navbar-text" href="index-login">Entrar ou Cadastrar</a>
                    <?php 
                        }
                        else{
                    ?>
                            <a data-target="slide-out" class="navbar-text" href="index-dashboard">Dashboard</a>
                    <?php
                        }
                    ?>
                    <!-- Provavelmente mudar essa tag para button -->
                </div>
            </div>
        </nav>
    </header>
    <!-- FIM NAV-BAR -->
            
        


