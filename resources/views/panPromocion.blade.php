
@extends('diseño')

@section('secciones')

<!--Pan-->
<!--
<section class="dishes" id="dishes"><br><br><br><br><br><br><br><br><br>
        <h3 class="sub-heading"> ----------------------------- </h3>
        <h3 class="heading"> PAN </h3> 
        <div class="box-container">
            <div class="box">
                <img src="{{asset('img/pan1.webp')}}" width="450" height="300">
                <h3>Bolillo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$5.00 </span>
                <a href="#" class="btn">Agregar al carrito</a>
            </div>
            <div class="box">
                <img src="{{asset('img/pan5.webp')}}" width="450" height="300">
                <h3>Globo de Nata</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$36.00</span>
                <a href="#" class="btn">Agregar al carrito</a>
            </div>
            <div class="box">
                <img src="{{asset('img/pan4.jpg')}}" width="450" height="300">
                <h3>Rollo de Nata</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$25.00</span>
                <a href="#" class="btn">Agregar al carrito</a>
            </div>
            <div class="box">
                <img src="{{asset('img/pan3.jpeg')}}" width="450" height="300">
                <h3>Donas surtidas</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$75.00</span>
                <a href="#" class="btn">Agregar al carrito</a>
            </div>
            <div class="box">
                <img src="{{asset('img/pan2.webp')}}" width="450" height="300">
                <h3>Garibaldi</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$26.00</span>
                <a href="#" class="btn">Agregar al carrito</a>
            </div>
        </div>   
</section> -->

<section>
<br><br><br><br><br><br><br><br>
    <table class="table"><h1>Tabla de Pan Bakery</h1>
            <thead>
                <tr>
                <th scope="col">codigo</th>
                <th scope="col">tipo</th>
                <th scope="col">nombre_producto</th>
                <th scope="col">tamaño</th>
                <th scope="col">precio</th>
                <th scope="col">cantidad</th>
                </tr>
            @foreach($pan as $pan)
            </thead>
            <tbody>
                <td>{{ $pan -> codigo}}</td>
                <td>{{ $pan -> tipo}}</td>
                <td>{{ $pan -> nombre_producto}}</td>
                <td>{{ $pan -> tamaño}}</td>
                <td>{{ $pan -> precio}}</td>
                <td>{{ $pan -> cantidad}}</td>  
            </tbody>
            @endforeach
    </table> 
</section>

@stop