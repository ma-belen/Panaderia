@extends('diseño')
@section('secciones')

<section class="form-register">
<h1>Login</h1><br>
<form action="{{route('loginin')}}" method="POST">
    @csrf 
    <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su Correo">
    <input class="controls" type="password" name="contraseña" id="contraseña" placeholder="Ingrese su Contraseña">
    <input class="boton" type="submit" value="Iniciar sesión">
    <p><a href="vista3">¿No tienes cuenta? Registrate aqui</a></p>  
</form>
</section>

@stop