
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
                </tr>
            @foreach($productos as $producto)
            </thead>
            <tbody>
                <td>{{ $producto -> codigo}}</td>
                <td>{{ $producto -> tipo}}</td>
                <td>{{ $producto -> nombre_producto}}</td>
                <td>{{ $producto -> tamaño}}</td>
                <td>{{ $producto -> precio}}</td>
                <td>{{ $producto -> cantidad}}</td>  
            </tbody>
            @endforeach
    </table> 
</section>

@stop