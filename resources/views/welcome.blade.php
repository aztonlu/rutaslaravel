@extends('admin.template.main')

@section('title')
    Inicio de pagina tesis
@endsection

@section('content')
    <div id="page-wrapper">

            <!-- Header -->
                <div id="header">

                    <!-- Logo -->
                        <h1><a href="index.html" id="logo">Rutas tesis</em></a></h1>

                    <!-- Nav -->
                        <nav id="nav">
                            <ul>
                                <li class="current"><a href="index.html">Inicio</a></li>
                                <li><a href="#">primer menu</a></li>
                                <li><a href="#">segundo menu</a></li>
                                <li><a href="#">tercer menu</a></li>
                                <li>
                                    <a href="#">Menu usuario</a>
                                    <ul>
                                        <li>
                                            <a href="#">Usuario</a>
                                            <ul>
                                                <li><a href="{{ url('/login') }}">Login</a></li>
                                                <li><a href="{{ url('/register') }}">Registro</a></li>
                                                <li><a href="#">3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Ultimo menu</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    <!--fin nav-->

                </div>

            <!-- Banner -->
                <section id="banner">
                    <!--<iframe src="https://www.google.com/maps/embed?pb=!1m34!1m12!1m3!1d62074.572424237434!2d-72.10099884679778!3d-13.494988409330126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m19!3e0!4m5!1s0x916dd5d8de36c0f7%3A0xe5f7fdd5fce49634!2sMunicipalidad+Distrital+de+Santiago%2C+Giraldo+Ruiz+Caro%2C+Cusco+08000!3m2!1d-13.5258369!2d-71.98301169999999!4m5!1s0x916dd6b537a7a913%3A0x76fd2221fe962f07!2sPoroy%2C+Cusco!3m2!1d-13.5019104!2d-72.0320017!4m5!1s0x916db705dfa0e11d%3A0xe789e70afeae2c98!2sProvincia+de+Anta!3m2!1d-13.462225199999999!2d-72.1494902!5e0!3m2!1ses-419!2spe!4v1523209781173" width="1920" height="470" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <header>
                        <h2>Titulo <a href="#">con descripcion</a></em></h2>
                        <a href="#" class="button">primer link</a>
                    </header>-->
                    


                </section>

            <!-- Highlights -->
                <section class="wrapper style1">
                    <div class="container">
                        <div class="row 200%">
                            <section class="4u 12u(narrower)">
                                <div class="box highlight">
                                    <i class="icon major fa-paper-plane"></i>
                                    <h3>titulo</h3>
                                    <p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
                                </div>
                            </section>

                            <section class="4u 12u(narrower)">
                                <div class="box highlight">
                                    <i class="icon major fa-pencil"></i>
                                    <h3>titulo</h3>
                                    <p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
                                </div>
                            </section>
                            <section class="4u 12u(narrower)">
                                <div class="box highlight">
                                    <i class="icon major fa-wrench"></i>
                                    <h3>titulo</h3>
                                    <p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
                                </div>
                            </section>
                        </div>
                    </div>
                </section>

            <!-- Gigantic Heading -->
                <section class="wrapper style2">
                    <div class="container">
                        <header class="major">
                            <h2>Titulo mayor</h2>
                            <p>descripcion de titulo mayor</p>
                        </header>
                    </div>
                </section>

            <!-- Posts -->
                <section class="wrapper style1">
                    <div class="container">
                        <div class="row">
                            <section class="6u 12u(narrower)">
                                <div class="box post">
                                    <a href="#" class="image left"><img src="images/pic01.jpg" alt="" /></a>
                                    <div class="inner">
                                        <h3>Titulo mayor</h3>
                                        <p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
                                    </div>
                                </div>
                            </section>
                            <section class="6u 12u(narrower)">
                                <div class="box post">
                                    <a href="#" class="image left"><img src="images/pic02.jpg" alt="" /></a>
                                    <div class="inner">
                                        <h3>titulo mayor 2</h3>
                                        <p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="row">
                            <section class="6u 12u(narrower)">
                                <div class="box post">
                                    <a href="#" class="image left"><img src="images/pic03.jpg" alt="" /></a>
                                    <div class="inner">
                                        <h3>titulo mayor 3</h3>
                                        <p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
                                    </div>
                                </div>
                            </section>
                            <section class="6u 12u(narrower)">
                                <div class="box post">
                                    <a href="#" class="image left"><img src="images/pic04.jpg" alt="" /></a>
                                    <div class="inner">
                                        <h3>titulo mayor 4</h3>
                                        <p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </section>

            <!-- CTA -->
                <section id="cta" class="wrapper style3">
                    <div class="container">
                        <header>
                            <h2>titulo</h2>
                            <a href="#" class="button">link boton</a>
                        </header>
                    </div>
                </section>

            <!-- Footer -->
                <div id="footer">
                    <div class="container">
                        <div class="row">
                            <section class="3u 6u(narrower) 12u$(mobilep)">
                                <h3>links</h3>
                                <ul class="links">
                                    <li><a href="#">Mattis et quis rutrum</a></li>
                                    <li><a href="#">Suspendisse amet varius</a></li>
                                    <li><a href="#">Sed et dapibus quis</a></li>
                                    <li><a href="#">Rutrum accumsan dolor</a></li>
                                    <li><a href="#">Mattis rutrum accumsan</a></li>
                                    <li><a href="#">Suspendisse varius nibh</a></li>
                                    <li><a href="#">Sed et dapibus mattis</a></li>
                                </ul>
                            </section>
                            <section class="3u 6u$(narrower) 12u$(mobilep)">
                                <h3>links2</h3>
                                <ul class="links">
                                    <li><a href="#">Duis neque nisi dapibus</a></li>
                                    <li><a href="#">Sed et dapibus quis</a></li>
                                    <li><a href="#">Rutrum accumsan sed</a></li>
                                    <li><a href="#">Mattis et sed accumsan</a></li>
                                    <li><a href="#">Duis neque nisi sed</a></li>
                                    <li><a href="#">Sed et dapibus quis</a></li>
                                    <li><a href="#">Rutrum amet varius</a></li>
                                </ul>
                            </section>
                            <section class="6u 12u(narrower)">
                                <h3>contacto</h3>
                                <form>
                                    <div class="row 50%">
                                        <div class="6u 12u(mobilep)">
                                            <input type="text" name="name" id="name" placeholder="nombre" />
                                        </div>
                                        <div class="6u 12u(mobilep)">
                                            <input type="email" name="email" id="email" placeholder="Email" />
                                        </div>
                                    </div>
                                    <div class="row 50%">
                                        <div class="12u">
                                            <textarea name="message" id="message" placeholder="mensaje" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="row 50%">
                                        <div class="12u">
                                            <ul class="actions">
                                                <li><input type="submit" class="button alt" value="enviar mensaje" /></li>
                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </section>
                        </div>
                    </div>

                    <!-- Icons -->
                        <ul class="icons">
                            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                            <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                            <li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
                            <li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
                            <li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
                        </ul>

                    <!-- Copyright -->
                        <div class="copyright">
                            <ul class="menu">
                                <li>&copy; derechos reservados</li><li>Dise&ntildeo: <a href="http://desarrollocusco.com"> tesis rutas</a></li>
                            </ul>
                        </div>

                </div>

        </div>

        <!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.dropotron.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
            <script src="assets/js/main.js"></script>

            <script>
                    function initMap(){
                      // Map options
                      var options = {
                        zoom:8,
                        center:{lat:-13.5341804,lng:-71.9355579}
                      }

                      // New map
                      var map = new google.maps.Map(document.getElementById('banner'), options);

                      // Listen for click on map
                      google.maps.event.addListener(map, 'click', function(event){
                        // Add marker
                        addMarker({coords:event.latLng});
                      });

                      /*
                      // Add marker
                      var marker = new google.maps.Marker({
                        position:{lat:42.4668,lng:-70.9495},
                        map:map,
                        icon:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'
                      });

                      var infoWindow = new google.maps.InfoWindow({
                        content:'<h1>Lynn MA</h1>'
                      });

                      marker.addListener('click', function(){
                        infoWindow.open(map, marker);
                      });
                      */

                      // Array of markers
                      var markers = [
                        {
                          coords:{lat:-13.5341804,lng:-71.9355579},
                          iconImage:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
                          content:'<h1>Cusco</h1>'
                        },
                        {
                          coords:{lat:-13.4985056,lng:-72.5245806},
                          iconImage:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
                          content:'<h1>Anta</h1>'
                        },
                        /*{
                          coords:{lat:-13.5341804,lng:-71.9355579},
                          content:'<h1>Cusco</h1>'
                        },*/
                        {
                          coords:{lat:-13.4985056,lng:-72.5245806}
                        }
                      ];

                      // Loop through markers
                      for(var i = 0;i < markers.length;i++){
                        // Add marker
                        addMarker(markers[i]);
                      }

                      // Add Marker Function
                      function addMarker(props){
                        var marker = new google.maps.Marker({
                          position:props.coords,
                          map:map,
                          //icon:props.iconImage
                        });

                        // Check for customicon
                        if(props.iconImage){
                          // Set icon image
                          marker.setIcon(props.iconImage);
                        }

                        // Check content
                        if(props.content){
                          var infoWindow = new google.maps.InfoWindow({
                            content:props.content
                          });

                          marker.addListener('click', function(){
                            infoWindow.open(map, marker);
                          });
                        }
                      }
                    }
                  </script>
                  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIm1q4xe1K1u4Aq9HEd-pm0z7aikJT5ec&callback=initMap">
    </script>

@endsection
