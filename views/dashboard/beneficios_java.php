<?php
// Se incluye la clase con las plantillas del documento.
require_once('../../app/helpers/plantillaHeader.php');
// Se imprime la plantilla del encabezado enviando el título de la página web.
plantillaHeader::headerTemplate('Sobre nosotros');
?>

<Section>
<div class="animated bounceInRight">
        <div class="container-fluid fondo" id="beneficios">
            <div class="row contenedor-text">
                    <div class="texto">
                        <h1>Beneficios de</h1>
                        <h2>Java</h2>
                        <p>Diseño de sitios web de clase mundial, profesionalismo combinado con los estándares de 
                           la industria, últimas herramientas de desarrollo de diseño y programación, buen entendimiento 
                           del proyecto, construcción sólida y eficaz de bases de datos en SQL, Sybase, DB2 y Access, 
                           habilidades de programación profesional incluyen C ++, Visual Basic, JavaScript y desarrollo PERL, 
                           diseño guiado efectivo y animación flash / 3d.
                        </p>
                    </div>
            </div>
        </div>
    </div>
</div>


<div class="container" id="crd-ben">
    <div class="cn-ben">
        <div class="crt-ben">
            <div class="cnt-crt-ben">
                <div class="cnt-ben-text">
                    <h2>1</h2>
                    <h4>
                        Alta responsabilidad en el trabajo realizado
                    </h4>
                </div>
            </div>
        </div>
        <div class="crt-ben">
            <div class="cnt-crt-ben">
                <div class="cnt-ben-text">
                    <h2>2</h2>
                    <h4>
                        Profesionales calificados que trabajan en sus proyectos
                    </h4>
                </div>
            </div>
        </div>
        <div class="crt-ben">
            <div class="cnt-crt-ben">
                <div class="cnt-ben-text">
                    <h2>3</h2>
                    <h4>
                        Proyectos que proporcionan servicios de externalización interactivos y funcionales
                    </h4>
                </div>
            </div>
        </div>
    </div>

    <div class="cn-ben">
        <div class="crt-ben">
            <div class="cnt-crt-ben">
                <div class="cnt-ben-text">
                    <h2>4</h2>
                    <h4>
                        Entrega oportuna de los proyectos
                    </h4>
                </div>
            </div>
        </div>
        <div class="crt-ben">
            <div class="cnt-crt-ben">
                <div class="cnt-ben-text">
                    <h2>5</h2>
                    <h4>
                        Reducción de costes
                    </h4>
                </div>
            </div>
        </div>
        <div class="crt-ben">
            <div class="cnt-crt-ben">
                <div class="cnt-ben-text">
                    <h2>6</h2>
                    <h4>
                        Servicios de programación de software personalizado rentables
                    </h4>
                </div>
            </div>
        </div>
    </div>
</div>

</Section>


<?php
// Se imprime la plantilla del encabezado enviando el título de la página web.
plantillaHeader::footerTemplate('account.js');
?>