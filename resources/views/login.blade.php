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
<body class="body">
    <section class="font container">
        <div class="containerbackground">
            <p>import java.awt.*;
import javax.swing.*;
import java.awt.event.*; // needed for event handling

public class Snake
  
  static final int SCREEN_SIZE_X=40;         // In units of snake sections.
  static final int SCREEN_SIZE_Y=30;
  
  final int MAX_SNAKE_LENGTH = 1000;
  
  // While a snake is created with a very large number of snake sections,
  // determined by the constant variable MAX_SNAKE_LENGTH, the actual
  // apparent length of the snake in the game will be controlled by the
  // variable snakeLength. At each time step, the program will only draw
  // snakeLength snake sections for each snake. 
  //
  // Each time the snake eats some "food" (a yellow box on the screen), 
  // the snakeLength for that snake will
  // grow by the value of the food, which is printed in the box representing the
  // food. 
  
  int snakeLength = 5;                      // Start snakes with length 5.
  SnakeSection [] snakeSecs = new SnakeSection[MAX_SNAKE_LENGTH];
   
  // These variables represent the direction the snake is going.

    </p>
        </div>
        <div>
            <h1 class="center socialDev">
                Social_Dev
            </h1>
        </div>
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