<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    @vite('resources/css/dashboard.css')
    @vite('resources/css/login.css')
</head>
<body class="body">
    <nav>
        <div class="">
            <form id="logOut" action="logout" method="POST">
                @csrf
                <button id="logOutButton" href="/dashboard" type="submit" class="buttonNav"> Cerrar Sesión </button>
            </form>
        </div>
    </nav>
    <div>
        <h1 class="center title">
            Bienvenido {{session('user')}}
        </h1>
    </div>

</body>
</html>