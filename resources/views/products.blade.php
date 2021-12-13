@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!DOCTYPE html>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Laravel</title>

        <!-- Fonts -->

        <!-- Styles -->
        <style>
        </style>

        
    </head>
    <body style="height:680px; background: -webkit-radial-gradient(pink,violet);">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background-color: HotPink">

            <div class="card-header text-center text-uppercase font-italic text-primary h1 " style="background: -webkit-radial-gradient(Pink,Fuchsia);">¡¡Productos a la venta!!</div>


                <a href="{{ url('home/') }}" class="btn btn-warning
                        btn-lg btn-block" role="button" aria-pressed="true">Inicio</a>


                <a href="{{ url('cart/') }}" class="btn btn-success 
                        btn-lg btn-block" role="button" aria-pressed="true">Carrito de compra</a>

                <div class="card-body" style="background-color: HotPink">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                {{-- Agregar productos --}}
                    <div class="row">
                        @foreach($products as $product)
                        <div class="col-6">

                            <img src="{{ $product->photo }}" width="300" height="300">
                            <h4>{{ $product->name }}</h4>
                            <p>{{ Str::limit(strtolower($product->description), 50) }}</p>
                            <p><strong>Precio: </strong> {{ $product->price }}$</p>
                      
                            
                        <a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-success btn-lg
                        btn-block" role="button" aria-pressed="true">Agregar al carrito</a>

                        <a href="{{ url('product-detail/'.$product->id) }}" class="btn btn-warning 
                        btn-lg btn-block" role="button" aria-pressed="true">Detalle</a>
                    </div>
                        @endforeach
                    </div>

                    {{-- Agregar productos --}}

                </div>
            </div>
        </div>
    </div>
</div>

<div class="container my-5">
      <!-- Footer -->
      <footer class="text-center text-lg-start text-white" style="background-color: Purple">
        <!-- container -->
        <div class="container p-4 pb-0">
          <!-- Section: Links -->
          <section class="">
            <!--Grid row-->
            <div class="row">
              <!-- Grid column -->
              <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">
                  Dirección de tienda
                </h6>
                <p>
                  🏠Av.Casas Aleman, N° 56,Col.La Luoita Xolco, CP. 129950. Alcaldía
                  Milpa Alta.
                </p>
              </div>
              <!-- Grid column -->

              <hr class="w-100 clearfix d-md-none" />

              <!-- Grid column -->
              <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Publicaciones de vestidos para niñas</h6>
                <p>
                  <a class="text-white"> 🔆Lo de hoy.</a>
                </p>
                <p>
                  <a class="text-white">👗Vestidos de temporada.</a>
                </p>
                <p>
                  <a class="text-white"> 💰Costos accesibles.</a>
                </p>
                <p>
                  <a class="text-white"> 💁‍♀️Colores hermosos.</a>
                </p>
              </div>
              <!-- Grid column -->

              <hr class="w-100 clearfix d-md-none" />

              <!-- Grid column -->
              <hr class="w-100 clearfix d-md-none" />

              <!-- Grid column -->
              <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Contactos</h6>
                <p><i class="fas fa-home mr-3"></i> 💻electro@gmail.com</p>
                <p><i class="fas fa-envelope mr-3"></i> ✉info@gmail.com</p>
                <p><i class="fas fa-phone mr-3"></i> 📱+ 01 234 567 88</p>
                <p><i class="fas fa-print mr-3"></i> 📞+ 01 234 567 89</p>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Redes Sociales</h6>

                <!-- Facebook -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998" href="https://www.facebook.com/tiendascoppel" role="button"><i class="fab fa-facebook-f"></i></a>

                <!-- YouTube -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee" href="https://www.youtube.com/user/tiendascoppel" role="button"><i class="fab fa-twitter"></i></a>

                <!-- Google -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39" href="https://www.coppel.com/electrodomesticos-para-tu-hogar" role="button"><i class="fab fa-google"></i></a>

                <!-- Instagram -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac" href="https://www.instagram.com/coppel/" role="button"><i class="fab fa-instagram"></i></a>

                Facebook,YouTube, Google, Instagram.
              </div>
            </div>
            <!--Grid row-->
          </section>
          <!-- Section: Links -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
          © 2021 Emily:
          <a class="text-white" href="https://es.wikipedia.org/wiki/Electrodom%C3%A9stico">Ventas de ropa para niñas.com</a>
        </div>
        <!-- Copyright -->
      </footer>
      <!-- Footer -->
    </div>
    <!-- End of .container -->

</body>

</html>
</body>
</html>
@endsection



