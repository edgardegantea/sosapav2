<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SOSAPATLAT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>

<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-1">

    <div class="col-md-3">
        Gobierno del Estado de Puebla 2024-2028
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
                    <!--<li class="nav-item">
                        <a class="nav-link" href="#">Identidad</a>
                    </li>-->

                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                           aria-expanded="false">
                            Identidad
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo base_url('/mvv'); ?>">Misión, Visión y
                                    Valores</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('/queessosapatlat'); ?>">¿Qué es
                                    SOSAPATLAT?</a></li>
                            <li><a class="dropdown-item" href="#">Historia</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
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
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="<?php echo base_url('/marconormativo'); ?>">Marco
                                    normativo</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('/estructuraorganica'); ?>">Estructura
                                    Orgánica</a></li>
                            <li><a class="dropdown-item" href="#">Directorio</a></li>
                            <li><a class="dropdown-item" href="#">Indicador de gestión</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('/padronprov'); ?>">Padrón de
                                    Proveedores</a></li>


                        </ul>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                           aria-expanded="false">
                            Información y Ayuda
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo base_url('/conocetumedidor'); ?>">Conoce tu
                                    medidor</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('/tarifasporservicio'); ?>">Tarifas
                                    por servicio</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="<?php echo base_url('/marconormativo'); ?>"></a></li>


                        </ul>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link active" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <!--<form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>-->
            </div>
        </div>
    </nav>


    <!--<header class="py-3 mb-4 border-bottom">
        <div class="container d-flex flex-wrap justify-content-center"><a href="/"
                                                                          class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto link-body-emphasis text-decoration-none">
                <svg class="bi me-2" width="40" height="32" aria-hidden="true">
                    <use xlink:href="#bootstrap"></use>
                </svg>
                <span class="fs-4">Double header</span> </a>
            <form class="col-12 col-lg-auto mb-3 mb-lg-0" role="search"><input type="search" class="form-control"
                                                                               placeholder="Search..." aria-label="Search">
            </form>
        </div>
    </header>-->

    <div class="container-fluid">


        <?= $this->renderSection('content') ?>

        <?= $this->include('layout/footer'); ?>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
                crossorigin="anonymous"></script>


    </div>

</body>
</html>
