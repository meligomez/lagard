@extends('layouts.app')
@section('content')
<div class="container">
<div class="home-container">
        <div class="home-img-general">
                <img src="/img/home-veicle.png" style="width: 100%;" alt="">
            </div>
            <h2>Nuestros servicios</h2>
            <div class="home-nuestros-servicios">
                @foreach($services as $unServicio)
                <div class="servicio-item">
                    <div class="foto-servicio">
                      <img src="{{ $unServicio->foto }}" alt="" class="img-servicio"  style="width:55px;">
                    </div>
                      <br>
                    <div class="titulo-servicio" style="font-weight:bold">
                      {{ $unServicio->titulo }}
                    </div>
                      <br>
                    <div class="descripcion-servicio">
                      {{ $unServicio->descripcion }}
                    </div>
                </div>
                @endforeach
            </div>
            <div class="home-nuestro-crecimiento">
               <div class="fondo-nuestro-crecimiento">
                <div>
                <h2>Nuestro crecimiento en el último año</h2>
                </div>
                <div class="new-clients">
                    <div class="counter1">
                    0
                    </div>
                    <h3>Nuevos clientes</h3>
                </div>

                <div class="new-clients">
                    <div class="counter2">
                       0
                    </div>
                   <h3>Nuevos clientes</h3>
                </div>

                <div class="new-clients">
                    <div class="counter3">
                       0
                    </div>
                    <h3>Nuevos clientes</h3>
                </div>

                <div class="new-clients">
                    <div class="counter4">
                       0
                    </div>
                    <h3>Nuevos clientes</h3>
                </div>
               </div>
            </div>
            <div class="home-nuestros-clientes">

            </div>
</div>
</div>
@endsection
