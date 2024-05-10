@extends('layauts.app')

@section('title', 'index')

@section('content')



@if (auth()->check())
@if(auth()->user()->view_id==1)

<label>Buscar por fecha
<input id="search" type="search">
</label>
<u id="busca">
    @include('partial.post')
</u>
@endif
@endif


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


