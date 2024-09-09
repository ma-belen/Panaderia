
@extends('diseño')

@section('secciones')

<!--Gelatinas-->
<!--
<section class="dishes" id="dishes"><br><br><br><br><br><br><br><br><br>
        <h3 class="sub-heading"> ----------------------------- </h3>
        <h3 class="heading"> Gelatinas </h3> 
        <div class="box-container">
            <div class="box">
                <img src="{{asset('img/gelatina.webp')}}" width="450" height="300">
                <h3>Estandar</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$50.00</span>
                <a href="#" class="btn">Agregar al carrito</a>
            </div>
            <div class="box">
                <img src="{{asset('img/gelatina2.webp')}}" width="450" height="300">
                <h3> Mosaico</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$278.00</span>
                <a href="#" class="btn">Agregar al carrito</a>
            </div>
            <div class="box">
                <img src="{{asset('img/gelatina3.webp')}}" width="450" height="300">
                <h3>De fresa</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$278.00</span>
                <a href="#" class="btn">Agregar al carrito</a>
            </div>
            <div class="box">
                <img src="{{asset('img/gelatina4.jpg')}}" width="450" height="300">
                <h3>Cajeta y nuez</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$299.00</span>
                <a href="#" class="btn">Agregar al carrito</a>
            </div>
            <div class="box">
                <img src="{{asset('img/gelatina5.webp')}}" width="450" height="300">
                <h3>Crema Irlandesa</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$278.00</span>
                <a href="#" class="btn">Agregar al carrito</a>
            </div>
        </div>   
    </section>-->

    <section>
<br><br><br><br><br><br><br><br>
    <table class="table"><h1>Tabla de Gelatina Bakery</h1>
            <thead>
                <tr>
                <th scope="col">codigo</th>
                <th scope="col">tipo</th>
                <th scope="col">nombre_producto</th>
                <th scope="col">tamaño</th>
                <th scope="col">precio</th>
                <th scope="col">cantidad</th>
                </tr>
            @foreach($gelatina as $gelatina)
            </thead>
            <tbody>
                <td>{{ $gelatina -> codigo}}</td>
                <td>{{ $gelatina -> tipo}}</td>
                <td>{{ $gelatina -> nombre_producto}}</td>
                <td>{{ $gelatina -> tamaño}}</td>
                <td>{{ $gelatina -> precio}}</td>
                <td>{{ $gelatina -> cantidad}}</td>  
            </tbody>
            @endforeach
    </table> 
</section>

@stop