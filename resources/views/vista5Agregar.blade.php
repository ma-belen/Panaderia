
@extends('diseño')

@section('secciones')

<section class="order" id="order"><br><br><br><br><br><br><br>
        <h3 class="sub-heading"> Ordena ¡Ahora!</h3>
        <h1 class="heading">Fácil y Rápido</h1>
        <form action="">
            <div class="inputBox">
                <div class="input">
                    <span>Código</span>
                    <input type="int" placeholder="Ingrese el código">
                </div>
                <div class="input">
                    <span>Nombre</span>
                    <input type="text" placeholder="Ingrese el nombre">
                </div>
                
            </div>
            <div class="inputBox">
                <div class="input">
                    <span>Precio</span>
                    <input type="double" placeholder="Ingrese el precio">
                </div>
                <div class="input">
                    <span>Cantidad</span>
                    <input type="number" placeholder="Ingrese la cantidad">
                </div>
            </div>
            <div class="inputBox">
                <div class="input">
                    <span>Descripción</span>
                    <input type="text" placeholder="Ingrese la descripción del producto">
                </div>
            </div>

            <input type="submit" value="¡Agregar!" class="btn">
        </form>
</section>

@stop