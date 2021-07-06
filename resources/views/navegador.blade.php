<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet"> 
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=BenchNine&family=Monoton&display=swap" rel="stylesheet"> 
    
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <title>MyNameIsTravel</title>
</head>
<body class="cuerpo">
    <div>
        @yield('content')
    </div>
    
    <div>
        <nav class="navegador"> 
			<a class="hola" href="{{ route('home') }}"> Home </a>
			<a class="hola" href="{{ route('about') }}"> About me </a>
			<a class="hola" href="{{ route('destination') }}"> Destinations </a>
			<a class="hola" href="{{ route('contact') }}"> Contact me </a>
		</nav>	    
    </div>

    <!-- home -->

    <div>
        @yield('image')
    </div>

    <div>
        @yield('topics')
    </div>
    <div>
        @yield('imagetopics')
    </div>

    




    <!-- ABOUT ME -->

    <div>
        @yield('about')
    </div>

    <!-- -DESTINATIONS -->

    <div>
        @yield('cuadrado')
    </div>

    <!-- CONTACT ME -->
    <div>
        @yield('formulario')
    </div>

    <!-- FOOTER -->

    <div>
        @yield('footer')
    </div>
     
    
</body>
</html>