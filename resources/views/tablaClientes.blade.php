
@extends('diseño')
@section('secciones')

<section>
<br><br><br><br><br><br><br><br>
        <table class="table"><h1>Tabla de Clientes Bakery</h1>
            <thead>
                <tr>
                <th scope="col">id_cliente</th>
                <th scope="col">nombre</th>
                <th scope="col">direccion</th>
                <th scope="col">correo_electronico</th>
                <th scope="col">telefono</th>
                <th scope="col">nombre_usuario</th>
                <th scope="col">contra</th>
                </tr>
            @foreach($cliente as $cliente)
            </thead>
            <tbody>
                <td>{{ $cliente -> id_cliente}}</td>
                <td>{{ $cliente -> nombre}}</td>
                <td>{{ $cliente -> direccion}}</td>
                <td>{{ $cliente -> correo_electronico}}</td>
                <td>{{ $cliente -> telefono}}</td>
                <td>{{ $cliente -> nombre_usuario}}</td> 
                <td>{{ $cliente -> contra}}</td>   
            </tbody>
            @endforeach
        </table> 
</section>

@stop