@extends('layouts.app')

@section('content')
<div class="container">

<h2>Agregar Orden</h2> 



<div class="col-xs-6">
	<form class="form-horizontal" action="{{url('/orderSet')}}" method="POST">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	  <div class="form-group">
		  <label class="control-label col-sm-2" for="pwd">Empleado:</label>
		  <div class="col-sm-10">
		  	 <select class="form-control" name="Employee">
		  	 @foreach($emp as $e)
				  <option value="{{$e->id}}">{{$e->Name}}</option>
    @endforeach
			</select>
			</div>
		</div>

		<div class="form-group">
		  <label class="control-label col-sm-2" for="pwd">Cliente:</label>
		  <div class="col-sm-10">
		  	 <select class="form-control" name="Client">
			@foreach($client as $c)
				  <option value="{{$c->id}}">{{$c->Name}}</option>
    			@endforeach
			</select>
			</div>
		</div>

	  <div class="form-group">
		  <label class="control-label col-sm-2" for="pwd">Servicio:</label>
		  <div class="col-sm-10">
		  	 <select class="form-control" name="Service">
		  	 @foreach($service as $s)
				  <option value="{{$s->id}}">{{$s->Type}}</option>
    			@endforeach

			</select>
			</div>
		</div>
		<div class="form-group">
		  <label class="control-label col-sm-2" for="pwd">Descripción:</label>
		  <div class="col-sm-10">
		  	 <textarea class="col-sm-12" name="Description"></textarea>
			</div>
		</div>
	  <div class="form-group"> 
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-default">Aceptar</button>
	    </div>
	  </div>
	</form>

</div>
@endsection