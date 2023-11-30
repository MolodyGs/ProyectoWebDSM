<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/dashboard.css')
    @vite('resources/css/login.css')
    @vite('resources/css/keyframes.css')
    <title>@yield('title')</title>
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
        <h1 class="titleWelcome">
            Bienvenido {{session('user')}}
        </h1>
    </div>
    <table class="table">
        <tr>
            <td>
                <div class="panel">

                </div>
            </td>
            <td>
                <div class="panel">

                </div>
            </td>
            <td>
                <div class="panel">

                </div>
            </td>
        </tr>
    </table>

</body>
</html>