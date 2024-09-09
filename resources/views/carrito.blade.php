
@extends('diseño')
@section('secciones')

@if(session('status'))
    {{'status'}}
@endif
<?php $valor =0 ?>
@if (session('carrito'))

<section class="order" id="order"><br><br><br><br><br><br><br><br>
    <table class="table"><h1>Carrito de Compras</h1><br><br>
        <thead>
            <tr>
                <th>nombre</th>
                <th>precio</th>
                <th>cantidad</th>
                <th>importe por producto</th>
            </tr>
        </thead>
        @foreach (session('carrito') as $id => $detalle)
        <?php $valor += $detalle['precio'] * $detalle['cantidad'] ?>
            <tr>
                <td>{{$detalle['nombre']}}</td>
                <td>{{$detalle['precio']}}</td>
                <td>{{$detalle['cantidad']}}</td>
                <td>{{$detalle['precio'] * $detalle['cantidad']}}</td>
            </tr>   
        @endforeach
        <tfoot>
            <tr>
                <td colspan="4">Total: {{$valor}}</td>
            </tr>
        </tfoot>
    </table>
</section>

@endif

@stop
