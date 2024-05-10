@extends('layauts.app')

@section('title', 'Admin')

@section('content')
<div class="container w-25 border p-4">
    <div class="row mx-auto">
    <h2>Administra el rol de los usuarios</h2>
    <label  class="form-label">oprime sobre el rol del usuario que desea editar</label>
        @csrf

        @foreach ($users as $user)

            <div class="row py-1">
                <div class="col-md-9 d-flex align-items-center">
                    <a>{{ $user->name }}.</a>
                    <a href="{{ route('admin.showdos', ['id' => $user->id]) }}">{{ $user->role_id }}</a>
                </div>
            </div>

        @endforeach
    </div>
    </div>
</div>

@endsection
