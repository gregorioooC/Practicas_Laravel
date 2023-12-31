<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://illustoon.com/photo/3126.png" width="50"/>
    <title>@yield('title')</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-success ">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://static.vecteezy.com/system/resources/previews/013/649/594/non_2x/owl-education-illustration-on-a-background-premium-quality-symbols-icons-for-concept-and-graphic-design-vector.jpg" target='_blank'>
                <img src="https://static.vecteezy.com/system/resources/previews/013/649/594/non_2x/owl-education-illustration-on-a-background-premium-quality-symbols-icons-for-concept-and-graphic-design-vector.jpg" alt="Bootstrap" width="50">
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active fs-5 {{request()->routeIs('apodoInicio')?'text-primary fw-bold':''}}" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fs-5 {{request()->routeIs('recuerdo.create')?'text-primary fw-bold':''}}" href="{{ route('recuerdo.create' )}}">Formulario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fs-5 {{request()->routeIs('recuerdo.index')?'text-primary fw-bold':''}}" href="{{ route('recuerdo.index' )}}">Recuerdos</a>
                    </li>
                </ul>
            
            </div>
            <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">

                    <button class="btn btn-primary" type="submit">Burcar</button>
            </form>
        </div>
    </nav>

    @yield('contenido')
    
    
</body>
</html>

