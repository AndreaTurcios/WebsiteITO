<?php
//Clase para definir las plantillas de las páginas web del sitio privado
class plantillaHeader
{
  //Método para imprimir el encabezado y establecer el titulo del documento
  public static function headerTemplate($title)
  {
    print('
       <!DOCTYPE html>
        <html lang="es">
        <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <!-- Agregamos Bootstrap -->
          <link rel="stylesheet" href="../../resources/css/bootstrap/bootstrap.min.css">
          <!-- CSS  -->
          <link rel="stylesheet" href="../../resources/css/Estilos/style.css">
          <link rel="shortcut icon" href="../../resources/img/logos/logoito.png" type="image/x-icon">
          <title>IT Outsourcing</title>
        </head>
        <body>
          <header>
            <ul class="nav navbar-nav ">
              <nav class="navbare" href="#">
                <div class="container">
                  <p class="alinearizq">
                    <b> IT OUTSOURCING </b> • EL SALVADOR +503 7127 6891  •
                  </p>
                  <p class="alinearder">
                    Síguenos en redes sociales
                        <a href="https://twitter.com/nexuserp?lang=es">
                          <img src="../../resources/img/logos/twitter.svg" class="text-right" style="max-width:30%;width:30px;height:auto;">
                        </a> 
                        <a href="https://www.facebook.com/It-Outsourcing-SA-de-CV-370080090404097/">
                          <img src="../../resources/img/logos/facebook.svg" class="text-right" style="max-width:30%;width:30px;height:auto;">
                        </a> 
                  </p>
                </div>
              </nav>
            </ul>
          </header>
          <nav class="navbar nav-color navbar-light navbar-expand-lg px-nav">
              <div class="container ">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex">
                          <li class="nav-item dropdown">
                              <a class="nav-link active dropdown-toggle" href="index.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Sobre Nosotros
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <li><a class="dropdown-item" href="index.php">Principal</a></li>
                                  <li><a class="dropdown-item" href="index.php #nosotros">Acerca de nosotros</a></li>
                                  <li><a class="dropdown-item" href="beneficios.php #beneficios">Beneficios</a></li>
                                  <li><a class="dropdown-item" href="index.php #escogernos">¿Por que elegir IT Outsourcing?</a></li>
                              </ul>
                          </li>
                          <li class="nav-item dropdown">
                              <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Java
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <li><a class="dropdown-item" href="desarrollo_java.php">Desarollo de java</a></li>
                                  <li><a class="dropdown-item" href="#">Aplicaciones de java</a></li>
                                  <li><a class="dropdown-item" href="#">Beneficios de java</a></li>
                              </ul>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link active" aria-current="page" href="desarrollo.php">Desarollo</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link active" aria-current="page" href="#">Base de datos</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link active" aria-current="page" href="#">Solucion de comercios electronicos</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link active" aria-current="page" href="#">Solucion CRM</a>
                          </li>
                      </ul>
                  </div>
                  <span class="navbar-text">
                    <img src="../../resources/img/logos/logoito.png" class="img-logo">
                  </span>
              </div>
          </nav>
        <main>
        ');
  }

  //Método para imprimir el pie y establecer el controlador del documento
  public static function footerTemplate($controller)
  {
    print('
              </main>
                <footer>
                  <!-- Derechos Reservados -->
              <div class="text-center p-3 footer" id="ptDerechos">
                  © 2021 <b>Derechos reservados |</b>
                  <a class="text-blue" href="http://itosv.com/index.html"><u>ITOutsourcing </u></a>
              </div>
                </footer>
                <!-- Script de Bootstrap -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
                <script src="../../resources/js/bootstrap/bootstrap.min.js"></script>
                <!-- Script de Fontawesome -->
                <script src="https://kit.fontawesome.com/592eb2e9e3.js" crossorigin="anonymous"></script>
                <!--Importación de archivos JavaScript al final del cuerpo para una carga optimizada-->
                <script type="text/javascript" src="../../resources/js/sweetalert.min.js"></script> 
                <script type="text/javascript" src="../../resources/js/style.js"></script>
                <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
                <script type="text/javascript" src="../../app/controllers/' . $controller . '"></script>
            </body>
            </html>
      ');
  }
}
  