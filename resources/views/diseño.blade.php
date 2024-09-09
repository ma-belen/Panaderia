<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bakery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}"></style>
    
</head>
<body>
    <!-- Encabezado-->
    <header>
        <a href="vista1" class="logo"><i class="fas fa-utensils"></i>Bakery.</a>

        <nav class="navbar">
            <ul>
                <li><a class="active" href="vista1">Inicio</a></li>
                <li><a href="rutaMostrarInfo">Productos</a>
                    <ul>
                        <li><a href="panPromo">Pan</a></li>
                        <li><a href="pastelPromo">Pasteles</a></li>
                        <li><a href="gelatinaPromo">Gelatinas</a></li>
                    </ul>
                </li>
                <li><a href="nosotros">Nosotros</a></li>
                <li><a href="vista4">Login</a></li>
                <li><a href="vista5">Compra</a></li>
            </ul>          
        </nav>

        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <a href="{{url('rutaCarrito')}}" class="fas fa-shopping-cart"></a>
        </div>
    </header>
    
    <div id="secciones">
        @yield('secciones')
    </div>

    <!--Pie de Página-->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>¿Dónde nos puedes encontrar?</h3>
                <a href="#">Puebla | Lazaro Cardenas Calle 57 </a>
                <a href="#"></a>
            </div>
            <div class="box">
                <h3>Información de Contactos</h3>
                <a href="#">2221834022</a>
                <a href="https://www.gmail.com">panaderiabakery930@gmail.com</a>  
            </div>
            <div class="box">
                <h3>Siguenos</h3>
                <a href="https://www.facebook.com/profile.php?id=100090648425881">Facebook</a>
            </div>
        </div>

        <div class="credit"> copyright &copy 2023 by <span>Ma.Belén</span></div>
    </section>
 
    <script src="js/script.js"></script>
</body>
</html>