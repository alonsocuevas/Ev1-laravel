<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>
    <!--estos tres fueron agregados para el area mis trabajos -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>

    <title>Document</title>
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
                <li><a href="#cafe" class="menu-btn">Café</a></li>
                <li><a href="#pasteleria" class="menu-btn">Pasteleria</a></li>
                <li><a href="#sandwish" class="menu-btn">Sandwish</a></li>
                <li><a href="{{ route('conocenos') }}" class="menu-btn">Conocenos</a></li>
                <li><a href="{{ route('logout') }}" class="menu-btn">Cerrar Sesión</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

 <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------->



    <!-- home section start -->
    <section class="home" id="home" style="background-image: url('{{ asset('img/home.jpg')}}'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
        <div class="max-width">
            <div class="home-content">
               <!-- <div class="text-1">Soy</div> -->
                <div class="text-2">Bienvenido {{ Auth::user()->name }}</div>
                <div class="text-3"> <span class="typing"></span></div>
                <a class="#" href="{{ route('conocenos') }}">Conocenos</a>
            </div>
        </div>
    </section>



 <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <section class="cafe" id="cafe" style="background-image: url('{{ asset('img/home.jpg')}}');">

    <div class="max-width">
    <h2 class="title">Café</h2>
        <div class="carousel owl-carousel">
        @foreach($cafes as $dato)
            <div class="card">
                <div class="box">
                <img src="img/{{ $dato->img }}" alt="">
                    <br>
                    <h2>{{ $dato->name }}</h2>
                    <h2>{{ $dato->price }}</h2>           
                    <br>
                <!-- Button modal -->
                <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal{{ $dato->id }}">
                Descripcion
                </a>
        </div>
    </div>
                <!-- Modal -->
    <div class="modal fade" id="modal{{ $dato->id }}" tabindex="-1" aria-labelledby="modalLabel{{ $dato->id }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalLabel{{ $dato->id }}">Descripcion:</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            <div class="modal-body">
            <p class="text-justify">
            {{ $dato->description }}
            </p>
            </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Volver</button>
        </div>
    </div>
  </div>
</div> 
            @endforeach
        </div>
    </div>
</section>

 <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <section class="cafe" id="pasteleria" style="background-image: url('{{ asset('img/home.jpg')}}'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">

    <div class="max-width">
            <h2 class="title">Pasteleria</h2>

            <div class="carousel owl-carousel">
            @foreach($pasteleria as $dato)
            <div class="card">
                <div class="box">
                <img src="img/{{ $dato->img }}" alt="">
                    <br>
                    <h2>{{ $dato->name }}</h2>
                    <h2>{{ $dato->price }}</h2> 
                    <br>
                    <!-- Button modal -->
                    <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal{{ $dato->id }}">
                Descripcion
                </a>
                </div>
            </div>

                    <!-- Modal -->
    <div class="modal fade" id="modal{{ $dato->id }}" tabindex="-1" aria-labelledby="modalLabel{{ $dato->id }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalLabel{{ $dato->id }}">Descripcion:</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            <div class="modal-body">
            {{ $dato->description }}
            </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Volver</button>
        </div>
    </div>
  </div>
</div> 
            @endforeach
            </div>
        </div>
    </section>

 <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <section class="cafe" id="sandwish" style="background-image: url('{{ asset('img/home.jpg')}}'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">

    <div class="max-width">
            <h2 class="title">Sándwich</h2>

            <div class="carousel owl-carousel">
            @foreach($sandwich as $dato)
            <div class="card">
                <div class="box">
                <img src="img/{{ $dato->img }}" alt="">
                    <br>
                    <h2>{{ $dato->name }}</h2>
                    <h2>{{ $dato->price }}</h2> 
                    <br>
                    <!-- Button modal -->
                    <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal{{ $dato->id }}">
                Descripcion
                </a>
                </div>
            </div>

                    <!-- Modal -->
    <div class="modal fade" id="modal{{ $dato->id }}" tabindex="-1" aria-labelledby="modalLabel{{ $dato->id }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalLabel{{ $dato->id }}">Descripcion:</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            <div class="modal-body">
            {{ $dato->description }}
            </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Volver</button>
        </div>
    </div>
  </div>
</div> 
            @endforeach
            </div>
        </div>

    </section>
 <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
     <!-- footer section start -->
     <footer>
        <span>Creado y Editado -<a href=""> Alonso y Jeremy -</a> <span class="far fa-copyright"></span> 2023 All rights reserved.</span>
    </footer>
 <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

 <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>

<!-- todo este estilo no encuentro como agregarlo en una carpeta aparte -->

<style>



</style>
