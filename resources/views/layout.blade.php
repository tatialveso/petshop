<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PETSHOP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <nav class="mb-5 navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/"><b>PETSHOP</b></a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/pets"><b>Animais</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pets/create">Adicionar um animal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/owners"><b>Tutores</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/owners/create">Adicionar um tutor</a>
                </li>
            </ul>
        </div>
    </nav>
    @yield('petsIndex')
    @yield('petsEdit')
    @yield('petsCreate')
    @yield('ownersCreate')
    @yield('ownersEdit')
</body>
</html>