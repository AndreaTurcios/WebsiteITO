<?php
// Se incluye la clase con las plantillas del documento.
include('../../app/helpers/plantillaHeader.php');
// Se imprime la plantilla del encabezado enviando el título de la página web.
plantillaHeader::headerTemplate('Home');
?>

<div class="bg">
    <div class="cn-titulo" id="titulo-des">
        <div class="img-titulo">
            <div class="text-titulo">
                <h1>Desarrollo en java</h1>
            </div>
        </div>
    </div>
    <div class="container cont-des">
        <div class="des-row">
            <div class="des-col">
                <div class="des-cont">
                    <div class="des-text">
                        <h1>1</h1>
                        <h2>Aplicaciones</h2>
                        <span>
                            <button type="button" class="btn btn-png" id="aplicacion" onclick="funAplicacion()">
                                <a href="#text-ap">Leer mas</a>
                            </button>
                        </span>
                    </div>
                </div>
            </div>
            <div class="des-col">
                <div class="des-cont">
                    <div class="des-text">
                        <h1>2</h1>
                        <h2>Personalizados</h2>
                        <span>
                            <button type="button" class="btn btn-png" id="personalizado" onclick="funPersonalizado()">
                                <a href="#text-per">Leer mas</a>
                            </button>
                        </span>
                    </div>
                </div>
            </div>
            <div class="des-col">
                <div class="des-cont">
                    <div class="des-text">
                        <h1>3</h1>
                        <h2>HTML 5</h2>
                        <span>
                            <button type="button" class="btn btn-png" id="html" onclick="funHtml()">
                                <a href="#text-html">Leer mas</a>
                            </button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="circulo1"></div>
        <div class="circulo2"></div>
        <div class="des-row">
            <div class="des-col">
                <div class="des-cont">
                    <div class="des-text">
                        <h1>4</h1>
                        <h2>Portales</h2>
                        <span>
                            <button type="button" class="btn btn-png" id="portales" onclick="funPortales()">
                                <a href="#text-por">Leer mas</a>
                            </button>
                        </span>
                    </div>
                </div>
            </div>
            <div class="des-col">
                <div class="des-cont">
                    <div class="des-text">
                        <h1>5</h1>
                        <h2>Offtshore</h2>
                        <span>
                            <button type="button" class="btn btn-png" id="offtshore" onclick="funOfftshore()">
                                <a href="#text-off">Leer mas</a>
                            </button>
                        </span>
                    </div>
                </div>
            </div>
            <div class="des-col">
                <div class="des-cont">
                    <div class="des-text">
                        <h1>6</h1>
                        <h2>Python</h2>
                        <span>
                            <button type="button" class="btn btn-png" id="python" onclick="funPython()">
                                <a href="#text-py">Leer mas</a>
                            </button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-ap" id="text-ap">
        <div class="text-des">
            <div class="cont-text-des">
                <h1>Aplicaciones</h1><br>
                <p>
                T Outsourcing El Salvador es una empresa líder que se especializa en la creación 
                de diseños de sitios web orientados a las empresas. Nuestro equipo se involucra 
                con el desarrollo de sitios web además busca que se cree un diseño de sitio web 
                de primera calidad, y comunicándose adecuadamente con los resultados y el progreso 
                actualizado del proyecto y la entrega final de los proyectos, IT Outsourcing 
                El Salvador se asegura de que el proyecto de cada cliente se realiza teniendo en 
                cuenta la máxima prioridad.
                </p>
                <p>
                IT Outsourcing El Salvador crea una identidad de marca única en la web que nuestros 
                diseñadores expertos analizarán o reflejarán en su sitio web. Trabajamos pensando en la 
                calidad y utilizando las últimas herramientas disponibles combinando los estándares de 
                la industria con las habilidades de diseño creativo. Todos y cada uno de los aspectos 
                del diseño se detallan, lo que resulta en un diseño guiado eficaz y utilizable. 
                </p>
                <p>
                El equipo de diseño del sitio web se coordina bien con los programadores y web masters 
                de datos para que podamos ofrecer la combinación correcta de todos en su sitio web, 
                convirtiéndolo en un proyecto exitoso e innovador. El personal de IT Outsourcing El Salvador 
                tiene un conocimiento profundo sobre su campo, Por lo tanto, le brindamos un servicio 
                impecable que le brinda la mejor experiencia de diseño y programación dentro de nuestra 
                área de equipo de desarrollo web.
                </p>
                <p>
                    Algunos de los beneficios del servicio de desarrollo de sitios web de IT Outsourcing El Salvador incluyen:<br><br>
                    • Diseño de sitios web de clase mundial <br>
                    • Profesionalismo combinado con los estándares de la industria.<br>
                    • Últimas herramientas de desarrollo de diseño y programación<br>
                    • Comunicación efectiva<br>
                    • Buen entendimiento del proyecto<br>
                    • Construcción e integración sólida y eficaz de bases de datos en SQL, Sybase, DB2 y Access.<br>
                    • Los conjuntos de habilidades de programación profesional incluyen C ++, Visual Basic, JavaScript y desarrollo PERL<br>
                    • Diseño guiado efectivo / usabilidad<br>
                    • Animación flash / 3d<br>

                </p>
                <button type="button" class="btn btn-light btn-cerrar" id="close" onclick="funCerrar()">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>

    <div class="text-per" id="text-per">
        <div class="text-des">
            <div class="cont-text-des">
                <h1>Personalizado</h1><br>
                <p>
                IT Outsourcing es una compañía regional con sede en San Salvador y Costa Rica que ofrece 
                servicios de desarrollo web personalizados de alta calidad, diseño web y servicios de 
                promoción web a precios económicos. Nuestro equipo tiene un amplio conocimiento en los 
                campos de PHP, ASP, ASP.NET CORE, AJAX, XML, JavaScript entre otros.
                </p>
                <p>
                El desarrollo del sitio web juega un papel integral en la dirección de la empresa hacia sus 
                resultados exitosos. Varios conceptos de diseño web son presentados por nuestros profesionales 
                expertos con el fin de producir un sitio web que es atractivo, así como altamente atractivo 
                para los clientes. Las estrategias de desarrollo web personalizadas altamente eficaces deben 
                configurarse y crearse para que su empresa cree una posición única en el mercado.
                </p>
                <p>
                Unos de los procesos de desarrollo web personalizado es el aspecto de diseño que debe ser tal que 
                describe la naturaleza del negocio y también la estructura de trabajo de la empresa. Las sugerencias 
                de nuestros clientes serán consideradas durante el proceso de desarrollo web. En IT Outsourcing El Salvador, 
                contamos con los mejores desarrolladores web cualificados talentosos y profesionales del software que han 
                estado trabajando con nosotros desde los últimos años. Tienen experiencia profesional sobre las últimas 
                tendencias y acontecimientos que se están experimentando en el mercado. 
                </p>
                <button type="button" class="btn btn-light btn-cerrar" id="close" onclick="funCerrar()">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>

    <div class="text-html" id="text-html">
        <div class="text-des">
            <div class="cont-text-des">
                <h1>Html 5</h1><br>
                <p>
                IT Outsourcing El Salvador, es el nombre líder en América central que proporciona los mejores 
                servicios de desarrollo HTML5 y transmite las soluciones web seguras de entrega, mantenibles y 
                transversales para las grandes empresas que tienen un lugar con varias verticales de la industria. 
                Utilizamos las mejores y más recientes herramientas y estructuras HTML5 como SproutCore, Ember.js, 
                AngularJS y PhoneGap para construir las soluciones HTML5 más inventivas e imaginativas de varias 
                plataformas y gadgets.
                </p>
                <p>
                Ofrecemos servicios para el desarrollo de HTML desde su inicio. En IT Outsourcing China, captamos la 
                tecnología innovadora más reciente y actualizada para una satisfacción más notable para nuestros clientes. 
                El experimentado equipo de desarrolladores de HTML5 puede crear una aplicación HTML5 personalizada según 
                la necesidad del cliente. Aporta un montón de aspectos destacados que hacen que sea potente para potenciar 
                el desarrollo web HTML5 innovador utilizando su almacenamiento / sin conexión, gráficos, 3D, multimedia, 
                estilo CSS3, acceso a archivos / hardware, semántica, marcado en tiempo real, rendimiento y capacidades de 
                integración. Hoy en día, los desarrolladores de HTML5 están utilizando su profunda información y aptitud en 
                el desarrollo de aplicaciones HTML5.
                </p>
                <p>
                HTML5 es la evolución más reciente del estándar que caracteriza a HTML. El término habla de dos ideas únicas. 
                Es una nueva adaptación del lenguaje HTML, con nuevos componentes, rasgos y prácticas, y un conjunto más grande de 
                tecnologías que permite el funcionamiento de sitios web y aplicaciones más diferentes y robustos. Este conjunto a 
                veces se llama HTML5 y se abrevia regularmente a sólo HTML5.
                </p>
                <button type="button" class="btn btn-light btn-cerrar" id="close" onclick="funCerrar()">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>

    <div class="text-por" id="text-por">
        <div class="text-des">
            <div class="cont-text-des">
                <h1>Portales</h1><br>
                <p>
                Un sistema web que proporciona funciones y características para autenticar e identificar 
                a los usuarios y proporcionarles además una interfaz web personalizada fácil, intuitiva y 
                fácil de usar para facilitar el acceso a la información y los servicios que son de gran 
                relevancia e interés para los usuarios se conoce como 'PORTAL'.
                </p>
                <p>
                Una de las principales razones para configurar un portal es producir vasta información y 
                recursos de servicio recibidos de diversas fuentes a varios usuarios de la manera más eficaz. 
                Hoy en día, casi todas las empresas u organizaciones ofrecen los detalles relativos a sus 
                servicios a sus clientes o clientes y a las personas en general a través de la Word Wide Web. 
                Los diferentes niveles y categorías de servicios se mencionan en el sitio web de la empresa 
                correspondiente.
                </p>
                <p>
                El desarrollo del portal está en un punto alto hoy en día. El portal desarrollado debe ser tal que consta de las siguientes funciones y características:<br><br>
                • Disponibilidad de diferentes información y servicios para diferentes grupos de usuarios<br>
                • Disponibilidad de diferentes información y servicios para las necesidades específicas de los grupos de usuarios en un momento específico<br>
                • Proporcionar información automática que sea específicamente fácil de usar<br>
                • Permitiendo al usuario seleccionar la información y el servicio necesarios de su interés y personalizar así la presentación del usuario.<br>

                </p>
                <p>
                Las diversas Soluciones portal proporcionadas por nuestra empresa con la tecnología cambiante y la tendencia de negocio son las siguientes:<br><br>
                • Redes sociales<br>
                • Diferentes comunidades<br>
                • Portales de distribución de contenido<br>
                • Portales de información empresarial<br>
                • Portales de servicios de aplicaciones<br>
                • Portales de servicios web<br>
                • Portales de comercio electrónico B2C <br>
                </p>
                <button type="button" class="btn btn-light btn-cerrar" id="close" onclick="funCerrar()">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>

    <div class="text-off" id="text-off">
        <div class="text-des">
            <div class="cont-text-des">
                <h1>Offshore</h1><br>
                <p>
                IT Outsourcing es una compañía de desarrollo “offshore” de software personalizado que ofrece 
                servicios personalizados en el continente americano. Los servicios en el desarrollo offshore 
                son servicios de programación, desarrollo de productos, desarrollo de software para 
                externalizar soporte y mejora.
                </p>
                <p>
                Contamos con un talentoso grupo de profesionales que trabajan en equipo para proporcionar el 
                mejor servicio y completar las mejores necesidades empresariales.
                </p>
                <button type="button" class="btn btn-light btn-cerrar" id="close" onclick="funCerrar()">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>

    <div class="text-py" id="text-py">
        <div class="text-des">
            <div class="cont-text-des">
                <h1>Python</h1><br>
                <p>
                Python está orientado a objetos, interactivo, lenguaje de programación de alto nivel. Python está diseñado 
                para ser altamente legible. Tiene palabras clave de inglés simples y fáciles utilizadas en el lenguaje de 
                programación por eso es fácil de entender. El programador puede interactuar fácilmente y preguntar con el 
                intérprete directamente para desarrollar códigos.
                </p>
                <p>
                Además, cuenta con grandes funcionalidades de multiplataforma, por las que cualquier persona puede escribir e 
                interactuar sus programas y aplicaciones con otros idiomas. Es aplicable a varias plataformas y aplicaciones, 
                tales como, interacción basada en GUI, procesamiento de imágenes y aplicaciones de diseño gráfico. Es útil para el 
                desarrollo de juegos. Está estructurado para mantener aplicaciones empresariales front-end y back-end, así como 
                aplicaciones de comercio electrónico.
                </p>
                <h6>
                CARACTERÍSTICAS CLAVE DE PYTHON
                </h6>
                <p>
                • Fácil de entender: Python es fácil de leer y entender. Tiene menos palabras clave, estructura simple y una sintaxis definida. <br>
                • Fácil de leer: Python tiene una palabra clave en inglés simple. Por lo tanto, es muy fácil de leer directamente.<br>
                • Fácil de mantener: el código fuente de Python es bastante fácil de mantener.<br>
                • Interacción fácil: Python tiene características especialmente diseñadas para un modo interactivo. Permite pruebas interactivas y depuración de código incorrecto.<br>
                • Portabilidad - Se puede ejecutar en una amplia variedad de plataformas de hardware y tiene la misma interfaz en todas las plataformas.<br>
                • Bases de datos: Python proporciona interfaces con todas las principales bases de datos comerciales.<br>
                • Interfaz gráfica de usuario: Python admite aplicaciones que se pueden crear y migrar a muchas llamadas del sistema, bibliotecas y sistemas Windows, como Windows MFC, Macintosh y el sistema X Windows de Unix.<br>
                • Entre todos los Python también puede ser útil para procesar texto, mostrar números o imágenes. Es útil para resolver ecuaciones científicas y también muy útil para guardar datos. Veraneando todo, es útil para detrás de las escenas procesar muchos elementos.<br>
                </p>
                <button type="button" class="btn btn-light btn-cerrar" id="close" onclick="funCerrar()">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    <div class="circulo3"></div>
</div>

<?php
// Se imprime la plantilla del encabezado enviando el título de la página web.
plantillaHeader::footerTemplate('home.js');
?>