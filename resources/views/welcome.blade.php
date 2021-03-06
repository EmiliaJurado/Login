<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!DOCTYPE html>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Proyect</title>

        <!-- Fonts -->

        <!-- Styles -->
        <style>
        </style>

        
    </head>
    <body style="height:680px; background: -webkit-radial-gradient(LightSalmon,LightCoral,DeepPink);">
        

        @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-4 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"></a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline h4">Acceso</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline h4">Registrate</a>
                        @endif
                    @endauth
              
            @endif

          
                

                        

            <header class="container-fluid">
    <div class="row">
      <div class="col-12 align-align-self-center text-center text-uppercase">
        <h1>Venta de ropa para niña</h1>
        <p class="font-weight-bold">"La calidad te hace especial"</p>
        <img src="{{asset('img/43.jpeg')}}" class="mx-auto d-block" width="1100px" height="560" alt="">
      </div>
    </div>
  </header>
 
  <seaction class="container-fluid">
    <div class="row">
      <div class="col-12 text-center mt-5 font-weight-bold">
        <h2>Otoño Invierno</h2>
        <hr>

      </div>
    </div>
  </seaction>
  <main class="seccion-contenedor">
    <div class="contenedor-anuncios">
      <div class="container">
        <div class="card-group">
          <div class="card">
            <img src="{{asset('img/seis.jpg')}}" width="368px" height="280" alt="">
            <div class="card-body " style="background-color: 	HotPink;">
              <h5>
                <p class="text-center font-weight-bold">Tendencias de temporada</p>
              </h5>
              <p class="card-text text-justify font-italic ">Compara las opiniones más útiles de los clientes sobre los productos con mejor calificación en nuestra
                Licuadoras, Batidoras y procesadores de Alimentos tienda.</p>

            </div>
          </div>
          <div class="card bg-warning">
            <img src="{{asset('img/cinco.jpg')}}" width="368px" height="280" alt="">
            <div class="card-body" style="background-color: LightPink;">
              <h5>
                <p class="text-center font-weight-bold">Otoño </p>
              </h5>
              <p class="card-text text-justify font-italic">Encuentra Vaporeras Electricas en MercadoLibre.com.mx! Entre y conozca nuestras increíbles ofertas
                y promociones. Descubre la mejor forma de comprar online.</p>

            </div>
          </div>
          <div class="card bg-warning">
            <img src="{{asset('img/cuatro.jpg')}}" width="368px" height="280" alt="">
            <div class="card-body" style="background-color: 	HotPink;">
              <h5>
                <p class="text-center font-weight-bold">Invierno </p>
              </h5>
              <p class="card-text text-justify font-italic">Descubre toda la variedad en hornos eléctricos que tenemos en línea. Compra los mejores
                electrodomésticos y haz tus tareas más simples.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
        <br>
    </seaction>
    <div class="container my-5">
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

</body>

</html>
