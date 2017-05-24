

@foreach($order as $o)
<h2>Reporte de la orden #{{$o->idOrder}}</h2>
      <ul>
        <li><b>Administrador: </b>{{$o->admin}}</li>
        <hr>
        <li><b>Empleado: </b>{{$o->emp}}</li>
        <hr>
        <li><b>Cliente: </b>{{$o->client}}</li>
        <hr>
        <li><b>Servicio: </b>{{$o->Type}}</li>
        <hr>
        <li><b>Fecha de inicio: </b>{{$o->created_at}}</li>
        <hr>
        <li><b>Fecha de finalización: </b>{{$o->updated_at}}</li>
        <hr>

      </ul>
  @endforeach
