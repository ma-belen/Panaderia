
@extends('diseño')
@section('secciones')

@if(session('status'))
    {{'status'}}
@endif

<section class="order" id="order"><br><br><br><br><br><br><br><br>
    <table class="table"><h1>Detalle Producto</h1><br><br>
    <thead>
        <tr>
            <th>nombre</th>
            <th>precio</th>
            <th>tipo</th>
        </tr>
    </thead>
        <tr>
            <td>{{$mercancia -> nombre_producto}}</td>
            <td>{{$mercancia -> precio}}</td>
            <td>{{$mercancia -> tipo}}</td>
        </tr>
    </table>
</section>

@stop
