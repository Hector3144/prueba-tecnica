@extends('layauts.app')

@section('title', 'index')

@section('content')
<label>Buscar por fecha
<input id="search" type="search">
</label>
<u id="busca">
@include('partial.post')
</u>

<script>
 document.getElementById('search').addEventListener('input', function(event) {
  fetch('/search?q='+event.target.value)
  .then(res=>res.text())
  .then(html=>{
    document.getElementById('busca').innerHTML = html
  })
 })
</script>


@endsection


