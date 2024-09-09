
@extends('diseño')
@section('secciones')

<section>
<br><br><br><br><br><br><br><br>
    <table class="table"><h1>Usuarios ingresados</h1>
            <thead>
                <tr>
                <th scope="col">nombre</th>
                <th scope="col">apellido</th>
                <th scope="col">correo</th>
                <th scope="col">contraseña</th>
                </tr>
            @foreach($usuarios as $usuario)
            </thead>
            <tbody>
                <td>{{ $usuario -> nombre}}</td>
                <td>{{ $usuario -> apellido}}</td>
                <td>{{ $usuario -> correo}}</td>
                <td>{{ $usuario -> contraseña}}</td>
            </tbody>
            @endforeach
    </table> 
</section>

@stop