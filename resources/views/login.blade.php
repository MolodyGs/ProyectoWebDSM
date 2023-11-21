<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0 "></script>
    @vite('resources/css/app.css')
</head>
<body class="body font">
    <section>
        <div class="formDiv">
            <div class="">
                <form class="form" action="{{ route('loginAuth')}}" method="POST">

                    <img src="/img/profile.png" class="profileImg"></img>
                    @csrf
                    @if (session('message'))
                        <div class="">
                            {{ session('message') }}
                        </div>
                    @endif
                    <div class="p-10v">
                        
                        <div class="inputLabel">
                            <label for="">correo</label>
                        </div>
                        <div>
                            <input class="input" type="email" id="email" name="email" class="">
                        </div>
                        
                        @error('email')
                            <p class="errorMsg">{{ $message }}</p>
                        @enderror
                    </div>
                    <br>
                    <div class="p-10v">
                        <div class="inputLabel">
                            <label for="">contraseña</label>
                        </div>
                        <div >
                            <input class="input" type="password" id="password" name="password" class="">
                        </div>
                        @error('password')
                            <p class="errorMsg">{{ $message }}</p>
                        @enderror
                    </div>
                    <br>
                    <div class= "center">
                        <button type="submit" class="button" >Iniciar Sesión</button>
                    </div>
                    <br>
                    <div class= "p-10v txt">
                        <label for="cuenta">¿No tiene una cuenta?</label>
                        <a class="link" href="register">Regístrate</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>