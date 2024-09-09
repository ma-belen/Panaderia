
@extends('diseño')

@section('secciones')
<div>
     <!-- Cuerpo de página -->
     <section class="home" id="home">
            <div class="home-slider">
                    <div class="slide">
                        <div class="content">
                            <span>Nuestros productos especiales</span>
                            <h3>Sabores unicos en nuestras recetas</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel minus asperiores neque.</p>
                            <a href="#" class="btn">Ordenar Ahora</a>
                        </div>
                        <img src="{{asset('img/image4.jpg')}}" alt="">
                    </div>
            </div>
    </section>

    <!--Slider-->
    <section class="home" id="home">
            <div class="home-slider">
                    <div class="slide">
                    <ul>
                        <li><img src="{{asset('img/slide3.webp')}}" alt=""></li>
                        <li><img src="{{asset('img/slide.jpeg')}}" alt=""></li>
                        <li><img src="{{asset('img/slide2.webp')}}" alt=""></li>
                        <li><img src="{{asset('img/slide2.jpg')}}" alt=""></li> 
                    </ul>
                    </div>
            </div>
    </section>

    <!--Pan-->
    <section class="dishes" id="dishes"><br><br>
        <h3 class="sub-heading"> Nuestro Menu</h3>
        <h3 class="heading"> --------------- Lo más destacado ---------------</h3> 
        <div class="box-container">
            <div class="box">
                <img src="{{asset('img/image1.jpg')}}" width="450" height="300">
                <h3>Nuez y <br> Pasas</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$27.00</span>
                <a href="#" class="btn">Agregar al carrito</a>
            </div>
            <div class="box">
                <img src="{{asset('img/image2.jpg')}}" width="450" height="300">
                <h3>Trenza Chocolate y Nuez</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$30.00</span>
                <a href="#" class="btn">Agregar al carrito</a>
            </div>
            <div class="box">
                <img src="{{asset('img/image3.jpg')}}" width="450" height="300">
                <h3>Kaiser</h3>
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
                <img src="{{asset('img/image5.jpeg')}}" width="450" height="300">
                <h3>Cuernitos rellenos de Chocolate</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$32.00</span>
                <a href="#" class="btn">Agregar al carrito</a>
            </div>
            <div class="box">
                <img src="{{asset('img/image6.png')}}" width="450" height="300">
                <h3>Dulce de <br> Mariposa</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$16.00</span>
                <a href="#" class="btn">Agregar al carrito</a>
            </div>
            <div class="box">
                <img src="{{asset('img/image7.webp')}}" width="450" height="300">
                <h3>Dona <br> Moka</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$31.00</span>
                <a href="#" class="btn">Agregar al carrito</a>
            </div>
            <div class="box">
                <img src="{{asset('img/image8.jpg')}}" width="450" height="300">
                <h3>Empanada de Atún</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$39.00</span>
                <a href="#" class="btn">Agregar al carrito</a>
            </div>
        </div>   
    </section>

    <!--Pateles-->
    <section class="dishes" id="dishes"><br><br>
        <h3 class="heading"> --------------- Promociones ---------------</h3>
        <div class="box-container">
            <div class="box">
                <img src="{{asset('img/pastel1.webp')}}" width="450" height="300">
                <h3>Durazno</h3>
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
                <img src="{{asset('img/pastel2.webp')}}" width="450" height="300">
                <h3>Pinguino</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$428.00</span>
                <a href="#" class="btn">Agregar al carrito</a>
            </div>
            <div class="box">
                <img src="{{asset('img/pastel3.webp')}}" width="450" height="300">
                <h3> De Salón</h3>
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
                <img src="{{asset('img/pastel4.webp')}}" width="450" height="300">
                <h3>Strawberry</h3>
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
                <img src="{{asset('img/pastel5.webp')}}" width="450" height="300">
                <h3> M&Ms</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$298.00</span>
                <a href="#" class="btn">Agregar al carrito</a>
            </div>
            <div class="box">
                <img src="{{asset('img/pastel6.webp')}}" width="450" height="300">
                <h3>Moka</h3>
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
                <img src="{{asset('img/pastel7.webp')}}" width="450" height="300">
                <h3>Piña Colada</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$428.00</span>
                <a href="#" class="btn">Agregar al carrito</a>
            </div>
        </div> 
    </section>

    <!--Chat de preguntas-->
    <section>
        <form class="message-form">
            <input type="text" placeholder="Comunicate a nosotros si tienes alguna duda...">
            <button type="submit">Enviar</button>
        </form>
    </section>

    <!--Ordenar
    <section class="order" id="order">
        <h3 class="sub-heading"> Ordena ¡Ahora!</h3>
        <h1 class="heading">Fácil y Rápido</h1>
        <form action="">
            <div class="inputBox">
                <div class="input">
                    <span>Nombre</span>
                    <input type="text" placeholder="Ingrese su nombre">
                </div>
                <div class="input">
                    <span>Código Postal</span>
                    <input type="" placeholder="Ingrese su CP">
                </div>
                
            </div>
            <div class="inputBox">
                <div class="input">
                    <span>Dirección</span>
                    <input type="text" placeholder="Ingrese su dirección">
                </div>
                <div class="input">
                    <span>Tipo</span>
                    <input type="" placeholder="Ingrese el tipo de producto a comprar">
                </div>
            </div>
            <div class="inputBox">
                <div class="input">
                    <span>Número</span>
                    <input type="text" placeholder="Ingrese su número">
                </div>
                <div class="input">
                    <span>Cantidad</span>
                    <input type="number" placeholder="Ingrese la cantidad">
                </div>
            </div>

            <input type="submit" value="Ordenar ¡Ahora!" class="btn">
        </form>
    </section>-->
</div>
@stop