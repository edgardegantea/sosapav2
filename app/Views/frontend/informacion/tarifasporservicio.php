<?= $this->extend('layout/main'); ?>
<?= $this->section('content'); ?>

    <div class="px-4 py-5 my-5 text-center">
        <h1 class="display-5 fw-bold text-primary">Tarifas por Servicio</h1>
        <div class="col-lg-8 mx-auto">
            <p class="lead mb-4">Sistema Operador de los Servicios de Agua Potable y Alcantarillado del Municipio de Tlatlauquitepec (SOSAPATLAT) le Informa:
                <br>
                Estimado Usuario no se quede con dudas con respecto las cuotas, tasas y tarifas establecidas en base al consumo de agua potable. A continuación se le da a conocer información para que de esta manera le podamos brindar un mejor servicio.</p>
        </div>

        <div class="text-center mb-5">
            <a href="<?php echo base_url('assets/documents/Tarifas.pdf'); ?>" target="_blank" class="btn btn-info btn-lg px-4 gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-pdf-fill" viewBox="0 0 16 16">
                    <path d="M5.523 12.424q.21-.124.453-.225a7.3 7.3 0 0 1 .45.225c.236.14.44.323.595.54h.02a.85.85 0 0 1 .12.3.98.98 0 0 1-.062.462.86.86 0 0 1-.22.28.8.8 0 0 1-.258.143.87.87 0 0 1-.289.044q-.26.002-.462-.153a.87.87 0 0 1-.213-.37.86.86 0 0 1 .082-.44.8.8 0 0 1 .258-.315.88.88 0 0 1 .289-.143m-1.155.44c.115-.17.24-.319.39-.445a.89.89 0 0 1 .51-.154q.228 0 .422.115c.195.115.32.28.374.482a.8.8 0 0 1-.035.45.87.87 0 0 1-.26.33.85.85 0 0 1-.375.125.84.84 0 0 1-.44-.125.86.86 0 0 1-.212-.395.82.82 0 0 1 .078-.445m3.842-1.348c.11-.165.233-.306.375-.42a.85.85 0 0 1 .51-.154q.234 0 .434.116c.2.116.328.28.384.482a.8.8 0 0 1-.034.45.88.88 0 0 1-.26.33.85.85 0 0 1-.375.125.84.84 0 0 1-.44-.125.85.85 0 0 1-.212-.395.82.82 0 0 1 .08-.445m-1.155.44c.115-.17.24-.319.39-.445a.89.89 0 0 1 .51-.154q.228 0 .422.115c.195.115.32.28.374.482a.8.8 0 0 1-.035.45.87.87 0 0 1-.26.33.85.85 0 0 1-.375.125.84.84 0 0 1-.44-.125.86.86 0 0 1-.212-.395.82.82 0 0 1 .08-.445"/>
                    <path fill-rule="evenodd" d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2m5.5 1.5v2.793a1 1 0 0 0 1 1H13z"/>
                </svg>
                Ver/Descargar Acuerdo de Tarifas Oficial (PDF)
            </a>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-11">
            <div class="card mb-4">
                <div class="card-header text-center">
                    <h2 class="h4 my-1">Derechos de Conexión a la Red </h2>
                </div>
                <div class="card-body">
                    <p>Quienes se beneficien con los servicios de agua o drenaje deben cubrir el importe de su contratación. </p>

                    <h3 class="h5 mt-4">Conexión a la Red de Agua Potable </h3>
                    <div class="row">
                        <div class="col-lg-6">
                            <strong>Uso Doméstico</strong>
                            <table class="table table-sm table-bordered mt-2">
                                <thead class="table-light"><tr><th>Tipo de Servicio</th><th>Importe</th></tr></thead>
                                <tbody>
                                <tr><td>Popular</td><td>$1,455.00</td></tr>
                                <tr><td>Medio</td><td>$1,495.00</td></tr>
                                <tr><td>Semiresidencial</td><td>$1,620.00</td></tr>
                                <tr><td>Residencial</td><td>$1,745.00</td></tr>
                                </tbody>
                            </table>
                            <small>
                                <strong>Clasificación:</strong>
                                <ul>
                                    <li><strong>Popular:</strong> Hasta 100 m² de construcción </li>
                                    <li><strong>Semiresidencial:</strong> De 101 a 150 m² y de 151 a 200 m² de construcción </li>
                                    <li><strong>Residencial:</strong> Más de 200 m² de construcción </li>
                                </ul>
                            </small>
                        </div>
                        <div class="col-lg-6">
                            <strong>Otros Usos</strong>
                            <table class="table table-sm table-bordered mt-2">
                                <thead class="table-light"><tr><th>Tipo de Servicio</th><th>Importe</th></tr></thead>
                                <tbody>
                                <tr><td>Uso Comercial Menor Consumo</td><td>$1,745.00 + IVA</td></tr>
                                <tr><td>Uso Comercial Mayor Consumo</td><td>$1,919.00 + IVA</td></tr>
                                <tr><td>Uso Industrial</td><td>$2,006.00 + IVA</td></tr>
                                <tr><td>Uso Público y de Servicios</td><td>$1,455.00 + IVA</td></tr>
                                </tbody>
                            </table>
                            <small>
                                <strong>Nota:</strong> Para edificios con toma general, se cobrará $500.00 por cada departamento.
                            </small>
                        </div>
                    </div>

                    <h3 class="h5 mt-4">Conexión a la Red de Alcantarillado </h3>
                    <div class="row">
                        <div class="col-lg-6">
                            <strong>Uso Doméstico</strong>
                            <table class="table table-sm table-bordered mt-2">
                                <thead class="table-light"><tr><th>Tipo de Usuario</th><th>Importe</th></tr></thead>
                                <tbody>
                                <tr><td>Popular</td><td>$150.00</td></tr>
                                <tr><td>Medio</td><td>$250.00</td></tr>
                                <tr><td>Semiresidencial</td><td>$300.00</td></tr>
                                <tr><td>Residencial</td><td>$400.00</td></tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-6">
                            <strong>Uso No Doméstico</strong>
                            <table class="table table-sm table-bordered mt-2">
                                <thead class="table-light"><tr><th>Tipo de Usuario</th><th>Importe</th></tr></thead>
                                <tbody>
                                <tr><td>Comercial</td><td>$400.00</td></tr>
                                <tr><td>Industrial</td><td>$450.00</td></tr>
                                <tr><td>Público y de Servicios</td><td>$150.00</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-11">
            <div class="card mb-4">
                <div class="card-header text-center">
                    <h2 class="h4 my-1">Tarifas Mensuales por Servicio Medido </h2>
                </div>
                <div class="card-body">
                    <p>La instalación de medidor es obligatoria para todos los usuarios. Los usuarios deben realizar su pago dentro de los diez días siguientes a la fecha de facturación. </p>
                    <div class="accordion" id="tarifasMedidas">
                        <div class="accordion-item">
                            <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePopular">A) Uso Doméstico Popular</button></h2>
                            <div id="collapsePopular" class="accordion-collapse collapse" data-bs-parent="#tarifasMedidas">
                                <div class="accordion-body">
                                    <table class="table table-bordered table-striped text-center">
                                        <thead class="table-light"><tr><th>Consumo Mensual (m³)</th><th>Costo por m³</th><th>Tarifa Mensual</th></tr></thead>
                                        <tbody>
                                        <tr><td>0</td><td>$0.00</td><td>$65.00 Mínimo</td></tr>
                                        <tr><td>01 a 20</td><td>$5.08</td><td>$101.60 Mínimo Medido</td></tr>
                                        <tr><td>21 a 30</td><td>$5.18</td><td>De $108.78 a $155.40</td></tr>
                                        <tr><td>31 a 50</td><td>$5.20</td><td>De $161.20 a $260.00</td></tr>
                                        <tr><td>51 a 100</td><td>$5.25</td><td>De $267.75 a $525.00</td></tr>
                                        <tr><td>101 en adelante</td><td>$5.30</td><td>Desde $535.30</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMedio">B) Uso Doméstico Medio</button></h2>
                            <div id="collapseMedio" class="accordion-collapse collapse" data-bs-parent="#tarifasMedidas">
                                <div class="accordion-body">
                                    <table class="table table-bordered table-striped text-center">
                                        <thead class="table-light"><tr><th>Consumo Mensual (m³)</th><th>Costo por m³</th><th>Tarifa Mensual</th></tr></thead>
                                        <tbody>
                                        <tr><td>0</td><td>$0.00</td><td>$75.00 Mínimo</td></tr>
                                        <tr><td>01 a 20</td><td>$5.08</td><td>$101.60 Mínimo Medido</td></tr>
                                        <tr><td>21 a 30</td><td>$5.18</td><td>De $108.78 a $155.40</td></tr>
                                        <tr><td>31 a 50</td><td>$5.25</td><td>De $162.75 a $262.50</td></tr>
                                        <tr><td>51 a 100</td><td>$5.30</td><td>De $270.30 a $530.00</td></tr>
                                        <tr><td>101 en adelante</td><td>$5.40</td><td>Desde $545.40</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseResidencial">C) Uso Doméstico Residencial</button></h2>
                            <div id="collapseResidencial" class="accordion-collapse collapse" data-bs-parent="#tarifasMedidas">
                                <div class="accordion-body">
                                    <table class="table table-bordered table-striped text-center">
                                        <thead class="table-light"><tr><th>Consumo Mensual (m³)</th><th>Costo por m³</th><th>Tarifa Mensual</th></tr></thead>
                                        <tbody>
                                        <tr><td>0</td><td>$0.00</td><td>$75.00 Mínimo</td></tr>
                                        <tr><td>01 a 15</td><td>$5.25</td><td>$78.75 Mínimo Medido</td></tr>
                                        <tr><td>16 a 30</td><td>$5.35</td><td>De $85.60 a $160.50</td></tr>
                                        <tr><td>31 a 50</td><td>$5.45</td><td>De $168.95 a $272.50</td></tr>
                                        <tr><td>51 a 100</td><td>$5.55</td><td>De $283.05 a $555.00</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseComercial">D) Uso Comercial</button></h2>
                            <div id="collapseComercial" class="accordion-collapse collapse" data-bs-parent="#tarifasMedidas">
                                <div class="accordion-body">
                                    <table class="table table-bordered table-striped text-center">
                                        <thead class="table-light"><tr><th>Consumo Mensual (m³)</th><th>Costo por m³</th><th>Tarifa Mensual</th></tr></thead>
                                        <tbody>
                                        <tr><td>0</td><td>$0.00</td><td>$75.00 Mínimo</td></tr>
                                        <tr><td>01 a 15</td><td>$5.25</td><td>$78.75 Mínimo Medido</td></tr>
                                        <tr><td>16 a 30</td><td>$5.35</td><td>De $85.60 a $160.50</td></tr>
                                        <tr><td>31 a 50</td><td>$5.45</td><td>De $168.95 a $272.50</td></tr>
                                        <tr><td>51 a 100</td><td>$5.65</td><td>De $288.15 a $565.00</td></tr>
                                        <tr><td>Más de 101</td><td>$5.70</td><td>Desde $575.70</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseIndustrial">E) Uso Industrial</button></h2>
                            <div id="collapseIndustrial" class="accordion-collapse collapse" data-bs-parent="#tarifasMedidas">
                                <div class="accordion-body">
                                    <table class="table table-bordered table-striped text-center">
                                        <thead class="table-light"><tr><th>Consumo Mensual (m³)</th><th>Costo por m³</th><th>Tarifa Mensual</th></tr></thead>
                                        <tbody>
                                        <tr><td>0</td><td>$0.00</td><td>$105.00 Mínimo</td></tr>
                                        <tr><td>01 a 30</td><td>$3.65</td><td>$109.50 Mínimo Medido</td></tr>
                                        <tr><td>31 a 100</td><td>$5.08</td><td>De $157.08 a $508.00</td></tr>
                                        <tr><td>Más de 101</td><td>$5.18</td><td>Desde $523.18</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-11">
            <div class="card mb-4">
                <div class="card-header text-center">
                    <h2 class="h4 my-1">Tarifas Mensuales y Anuales por Servicio de Cuota Fija </h2>
                </div>
                <div class="card-body">
                    <p>Los usuarios bajo este régimen deben pagar en los primeros diez días de cada mes. El pago anual puede realizarse en los dos primeros meses del año. </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <strong>I. Doméstico</strong>
                            <table class="table table-sm table-bordered mt-2">
                                <thead class="table-light"><tr><th>Tipo</th><th>Cuota Mensual</th><th>Importe Anual</th></tr></thead>
                                <tbody>
                                <tr><td>Doméstico Popular</td><td>$102.00</td><td>$1,224.00</td></tr>
                                <tr><td>Doméstico Medio</td><td>$127.00</td><td>$1,524.00</td></tr>
                                <tr><td>Doméstico Residencial</td><td>$152.50</td><td>$1,830.00</td></tr>
                                <tr><td>Doméstico Mínimo Consumo</td><td>$20.00</td><td>$240.00</td></tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-6">
                            <strong>II. Comercial (+IVA)</strong>
                            <table class="table table-sm table-bordered mt-2">
                                <thead class="table-light"><tr><th>Tipo</th><th>Cuota Mensual</th><th>Importe Anual</th></tr></thead>
                                <tbody>
                                <tr><td>Comercial Menor Consumo</td><td>$127.00</td><td>$1,524.00</td></tr>
                                <tr><td>Comercial Mayor Consumo</td><td>$152.50</td><td>$1,830.00</td></tr>
                                <tr><td>Comercial Mínimo Consumo</td><td>$20.00</td><td>$240.00</td></tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-6">
                            <strong>III. Industrial (+IVA)</strong>
                            <table class="table table-sm table-bordered mt-2">
                                <thead class="table-light"><tr><th>Tipo</th><th>Cuota Mensual</th><th>Importe Anual</th></tr></thead>
                                <tbody>
                                <tr><td>Industrial</td><td>$365.00</td><td>$4,380.00</td></tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-6">
                            <strong>IV. Servicio Público (+IVA)</strong>
                            <table class="table table-sm table-bordered mt-2">
                                <thead class="table-light"><tr><th>Tipo</th><th>Cuota Mensual</th><th>Importe Anual</th></tr></thead>
                                <tbody>
                                <tr><td>Público y de Servicios</td><td>$102.00</td><td>$1,224.00</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-11">
            <div class="card mb-4">
                <div class="card-header text-center">
                    <h2 class="h4 my-1">Otros Cargos y Disposiciones</h2>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Reanudación de servicios por causas imputables al usuario
                            <span class="badge bg-primary rounded-pill">$120.00 + materiales y mano de obra</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Recargos por omisión de pago (mensual acumulable)
                            <span class="badge bg-primary rounded-pill">3%</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Costo por notificación de adeudo
                            <span class="badge bg-primary rounded-pill">$25.00 + IVA</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Cuota mensual por derechos de aguas nacionales
                            <span class="badge bg-primary rounded-pill">$8.00</span>
                        </li>
                    </ul>

                    <div class="alert alert-success mt-4">
                        <h4 class="alert-heading">Descuentos para Usuarios Cumplidos</h4>
                        <ul>
                            <li><strong>Pago Anual Adelantado (Cuota Fija):</strong> Se descuenta el importe de dos meses. </li>
                            <li><strong>Pago Anual Adelantado (Servicio Medido):</strong> Se descuenta el 15% del importe determinado por SOSAPATLAT. </li>
                            <li><strong>Jubilados y Pensionados:</strong> 35% de descuento en un solo predio de uso doméstico. </li>
                            <li><strong>INSEN o INAPAM:</strong> 50% de descuento en un solo predio de uso doméstico. </li>
                        </ul>
                    </div>
                </div>
                <div class="card-footer text-muted text-center">
                    <small>Lo no previsto en este acuerdo se regirá por el Reglamento Interior del SOSAPATLAT. </small>
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection(); ?>