<?= $this->extend('layout/main'); ?>
<?= $this->section('content'); ?>

    <style>
        @media screen and (max-width: 768px) {
            .table-responsive-stack thead {
                display: none;
            }
            .table-responsive-stack td {
                display: block;
                text-align: right;
                position: relative;
                padding-left: 50%;
                border-bottom: 1px solid #dee2e6;
            }
            .table-responsive-stack td:last-child {
                border-bottom: 0;
            }
            .table-responsive-stack td:before {
                content: attr(data-label);
                position: absolute;
                left: 0;
                width: 45%;
                padding-left: 1rem;
                font-weight: bold;
                text-align: left;
            }
            .table-responsive-stack tr {
                display: block;
                margin-bottom: 1rem;
                border: 1px solid #dee2e6;
                border-radius: .25rem;
            }
        }
    </style>


    <div class="px-4 py-5 my-5 text-center">
        <h1 class="display-5 fw-bold text-primary">Padrón de Proveedores</h1>
        <div class="col-lg-8 mx-auto">
            <p class="lead mb-4">Listado de proveedores de bienes y servicios para el Sistema Operador de los Servicios de Agua Potable y Alcantarillado del Municipio de Tlatlauquitepec (SOSAPATLAT).</p>
        </div>
    </div>


    <div class="row align-items-md-stretch">
        <div class="col-md-12 mt-3">
            <div class="h-100 p-4 p-md-5 rounded-3 card">
                <h2>Listado Oficial de Proveedores</h2>

                <div class="table-responsive mt-4">
                    <table class="table table-responsive-stack table-striped table-hover">

                    <thead class="table-light">
                        <tr>
                            <th scope="col">Nombre / Razón Social</th>
                            <th scope="col">Dirección</th>
                            <th scope="col">RFC</th>
                            <th scope="col">Recurso / Servicio</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="align-middle">SERVITEC CHACHAPA<br><small class="text-muted">José Gilberto Mena Marcos</small></td>
                            <td class="align-middle">Privada 6 Sur 603 Col. Centro CP 72990 Chachapa, Amozoc, Pue.</td>
                            <td class="align-middle">MEMG720213QF3</td>
                            <td class="align-middle">Suministro cloro</td>
                        </tr>
                        <tr>
                            <td class="align-middle">Quim. Rodrigo López Salas</td>
                            <td class="align-middle">Calle 2 de Abril no. 125 Col. Lomas 5 de Mayo CP 72270 Puebla, Pue.</td>
                            <td class="align-middle">LOSR630320E35</td>
                            <td class="align-middle">Pruebas físico-químicas de agua</td>
                        </tr>
                        <tr>
                            <td class="align-middle">Karol Jozef Ramos Rodríguez</td>
                            <td class="align-middle">Av. Revolución no. 33 Col. Centro CP 73900 Tlatlauquitepec, Pue.</td>
                            <td class="align-middle">RARK030617EF4</td>
                            <td class="align-middle">Papelería</td>
                        </tr>
                        <tr>
                            <td class="align-middle">OFFICE DEPOT</td>
                            <td class="align-middle">Calle 31 Oriente 600 Col. Ladrillero de Benítez, Puebla, Pue.</td>
                            <td class="align-middle">ODM950324V2A</td>
                            <td class="align-middle">Papelería</td>
                        </tr>
                        <tr>
                            <td class="align-middle">Margarito Delfino Báez Macip</td>
                            <td class="align-middle">Reforma 39 Col. Centro, Tlatlauquitepec, Pue.</td>
                            <td class="align-middle">BAMM470610IIA</td>
                            <td class="align-middle">Materiales y herramientas</td>
                        </tr>
                        <tr>
                            <td class="align-middle">GASOLINERA TLATLAUQUI, S.A. DE C.V.</td>
                            <td class="align-middle">Av. Reforma 132 Col. Centro CP 73900 Tlatlauquitepec, Pue.</td>
                            <td class="align-middle">GTL040729335</td>
                            <td class="align-middle">Combustible</td>
                        </tr>
                        <tr>
                            <td class="align-middle">Rene Díaz Báez</td>
                            <td class="align-middle">Av. Reforma no. 156 Col. Centro CP 73900 Tlatlauquitepec, Pue.</td>
                            <td class="align-middle">DIBR8408216W9</td>
                            <td class="align-middle">Materiales y herramientas</td>
                        </tr>
                        <tr>
                            <td class="align-middle">Dinorin Salgado Ana Patricia</td>
                            <td class="align-middle">Av. Revolución Ntr. 39 Col. Centro CP 73900 Tlatlauquitepec, Pue.</td>
                            <td class="align-middle">DISA8107176J8</td>
                            <td class="align-middle">Artículos de limpieza y abarrotes</td>
                        </tr>
                        <tr>
                            <td class="align-middle">VALENCIA IMPRESORES<br><small class="text-muted">Amado Valencia Iniesta</small></td>
                            <td class="align-middle">Av. Reforma no. 156 Col. Centro CP 73900 Tlatlauquitepec, Pue.</td>
                            <td class="align-middle">VAIA7306252H7</td>
                            <td class="align-middle">Impresiones, tarjetas, volantes, etc.</td>
                        </tr>
                        <tr>
                            <td class="align-middle">ELECTRONICA Y COMPUTACION<br><small class="text-muted">Tec. Antonio Palestina E.</small></td>
                            <td class="align-middle">Av. Eduardo Guerra no. 12 Col. Centro CP 73900.</td>
                            <td class="align-middle">PAEA500510ESA</td>
                            <td class="align-middle">Servicio y mantenimiento de computadoras</td>
                        </tr>
                        <tr>
                            <td class="align-middle">Marial del Carmen Rodríguez H.</td>
                            <td class="align-middle">Av. Hidalgo no. 408 Col. Centro CP 73700 Zaragoza, Pue.</td>
                            <td class="align-middle">ROHC771010M92</td>
                            <td class="align-middle">Reciclado de cartuchos</td>
                        </tr>
                        <tr>
                            <td class="align-middle">Mario Alberto Baeza Salazar</td>
                            <td class="align-middle">7 E Mod. 93 4 Bosques de San Sebastián CP 72310 Puebla, Pue.</td>
                            <td class="align-middle">BASM8008291W8</td>
                            <td class="align-middle">Servicio y mantenimiento de computadoras</td>
                        </tr>
                        <tr>
                            <td class="align-middle">GRUPO MEZA NORTE, COMEX<br><small class="text-muted">Juan Manuel Meza Glez.</small></td>
                            <td class="align-middle">Héroes de Tlapacoyan no. 18 Col. Centro CP 93650 Tlapacoyan, Ver.</td>
                            <td class="align-middle">MEGJ490616431</td>
                            <td class="align-middle">Pintura</td>
                        </tr>
                        <tr>
                            <td class="align-middle">Compra-venta de materiales de construcción<br><small class="text-muted">Crisóforo Marcos Valera León</small></td>
                            <td class="align-middle">Dolores Betancourt no. 124 CP 73900 Tlatlauquitepec, Pue.</td>
                            <td class="align-middle">VALC680420</td>
                            <td class="align-middle">Materiales y herramientas</td>
                        </tr>
                        <tr>
                            <td class="align-middle">PAPELERIA “VAZQUEZ”<br><small class="text-muted">Patricia Guadalupe Vázquez Cortes</small></td>
                            <td class="align-middle">Av. Reforma Col. Centro CP 73900 Tlatlauquitepec, Pue.</td>
                            <td class="align-middle">VACP4905067WO</td>
                            <td class="align-middle">Papelería</td>
                        </tr>
                        <tr>
                            <td class="align-middle">Arturo García Martagón</td>
                            <td class="align-middle">Reforma 158 Col. Centro CP 73900.</td>
                            <td class="align-middle">GAMA4708092J1</td>
                            <td class="align-middle">Servicio mecánico</td>
                        </tr>
                        <tr>
                            <td class="align-middle">QUALITY OFFICE SERVICE<br><small class="text-muted">Sucursal Puebla</small></td>
                            <td class="align-middle">7 Sur no. 2318 Col. El Carmen CP 72530.</td>
                            <td class="align-middle">QOS030118M8A</td>
                            <td class="align-middle">Fotocopiadoras y consumibles</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

<?= $this->endSection(); ?>