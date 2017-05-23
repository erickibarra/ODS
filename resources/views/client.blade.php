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