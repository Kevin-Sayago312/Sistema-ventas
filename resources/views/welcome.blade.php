<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Sistema de ventas para gestionar compras, ventas
    clientes, proveedores, productos, categorías, etc. Ideal para pequeños y medianos negocios que deesen 
    automatizar sus procesos y tener a la mano cualquier información sobre su negocio" />
    <meta name="author" content="SakCode" />
    <title>Sistema de venta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>

    <!--Barra de navegación--->
    <nav class="navbar navbar-expand-md bg-body-secondary">
        <div class="container-fluid">
            <!---Marca navegación-->
            <a class="navbar-brand" href="{{route('panel')}}">
                <img src="{{ asset('assets/img/icon.png') }}" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
                Sistema de venta
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!----Lista de opciones del menú-->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('panel')}}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Acerca de</a>
                    </li>
                </ul>

                <form class="d-flex" action="{{route('login')}}" method="get">
                    <button class="btn btn-primary" type="submit">Iniciar sesión</button>
                </form>

            </div>
        </div>
    </nav>

    <!----Carrusel--->
    <div id="carouselExample" class="carousel slide carousel-fade">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('assets/img/img_carrusel_1.png')}}" class="d-block w-100" alt="banner de invitacion">
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/img/img_carrusel_2.png')}}" class="d-block w-100" alt="Banner de publicidad">
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/img/img_carrusel_3.png')}}" class="d-block w-100" alt="Banner de contáctanos">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!---Section Ventajas / Desventajas--->
    <div class="container-md">
        <div class="row my-4 g-5">
            <div class="col-lg-6">
                <div class="card border-0">
                    <div class="card-header text-center text-info border-info fs-5 fw-semibold border-3 rounded-start rounded-end">
                        Con un sistema de ventas web
                    </div>
                    <div class="card-body">
                        <ul class="text-light">
                            <li>
                                <p class="card-text mb-2">Tienes acceso a tu sistema 24/7 y desde cualquier parte.</p>
                            </li>
                            <li>
                                <p class="card-text mb-2">Permite la automatización de tareas como la gestión de inventario,
                                    el procesamiento de pedidos y la recopilación de datos,
                                    lo que ahorra tiempo y reduce errores.</p>
                            </li>
                            <li>
                                <p class="card-text mb-2">Proporcionan datos valiosos sobre el comportamiento de los clientes,
                                    lo que te permite tomar mejores desiciones.</p>
                            </li>
                            <li>
                                <p class="card-text mb-2">Puedes expandir tu negocio en línea de manera relativamente sencilla
                                    al agregar más productos, servicios o incluso dirigirte a nuevos mercados.</p>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="card border-0">
                    <div class="card-header text-center text-info border-info fs-5 fw-semibold border-3 rounded-start rounded-end">
                        Sin un sistema de ventas web
                    </div>
                    <div class="card-body">
                        <ul class="text-light">
                            <li>
                                <p class="card-text mb-2">Estas sujeto a un horario de funcioamiento específico.</p>
                            </li>
                            <li>
                                <p class="card-text mb-2">Las operaciones sin un sistema web a menudo requieren una mayor cantidad de trabajo manual,
                                    lo que puede llevar más tiempo y aumentar la posibilidad de errores.</p>
                            </li>
                            <li>
                                <p class="card-text mb-2">Dificulta la recopilación y análisis de datos sobre el rendimiento del
                                    negocio y el comportamiento de los clientes.</p>
                            </li>
                            <li>
                                <p class="card-text mb-2">La expansión de un negocio físico puede ser más complicada y costosa en
                                    términos de abrir nuevas ubicaciones o llegar a un mercado más amplio.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!---Section Frase--->
    <section class="container-fluid bg-body-secondary text-center">
        <div class="container p-5">
            <h2 class="text-light mb-5">Dale un nuevo enfoque a tu negocio<span class="text-info"> !Es momento de usar la tecnología como aliada¡</span></h2>
            <div class="">
                <a href="{{route('login') }}" role="button" class="btn btn-primary">Probar ahora</a>
            </div>
        </div>

    </section>

    <!---Footer--->
    <footer class="text-center text-white">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">

                <!-- Linkedin -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com/in/kevin-sayago-rosales-904423319/" role="button" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                    </svg>
                </a>

                <!-- Github -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/Kevin-Sayago312" role="button" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                    </svg>
                </a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2025 Copyright:
            <a class="text-white" href="https://www.linkedin.com/in/kevin-sayago-rosales-904423319/">Kevin Sayago Rosales</a>
        </div>
        <!-- Copyright -->
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>