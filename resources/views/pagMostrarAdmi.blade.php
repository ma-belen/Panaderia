
@extends('diseño')
@section('secciones')

<section>
<br><br><br><br><br><br><br><br>
    <table class="table"><h1>Tabla de Productos Bakery</h1>
            <thead>
                <tr>
                <th scope="col">codigo</th>
                <th scope="col">tipo</th>
                <th scope="col">nombre_producto</th>
                <th scope="col">tamaño</th>
                <th scope="col">precio</th>
                <th scope="col">cantidad</th>
                <th scope="col">fotografia</th>
                <th scope="col"></th>
                <th scope="col"></th>
                </tr>
            @foreach($mercancias as $mercancia)
            </thead>
            <tbody>
                <td>{{ $mercancia -> codigo}}</td>
                <td>{{ $mercancia -> tipo}}</td>
                <td>{{ $mercancia -> nombre_producto}}</td>
                <td>{{ $mercancia -> tamaño}}</td>
                <td>{{ $mercancia -> precio}}</td>
                <td>{{ $mercancia -> cantidad}}</td>  
                <td><img height='100' src='img/{{$mercancia->fotografia}}'></td>
                <td><a href="{{url('AgregaCarrito/'.$mercancia->id)}}">Agregar al Carrito</a></td>
                <td><a href="{{url('rutaDetalle/'.$mercancia->id)}}">Detalle</a></td>
            </tbody>
            @endforeach
    </table> 
</section>

@stop