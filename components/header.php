<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solda Forte - Tecnologia em Soldagem</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="navbar navbar-expand-lg py-0">
        <div class="container">
            <ul class="navbar-nav align-items-center ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link font-13 color-black" href="#">Sobre a Solda Forte</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-13 color-black" href="#">Dúvidas Frequentes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-13 color-black" href="#">Fale Conosco</a>
                </li>
                <li class="nav-item ms-2 me-2">
                    <a class="btn py-1 px-2 font-13 bg-blue" href="#" target="_blank"><i class="bi bi-instagram color-white"></i></a>
                </li>
                <li class="nav-item">
                    <a class="btn py-1 px-2 font-13 bg-blue" href="#" target="_blank"><i class="bi bi-facebook color-white"></i></a>
                </li>
            </ul>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-blue sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="img/logo.svg" alt="Solda Forte - Tecnologia em Soldagem" class="img-fluid" width="240"/>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <form class="d-flex col-lg-6 ms-auto me-auto my-3 my-lg-0">
                    <input class="form-control form-control-lg font-15 " type="search" placeholder="O que você procura?" aria-label="Search">
                </form>
                <ul class="navbar-nav align-items-center ms-auto mb-2 mb-lg-0">
                    <li class="nav-item me-3">
                        <a class="nav-link btn px-3 font-20 color-white bg-blue-alternative position-relative" href="#">
                            <i class="bi bi-cart4 color-orange"></i>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-orange font-13">3</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn px-3 font-13 color-white bg-blue-alternative" href="#"><i class="bi bi-emoji-laughing color-orange me-2"></i>Minha Conta</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
<?php include 'components/category.php' ?>