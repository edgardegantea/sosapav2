<?= $this->extend('layout/main'); ?>
<?= $this->section('content'); ?>

    <div class="px-4 py-5 my-5 text-center">
        <h1 class="display-5 fw-bold text-primary">Conozca su Medidor</h1>
        <div class="col-lg-8 mx-auto">
            <p class="lead mb-4">El Sistema Operador de los Servicios de Agua Potable y Alcantarillado del Municipio de Tlatlauquitepec (SOSAPATLAT) le informa cómo conocer de forma detallada su medidor.</p>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card mb-4">
                <div class="card-body">
                    <h2 class="card-title h4">Video Explicativo</h2>
                    <div class="ratio ratio-16x9 mt-3">
                        <iframe src="https://www.youtube.com/embed/VIDEO_ID" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <p class="mt-3 text-start">
                        El video detalla las diferentes partes de un medidor de agua y cómo leerlo [00:00:50].
                        <br><strong>Componentes principales del medidor:</strong>
                    <ul>
                        <li><strong>Registro de consumo en metros cúbicos:</strong> Muestra el consumo en metros cúbicos, donde 1 metro cúbico equivale a 1000 litros de agua [00:01:01]. Los números rojos indican las décimas y centésimas de metro cúbico [00:01:13].</li>
                        <li><strong>Registro de consumo en litros:</strong> Cada número representa un litro, y una vuelta completa indica que han pasado 10 litros de agua [00:01:26].</li>
                        <li><strong>Mariposa:</strong> Este componente gira cuando el medidor está en funcionamiento, lo que significa que el agua está pasando a través de él [00:01:38].</li>
                        <li><strong>Código único o número de serie:</strong> Ayuda a identificar el medidor, ya que no hay dos medidores con el mismo número [00:01:49].</li>
                        <li><strong>Flecha de dirección:</strong> Indica la dirección correcta en la que el agua debe fluir para una instalación adecuada [00:01:59].</li>
                    </ul>
                    <strong>Cómo realizar la lectura del medidor:</strong>
                    Para leer el medidor, se deben registrar todos los dígitos que indican los metros cúbicos consumidos, incluyendo las décimas y centésimas [00:02:18]. Si el último dígito está a medio cambiar, se recomienda registrar el número menor para evitar inconvenientes al usuario, ya que la diferencia se cobrará en el siguiente mes [00:02:51]. Finalmente, el dato se anota en la hoja de registro de lectura [00:03:09].
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row align-items-md-stretch mt-3">
        <div class="col-md-6 mt-3">
            <div class="h-100 p-5 rounded-3 card">
                <h2>Importancia de la Micro-Medición</h2>
                <p>La micro medición forma parte del servicio integral de medición de consumos, tiene por objetivo determinar los derechos del servicio medido de agua potable a través del volumen consumido periódicamente por los usuarios que cuentan con una toma domiciliaria. Con el funcionamiento de un servicio medido en la prestación de los servicios de agua por ende también se logra que nuestros usuarios lleven a cabo un mejor uso de agua, su cuidado, distribución acorde a sus necesidades y como consecuencia le permite al SOSAPATLAT tener una mejor distribución del agua dentro de las cantidades disponibles para la dotación per cápita/día proyectados conforme a su infraestructura hidráulica y capacidad en la prestación del servicio a la comunidad.</p>
                <p>Los micro medidores están diseñados básicamente para ser instalados en cada toma domiciliaria de acuerdo a la clasificación que en el padrón de usuarios este registrada, por ejemplo; pueden ser de uso doméstico popular, domestico residencial, de uso público, en locales comerciales (pequeños medianos y grandes) y en tomas industriales.</p>
                <p>Con la micro medición se tiene la ventaja de tener el conocimiento de la cantidad de agua que se esté consumiendo cada tipo de usuario de acuerdo a la clasificación que este registrada en nuestro padrón de usuarios, al mismo tiempo también permite realizar una mejor administración, operación y mantenimiento de los sistemas de abastecimiento y distribución del agua, para que a su vez con esta información se pueda realizar un análisis, planeación y proyección de volúmenes que permita establecer una aproximación de los consumos hacia una demanda futura. Por lo general, en todos los estudios que se han realizado en nuestro Organismo Operador sobre consumos de agua potable en zonas urbanas, cuando no se encuentra un medidor instalado que registre los volúmenes de agua que se utilizan, se ha detectado que el consumo por usuario es por lo menos el doble o más de lo que normalmente se consume, que cuando si se tiene el control del registro de los volúmenes porque si se cuenta con el medidor instalado. Sin embargo, cuando el consumo se determina por medición, el usuario se beneficia, porque puede regular su consumo de acuerdo con la cantidad de agua que está dispuesto a pagar, asimismo, los sistemas de abastecimiento de agua potable también se benefician porque disponen de un caudal mayor que les permite incrementar su capacidad de volúmenes de agua para atender a más Usuarios.</p>
            </div>
        </div>
        <div class="col-md-6 mt-3">
            <div class="h-100 p-5 rounded-3 card">
                <h2>Ventajas de tener un medidor</h2>
                <ul>
                    <li>Medir el agua en principio para implementar programas de ahorro y reutilización.</li>
                    <li>Ayuda a facturar lo que realmente consumen nuestros usuarios.</li>
                    <li>Tener un uso eficiente del agua, mejora los hábitos de consumo en los usuarios, disminuye el desperdicio del agua.</li>
                    <li>Garantiza el pago justo de su consumo.</li>
                    <li>Nos permite detectar oportunamente las fugas no visibles dentro de la vivienda.</li>
                    <li>Aporta información para los estudios de consumo, y en la planeación del servicio.</li>
                    <li>Puede autorregular su consumo de agua y ahorrar dinero.</li>
                </ul>
                <p class="mt-3">Por todo lo anterior el <strong>SOSAPATLAT</strong> sigue trabajando para que más usuarios cuenten con el servicio medido, y poder garantizar un mejor servicio.</p>
            </div>
        </div>
    </div>

<?= $this->endSection(); ?>
