@extends('front.template')
@section('main')
        <div class="container">
            <div>
               <hr>{{ HTML::image('images/titulos/valores.png','', array('class'=>'img-responsive center-block')) }}<hr>
               <div class="col-sm-8" >
                   <div class="tab-wrap"> 
                        <div class="media">
                            <div class="parrent pull-left">
                                <ul class="nav nav-tabs nav-stacked">                                    
                                    <li class="active"><a href="#tab1" data-toggle="tab" class="analistic-01">Calidad Humana y Profesional</a></li>
                                    <li class=""><a href="#tab2" data-toggle="tab" class="analistic-02">Honestidad</a></li>
                                    <li class=""><a href="#tab3" data-toggle="tab" class="tehnical">Atención</a></li>
                                    <li class=""><a href="#tab4" data-toggle="tab" class="tehnical">Profesionalismo</a></li>
                                    <li class=""><a href="#tab5" data-toggle="tab" class="tehnical">Lealtad de Servicio</a></li>
                                </ul>
                            </div>

                            <div class="parrent media-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade active in" id="tab1">
                                        <div class="media">
                                           <div>
                                                {{ HTML::image('images/valores/tab1.png','Tab1', array('class' => 'img-responsive center-block')) }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab2">
                                        <div class="media">
                                           <div>
                                                {{ HTML::image('images/valores/tab2.png','Tab2', array('class' => 'img-responsive center-block')) }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab3">
                                        <div class="media">
                                           <div>
                                                {{ HTML::image('images/valores/tab3.png','Tab3', array('class' => 'img-responsive center-block')) }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab4">
                                        <div class="media">
                                           <div>
                                                {{ HTML::image('images/valores/tab4.png','Tab4', array('class' => 'img-responsive center-block')) }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab5">
                                        <div class="media">
                                           <div>
                                                {{ HTML::image('images/valores/tab5.png','Tab5', array('class' => 'img-responsive center-block')) }}
                                            </div>
                                        </div>
                                    </div>
                                </div> <!--/.tab-content-->  
                            </div> <!--/.media-body--> 
                        </div> <!--/.media-->     
                    </div><!--/.tab-wrap-->               
                </div><!--/.col-sm-6-->
                
                <div class="col-xs-12 col-sm-4 wow fadeInDown">
                    <hr>{{ HTML::image('images/circulo.png','', array('class'=>'img-responsive center-block')) }}<hr>
                </div>
            </div>
            
            <div class="center">
               <hr>{{ HTML::image('images/titulos/quienes.png','', array('class'=>'img-responsive center-block')) }}<hr>
               <p class="lead list-group-item">Una empresa joven en años, con personal altamente calificado <br> con una gran experiencia en la instalación de sistemas de aire para la industría.</p>
            </div>
            
            <div class="center">
               <hr>{{ HTML::image('images/titulos/mision.png','', array('class'=>'img-responsive center-block')) }}<hr>
               <p class="lead list-group-item">Ofrecer las mejores propuestas, proyecciones, ejecuciones y soluciones a nuestros clientes, acompañada de un excelente servicio y relación laboral, para así garantizar la mayor satisfacción a las necesidades de nuestros clientes.</p>
            </div>
            
            <div class="center">
               <hr>{{ HTML::image('images/titulos/vision.png','', array('class'=>'img-responsive center-block')) }}<hr>
               <p class="lead list-group-item">Realizar un crecimiento en todas nuestras áreas para brindar un mejor servicio mediante la actualización del desarrollo técnico y humano, y así, brindar una excelente calidad siendo una empresa totalmente responsable.</p>
            </div> 
        </div> 
@stop