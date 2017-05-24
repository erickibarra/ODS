@extends('layouts.app')

@section('content')
<div class="container">
  <h2>Nuevo Empleado</h2> 
  <div class="col-xs-12">
	<form action="{{url('/employeeSet')}}" method="POST">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="form-group">
			<label for="Name">Nombre:</label>
			<input name="Name" type="text" placeholder="Teclea nombre" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="Email">Email:</label>
			<input name="Email" type="email" placeholder="Teclea Email" class="form-control" required>
		</div>
				<div class="form-group">
			<label for="Password">Email:</label>
			<input name="Password" type="password" placeholder="Teclea tu contraseña" class="form-control" required>
		</div>
		<button type="submit" class="btn btn-primary">Registrar</button>
		<a href="{{url('getEmployee')}}" class="btn btn-danger">Cancelar</a>
	</form>
</div>
</div>
@endsection