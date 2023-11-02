<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - Blog</title>
    
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   
  </head>
  <body class="bg-gray-100 text-gray-800">

    <nav class="flex py-2 bg-gray-700 text-white">
      <div class="w-1/2 px-12 mr-auto">
        <a href="{{ route('home.index') }}" class="text-2xl font-bold">Blog</a>
      </div>

      <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
      @if (auth()->check())

      @if (auth()->user()->role=='admin')
      <li class="mx-8">
          <p class="text-xl">Bienvenido Administrador <b>{{auth()->user()->name }}</b></p>
          <a href="{{ route('admin.index') }}" class="font-semibold 
          hover:bg-indigo-700 py-3 px-4 rounded-md">Administrar Usuarios</a>
        </li>
        <li>

        <a href="{{ route('publi.index') }}" class="font-semibold 
          hover:bg-indigo-700 py-3 px-4 rounded-md">hacer publicacion</a>
          
          <a href="{{ route('login.destroy') }}" class="font-semibold
          border-2 border-white py-2 px-4 rounded-md hover:bg-white 
          hover:text-indigo-700">Cerrar Sesion</a>
        @else
        @if (auth()->user()->role=='user')
        <li class="mx-8">
          <p class="text-xl">Bienvenido <b>{{auth()->user()->name }}</b></p>
        </li>
        <li>
        <a href="{{ route('publi.index') }}" class="font-semibold 
          hover:bg-indigo-700 py-3 px-4 rounded-md">hacer publicacion</a>
          
          <a href="{{ route('login.destroy') }}" class="font-semibold
          border-2 border-white py-2 px-4 rounded-md hover:bg-white 
          hover:text-indigo-700">Cerrar Sesion</a>
        </li>
        @else
        <li class="mx-8">
          <p class="text-xl">Bienvenido <b>{{auth()->user()->name }}</b></p>
        </li>
        <li>
          <a href="{{ route('login.destroy') }}" class="font-semibold
          border-2 border-white py-2 px-4 rounded-md hover:bg-white 
          hover:text-indigo-700">Cerrar Sesion</a>
        </li>
        @endif
        @endif
        @else
        <li class="mx-6">
          <a href="{{ route('login.index') }}" class="font-semibold 
          hover:bg-indigo-700 py-3 px-4 rounded-md">Iniciar Sesion</a>
        </li>
        <li>
          <a href="{{ route('register.index') }}" class="font-semibold
          border-2 border-white py-2 px-4 rounded-md hover:bg-white 
          hover:text-indigo-700">Registrarse</a>
        </li>
        @endif
      </ul>

    </nav>


    @yield('content')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>