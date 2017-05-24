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
           <a href="{{url('/employeeDetail')}}/{{$e->id}}" class="btn btn-primary btn-xs">
              <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
            </a>
              <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal{{$e->id}}">
              <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
          </button>
          </td>
      </tr>

      <!-- Modal -->
    <div class="modal fade" id="modal{{$e->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">¿Deseas eliminar el Empleado(a) '{{$e->Name}}'?</h4>
          </div>
          <div class="modal-body">
            ¡Este registro no se recuperará!
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <a href="{{url('/employeeDelete')}}/{{$e->id}}" class="btn btn-danger">Eliminar</a>
          </div>
        </div>
      </div>
    </div>
      @endforeach

    </tbody>
  </table>

</div>
@endsection