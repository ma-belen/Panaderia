
@extends('diseño')

@section('secciones')

<!--Pan-->
<!--
<section class="dishes" id="dishes"><br><br><br><br><br><br><br><br><br>
        <h3 class="sub-heading"> ----------------------------- </h3>
        <h3 class="heading"> Pasteles </h3> 
        <div class="box-container">
            <div class="box">
                <img src="{{asset('img/pas1.webp')}}" width="450" height="300">
                <h3>4 Chocolates</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$528.00</span>
                <a href="#" class="btn">Agregar al carrito</a>
            </div>
            <div class="box">
                <img src="{{asset('img/pas2.webp')}}" width="450" height="300">
                <h3>Gansito</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$358.00</span>
                <a href="#" class="btn">Agregar al carrito</a>
            </div>
            <div class="box">
                <img src="{{asset('img/pas3.webp')}}" width="450" height="300">
                <h3>Snickers</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$559.00</span>
                <a href="#" class="btn">Agregar al carrito</a>
            </div>
            <div class="box">
                <img src="{{asset('img/pas4.webp')}}" width="450" height="300">
                <h3>Limón</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$628.00</span>
                <a href="#" class="btn">Agregar al carrito</a>
            </div>
            <div class="box">
                <img src="{{asset('img/pas5.webp')}}" width="450" height="300">
                <h3>Queso con frutos rojos</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$528.00</span>
                <a href="#" class="btn">Agregar al carrito</a>
            </div>
        </div>   
    </section>-->

    <section>
<br><br><br><br><br><br><br><br>
    <table class="table"><h1>Tabla de Pasteles Bakery</h1>
            <thead>
                <tr>
                <th scope="col">codigo</th>
                <th scope="col">tipo</th>
                <th scope="col">nombre_producto</th>
                <th scope="col">tamaño</th>
                <th scope="col">precio</th>
                <th scope="col">cantidad</th>
                </tr>
            @foreach($pastel as $pastel)
            </thead>
            <tbody>
                <td>{{ $pastel -> codigo}}</td>
                <td>{{ $pastel -> tipo}}</td>
                <td>{{ $pastel -> nombre_producto}}</td>
                <td>{{ $pastel -> tamaño}}</td>
                <td>{{ $pastel -> precio}}</td>
                <td>{{ $pastel -> cantidad}}</td>  
            </tbody>
            @endforeach
    </table> 
</section>

@stop