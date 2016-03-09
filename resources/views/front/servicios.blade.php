@extends('front.template')
@section('main')
    <div class="container">       
        <div class="center wow fadeInDown">
            <hr>{{ HTML::image('images/titulos/servicios.png','', array('class'=>'img-responsive center-block')) }}<hr>
        </div>
    </div>

<section id="services" class="service-item">
    <div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="media services-wrap wow fadeInUp">
                <div class="pull-left">
                    {{ HTML::image('images/services/alimentos.png','', array('class'=>'img-responsive')) }}
                </div>
                <div class="media-body">
                    <h3 class="media-heading">Expertos en:</h3>
                    <p>Productoras de alimentos</p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4">
            <div class="media services-wrap wow fadeInUp">
                <div class="pull-left">
                    {{ HTML::image('images/services/congelacion.png','', array('class'=>'img-responsive')) }}
                </div>
                <div class="media-body">
                    <h3 class="media-heading">Expertos en:</h3>
                    <p>Cámaras de Congelación</p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4">
            <div class="media services-wrap wow fadeInUp">
                <div class="pull-left">
                    {{ HTML::image('images/services/farmacias.png','', array('class'=>'img-responsive')) }}
                </div>
                <div class="media-body">                   
                    <h3 class="media-heading">Expertos en:</h3>
                    <p>Laboratorios Farmacéuticos</p>
                </div>
            </div>
        </div>  

        <div class="col-sm-6 col-md-4">
            <div class="media services-wrap wow fadeInUp">
                <div class="pull-left">
                    {{ HTML::image('images/services/hospitales.png','', array('class'=>'img-responsive')) }}
                </div>
                <div class="media-body">
                    <h3 class="media-heading">Expertos en:</h3>
                    <p>Hospitales</p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4">
            <div class="media services-wrap wow fadeInUp">
                <div class="pull-left">
                    {{ HTML::image('images/services/oficinas.png','', array('class'=>'img-responsive')) }}
                </div>
                <div class="media-body">
                    <h3 class="media-heading">Expertos en:</h3>
                    <p>Oficinas</p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4">
            <div class="media services-wrap wow fadeInUp">
                <div class="pull-left">
                    {{ HTML::image('images/services/refrigeracion.png','', array('class'=>'img-responsive')) }}
                </div>
                <div class="media-body">
                    <h3 class="media-heading">Expertos en:</h3>
                    <p>Cámaras de Refrigeración</p>
                </div>
            </div>
        </div>     
        
        <div class="col-sm-6 col-md-4">
            <div class="media services-wrap wow fadeInUp">
                <div class="pull-left">
                    {{ HTML::image('images/services/temp_hum.png','', array('class'=>'img-responsive')) }}
                </div>
                <div class="media-body">
                    <h3 class="media-heading">Expertos en:</h3>
                    <p>Áreas de condiciones especiales en temperatura,humedad y presiones diferenciales</p>
                </div>
            </div>
        </div>     
        
        <div class="col-sm-6 col-md-4">
            <div class="media services-wrap wow fadeInUp">
                <div class="pull-left">
                    {{ HTML::image('images/services/textil.png','', array('class'=>'img-responsive')) }}
                </div>
                <div class="media-body">
                    <h3 class="media-heading">Expertos en:</h3>
                    <p>Plantas Textiles</p>
                </div>
            </div>
        </div>     
    </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#services-->
<!--<section id="feature" >
    <div class="container">
       <div class="center wow fadeInDown">
               <hr>{{ HTML::image('images/titulos/ofrecemos.png','', array('class'=>'img-responsive center-block')) }}<hr>
        </div>  

        <div class="row">
            <div class="features">
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-bullhorn"></i>
                        <h2>Fresh and Clean</h2>
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                    </div>
                </div>/.col-md-4

                 <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-cloud-download"></i>
                        <h2>Easy to customize</h2>
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                    </div>
                </div>/.col-md-4

                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-cloud-download"></i>
                        <h2>Easy to customize</h2>
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                    </div>
                </div>/.col-md-4

                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-cogs"></i>
                        <h2>Ingeniería de Procesos</h2>
                        <h3>Innovación y mejoramiento en los procesos</h3>
                    </div>
                </div>/.col-md-4

                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-certificate"></i>
                        <h2>Calidad</h2>
                        <h3>Procesos y métodos bajo normas y estandares</h3>
                    </div>
                </div>/.col-md-4
            </div>/.services
        </div>/.row    
    </div>/.container
</section>/#feature-->

@stop
    