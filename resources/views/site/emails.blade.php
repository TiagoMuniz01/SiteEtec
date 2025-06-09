<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emails</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <img class="logo m-3" src="{{ asset('imagens/Logo - EtecZonaLeste.png') }}" alt="Bootstrap" width="300"
                    height="80">
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #AE0F0A;">
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item mx-3">
                    <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{ route('cursos') }}">Cursos</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{ route('departamento') }}">Departamentos</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link active" href="{{ route('contato') }}">Contato</a>
                </li>
            </ul>
        </div>
    </nav>

    <main>

    </main>

    <footer class="bg-dark text-ligth mt-5">
        <div class="container-fluid py-3">
            <div classs="row">
                <div classs="col">
                    <a href="https://sp.gov.br/sp">
                        <img class="rounded mx-auto d-block"
                            src="{{ asset('imagens/logo-rodape-governo-do-estado-sp.png') }}" alt="Bootstrap"
                            width="300" height="80">
                    </a>
                </div>
            </div>
        </div>
    </footer>
</body>