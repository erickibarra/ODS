@extends('layouts.app')

@section('content')
<div class="container">
  
  <h2>Administradores</h2> 
      <a href="{{url('adminRegister')}}" class="btn btn-success" style="float:right;">
            Registrar administrador
    </a>
<table class="table table-striped">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Email</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>

       @foreach($admin as $a)
      <tr>
        <td>{{$a->name}}</td>
        <td>{{$a->email}}</td>
          <td>
            <a href="{{url('/adminDetail')}}/{{$a->id}}" class="btn btn-primary btn-xs">
              <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
            </a>
            <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal{{$a->id}}">
            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
          </button>
          </td>
      </tr>

        <!-- Modal -->
    <div class="modal fade" id="modal{{$a->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">¿Deseas eliminar el Alumno?</h4>
          </div>
          <div class="modal-body">
            ¡Este registro no se recuperará!
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <a href="{{url('/adminDelete')}}/{{$a->id}}" class="btn btn-danger">Eliminar</a>
          </div>
        </div>
      </div>
    </div>
      @endforeach

    </tbody>
  </table>

</div>
@endsection