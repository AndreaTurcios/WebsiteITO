<?php
// Se incluye la clase con las plantillas del documento.
include('../../app/helpers/plantillaHeader.php');
// Se imprime la plantilla del encabezado enviando el título de la página web.
plantillaHeader::headerTemplate('Home');
?>
            <div class="row">
                <div class="text-center" id="Titulo1">
                    <div id="carouselletras" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <h1>- PRODUCTOS -</h1>
                            </div>
                            <div class="carousel-item">
                                <h1>- CALIDAD -</h1>
                            </div>
                            <div class="carousel-item">
                                <h1>- DESARROLLO WEB -</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
            
            <br>
            <div class="row">
                <div class="col-12">
                    <!-- Agregamos los cuadritos -->
                    <div class="row">
                        <!-- Proveedores -->
                        <div class="col-6 col-xs-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 p-3 col-xxl-3 text-center">
                            <a href="gestion_proveedores.php">
                                <div class="row">
                                    <div class="col-12" id="BoxSuperior">
                                        <img src="../../resources/img/materiales/prueba.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-12" id="BoxInferior">
                                        <h4>IDK</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Equipo -->
                        <div class="col-6 col-xs-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 p-3 col-xxl-3 text-center">
                            <a href="GestionEquipo.php">
                                <div class="row">
                                    <div class="col-12" id="BoxSuperior">
                                        <img src="../../resources/img/materiales/prueba.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-12" id="BoxInferior">
                                        <h4>IDK</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Clientes -->
                        <div class="col-6 col-xs-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 p-3 col-xxl-3 text-center">
                            <a href="gestion_clientes.php">
                                <div class="row">
                                    <div class="col-12" id="BoxSuperior">
                                        <img src="../../resources/img/materiales/prueba.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-12" id="BoxInferior">
                                        <h4>IDK</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Empleados -->
                        <div class="col-6 col-xs-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 p-3 col-xxl-3 text-center">
                            <a href="gestion_empleados.php">
                                <div class="row">
                                    <div class="col-12" id="BoxSuperior">
                                        <img src="../../resources/img/materiales/prueba.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-12" id="BoxInferior">
                                        <h4>IDK</h4>
                                    </div>
                                </div>
                            </a>
                        </div>


                    </div>


                </div>
            </div>
            <br>
            <!-- Row para titulo de Visualizar -->
            <div class="row">

                <div class="col-12 text-center" id="Titulo1">
                    <h1>IDK</h1>

                </div>

            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Agregamos los cuadritos -->
                    <div class="row">
                        <!-- Agenda -->
                        <div class="col-6 col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-3 p-3 col-xxl-6 text-center">
                            <a href="agenda.php">
                                <div class="row">
                                    <div class="col-12" id="BoxSuperior">
                                        <img src="../../resources/img/materiales/prueba.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-12" id="BoxInferior">
                                        <h4>IDK</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Bitacora -->
                        <div class="col-6 col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-3 p-3 col-xxl-6 text-center">
                            <a href="bitacora.php">
                                <div class="row">
                                    <div class="col-12" id="BoxSuperior">
                                        <img src="../../resources/img/materiales/prueba.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-12" id="BoxInferior">
                                        <h4>IDK</h4>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            </div>
            <br>
        </div>
    </body>
</main>


<?php
// Se imprime la plantilla del encabezado enviando el título de la página web.
plantillaHeader::footerTemplate('home.js');
?>