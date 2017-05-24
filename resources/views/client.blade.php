@extends('layouts.app')

@section('content')
<div class="container">
  
  <h2>Clientes</h2> 
    <a href="{{url('clientRegister')}}" class="btn btn-success" style="float:right;">
            Registrar cliente
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
    @foreach($client as $c)
      <tr>
        <td>{{$c->Name}}</td>
        <td>{{$c->Email}}</td>
          <td>
            <a href="{{url('/clientDetail')}}/{{$c->id}}" class="btn btn-primary btn-xs">
              <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
            </a>
            <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal{{$c->id}}">
            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
          </button>
          </td>
      </tr>
       <!-- Modal -->
    <div class="modal fade" id="modal{{$c->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">¿Deseas eliminar el Cliente '{{$c->Name}}'?</h4>
          </div>
          <div class="modal-body">
            ¡Este registro no se recuperará!
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <a href="{{url('/clientDelete')}}/{{$c->id}}" class="btn btn-danger">Eliminar</a>
          </div>
        </div>
      </div>
    </div>
      @endforeach
    </tbody>
  </table>

</div>
@endsection