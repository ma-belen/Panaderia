@extends('diseño')

@section('secciones')

<!--Sobre Nosotros-->
<section class="about" id="about"><br><br><br><br><br><br><br>
        <h3 class="sub-heading"> Sobre Nosotros</h3>
        <h1 class="heading">¿Porqué escojernos?</h1>
        <div class="row">
            <div class="image">
                <img src="{{asset('img/mapa1.jpeg')}}" alt="">
            </div>
            <div class="content">
                <h3>El mejor sabor hacia tu mesa</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore in amet ab sapiente aperiam earum itaque nulla atque consectetur delectus. 
                    Suscipit, ipsa voluptatem. Tempora, corrupti! Repudiandae temporibus nostrum architecto nemo.
                </p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem ab harum, incidunt perspiciatis totam earum modi illo culpa accusamus cum.
                </p>
                <div class="icons-container">
                    <div class="icons">
                        <i class="fas fa-shipping-fast"></i>
                        <span>Envio Rápido y Seguro</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-dollar-sign"></i>
                        <span>Costo Accesible a sus Necesidades</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-headset"></i>
                        <span>24/7 servicio</span>
                    </div>
                </div>
                <a href="#" class="btn">Leer más</a>
            </div>
        </div>

    </section>

@stop