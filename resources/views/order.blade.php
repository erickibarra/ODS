@extends('layouts.app')

@section('content')
<div class="container">
  
  <h2>Ordenes</h2> 
<table class="table table-striped">
    <thead>
      <tr>
        <th>Admin</th>
        <th>Empleado</th>
        <th>Cliente</th>
        <th>Servicio</th>
        <th>Inicio</th>
        <th>Termino</th>
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
        <td>{{$o->Created_at}}</td>
        <td>{{$o->Finalized_at}}</td>

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
            <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal">
            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
          </button>
          </td>
      </tr>
      @endforeach
    </tbody>
  </table>

</div>
@endsection