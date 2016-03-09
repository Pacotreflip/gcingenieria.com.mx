@extends('front.template')

@section('main')
<section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
                <li data-target="#main-slider" data-slide-to="3"></li>
                <li data-target="#main-slider" data-slide-to="4"></li>
                <li data-target="#main-slider" data-slide-to="5" class="active"></li>
            </ol>
            <div class="carousel-inner">

                <div class="item carousel" style="background-image: url(images/slider/bg1.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content-w">
                                    <h1 class="animation animated-item-1">GC Ingeniería en Aire</h1>
                                    <h2 class="animation animated-item-2">
                                        <i class="fa fa-caret-right"></i>Elaboración de Ingeniería, diseño y ejecución de sistemas de aire acondicionado, clasificado, filtrado y ventilación<br><br>
                                        <i class="fa fa-caret-right"></i>Contamos con distribución de equipos de aire acondicionado de las marcas: Carrier, York, Trane, Mitsubishi<br><br>
                                        <i class="fa fa-caret-right"></i>Filtros de las Marcas: American air Filters AAF, Veco, Camfil, Falndes<br>
                                    
                                    </h2>
                                    {!! link_to('acerca','Ver Más', array('class'=>'btn-slide animation animated-item-3')) !!}
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4 center-block">
                                <div class="slider-img center-block">
                                    <img src="images/slider/img1.png" class="img-responsive center-block">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item carousel" style="background-image: url(images/slider/bg2.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content-b">
                                    <h1 class="animation animated-item-1">Mini-Split </h1>
                                    <h2 class="animation animated-item-2">
                                        <i class="fa fa-caret-right"></i>Auto Apagado<br>
                                        <i class="fa fa-caret-right"></i>Filtro con Carbón Activado<br>
                                        <i class="fa fa-caret-right"></i>Control de flujo de aire automático<br>
                                        <i class="fa fa-caret-right"></i>Función Turbo<br>
                                        <i class="fa fa-caret-right"></i>Reloj programable<br>
                                        <i class="fa fa-caret-right"></i>Panel de LED<br>
                                        <i class="fa fa-caret-right"></i>Función Auto Encendido<br>
                                        <i class="fa fa-caret-right"></i>Filtro de catalizador frío<br>
                                        <i class="fa fa-caret-right"></i>Condensador con protección anti-corrosión

                                        
                                    </h2>
                                    {!! link_to('galeria','Ver Más', array('class'=>'btn-slide animation animated-item-3')) !!}
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="images/slider/img2.png" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->
                
                <div class="item carousel" style="background-image: url(images/slider/bg3.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content-w">
                                    <h1 class="animation animated-item-1">Aire Acondicionado Compacto 50ZPB</h1>
                                    <h2 class="animation animated-item-2">
                                        <i class="fa fa-caret-right"></i>Refrigerante Puron®<br>
                                        <i class="fa fa-caret-right"></i>De 2 a 5 toneladas de capacidad de enfriamiento<br>
                                        <i class="fa fa-caret-right"></i>Desde 77 dB (silencioso como una aspiradora)<br>
                                        <i class="fa fa-caret-right"></i>Compresor scroll<br>
                                        <i class="fa fa-caret-right"></i>Base a prueba de la formación de óxido con drenaje integrado<br>
                                        <i class="fa fa-caret-right"></i>Interruptor para pérdida de carga<br>
                                        <i class="fa fa-caret-right"></i>Rejilla de persiana<br>
                                        <i class="fa fa-caret-right"></i>Utiliza termostato estándar
                                    </h2>
                                    {!! link_to('galeria','Ver Más', array('class'=>'btn-slide animation animated-item-3')) !!}
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="images/slider/img3.png" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->
                
                <div class="item carousel" style="background-image: url(images/slider/bg2.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content-b">
                                    <br><br><br>
                                    <h1 class="animation animated-item-1">UMA tipo Bag-in Bag-out marca GC</h1>
                                    <h2 class="animation animated-item-2">
                                        <i class="fa fa-caret-right"></i>Con perfil tubular Galvanizado<br><br>
                                        <i class="fa fa-caret-right"></i>Aluminio o Acero Inoxidable  
                                    </h2>
                                    {!! link_to('galeria','Ver Más', array('class'=>'btn-slide animation animated-item-3')) !!}
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="images/slider/img4.png" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item carousel" style="background-image: url(images/slider/bg3.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content-w">
                                    <h1 class="animation animated-item-1">Filtros "American Air Filter"</h1>
                                    <h2 class="animation animated-item-2">
                                        <br>
                                        <i class="fa fa-caret-right"></i> Eficiencia Mecánica<br>
                                        <i class="fa fa-caret-right"></i> Forma y ajuste diferente a cualquier otro pliegue disponible actualmente<br>
                                        <i class="fa fa-caret-right"></i> <b>Soporte DURAFLEX</b> elaborado con fibra sin necesidad de alambres<br>
                                    </h2>
                                    {!! link_to('galeria','Ver Más', array('class'=>'btn-slide animation animated-item-3')) !!}
                                </div>
                            </div>
                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="images/slider/img5.png" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                
                <div class="item active" style="background-image: url(images/slider/bg3.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content-w">
                                    <h1 class="animation animated-item-1">GC Ingeniería presente en <br>Expo Farma 2016.</h1>
                                    <h2 class="animation animated-item-2">
                                        <br><br>                                        Del 13 al 15 de Abril del 2016 <br>
                                        En el WTC de la Ciudad de México<br><br>
                                        ¡Los esperamos en el stand 1328 y 1330!
                                    </h2>
                                    <a href="http://www.e-ntegrated.com/e-nscribe/iniciofarma16.asp" target="_blank" class="btn-slide animation amimated-item-3">Registrate Aquí</a>
                                </div>
                            </div>
                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="images/slider/expofarma.jpg" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section><!--/#main-slider-->
    
    <div class="container">
        <br><hr><br>
    </div>

    <section id="partner">
        <div class="container">
            <div class="center wow fadeInDown">
                {{ HTML::image('images/titulos/clientes.png','', array('class'=>'img-responsive center-block')) }}
            </div>    

            <div class="partners">
                <ul>
                    <li> <a target="blank" href="http://1936.mx.all.biz/goods">{{ HTML::image('images/clientes/1.png', 'Cliente', array('class' => 'img-responsive wow fadeInDown', 'data-wow-duration' => '1000ms', 'data-wow-delay' => '300ms')) }}</a></li>
                    <li> <a target="blank" href="http://1429.mx.all.biz/">{{ HTML::image('images/clientes/2.png', 'Cliente', array('class' => 'img-responsive wow fadeInDown', 'data-wow-duration' => '1000ms', 'data-wow-delay' => '300ms')) }}</a></li>
                    <li> <a target="blank" href="http://1503.mx.all.biz/goods">{{ HTML::image('images/clientes/3.png', 'Cliente', array('class' => 'img-responsive wow fadeInDown', 'data-wow-duration' => '1000ms', 'data-wow-delay' => '300ms')) }}</a></li>
                    <li> <a target="blank" href="http://gruposomar.com.mx/">{{ HTML::image('images/clientes/4.png', 'Cliente', array('class' => 'img-responsive wow fadeInDown', 'data-wow-duration' => '1000ms', 'data-wow-delay' => '300ms')) }}</a></li>
                    <li> <a target="blank" href="http://www.tecsiquim.com.mx/">{{ HTML::image('images/clientes/5.png', 'Cliente', array('class' => 'img-responsive wow fadeInDown', 'data-wow-duration' => '1000ms', 'data-wow-delay' => '300ms')) }}</a></li>
                    <li> <a target="blank" href="http://genbio.com.mx/">{{ HTML::image('images/clientes/6.png', 'Cliente', array('class' => 'img-responsive wow fadeInDown', 'data-wow-duration' => '1000ms', 'data-wow-delay' => '300ms')) }}</a></li>
                    <li> <a target="blank" href="http://www.imbruluart.com/">{{ HTML::image('images/clientes/7.png', 'Cliente', array('class' => 'img-responsive wow fadeInDown', 'data-wow-duration' => '1000ms', 'data-wow-delay' => '300ms')) }}</a></li>
                    <li> <a target="blank" href="#">{{ HTML::image('images/clientes/8.png', 'Cliente', array('class' => 'img-responsive wow fadeInDown', 'data-wow-duration' => '1000ms', 'data-wow-delay' => '300ms')) }}</a></li>
                    <li> <a target="blank" href="http://gsk.com.mx/">{{ HTML::image('images/clientes/9.png', 'Cliente', array('class' => 'img-responsive wow fadeInDown', 'data-wow-duration' => '1000ms', 'data-wow-delay' => '300ms')) }}</a></li>
                    <li> <a target="blank" href="http://grupovac.mx/">{{ HTML::image('images/clientes/10.png', 'Cliente', array('class' => 'img-responsive wow fadeInDown', 'data-wow-duration' => '1000ms', 'data-wow-delay' => '300ms')) }}</a></li>
                </ul>
            </div>        
        </div><!--/.container-->
    </section><!--/#partner-->
@stop


