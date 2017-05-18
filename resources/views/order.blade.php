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
        <td>{{$o->status}}</td>
        
      </tr>
      @endforeach
    </tbody>
  </table>

</div>
@endsection