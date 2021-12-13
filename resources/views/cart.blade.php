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
    <div class="col">
        <div class="row">
            </div>
    </div>
    <div class="row mt-4">
        <div class="col-sm-6">
            <p>
            <pre><h3 class="text-white text-center">No te arrepentiras</h3></pre>
            </p>
            <p class="text-white text-justify">Jacinto fue una ciudad ubicada en la parte superior de la Meseta de
                Jacinto. Fue la base de la CGO y la ciudad más importante después del día de la emergencia. La ciudad
                fue considerada como una de las ciudades más bellas de Sera y fue la capital de la Operación: Tormenta
                en la Hondonada pero fue hundida por la CGO para hundir Nexus, la capital de la Horda Locust.</p>
            <img src="{{asset('img/38.png')}}" alt="" class="rounded mx-auto d-block" height="350xp" width="500xp">
        </div>
        <div class="col-sm-6">
            <p>
            <pre><h3 class="text-white text-center">Descrubre la calidad</h3></pre>
            </p>
            <p class="text-white text-justify">La Cárcel de Máxima Seguridad de Jacinto, conocida por el nombre de
                Establecimiento de servicios de prisión Hesketh o por su apodo "The Slab" es una prisión de Ephyra, la
                cual albergaba a los peores criminales, durante el periodo de las Guerras del Péndulo. El Sargento
                Marcus Fenix estuvo encerrado durante 4 años.</p>
            <img src="{{asset('img/39.jpg')}}" alt="" class="rounded mx-auto d-block" height="350xp" width="500xp">
        </div>
    </div>
</div>
    </div>
    </div><br><br>
    

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"  style="background: -webkit-radial-gradient(Pink,Fuchsia);">
                <div class="card-header text-center text-uppercase font-italic text-primary h1 " style="background: -webkit-radial-gradient(Pink,Fuchsia);">Carrito de compras</div>

                <a href="{{ url('home/') }}" class="btn btn-success 
                        btn-lg btn-block" role="button" aria-pressed="true">Inicio</a>

                <a href="{{ url('products/') }}" class="btn btn-warning  
                        btn-lg btn-block" role="button" aria-pressed="true">Productos</a>

                <div class="card-body"  style="background: -webkit-radial-gradient(Pink,Fuchsia);">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    {{-- Agregar detalle al carrito --}}

                    <?php $valor = 0 ?>
                    @if(session('cart'))

                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>
                                    Producto
                                </th>
                                <th>
                                    Precio Unitario
                                </th>
                                <th>
                                    Cantidad
                                </th>
                                <th>
                                    Precio Total
                                </th>
                                <th>
                                    Foto
                            </th>
                            </tr>
                        </thead>

                                @foreach(session('cart') as $id => $details)

                    <?php $valor += $details['price'] * $details['quantity'] ?>

                        <tr>
                            <th>
                         {{ $details['name'] }}
                            </th>
                            <th>
                        S./{{ $details['price'] }}
                            </th>
                            <th>
                        {{ $details['quantity'] }}
                            </th>
                            <th>
                        ${{ $details['price'] * $details['quantity'] }}
                            </th>
                            <th>
                        <img src="{{ $details['photo']}}" width="50" height="50"/>
                        </th>
                    </tr>

                @endforeach
            </table>
            @endif

            <table align="right">
                <th> 
                    <div class="badge badge-primary text-wrap" style="width: 10rem;">
                    <p></p>
                    <p>Valor S./{{ $valor }}</p>
                    <p>IGV S./{{ $valor*0.18 }}</p>
                    <p>Total S./{{ $valor+$valor*0.18}}</p>
                    </div>
                </th>
            </table>




                                <div class="alert alert-danger alert-dismissible fade show"  style="width: 20rem;" role="alert">
                    <strong>¡¡Tu COMPRA HA SIDO EXITOSA!!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>



                    {{-- Agregar detalle al carrito --}}

                </div>
            </div>
        </div>
    </div><br>
    <div class="row mb-4">
        <div class="col">
        <pre> <h1 class="text-white text-center text-uppercase font-italic  h1">Consulta nuestros centro de información</h1></pre>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-sm-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>

                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{asset('img/30.jpg')}}" alt="First slide" height="600rem">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('img/32.jpg')}}" alt="Second slide" height="600rem">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <img class="d-block w-100" src="{{asset('img/34.jpg')}}" alt="Third slide" height="600rem">
                        <div class="carousel-caption d-none d-md-block">
                            </h5>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <img class="d-block w-100" src="{{asset('img/35.jpg')}}" alt="Fourth slide" height="600rem">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>

                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    
    

    <div class="row mt-4">
        <div class="col-sm-6">
            <p>
            <pre> <h3 class="text-white text-center">No te arrepentiras</h3></pre>
            </p>
            <p class="text-white text-justify">Jacinto fue una ciudad ubicada en la parte superior de la Meseta de
                Jacinto. Fue la base de la CGO y la ciudad más importante después del día de la emergencia. La ciudad
                fue considerada como una de las ciudades más bellas de Sera y fue la capital de la Operación: Tormenta
                en la Hondonada pero fue hundida por la CGO para hundir Nexus, la capital de la Horda Locust.</p>
            <img src="{{asset('img/46.jpg')}}" alt="" class="rounded mx-auto d-block" height="350xp" width="500xp">
        </div>
        <div class="col-sm-6">
            <p>
            <pre> <h3 class="text-white text-center">Descrubre la calidad</h3></pre>
            </p>
            <p class="text-white text-justify">La Cárcel de Máxima Seguridad de Jacinto, conocida por el nombre de
                Establecimiento de servicios de prisión Hesketh o por su apodo "The Slab" es una prisión de Ephyra, la
                cual albergaba a los peores criminales, durante el periodo de las Guerras del Péndulo. El Sargento
                Marcus Fenix estuvo encerrado durante 4 años.</p>
            <img src="{{asset('img/45.jpg')}}" alt="" class="rounded mx-auto d-block" height="350xp" width="500xp">
        </div>
    </div>
</div>




<div class="container my-5">
      <!-- Footer -->
      <footer class="text-center text-lg-start text-white" style="background-color:purple">
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


@endsection
