<?php
    $pg = "sobre-mi";
?>
<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre mí</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="sobre-mi" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once "menu.php";?>
    </header>
    <main>
        <section class="container" id="descripcion">
            <div class="row mb-5">
                <div class="col-12 col-sm-7">
                    <h1 class="pb-5 pt-3">Sobre mí</h1>
                    <p>Apasionado por la tecnología y gestión de proyectos. Soy docente de cursos de programación Full Stack y de Base de
                    datos.</p>
                    <div class="my-5">
                        <a href="contacto.php" class="btn-rojo">Enviar mensaje</a>
                    </div>
                </div>
                <div class="col-12 col-sm-5 mx-auto text-center">
                <img src="images/nelson-daniel-tarche.png" alt="Nelson Daniel Tarche" class="foto-perfil">
                </div>  
            </div>
        </section>
        <section id="stack-tecnologico">
            <div class="container pb-5">
                <div class="row">
                    <div class="col-12 py-5">
                        <h2>
                            Stack tecnológico
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>Javascript</h3>
                            <img src="images/javascript.jpeg" alt="Javascript">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>PHP</h3>
                            <img src="images/php.jpeg" alt="PHP">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>HTML5</h3>
                            <img src="images/html5.png" alt="HTML5">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>react.js</h3>
                            <img src="images/react.png" alt="react.js">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>jQuery</h3>
                            <img src="images/jquery.jpeg" alt="jQuery">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>Bootstrap</h3>
                            <img src="images/bootstrap.png" alt="Bootstrap">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>Laravel</h3>
                            <img src="images/laravel.png" alt="Laravel">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>MySQL</h3>
                            <img src="images/mariadb.png" alt="MySQL">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>CSS</h3>
                            <img src="images/css.png" alt="CSS">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>Git</h3>
                            <img src="images/git.png" alt="Git">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>Apache</h3>
                            <img src="images/apache.png" alt="Apache">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>MercadoPago</h3>
                            <img src="images/mercadopago.jpeg" alt="MercadoPago">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="experiencia">
            <div class="container">
                <div class="row">
                    <div class="col-12 py-5">
                        <h2>
                            <i class="fa-solid fa-briefcase"></i> Experiencia laboral
                        </h2>
                    </div>
                </div>
                <div class="row shadow">
                    <div class="col-2 d-none d-sm-block p-5">
                        <img src="images/logo-depcsuite.svg" alt="DePC" class="img-fluid gris">
                    </div>
                    <div class="col-sm-10 mt-4">
                        <h3>Director- Founder</h3>
                        <h4>DEPCSUITE SA</h4>
                        <h5>2016 - presente</h5>
                        <p>Lidero el desarrollo y posicionamiento de la empresa en sus tres líneas de negocio: cloud services, desarrollo de
                        sistemas y educación IT en Buenos Aires, con sedes en Puerto Madero y Belgrano. Celebración de convenios estratégicos.
                        Desarrollo de nuevos productos. Coordinación del área de sistemas y educación. Docente de cursos tecnológicos en:
                        Laravel, PHP, HTML, CSS, Javascript, jQuery, AJAX, React.js, Bootstrap, GitLab, HTTP Apache2, SSL, MySQL, HAProxy,
                        ProFTPd, virtualización con VMware ESXi, GNU/Linux Debian.</p>
                    </div>
                    <div class="col-2 d-none d-sm-block p-5">
                        <img src="images/uba.jpeg" alt="UBA" class="img-fluid gris">
                    </div>
                    <div class="col-sm-10 mt-4">
                        <h3>Desarrollador Senior Full Stack</h3>
                        <h4>Universidad de Buenos Aires</h4>
                        <h5>ago 2015 - ene 2020</h5>
                        <p>Planeamiento del proyecto, seguimiento, reuniones de avance, estimación de entregables. Trato con clientes y equipos
                        internos. Desarrollo de nuevos sistemas. Capacitar y organizar el área de desarrollo. Gestionar los ambientes de
                        desarrollo. Administrar repositorio. Asignar tareas al equipo. Tecnologías: Laravel, PHP, HTML, CSS, Javascript, jQuery,
                        AJAX, SQL Server, IIS, Bootstrap, Microsoft Project, GitLab.</p>
                    </div>
                    <div class="col-2 d-none d-sm-block p-5">
                        <img src="images/enacom.jpeg" alt="ENACOM" class="img-fluid gris">
                    </div>
                    <div class="col-sm-10 mt-4">
                        <h3>Desarrollador Senior Full Stack</h3>
                        <h4>ENACOM</h4>
                        <h5>jul 2012 - jun 2018</h5>
                        <p>Diseño y desarrollo de sistemas internos para el organismo. Mantenimiento de los sistemas existentes. Gestión de base de
                        datos y reportes. Trato con distintos clientes internos y equipos. Reuniones de avance. Organización del proyecto en
                        Redmine. Resolución de pedidos mediante sistema de incidencias GLPI. Tecnologías: PHP, HTML, CSS, jQuery, Debian, AJAX,
                        Javascript, jQuery, MySQL, PHP, Python, Mongo DB, PostgreSQL, firma electrónica, servicios REST, interfaz con SAP,
                        XAMPP.</p>
                    </div>
                    <div class="col-2 d-none d-sm-block p-5">
                        <img src="images/sin-logo.png" alt="Certificado Digital SA" class="img-fluid gris">
                    </div>
                    <div class="col-sm-10 mt-4">
                        <h3>Consultor Desarrollador Freelance</h3>
                        <h4>Certificado Digital SA</h4>
                        <h5>ago 2014 - dic 2016</h5>
                        <p>Proyecto de desarrollo de sistemas web para los clientes de la consultora. Tecnologías: PHP, CSS, HTML, jQuery,
                        Javascript, MySQL, WSDL.</p>
                    </div>
                    <div class="col-2 d-none d-sm-block p-5">
                        <img src="images/golshy.jpeg" alt="Agencia Golshy" class="img-fluid gris">
                    </div>
                    <div class="col-sm-10 mt-4">
                        <h3>Desarrollador Back-end y Front-end</h3>
                        <h4>Agencia Golshy</h4>
                        <h5>ago 2014 - dic 2016</h5>
                        <p>Desarrollo, implementación y mantenimiento de sistemas y páginas Web. Relevamiento de requisitos. Trato con el cliente.
                        Desarrollo del Brief de marca y del sitio web. Participación en eventos de networking. Tecnologías: HTML, CSS,
                        Javasacript, jQuery, MySQL, AJAX, API, Facebook, API Twitter, y API Youtube, Drupal, Wordpress.</p>
                    </div>
                    <div class="col-2 d-none d-sm-block p-5">
                        <img src="images/globons.png" alt="Globons" class="img-fluid gris">
                    </div>
                    <div class="col-sm-10 mt-4">
                        <h3>Desarrollador Back-end y Front-end</h3>
                        <h4>Globons SRL</h4>
                        <h5>abr 2010 - ene 2011</h5>
                        <p>Desarrollo de sistemas web para los distintos proyectos de la empresa. Tecnologías: ASP.NET, C#, jQuery, AJAX,
                        SQLServer, HTML, CSS.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="cursos">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>
                            Formación acádémica
                        </h2>
                    </div>
                </div>
            </div>
        </section>
        <section id="cursos">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>
                            Cursos de desarrollo profesional
                        </h2>
                    </div>
                </div>
            </div>
        </section>
        <section id="hobbies">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        
                    </div>
                    <div class="col-12 col-sm-6">
                        
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="container mt-auto pb-4">
        <div class="btn-whatsapp">
            <i class="fa-brands fa-whatsapp"></i>
        </div>
        <div class="row">
            <div class="col-3">
                <a href="" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                <a href="" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-3">
                Sponsor <a href="https://depcsuite.com">DePC Suite</a>
            </div>
            <div class="col-3">
                <a href="mailto:info@nelsontarche.com.ar">info@nelsontarche.com.ar</a>
            </div>
        </div>
    </footer>

</body>

</html>