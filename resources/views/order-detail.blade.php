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
        <th>Actualización</th>
        <th>Status</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
    @foreach($ordersF as $o)
      <tr>
        <td>{{$o->admin}}</td>
        <td>{{$o->emp}}</td>
        <td>{{$o->client}}</td>
        <td>{{$o->Type}}</td>
        <td>{{$o->created_at}}</td>
        <td>{{$o->updated_at}}</td>

        @if($o->status == 'Finalizada')
        <td>{{$o->status}} <span class="glyphicon glyphicon-asterisk" style="color: gray;"></span></td>
        @else
        <td>{{$o->status}} <span class="glyphicon glyphicon-asterisk" style="color: gray;"></span></td>
        @endif
        <td>
          <a href="{{url('generatePDF')}}/{{$o->idOrder}}rr" class="btn btn-warning glyphicon glyphicon-list-alt" target="_blank"></a>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
       <a href="{{url('getOrders')}}" class="btn btn-danger" style="float:left;">
            Regresar
    </a>
</div>
@endsection