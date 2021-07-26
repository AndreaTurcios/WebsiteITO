<?php
// Se incluye la clase con las plantillas del documento.
include('../../app/helpers/plantillaHeader.php');
// Se imprime la plantilla del encabezado enviando el título de la página web.
plantillaHeader::headerTemplate('Home');
?>

<div class="bg">
    <div class="animated bounceInRight">
        <div class="container-fluid fondo" id="beneficios">
            <div class="row contenedor-text">
                    <div class="texto">
                        <h1>Desarrollo</h1>
                        <h2>de java</h2>
                        <p>Cada organización utiliza Java de una manera u otra. Como es la plataforma de desarrollo web más estructurada y dinámica. Tiene una respuesta de suma importancia sobre todas las especificaciones de tecnología y desarrollo. Java es útil para el diseño y desarrolla el siguiente tipo de aplicaciones.</p>
                    </div>
            </div>
        </div>
    </div>
</div>

        <div class="des-row">
            <div class="des-col">
                <div class="des-cont">
                    <div class="des-text" id="aplicacionesjava">
                        <h1>1</h1>
                        <h2>Diseños gráficos de interfaz de usuario</h2>
                    </div>
                </div>
            </div>
            <div class="des-col">
                <div class="des-cont">
                    <div class="des-text">
                        <h1>2</h1>
                        <h2>Productos de sistemas integrados</h2>
                    </div>
                </div>
            </div>
            <div class="des-col">
                <div class="des-cont">
                    <div class="des-text">
                        <h1>3</h1>
                        <h2>Aplicaciones web, incluyendo back-end y front-end</h2>
                    </div>
                </div>
            </div>
            <div class="des-col">
                <div class="des-cont">
                    <div class="des-text">
                        <h1>4</h1>
                        <h2>Aplicaciones de comercio electrónico</h2>
                    </div>
                </div>
            </div>
            <div class="des-col">
                <div class="des-cont">
                    <div class="des-text">
                        <h1>5</h1>
                        <h2>Servidores web y servidores de aplicaciones</h2>
                    </div>
                </div>
            </div>
            <div class="des-col">
                <div class="des-cont">
                    <div class="des-text">
                        <h1>6</h1>
                        <h2>Aplicaciones móviles para Android e iOS</h2>
                    </div>
                </div>
            </div>
            <div class="des-col">
                <div class="des-cont">
                    <div class="des-text">
                        <h1>7</h1>
                        <h2>Aplicaciones científicas</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="circulo3"></div>
</div>

<?php
// Se imprime la plantilla del encabezado enviando el título de la página web.
plantillaHeader::footerTemplate('home.js');
?>