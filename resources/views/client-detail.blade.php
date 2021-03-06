@extends('layouts.app')

@section('content')
<div class="col-xs-12">
	<form action="{{url('clientUpdate')}}/{{$client->id}}" method="POST">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="form-group">
			<label for="Name">Nombre:</label>
			<input name="Name" type="text" placeholder="Teclea nombre" class="form-control" value="{{$client->Name}}" required>
		</div>
		<div class="form-group">
			<label for="Email">Email:</label>
			<input name="Email" type="text" placeholder="Teclea Email" class="form-control" value="{{$client->Email}}" required>
		</div>
		<button type="submit" class="btn btn-primary">Actualizar</button>
		<a href="{{url('/client')}}" class="btn btn-danger">Cancelar</a>
	</form>
</div>

@endsection