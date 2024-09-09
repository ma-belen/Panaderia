
@extends('diseño')
@section('secciones')

<section class="order" id="order"><br><br><br><br><br><br><br><br>
    <h1>¡Bienvenido Administrador!</h1><br><br>

    <form action="{{route('AgregarBD')}}" method="POST" enctype="multipart/form-data">
        @csrf 
        <div class="inputBox">
            <div class="input">
                <span>Fotografia</span>
                <input type="file" name="foto" id="foto">
            </div>
            <div class="input">
                <span>Tamaño</span>
                <input type="text" name="tamaño" placeholder="Ingrese el tamaño del producto">
            </div>    
            <div class="input">
                <span>Código</span>
                <input type="text" name="codigo" placeholder="Ingrese el código">
            </div>
            <div class="input">
                <span>Precio</span>
                <input type="text" name="precio" placeholder="Ingrese el precio">
            </div>
            <div class="input">
                <span>Tipo</span>
                <input type="text" name="tipo" placeholder="Pastel/Pan/Gelatina">
            </div>
            <div class="input">
                <span>Cantidad</span>
                <input type="text" name="cantidad" placeholder="Ingrese la cantidad">
            </div>
            <div class="input">
                <span>Nombre del Producto</span>
                <input type="text" name="nombre_producto" placeholder="Ingrese nombre del producto">
            </div>
        </div>
        <input type="submit" value="Aceptar" name="enviar" class="btn">
    </form>  

</section>

@stop
