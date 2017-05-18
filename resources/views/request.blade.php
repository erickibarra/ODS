@extends('layouts.app')

@section('content')
<div class="container">

	  <form class="form-horizontal">

	  <div class="form-group">
		  <label class="control-label col-sm-2" for="pwd">Empleado:</label>
		  <div class="col-sm-10">
		  	 <select class="form-control">
				  <option>1</option>
				  <option>2</option>
				  <option>3</option>
				  <option>4</option>
				  <option>5</option>
			</select>
			</div>
		</div>

		<div class="form-group">
		  <label class="control-label col-sm-2" for="pwd">Cliente:</label>
		  <div class="col-sm-10">
		  	 <select class="form-control">
				  <option>1</option>
				  <option>2</option>
				  <option>3</option>
				  <option>4</option>
				  <option>5</option>
			</select>
			</div>
		</div>

	  <div class="form-group">
		  <label class="control-label col-sm-2" for="pwd">Servicio:</label>
		  <div class="col-sm-10">
		  	 <select class="form-control">
				  <option>1</option>
				  <option>2</option>
				  <option>3</option>
				  <option>4</option>
				  <option>5</option>
			</select>
			</div>
		</div>
	  <div class="form-group"> 
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-default">Submit</button>
	    </div>
	  </div>
	</form>

</div>
@endsection