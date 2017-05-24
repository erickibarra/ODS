@extends('layouts.app')

@section('content')
<div class="container">
  
  <h2>Ordenes</h2> 
   <a href="{{url('orderRegister')}}" class="btn btn-success" style="float:right;">
            Registrar Orden
    </a>
    
<table class="table table-striped">
    <thead>
      <tr>
        <th>Admin</th>
        <th>Empleado</th>
        <th>Cliente</th>
        <th>Servicio</th>
        <th>Inicio</th>
        <th>Actualización</th>
        <th>Status</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
    @foreach($orders as $o)
      <tr>
        <td>{{$o->admin}}</td>
        <td>{{$o->emp}}</td>
        <td>{{$o->client}}</td>
        <td>{{$o->Type}}</td>
        <td>{{$o->created_at}}</td>
        <td>{{$o->updated_at}}</td>

        @if($o->status == 'Pendiente')
        <td>{{$o->status}} <span class="glyphicon glyphicon-asterisk" style="color: red;"></span></td>
        @elseif($o->status == 'En proceso')
        <td>{{$o->status}} <span class="glyphicon glyphicon-asterisk" style="color: greenYellow;"></span></td>
        @elseif($o->status == 'Finalizada')
        <td>{{$o->status}} <span class="glyphicon glyphicon-asterisk" style="color: gray;"></span></td>
        @else
        <td>{{$o->status}} <span class="glyphicon glyphicon-asterisk" style="color: red;"></span></td>
        @endif
        <td>
            <a href="#" class="btn btn-primary btn-xs">
              <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
            </a>
            <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal{{$o->idOrder}}">
            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
          </button>
          </td>
      </tr>
      
      <!-- Modal -->
    <div class="modal fade" id="modal{{$o->idOrder}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">¿Deseas cancelar la orden?</h4>
          </div>
          <div class="modal-body">
            ¡La orden #{{$o->idOrder}} se cancelará y no se podrá recuperar!
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <a href="{{url('/orderDelete')}}/{{$o->idOrder}}" class="btn btn-danger">Eliminar</a>
          </div>
        </div>
      </div>
    </div>
    @endforeach
    </tbody>
  </table>
<a href="{{url('orderRegister')}}" class="btn btn-primary" style="float:right;">
            Ver Finalizadas 
    </a>
</div>
@endsection