<?= $this->extend('layout/main'); ?>

<?= $this->section('content'); ?>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Muli&display=swap');

        .expanding-panels-container {
            font-family: 'Muli', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 85vh;
            overflow: hidden;
            margin: 0;
            background-color: #f8f9fa;
        }

        .expanding-panels-container .panels-wrapper {
            display: flex;
            width: 90vw;
        }

        .panel {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 70vh;
            border-radius: 0px;
            color: #fff;
            cursor: pointer;
            flex: 0.5;
            margin: 10px;
            position: relative;
            -webkit-transition: all 700ms ease-in;
            transition: all 700ms ease-in;
        }

        .panel h3 {
            font-size: 24px;
            position: absolute;
            bottom: 20px;
            left: 20px;
            margin: 0;
            opacity: 0;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); /* Sombra para mejor legibilidad */
        }

        .panel.active {
            flex: 5;
        }

        .panel.active h3 {
            opacity: 1;
            transition: opacity 0.3s ease-in 0.4s;
        }

        @media (max-width: 480px) {
            .expanding-panels-container .panels-wrapper {
                width: 100vw;
            }

            .panel:nth-of-type(4),
            .panel:nth-of-type(5) {
                display: none;
            }
        }
    </style>

    <div class="expanding-panels-container">
        <div class="panels-wrapper">

            <div class="panel active"
                 style="background-image: url('<?php echo base_url("assets/img/sosapatlat2.jpg"); ?>')">
                <h3></h3>
            </div>

            <div class="panel"
                 style="background-image: url('<?php echo base_url("assets/img/sosapatlat3.jpg"); ?>')">
                <h3></h3>
            </div>

            <div class="panel"
                 style="background-image: url('<?php echo base_url("assets/img/sosapatlat4.jpg"); ?>')">
                <h3></h3>
            </div>

        </div>
    </div>


    <main>
        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="<?= base_url('assets/img/sosapatlat.png') ?>" class="d-block mx-lg-auto img-fluid"
                         alt="" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">SOSAPATLAT</h1>
                    <p class="lead">Sistema Operador de los Servicios de Agua Potable y Alcantarillado del Municipio de
                        Tlatlauquitepec</p>
                    <p>Este Organismo Público Descentralizado fue creado en el año de 1992, con fundamento en el
                        artículo 115 de la Constitución General de la República, que impone la revisión y adecuación de
                        la Organización Municipal.</p>

                    <p>Considerando que el prestar y recibir el Servicio de Agua Potable y Alcantarillado es una de las
                        actividades primordiales para el desarrollo de la vida comunitaria y con objeto de que se pueda
                        prestar en condiciones de mayor eficiencia.</p>

                    <p>Para fortalecer su Estructura Financiera el H. Ayuntamiento de Tlatlauquitepec en Sesión de
                        Cabildo de fecha 26 de Octubre de 1992, acordó la creación del Organismo Público Descentralizado
                        denominado: “Sistema Operador de los Servicios de Agua Potable y Alcantarillado del Municipio de
                        Tlatlauquitepec”.</p>
                </div>
            </div>
        </div>

        <div class="container px-4 py-5" id="custom-cards">
            <h2 class="pb-2 border-bottom">Nuestros Servicios</h2>
            <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold text-primary">Consulta y Pago en Línea</h3>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Reporte de Fugas y Averías</h3>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Trámites y Contrataciones</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container px-4 py-5" id="featured-3">
            <h2 class="pb-2 border-bottom">Trámites frecuentes</h2>
            <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                <div class="feature col">
                    <h3 class="fs-2 text-body-emphasis">Facturación Electrónica</h3>
                    <p>Genera y descarga tus comprobantes fiscales de manera rápida y segura desde nuestro portal.</p>
                    <a href="#" class="icon-link">Ir a facturación</a>
                </div>
                <div class="feature col">
                    <h3 class="fs-2 text-body-emphasis">Requisitos para Contrato Nuevo</h3>
                    <p>Conoce toda la documentación necesaria para realizar la contratación de una nueva toma de
                        agua.</p>
                    <a href="#" class="icon-link">Ver requisitos</a>
                </div>
                <div class="feature col">
                    <h3 class="fs-2 text-body-emphasis">Constancia de No Adeudo</h3>
                    <p>Solicita tu constancia de no adeudo para realizar trámites municipales y de propiedad.</p>
                    <a href="#" class="icon-link">Solicitar constancia</a>
                </div>
            </div>
        </div>
    </main>


    <script>
        const panels = document.querySelectorAll('.panel');

        panels.forEach(panel => {
            panel.addEventListener('click', () => {
                removeActiveClasses();
                panel.classList.add('active');
            });
        });

        function removeActiveClasses() {
            panels.forEach(panel => {
                panel.classList.remove('active');
            });
        }
    </script>

<?= $this->endSection(); ?>