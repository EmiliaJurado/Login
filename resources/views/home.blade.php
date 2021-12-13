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

<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center text-uppercase h1 " style="background: -webkit-radial-gradient(Pink,Fuchsia);">¡¡Bienvenida!!</div>

                <a href="{{ url('products/') }}" class="btn bg-primary 
                        btn-lg btn-block" role="button" aria-pressed="true">Productos</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container" style="background-color: purple">
    <div class="row">
        <div class="col-sm-12 mt-4">
        <pre> <h1 class="display-2 text-white text-center">¿Quienes somos?</h1></pre>
            <h5>
                <p class="text-white text-justify">Fábrica de Ropa para Niños, vistiendo generaciones desde hace 62 años. 
            Piezas cómodas y a la moda para cualquier ocasión dentro y fuera de casa.En el año 1962 Confecciones
            Bambino, C. A. inicia sus operaciones bajo el nombre de Andreone & Álvarez en el centro de Caracas en
            la Esquina de Canónigo, fabricando únicamente prendas de vestir para bebés, contando con sólo 30 máquinas
            de coser y 37 empleados. 1970: El Fino Fino con Bambino se estrena como slogan oficial e iconiza la marca.
1983: Bambino fue creciendo progresivamente y a partir de 1983, la fábrica se encuentra instalada en un edificio de 9 pisos 
de 1.296 m2 cada uno utilizados en su totalidad por la empresa en sus líneas de producción.
1986: La Asociación Empresarial Venezolana premia a Confecciones Bambino con el título de Prestigio Nacional.
1990: Confecciones Bambino, C. A. cuenta con un equipo de 285 trabajadores y manufactura 4 grandes líneas de ropa:
 Colegial, Niñas, Niños y Canastilla.2016: Bambino inaugura su primera tienda oficial en el Centro Comercial El Recreo, en la ciudad de Caracas.
2018: El primero de diciembre Fino Fino con Bambino anunciada su portal de e-commerce, una página web innovadora con carrito 
de compra que permite a todas las madres y padres del país comprar desde la comodidad de su casa. 
2018: El 7 de diciembre Bambino innagura una de sus tiendas más grandes ubicada en el Centro Comercial Orinokia Mall, en la ciudad de Puerto Ordaz. 
2019: El 7 de junio Fino Fino con Bambino abre las puertas de su tercera tienda física a nivel nacional, ubicada en el Centro Comercial Las Trinitarias en Barquisimeto.
Este mismo año, el 27 de septiembre Fino Fino con Bambino llega a Barinas e instala su cuarta tienda en el Centro Comercial Cima Barinas.</p>
            </h5>
            <br>
            

            <pre> <h1 class="text-white text-center">Mision y Visión</h1></pre>
            <br>
            <h5><p class="text-white text-justify">"Nuestro compromiso es confeccionar ropa casual infantil con una excelente 
                calidad y precios asequibles, que permitan mantener el rol de liderazgo dentro de la industria y así alcanzar el desarrollo y crecimiento de la empresa."</p></h5>
            <h5><p class="text-white text-justify">"Ser reconocidos por nuestros clientes como líderes en el mercado de ropa para niños de alta calidad con precios asequibles 
                al mercado venezolano y consolidarnos como una empresa de constante innovación a nivel nacional.”</p></h5>
                <img class="rounded float-left" src="{{asset('img/27.jpg')}}" alt="Responsive image" height="">
                <img class="rounded float-right" src="{{asset('img/27.jpg')}}" alt="Responsive image" height="">

                <img class="rounded mx-auto d-block" src="{{asset('img/27.jpg')}}" alt="Responsive image" height="">
                <br>
            
                <pre><h1 class="text-white text-center">Ropa más vendida</h1></pre>
            <br>
        </div>
    </div>
    <div class="row mt-4 mb-4">
        <div class="col-sm-3">
            <div class="card" style="height: 44rem; background-color: violet" >
                <img class="card-img-top" src="{{asset('img/19.jpg')}}" alt="Card image cap" height="220rem">
                <div class="card-body tex">
                    <p class="card-text  text-justify">Marcus Michael Fenix, líder del pelotón Delta e hijo del conocido científico
                        militar Adam Fenix, es un soldado decidido e ingenioso que no ve sus actos como algo heroico,
                        sino como una simple necesidad. Antes de su condena, Marcus era un soldado condecorado y un gran
                        líder. Ahora, este héroe caído podría ser la última esperanza de la supervivencia de la
                        humanidad.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="height: 44rem; background-color: violet">
                <img class="card-img-top" src="{{asset('img/20.jpg')}}" alt="Card image cap" height="220rem">
                <div class="card-body">
                    <p class="card-text  text-justify">Dominic "Dom" Santiago, Soldado Comando de las Fuerzas Armadas de la Coalición
                        de Gobiernos Ordenados. Es un duro guerrero que posee una actitud positiva incluso en los peores
                        momentos. Liberó a su mejor amigo, Marcus Fenix, de la Cárcel de Máxima Seguridad de Jacinto y
                        lo reclutó para el pelotón Delta. Luego de perder todo por lo que luchaba, Dom se descuidó
                        mucho, participó durante la Pandemia Lambent y se sacrifico para salvar a Delta en la Misión a
                        Mercy.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="height: 44rem; background-color: violet">
                <img class="card-img-top" src="{{asset('img/21.jpg')}}" alt="Card image cap" height="220rem">
                <div class="card-body">
                    <p class="card-text  text-justify">El Soldado Anthony Carmine fue el hermano de Benjamin Carmine y Clayton
                        Carmine. Fue el miembro más joven de Delta-Uno, Anthony compensa su falta de experiencia con un
                        entusiasmo desenfrenado y verdadero respeto por los veteranos de guerra como Marcus y Dom. De
                        hecho, él es tan entusiasta que que corre y no se cubre, desobedeciendo completamente la Regla
                        de oro de los Gears. </p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="height: 44rem; background-color: violet">
                <img class="card-img-top" src="{{asset('img/22.jpg')}}" alt="Card image cap" height="220rem">
                <div class="card-body">
                    <p class="card-text  text-justify">La Teniente Anya Stroud fue una oficial Gear del Ejército de la CGO y la única
                        hija de la comandante Helena Stroud. Se unió al ejército CGO para seguir los pasos de su madre,
                        pero a diferencia de ella, Anya se convirtió en una oficial de comunicaciones del CIC. Participo
                        en las Guerras del Péndulo, en la Guerra Locust y finalmente en la Pandemia Lambent solo que
                        durante la Pandemia ella se volvió Gear de Primera Línea.
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-sm-3">
            <div class="card" style="height: 44rem; background-color: violet">
                <img class="card-img-top" src="{{asset('img/23.jpg')}}" alt="Card image cap" height="220rem">
                <div class="card-body">
                    <p class="card-text  text-justify">El Coronel Victor Hoffman es un soldado inteligente, pragmático y un oficial
                        Gear de alto rango condecorado.
                        Hoffman es un guerrero natural, que surgió de las filas para ganar una comisión, y se hizo un
                        nombre como nuevo teniente de empuje en comando en el cerco de Anvil Gate. Él no tiene interés
                        en los trabajos de escritorio. Él prefería coger su rifle y encargarse de unos cuantos Locust.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="height: 44rem; background-color: violet">
                <img class="card-img-top" src="{{asset('img/26.jpg')}}" alt="Card image cap" height="220rem">
                <div class="card-body">
                    <p class="card-text  text-justify">Augustus "El Tren" Cole, soldado especialista de las Fuerzas Armadas de la
                        Coalición de Gobiernos Ordenados, fue un exitoso jugador de Thrashball conocido por su
                        extravagante y contundente estilo. Después del Día de la Emergencia, Cole se unió al Ejército
                        CGO como un Gear donde se le conoce por su encantador carácter. Cole ha pasado la mayor parte de
                        su carrera militar junto a su amigo, Damon Baird.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="height: 44rem; background-color: violet">
                <img class="card-img-top" src="{{asset('img/25.jpg')}}" alt="Card image cap" height="220rem">
                <div class="card-body">
                    <p class="card-text  text-justify">El Cabo Damon S. Baird, anteriormente Teniente, fue un soldado Gear, genio en
                        varios campos técnicos, mecánicos y científicos. Es experto en recolectar, analizar y descifrar
                        tanto armas Locust, como otros tipos de equipos, artefactos y documentos, también se destaca por
                        ser un gran ingeniero, creando distintos artefactos y reparando maquinaria avanzada de la CGO.
                        Líder del Escuadrón Kilo junto a Sofía Hendrick, Garron Paduk y Augustus Cole.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="height: 44rem; background-color: violet">
                <img class="card-img-top" src="{{asset('img/27.jpg')}}" alt="Card image cap" height="220rem">
                <div class="card-body">
                    <p class="card-text  text-justify">La Reina Myrrah (también conocida como el sujeto de prueba EV-184-9) fue la
                        principal líder de la Horda Locust, siendo la cabeza y eje del sistema de organización social de
                        los Locust. Curiosamente ella es humana, pero a pesar de esto representaba el centro de la
                        devoción y alabanzas de los Locust.

                        Myrrah formaba parte de los experimentos de Niles Samson destinados a crear soldados que no
                        desobedecieran órdenes a partir de niños enfermos por exposición prolongada a la Imulsión.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col">
        <pre> <h1 class="text-white text-center">Que bueno que nos visitas</h1></pre>
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
        <div class="col">
        <pre> <h1 class="text-white text-center">Ventas</h1></pre>
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


    <div class="row mt-4">
        <div class="col-sm-6">
            <p>
            <pre> <h3 class="text-white text-center">Tu pequeña necesita un cambio  </h3></pre>
            </p>
            <p class="text-white text-justify">Ephyra fue la capital de la CGO y la nación de Tyro durante las Guerras
                del Péndulo. La ciudad fue construida sobre el inexpugnable Meseta de Jacinto, pero una vez fue atacada
                por la Horda Locust en el Día de la Emergencia y cayó ante los Locust una década después, sufriendo
                daños catastróficos. Durante el día, gran parte de la ciudad estaba bajo el control total de los Locus
            </p>
            <img src="{{asset('img/40.jpg')}}" alt="" class="rounded mx-auto d-block" height="350xp" width="500xp">
        </div>
        <div class="col-sm-6">
            <p>
            <pre><h3 class="text-white text-center">Tienes un lugar aquí</h3></pre>
            </p>
            <p class="text-white text-justify">La Tumba de los Desconocidos fue un gran cementerio en el cual yacían los
                cadáveres de los Gears más importantes en la historia de la Coalición de Gobiernos Ordenados. Tumba de
                los Desconocidos. Se situaba en la misma calle que la Casa de los Soberanos, en la ciudad de Ephyra. Fue
                construida en honor de todos los Gears caídos en las Guerras del Péndulo, y a los héroes que por su
                valentía y honor habían recibido la Estrella Embry.</p>
            <img src="{{asset('img/41.jpg')}}" alt="" class="rounded mx-auto d-block" height="350xp" width="500xp">
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-sm-6">
            <p>
            <pre><h3 class="text-white text-center">No lo pienses</h3></pre>
            </p>
            <p class="text-white text-justify">La Estación de Timgad fue una de las muchas estaciones en donde pasaban
                los Trenes de Levitación Magnética, como el Pilar de Tyro. Se encuentra en el Este de Timgad, y estaba
                cerca de la Academia de la Barricada Este. Esta estación vio mucha acción en las ultimas horas de la
                Ofensiva de Masa Ligera.
            </p>
            <img src="{{asset('img/42.jpg')}}" alt="" class="rounded mx-auto d-block" height="350xp" width="500xp">
        </div>
        <div class="col-sm-6">
            <p>
            <pre><h3 class="text-white text-center">Tú decides</h3></pre>
            </p>
            <p class="text-white text-justify">La Central de Energía Timgad fue la principal fuente de poder del Este de
                Timgad, así como del Puente Timgad. Durante la Ofensiva de Masa Ligera la mayor parte de los mecanismos
                en la Central fueron seriamente dañados o incluso destruidos, Marcus y Dom fueron capaces de derrotar a
                un Brumak gracias a múltiples corrientes de energía en la central.</p>
            <img src="{{asset('img/47.jpg')}}" alt="" class="rounded mx-auto d-block" height="350xp" width="500xp">
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
