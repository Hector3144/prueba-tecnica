@extends('layauts.app')

@section('title', 'publicaciones')
@section('content')
<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 
rounded-lg shadow-lg">

<h1 class="text-3xl text-center font-bold">Publicacion</h1>

<form class="mt-4" method="POST" action="">
@csrf  
<input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
    text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Titulo"
    id="title" name="title">

    <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
    text-lg placeholder-gray-900 p-8 my-1 focus:bg-white" placeholder="Descripcion"
    id="desc" name="desc">

    <input type="date" class="border border-gray-200 rounded-md bg-gray-200 w-full
    text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="fecha"
    id="date" name="date">
</form>
</div>
@endsection