@extends('layouts.app')

@section('content')
<div class="container">

<h2>Cambiar Status</h2> 
<div class="col-xs-12">
	<form action="{{url('orderUpdate')}}/{{$o->idOrder}}" method="POST">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="form-group">
    		<h2>Orden #{{$o->idOrder}}</h2>
          <label class="control-label col-sm-2" for="pwd">Status:</label>
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          
             <select class="form-control" name="Status">
                <option value="1">Pendiente</option>
                <option value="2">En Proceso</option>
                <option value="3">Finalizada</option>
             </select>
          </div>
		<button type="submit" class="btn btn-primary">Actualizar</button>
		<a href="{{url('/order')}}" class="btn btn-danger">Cancelar</a>
	</form>
</div>
</div>