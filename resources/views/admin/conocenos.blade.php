


<!DOCTYPE html>
<!-- Creado por Alonso -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conocenos</title>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <!--estos tres fueron agregados para el area mis trabajos -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
</head>

<body>
<div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>

    <nav class="navbar">
        <div class="max-width">
            <!--  <div class="logo"><a href="#"><span><i class="fas fa-cogs"></i></span></a></div>la palabra en la barra-->
            <div class="logo"><a href="#"><span><i class=""></i> <i class=""></i> Coffe Time</span></a></div><!--la palabra en la barra-->
            <ul class="menu"><!-- las opciones del menu -->
                <li><a href="#home" class="menu-btn">Portada</a></li>
                <li><a href="#acerca" class="menu-btn">Nosotros</a></li>
                <li><a href="#vision" class="menu-btn">Vision</a></li>
                <li><a href="#mision" class="menu-btn">Mision</a></li>
                <li><a href="#valores" class="menu-btn">Valores</a></li>
                <li><a href="{{ route('home') }}" class="menu-btn">Volver</a></li>
                <li><a href="{{ route('logout') }}" class="menu-btn">Cerrar Sesión</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <!-- home section start -->
    <section class="home" id="home" style="background-image: url('{{ asset('img/portada.jpg')}}'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
        <div class="max-width">
            <div class="home-content">
               <!-- <div class="text-1">Soy</div> -->
               <div class="text-2">Hola {{ Auth::user()->name }}</div>
               <h1>Conocenos </h1>
            </div>
        </div>
    </section>

    <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <!-- about section start -->
    <section class="about" id="acerca">
        <div class="max-width">
            <h2 class="title">Acerca de nosotros</h2>
            <div class="about-content">

                <div class="column left">
                    <img src="img/cafe.jpg" alt="">
                </div>

                <div class="column right">
                    <div class="text"><h2><span>Coffe Time</span></h2></div>
                    <div class="text"><span class="typing-2"></span></div>
                    <h2>
                        Somo una cafeteria chilena comprometida a entregar el mejor servicio y calidad,
                        sumar cada dia CafeLovers a nuestra cartera de clientes y que ellos mismos sean nuestra mejor publicidad
                    </h2>
                </div>

            </div>
        </div>
    </section>

    <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <!-- contact seccion start -->
    <section class="contact" id="vision" style="background-image: url('{{ asset('img/portada.jpg')}}'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
        <div class="max-width">
            <h2 class="title">Vision</h2>

            <div class="contact-content">

                <div class="column left">
                    <div class="text">

                    </div>
                    <h2>
                        Nosotros aspiramos a liderar “La Cultura del Café” <span>chileno</span> entre profesionales y particulares,
                        mediante la investigación, divulgación y comercialización de los mejores cafés,
                        así como de productos y servicios afines a éstos,
                        haciendo de todos ellos amigables y rentables objetos de deseo.
                    </h2>
                    <br>
                </div>



            </div>
        </div>
    </section>

    <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

<!-- about section start -->
<section class="about" id="mision">
    <div class="max-width">
        <h2 class="title">Mision</h2>
        <div class="about-content">

            <div class="column left">
                <img src="img/chica.png" alt="">
            </div>

            <div class="column right">
                <div class="text"><span>Coffe Time</span> </div>
                <div class="text"><span class="typing-2"></span></div>
                <p>
                    Para alcanzar esta Visión, centramos nuestras actividades en:<br>
                    <br>
                    <span>°</span> La compra de los mejores cafés en verde.<br>
                    <span>°</span> El tueste de este café, envasado en grano o molido, y en cápsulas.<br>
                    <span>°</span> La comercialización y distribución de este café, así como de productos afines elaborados por terceros, en el mercado profesional y en el mercado doméstico.<br>
                    <span>°</span> La prestación de servicio técnico para máquinas de café entre nuestros clientes del sector profesional.<br>
                    <span>°</span> La divulgación a través de la formación o de otros medios y canales de las mejores prácticas en torno a “La Cultura del Café”.<br>
                    <br>
                    La prestación de nuestros productos y servicios descritos, se caracteriza por:<br>
                    <br>
                    <span>°</span> La existencia de un tienda electrónica dirigida al mercado doméstico.<br>
                    <span>°</span> La existencia de una red comercial y logística propias dirigida al sector HORECA.<br>
                    <span>°</span> La profesionalidad en el fondo y en la forma.<br>
                    <span>°</span> La cercanía, rapidez, fiabilidad y calidad.<br>
                    <span>°</span> La adaptabilidad.<br>
                </p>
                <br>
                <p>
                    De esta manera, y a través de la gestión constante de un CRM,
                    pretendemos convertirnos en el referente de calidad que comunique eficientemente sus actividades
                    y virtudes en nuestras áreas de influencia. Y mediante este enfoque y a través de un ERP y
                    un CMI debidamente adaptados a nuestras necesidades, mantenernos como una empresa lo
                    suficientemente rentable para poder avalarse a sí misma y remunerar adecuadamente a sus grupos de interés.<br>
                    <br>
                    Coffe Time.SA debe ser un grupo en el que todos quieran trabajar, fruto de las relaciones de colaboración
                    existentes dentro y fuera de la empresa, así como por forjarse a todos los niveles debido a la existencia
                    de un plan de desarrollo personal y grupal que cubra las expectativas de la empresa y sus colaboradores,
                    alineando los intereses de ambos.
                    <br>
                </p>
            </div>

        </div>
    </div>
</section>

<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

<!-- contact seccion start -->
<section class="contact" id="valores"style="background-image: url('{{ asset('img/portada.jpg')}}'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
    <div class="max-width">
        <h2 class="title">Valores</h2>

        <div class="contact-content">
            <div class="column left">
                <h2>
                    <span>°</span> Conocimiento, <span>pasión y energía</span> por todo y en todo lo que hacemos.<br>
                    <br>
                    <span>°</span> Sentido de grupo familiar y compromiso hacia nuestros grupos de interés y la sociedad en general.<br>
                    <br>
                    <span>°</span> Austeridad y sostenibilidad con nuestros propios recursos y los recursos universales.<br>
                    <br>
                    <span>° Honestidad, cercanía y vocación en el servicio al cliente.</span><br>
                    <br>
                    <span>°</span> Apuesta por la <span>calidad</span>, la mejora, la innovación, la creatividad y el cambio en positivo, tanto en la elaboración de nuestros productos como en la prestación de nuestros servicios.<br>
                </h2>
            </div>
<!--
            <div class="column right">
                <form action="#">
                    <div class="button-area">
                        <a href="mailto:alonsocuevaspizarro@gmail.com?Subject=Interesado%20en%20contactarte"><i class='bx bxl-gmail'></i></a>

                    </div>
                </form>
            </div>
        -->
        </div>
    </div>
</section>

<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <!-- footer section start -->
    <footer>
        <span>Creado y Editado -<a href=""> Alonso y Jeremy -</a> <span class="far fa-copyright"></span> 2023 All rights reserved.</span>
    </footer>

    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>














