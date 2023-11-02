@extends ('layauts.app')

@section('content')
<div class="container w-25 border p-4 mt-4">
<form action="{{route('admin.showdos', ['id' => $user -> id])}}"method="POST">
  @method('PATCH')
  @csrf
  <h2>Elige el rol</h2>
  @if (session ('success'))
    <h6 class="alert alert-success">{{ session('success')}}</h6>
  @endif
  @error('role')
  <h6 class="alert alert-Danger">{{($message)}}</h6>
  @enderror

  <div class="mb-3">
    <label  class="form-label">elige entre admin, user, o none</label>
    <input type="text" name="role" class="form-control" value="{{$user->role}}">
  </div>
  <button type="submit" class="btn btn-primary">Actualizar Rol</button>
</form>

</div>
@endsection
