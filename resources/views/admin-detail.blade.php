@extends('layouts.app')

@section('content')
<div class="col-xs-12">
	<form action="{{url('adminUpdate')}}/{{$admin->id}}" method="POST">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="form-group">
			<label for="Name">Nombre:</label>
			<input name="Name" type="text" placeholder="Teclea nombre" class="form-control" value="{{$admin->name}}" required>
		</div>
		<div class="form-group">
			<label for="Email">Email:</label>
			<input name="Email" type="text" placeholder="Teclea Email" class="form-control" value="{{$admin->email}}" required>
		</div>
		<button type="submit" class="btn btn-primary">Actualizar</button>
		<a href="{{url('/admin')}}" class="btn btn-danger">Cancelar</a>
	</form>
</div>

@endsection