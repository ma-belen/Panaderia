@extends('diseño')
@section('secciones')

<section class="form-register">
    <h1>Formulario de Registro</h1>

    <form action="{{route('Usuario')}}" method="POST">
    @csrf 
        <input class="controls" type="text" name="nombre"  placeholder="Ingrese Nombre">
        <input class="controls" type="text" name="apellido" placeholder="Ingrese Apellido">
        <input class="controls" type="text" name="correo" placeholder="Ingrese Correo">
        <input class="controls" type="text" name="contraseña" placeholder="Ingrese Contraseña">
        <p>Estoy de acuerdo con Terminos y Condiciones</p>
        <input class="boton" type="submit" name="enviar" value="Registrar">
        <p><a href="vista4">¿Ya tengo una cuenta?</a></p>
    </form>
    
</section>

@stop