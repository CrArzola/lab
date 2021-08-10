<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php include("titulo/titulo.php") ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="shortcut icon" type="image/ico" href="images/logo.png" />
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
    <link href="css/leaguespartan.css" rel="stylesheet">
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/revolution_style.css">
    <link rel="stylesheet" href="css/rs-settings.css">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/space.css">
    <link rel="stylesheet" href="css/overright.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body data-spy="scroll" data-target=".mainmenu-area">

    <div class="poreloader">
        <div class="sk-rotating-plane"></div>
    </div>
    <header class="header-area relative" id="home">
        <nav class="navbar mainmenu-area navbar-fixed-top" data-spy="affix" data-offset-top="100">
            <div class="container">
                <div class="navbar-header smoth-scroll">
                    <a href="#home" class="navbar-brand"><img src="images/logo.png" alt=""></a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainmenu">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse " id="mainmenu">
                    <a href="citas.php" class="btn btn-default navbar-btn navbar-right hidden-xs">Mi agenda</a>
                    <ul class="nav navbar-nav navbar-right smoth-scroll">
                        <li class="active"><a href="#home">Inicio</a></li>
                        <li><a href="#about">Acerca de</a></li>
                        <li><a href="#service">Servicios</a></li>
                        <li><a href="#facilites">Instalaciones</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="space-50 hidden visible-xs"></div>
    <div id="slider" class="tp-banner-container index-rev-slider clearfix">
        <div class="round-bottom"></div>
        <div class="tp-banner">
            <ul>
                <!-- img1
					============================================= -->
                <li data-transition="slideright" data-slotamount="6" data-thumb="">
                    <img src="images/fondo1.jpg" alt="image" />
                    <div class="caption sft big_white" data-x="260" data-y="260" data-speed="1500" data-start="1700" data-easing="easeOutExpo"><strong>¡Somos tu mejor opción!</strong></div>
                    <div class="caption sfb medium_grey text-center" data-x="140" data-y="350" data-speed="1500" data-start="2500" data-easing="easeOutExpo">Nuestro laboratorio de Análisis Clínicos está equipado para ofrecer pruebas confiables y resultados certeros.</div>
                    <div class="caption sfb" data-x="492" data-y="440" data-speed="2000" data-start="3000" data-easing="easeOutExpo"><a href="#about" class="btn btn-default">Leer mas</a></div>
                </li>

                <!-- img2
					============================================= -->
                <li data-transition="slideright" data-slotamount="6" data-thumb="">
                    <img src="images/fondo2.jpg" alt="image" />
                    <div class="caption sft big_white" data-x="260" data-y="260" data-speed="1500" data-start="1700" data-easing="easeOutExpo"><strong>¡Un gran servicio!</strong></div>
                    <div class="caption sfb medium_grey text-center" data-x="140" data-y="350" data-speed="1500" data-start="2500" data-easing="easeOutExpo">Analizamos muestras biológicas que contribuyen al estudio, prevención, diagnóstico y tratamiento de enfermedades.</div>
                    <div class="caption sfb" data-x="492" data-y="440" data-speed="2000" data-start="3000" data-easing="easeOutExpo"><a href="#about" class="btn btn-default">Leer mas</a></div>
                </li>
                <!-- img3
					============================================= -->
                <li data-transition="slideup" data-slotamount="15" data-thumb="">
                    <img src="images/fondo3.jpg" alt="image" />
                    <div class="caption sft big_white" data-x="0" data-y="240" data-speed="1500" data-start="1700" data-easing="easeOutExpo"><strong>mejor tecnología</strong></div>
                    <div class="caption sfr medium_grey" data-x="0" data-y="320" data-speed="1500" data-start="2500" data-easing="easeOutExpo">Contamos con más de 1,500 estudios de laboratorio, los cuales, están supervisados por nuestros altos estándares de calidad.</div>
                    <div class="caption sfb" data-x="0" data-y="400" data-speed="300" data-start="2500" data-easing="easeOutExpo"><a href="#about" class="btn btn-tr white">Leer mas</a></div>
                </li>
            </ul>
        </div>
    </div>

    <section class="appoinment-area">
        <div class="container bg-white appoinment-form">
            <div class="row">
                <div class="col-xs-12 col-sm-6 padding-60">
                    <h3>Solicitar información</h3>
                    <hr>
                    <form action="conexiones/validar.php" method="post">
                        <div class="form-group">
                            <label for="nombre">Nombre y apellido</label>
                            <input type="text" class="form-control" name="nombres" placeholder="nombre y apellido" required="">
                        </div>
                        <div class="form-group">
                            <label for="email">E-Mail</label>
                            <input type="text" class="form-control" name="email" placeholder="example@email.com" required="">
                        </div>
                        <div class="form-group">
                            <label for="Mensaje">Mensaje</label>
                            <textarea class="form-control" name="mensaje" placeholder="Escriba aqui su mensaje" required=""></textarea>
                        </div>
                        <div class="space-15"></div>
                        <button type="submit" class="btn btn-primary sh-hover">Enviar</button>
                    </form>
                </div>
                <div class="col-xs-12 col-sm-6 padding-60 contact-details">
                    <h3>Contactanos</h3>
                    <hr>
                    <table class="table">
                        <tr>
                            <td>
                                <div class="icon-sm"><i class="fa fa-phone"></i></div>
                            </td>
                            <td><a href="#">+52 222 524 83 53</a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="icon-sm"><i class="fa fa-envelope"></i></div>
                            </td>
                            <td><a href="#">bioclin@live.com</a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="icon-sm"><i class="fa fa-map-marker"></i></div>
                            </td>
                            <td>5 norte 2802
                                <br> Tehuacan Puebla</td>
                        </tr>
                    </table>
                    <div class="space-20"></div>
                    <h4>Tiempo abierto</h4>
                    <hr>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Día laboral</td>
                                <td>06:00 am - 8:00 pm</td>
                            </tr>
                            <tr>
                                <td>Fines de semana</td>
                                <td>07:00 am - 7:00 pm</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <section class="relative about-area" id="about">
        <div class="space-40"></div>
        <div class="container">
            <div class="row relative">
                <div class="col-xs-12 col-sm-8 col-md-6 padding-60">
                    <h3>Sobre nosotros</h3>
                    <div class="space-10"></div>
                    <p><font color="black">MISIÓN:</font> Brindar servicio de exámenes clínicos eficientes, confiables y oportunos que satisfagan las necesidades de nuestros clientes, a través de un equipo humano altamente calificado, empleando estándares de calidad reconocidos a nivel mundial.<br><br>


                    <font color="black">VISIÓN</font>
					Ser el eje alrededor del cual las organizaciones que representan a los médicos articulan su trabajo, en beneficio de la profesión, de ellos mismos y de la sociedad colombiana en general.

                    </p>
                    <div class="space-60"></div>
                    <h4><q>La salud es el tesoro más preciado.</q></h4>
                    <div class="space-30"></div>
                    <div class="panel-group about-panel" id="accordion">
                        <div class="panel">
                            <div class="panel-heading">
                                <p class="panel-title"><a class="" data-toggle="collapse" data-parent="#accordion" href="#collapse1"><span class="gr-icon icon-md pull-left flaticon-medal"></span> laboratorio clinico con experiencia</a></p>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse in">
                                <div class="panel-body">Contamos con más de 1000 pruebas, de las cuales, la mayoría se procesan en cada uno de nuestros laboratorios.</div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-heading">
                                <p class="panel-title"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse2"><span class="gr-icon icon-md pull-left flaticon-hospital-buildings"></span> instalaciones modernas y confortables</a></p>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse">
                                <div class="panel-body">Nuestras instalaciones ofrecen estudios de análisis recientes de alta complejidad cuidando la experiencia de nuestros clientes.</div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-heading">
                                <p class="panel-title"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse3"><span class="gr-icon icon-md pull-left flaticon-syringe"></span> Equipo médico de calidad</a></p>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse">
                                <div class="panel-body">Gracias nuestra tecnologia es posible analizar una gran cantidad de muestras biológicas y cultivos diariamente, ya que todo se realiza con equipos automatizados de alta tecnologia que permiten la reducción en los tiempos de espera.</div>
                            </div>
                        </div>
                    </div>
                    <div class="space-20"></div>
                </div>
                <div class="hidden-xs col-sm-4 right-side-image">
                    <img src="images/doctor.png" width="650" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="relative bg-white" id="service">
        <div class="space-100"></div>
        <div class="container">
            <div class="row ">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 text-center">
                    <h3>¡Tu eres nuestra prioridad!</h3>
                    <p>Le Brindamos la mejor atencion al paciente</p>
                    <div class="space-60"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="single-service" style="background-image: url('images/service/service-01.jpg'); ">
                        <div class="single-service-text">
                            <div class="right-text-effect">
                                <h5 class="text-uppercase text-white">LABORATORIO</h5>
                                <div class="space-20"></div>
                                <p>Somos un laboratorio comprometido con la excelencia en el servicio, para superar las expectativas de nuestros clientes, ofreciendo el máximo desempeño humano y profesional.</p>
                                <div class="space-20"></div>
                                <div class="service-read-more-icon">
                                    <a href="#"><i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="service-title">
                            <h4 class="text-uppercase">LABORATORIO</h4>
                        </div>
                    </div>
                    <div class="space-30"></div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="single-service" style="background-image: url('images/service/service-02.jpg'); ">
                        <div class="single-service-text">
                            <div class="right-text-effect">
                                <h5 class="text-uppercase text-white">Personal</h5>
                                <div class="space-20"></div>
                                <p>Contamos con un equipo multidisciplinario altamente calificado que utilizando tecnología de vanguardia aseguran la confiabilidad de los resultados.</p>
                                <div class="space-20"></div>
                                <div class="service-read-more-icon">
                                    <a href="#"><i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="service-title">
                            <h4 class="text-uppercase">Personal</h4>
                        </div>
                    </div>
                    <div class="space-30"></div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="single-service" style="background-image: url('images/service/service-03.jpg'); ">
                        <div class="single-service-text">
                            <div class="right-text-effect">
                                <h5 class="text-uppercase text-white">Un espacio para ti</h5>
                                <div class="space-20"></div>
                                <p>En nuestro laboratorio su diseño y arquitectura juegan un rol importante para brindarte una gran estancia, asi que disfrutaras de asistir a tu toma de analisis.</p>
                                <div class="space-20"></div>
                                <div class="service-read-more-icon">
                                    <a href="#"><i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="service-title">
                            <h4 class="text-uppercase">Un espacio para ti</h4>
                        </div>
                    </div>
                    <div class="space-30"></div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="single-service" style="background-image: url('images/service/service-04.jpg'); ">
                        <div class="single-service-text">
                            <div class="right-text-effect">
                                <h5 class="text-uppercase text-white">Gran variedad de analisis</h5>
                                <div class="space-20"></div>
                                <p>Contamos con una amplia gama de servicios en análisis clínicos, estudios de rayos x, ultrasonidos y estudios especiales certificados bajo la Norma ISO 9001:2008</p>
                                <div class="space-20"></div>
                                <div class="service-read-more-icon">
                                    <a href="#"><i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="service-title">
                            <h4 class="text-uppercase">Gran variedad de analisis</h4>
                        </div>
                    </div>
                    <div class="space-30"></div>
                </div>
            </div>
        </div>
        <div class="space-100"></div>
    </section>

    <section class="relative" id="facilites">
        <div class="space-100"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 text-center">
                    <h3>Nuestras instalaciones</h3>
                    <p>Pensando en ti, diseñamos un espacio para cumplir la mayoria de tus necesidades</p>
                    <div class="space-60"></div>
                </div>
            </div>
                    </div>
                    <div class="space-30"></div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="single-facilities">
                        <div class="facilities-icon">
                            <span class="flaticon-tablet-and-pill"></span>
                        </div>
                        <div class="sm-title">Tienda</div>
                        <p>Contamos con una tienda en caso de que necesites un complemento para tus analisis.</p>
                    </div>
                    <div class="space-30"></div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="single-facilities">
                        <div class="facilities-icon">
                            <span class="flaticon-disability"></span>
                        </div>
                        <div class="sm-title">Un espacio para todos</div>
                        <p>Nuestras instalaciones estan diseñados para que los minusvalidos puedan ingresar sin algun problema</p>
                    </div>
                    <div class="space-30"></div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="single-facilities">
                        <div class="facilities-icon">
                            <span class="flaticon-technology"></span>
                        </div>
                        <div class="sm-title">Sala de laboratorio</div>
                        <p>No te preocupes, pues en nuestras instalaciones realizamos la mayoria de analisis clinicos</p>
                    </div>
                    <div class="space-30"></div>
                </div>
        </div>
        
    </section>

    
        </div>
        <div class="space-100"></div>
    </section>

    <section class="relative text-white">
        <div class="section-bg color">
            <div class="section-bg bg-2"></div>
        </div>
        <div class="container">
            <div class="row text-white relative">
                <div class="col-xs-12 col-sm-6">
                    <div class="space-100"></div>
                    <h3 class="text-white">Consejos para conseguir una buena salud</h3>
                    <div class="space-60"></div>
                    <div class="testimonials">
                        <div class="item">
                            <div class="sm-title">Mantener una alimentación adecuada:</div>
                            <q>Mantener una alimentación que debe ser variada. Seguir una dieta en la que estén presentes diferentes tipos de alimentos es esencial para conseguir una buena salud. Nuestro organismo está preparado para asimilar todo tipo de alimentos y todos estos alimentos nos aportarán una serie de nutrientes necesarios para conseguir una buena salud. Por ello es necesario que echemos mano de todo tipo de alimentos.</q>
                        </div>
                        <div class="item">
                            <div class="sm-title">Practicar Deporte:</div>
                            <q>El deporte es una de las mejores maneras de mantenernos jóvenes y en perfectas condiciones, ya que ayuda a nuestro organismo a estar activo y a nuestros músculos a mantenerse tonificados y fuertes. A la hora de hacer deporte es necesario ser constantes y realizar por lo menos tres sesiones por semana, sea de la actividad que sea, ya que lo ideal es variar y evitar acostumbrarnos a una misma actividad.</q>
                        </div>
                        <div class="item">
                            <div class="sm-title">Ingerir frutas y verduras:</div>
                            <q>Incluir en la dieta frutas y verduras es esencial para mantenernos en plena forma. Las frutas nos aportarán vitaminas y minerales necesarios para el correcto funcionamiento del cuerpo. Un punto a tener en cuenta sobre las frutas y verduras es su alto contenido en fibra, que nos ayudará a depurar nuestro organismo.</q>
                        </div>
                        <div class="item">
                            <div class="sm-title">Evitar el estrés:</div>
                            <q>Relajarnos y evitar las situaciones de estrés a diario nos ayudará a tener una mejor salud. Es necesario tener actividades que nos ayuden a evadirnos de la rutina cotidiana. Sesiones de relajación, yoga, hobbies, deporte… Cualquier actividad que nos relaje es muy recomendable para estar en perfectas condiciones.</q>
                        </div>
                    </div>
                    <div class="space-100"></div>
                </div>
                <div class="hidden-xs col-sm-4 col-sm-offset-2 right-side-image">
                    <img src="images/paciente.jpg" alt="">
                </div>
            </div>
        </div>
    </section>



    <footer class="bg-white">
        <div class="space-15"></div>
        <div class="container">
            <div class="row xs-center">
                <div class="col-xs-12 col-sm-6">
                    <img src="images/logo.png" width="100" alt="">
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="space-5"></div>
                    <ul class="list-inline list-unstyled social-list text-right xs-center">
                        <li><a href="https://www.facebook.com/LaboratorioDeAnalisBioClinic" target="_black"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" target="_black"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="space-15"></div>
    </footer>


    <!--Vendor-JS-->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <!--Plugin-JS-->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/contact-form.js"></script>
    <script src="js/scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/maps.js"></script>
    <!--Themepunce-Plugin-->
    <script src="js/themepunch.plugins.min.js"></script>
    <script src="js/themepunch.revolution.min.js"></script>
    <!--Main-active-JS-->
    <script src="js/main.js"></script>
</body>

</html>