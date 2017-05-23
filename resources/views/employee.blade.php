@extends('layouts.app')

@section('content')
<div class="container">
  
  <h2>Empleados</h2> 
      <a href="{{url('employeeRegister')}}" class="btn btn-success" style="float:right;">
            Registrar empleado
    </a>
<table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
    @foreach($employee as $e)
      <tr>
        <td>{{$e->Name}}</td>
        <td>{{$e->Email}}</td>
          <td>
            <a href="#" class="btn btn-primary btn-xs">
              <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
            </a>
            <a href="#" class="btn btn-danger btn-xs">
              <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
            </a>
          </td>
      </tr>
      @endforeach

    </tbody>
  </table>

</div>
@endsection