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
<body>
    <section>
        <div class="formDiv">
            <div class="">
                <form class="form" action="{{ route('loginAuth')}}" method="POST">
                    @csrf
                    @if (session('message'))
                    <div class="">
                        {{ session('message') }}
                    </div>
                    @endif
                    <div class="">
                        <div class="center">
                            <label for="correo" >Correo electrónico</label>
                        </div>
                        
                        <div>
                            <input class="input" type="email" placeholder="nombre@ejemplo.com" id="email" name="email" class="">
                            <hr class="hr">
                        </div>
                        
                        @error('email')
                            <p class="">{{ $message }}</p>
                        @enderror
                    </div>
                    <br>
                    <div class="">
                        <div class="center">
                            <label for="contraseña" class="form-label">Contraseña</label>
                        </div>
                        
                        <div>
                            <input class="input" type="password" placeholder="Ingrese su contraseña" id="password" name="password" class="">
                            <hr class="hr">
                        </div>
                        @error('password')
                            <p class="">{{ $message }}</p>
                        @enderror
                    </div>
                    <br>
                    <div class= "center">
                        <button type="submit" class="" >Iniciar Sesión</button>
                    </div>
                    <div class= "">
                        <label for="cuenta">¿No tiene una cuenta?</label>
                        <a class="" href="register">Regístrate</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>