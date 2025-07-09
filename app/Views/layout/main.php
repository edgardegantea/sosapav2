<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SOSAPATLAT</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

    <style>
        body {
            font-family: "Montserrat", sans-serif;
        }
    </style>

</head>
<body>

<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3">
    <div class="text-center">
        <img src="<?php echo base_url('assets/img/banner1.png'); ?>" style="height: 80px;">
    </div>
</header>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0477BF;" data-bs-theme="light">
    <div class="container">
        <a class="navbar-brand" href="<?php echo base_url('/'); ?>">SOSAPATLAT</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo base_url('/'); ?>">Inicio</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Identidad
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?php echo base_url('/mvv'); ?>">Misión, Visión y Valores</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('/queessosapatlat'); ?>">¿Qué es SOSAPATLAT?</a></li>
                        <li><a class="dropdown-item" href="#">Historia</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Transparencia
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">SEVAC</a></li>
                        <li><a class="dropdown-item" href="#">Estructura orgánica</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('/marconormativo'); ?>">Marco normativo</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('/estructuraorganica'); ?>">Estructura Orgánica</a></li>
                        <li><a class="dropdown-item" href="#">Directorio</a></li>
                        <li><a class="dropdown-item" href="#">Indicador de gestión</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('/padronprov'); ?>">Padrón de Proveedores</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Información y Ayuda
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?php echo base_url('/conocetumedidor'); ?>">Conoce tu medidor</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('/tarifasporservicio'); ?>">Tarifas por servicio</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('/marconormativo'); ?>"></a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <?= $this->renderSection('content') ?>
    <?= $this->include('layout/footer'); ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>

</body>
</html>