@extends('layouts.app')
@section('content')


<header class="container-fluid">
    <div class="row">
      <div class="col-12 align-align-self-center text-center text-uppercase">
      <pre> <h1>Venta de ropa para niña</h1></pre>
      <p class="font-weight-bold">"La calidad te hace especial"</p>
        <img src="{{asset('img/once.jpg')}}" class="mx-auto d-block" width="1020px" height="460" alt="">
      </div>
    </div>
  </header>

  <br><br>
  <header class="container-fluid">
    <div class="row">
      <div class="col-12 align-align-self-center text-center text-uppercase text-danger">
      <pre> <h1>Registrate</h1></pre>
      </div>
    </div>
  </header>
  <body style="height:680px; background: -webkit-radial-gradient(LightSalmon,LightCoral,DeepPink);">


<div class="container" >
    <div class="row justify-content-center" >
        <div class="col-md-8">

            <div class="card" style=" background: -webkit-radial-gradient(purple,mediumaquamarine,pink);">
                <div class="card-header">{{ __('Registrarse') }}</div> 

                <div class="card-body" class="card-body" style=" background: -webkit-radial-gradient(mediumaquamarine, pink,yellow);">  
                <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row" >
                            <label for="name"  class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Direccion de correo electronico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrarse') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br> <br>


  <main class="seccion-contenedor">
    <div class="contenedor-anuncios">
      <div class="container">
        <div class="card-group">
          <div class="card">
            <img src="{{asset('img/18.jpg')}}" width="368px" height="280" alt="">
            <div class="card-body" style="background-color: 	HotPink;">>
              <h5>
                <p class="text-center font-weight-bold">Tendencias de temporada</p>
              </h5>
              <p class="card-text text-justify font-italic ">Compara las opiniones más útiles de los clientes sobre los productos con mejor calificación en nuestra
                Licuadoras, Batidoras y procesadores de Alimentos tienda.</p>

            </div>
          </div>
          <div class="card bg-warning">
            <img src="{{asset('img/17.jpg')}}" width="368px" height="280" alt="">
            <div class="card-body" style="background-color: LightPink;">
              <h5>
                <p class="text-center font-weight-bold">Otoño </p>
              </h5>
              <p class="card-text text-justify font-italic">Encuentra Vaporeras Electricas en MercadoLibre.com.mx! Entre y conozca nuestras increíbles ofertas
                y promociones. Descubre la mejor forma de comprar online.</p>

            </div>
          </div>
          <div class="card " style="background-color: 	HotPink;">>
            <img src="{{asset('img/16.jpg')}}" width="368px" height="280" alt="">
            <div class="card-body">
              <h5>
                <p class="text-center font-weight-bold">Invierno </p>
              </h5>
              <p class="card-text text-justify font-italic">Descubre toda la variedad en hornos eléctricos que tenemos en línea. Compra los mejores
                electrodomésticos y haz tus tareas más simples.</p>
            </div>
          </div>
        </div>
        <br>
    </seaction>

    <main class="seccion-contenedor">
    <div class="contenedor-anuncios">
      <div class="container">
        <div class="card-group">
          <div class="card" style="background-color: 	HotPink;">
            <img src="{{asset('img/catorce.jpg')}}" width="368px" height="280" alt="">
            <div class="card-body " style="background-color: 	HotPink;">
              <h5>
                <p class="text-center font-weight-bold">Tendencias correctas</p>
              </h5>
              <p class="card-text text-justify font-italic ">Compara las opiniones más útiles de los clientes sobre los productos con mejor calificación en nuestra
                Licuadoras, Batidoras y procesadores de Alimentos tienda.</p>

            </div>
          </div>
          <div class="card " style="background-color: LightPink;">
            <img src="{{asset('img/trece.jpg')}}" width="368px" height="280" alt="">
            <div class="card-body">
              <h5>
                <p class="text-center font-weight-bold">Primavera</p>
              </h5>
              <p class="card-text text-justify font-italic">Encuentra Vaporeras Electricas en MercadoLibre.com.mx! Entre y conozca nuestras increíbles ofertas
                y promociones. Descubre la mejor forma de comprar online.</p>

            </div>
          </div>
          <div class="card bg-warning">
            <img src="{{asset('img/doce.jpg')}}" width="368px" height="280" alt="">
            <div class="card-body" style="background-color: 	HotPink;">
              <h5>
                <p class="text-center font-weight-bold">Lo mejor </p>
              </h5>
              <p class="card-text text-justify font-italic">Descubre toda la variedad en hornos eléctricos que tenemos en línea. Compra los mejores
                electrodomésticos y haz tus tareas más simples.</p>
            </div>
          </div>
        </div>
        <br>
    </seaction>


  <div class="container ">
      <!-- Footer -->
      <footer class="text-center text-lg-start text-white" style="background-color: HotPink">
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
@endsection
