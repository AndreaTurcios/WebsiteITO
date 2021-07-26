<?php
// Se incluye la clase con las plantillas del documento.
include('../../app/helpers/plantillaHeader.php');
// Se imprime la plantilla del encabezado enviando el título de la página web.
plantillaHeader::headerTemplate('Home');
?>



<div class="container-fluid">
    <div class="row ">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../../resources/img/logos/carrusell.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../resources/img/logos/carruselimagen.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../resources/img/logos/carruselim.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>

<div class="container-fluid zon-text" id="nosotros">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="titulo">Sobre nosotros</h1>
            </div>
            <div class="col">
                <h5 class="parafo">
                    IT Outsourcing El Salvador, se especializa en el desarrollo y diseño de aplicaciones web esencialmente rentables, programación con ASP, ASP.net Core, Java y PHP entre otros, alojamiento de sitios web, desarrollo de contenido, servicios de SEO y otras tecnologías de Internet.
                </h5>

                <h5 class="parafo">
                    En el área de base tecnológica, IT Outsourcing El Salvador existe con un nombre reconocido que realmente puede brindar los servicios tan necesarios que proporcionamos, con competencia y confidencialidad. Contamos con una combinación única de perspicacia técnica y comercial que incluye un staff de trabajadores experimentados, que están a su disposición para brindar servicios de valor agregado.
                </h5>

                <span id="identificador">
                    <h5 class="parafo">
                        Supervisamos constantemente nuestro servicio interno y la forma en que lo entregamos a nuestros clientes para que mantengamos el alto nivel de calidad que proporcionamos. IT Outsourcing ha logrado un excelente historial de entrega de proyectos de calidad a nuestros clientes. IT Outsourcing El Salvador se enorgullece de hablar comercialmente y prefiere mejorar el negocio del cliente a través de una excelente optimización de motores de búsqueda, tráfico de sitios web y otras promociones.
                    </h5>
                    <h5 class="parafo">
                        Somos una compañía que se dedican a ayudar a nuestros clientes en El Salvador y también en toda América central a lograr una ventaja de mercado mediante el uso de tecnologías avanzadas basadas en Internet.
                    </h5>
                    <h5 class="parafo">
                        En IT Outsourcing El Salvador, creemos en el trabajo en equipo a través del compromiso para que se puedan alcanzar los objetivos comerciales. Independientemente del negocio que realice y del método que utilice, proporcionamos un servicio excelente a precios muy accesibles. Póngase en contacto con nuestro representante ahora.
                    </h5>
                    <h5 class="parafo">
                        Trabajamos de manera inteligente utilizando la tecnología más reciente y actualizada con profesionales experimentados que creen en el compromiso y la calidad de la entrega de proyectos.
                    </h5>
                </span>

                <button type="button" class="btn btn-light" id="leerMas">
                    Leer mas
                </button>


            </div>
        </div>
    </div>
</div>

<div class="container-fluid fondo" id="beneficios">
    <div class="row contenedor-text">
        <div class="col">
            <div class="texto">
                <h1>Beneficios de</h1>
                <h2>IT Outsourcing</h2><br>
                <p>IT Outsourcing permite reducir los costos de externalización y aumentar los ingresos a un nivel notable</p>
                <a href="#crd-ben"><button type="button" class="btn btn-success">Ver beneficios</button></a>

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

<div class="container" id="escogernos">
    <div class="row">
        <div class="col">
            <h1 class="titulo">
                ¿Por que elegir IT Outsourcing?
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="lin">
            <div class="con-lin">
                <h4>
                    Nosotros, en IT Outsourcing El Salvador diseñamos y desarrollamos las funcionalidades según las altamente requeridas
                    por los clientes y siempre esperamos cumplir con todos los requisitos posibles de los clientes y darles la mejor
                    experiencia que siempre tuvieron. Con todas las máquinas avanzadas, herramientas, lenguajes de programación proporcionamos
                    la salida extensible. Creemos firmemente en el enfoque final del resultado. No sólo durante el desarrollo, sino que siempre
                    tratamos de proporcionar el mejor soporte al final del proyecto
                </h4>
            </div>
            <div class="con-lin">
                <h4>
                    Todos nuestros diseños y desarrollos son altamente sensibles y pueden cumplir con todos los dispositivos y puede soportar
                    todos los protocolos requeridos.
                </h4>
            </div>
            <div class="con-lin">
                <h4>
                    Entendemos su privacidad e importancia de su producto. Es por eso que nuestros códigos son altamente seguros y damos
                    actualizaciones oportunas con todo nuestro desarrollo.
                </h4>
            </div>
            <div class="con-lin">
                <h4>
                    La subcontratación de TI a China cree en un enfoque futurista. ¡Y esa es la razón por la que nunca lo sentirás anticuado!
                </h4>
            </div>
        </div>
    </div>
</div>

</body>
</main>


<?php
// Se imprime la plantilla del encabezado enviando el título de la página web.
plantillaHeader::footerTemplate('home.js');
?>