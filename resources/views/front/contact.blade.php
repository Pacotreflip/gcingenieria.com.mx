@extends('front.template')
@section('main')

    <div class="container">
        <div class="center wow fadeInDown">
            <hr>{{ HTML::image('images/titulos/contacto.png','', array('class'=>'img-responsive center-block')) }}<hr>
        </div>
        
        <div class="gmap-area wow fadeInUp"> 
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <div class="gmap">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.150494264819!2d-99.03328727900026!3d19.405902527249843!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1fcc28874ca6d%3A0x828dd47bb923a1be!2sCalle+Tonatico+287%2C+Las+Fuentes%2C+57600+Nezahualc%C3%B3yotl%2C+M%C3%A9x.!5e0!3m2!1ses-419!2smx!4v1454264835231" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="col-sm-7 map-content">
                        <ul class="row">            
                            <li class="col-sm-6">
                                <address>
                                    <h2>ING. GAZPAR GLORIA CASTILLO</h2>
                                    <h5>GERENTE GENERAL</h5>
                                    <p>Tel. Móvil : 55 - 1963 - 4388 <br>Email: <b>gazpargloria@gcingenieria.com.mx</b><br>Email: <b>g-gloria-c@live.com.mx</b></p>
                                </address>       

                                <address>          
                                    <h2>ING. LEONARDO BALDERAS LÓPEZ</h2>
                                    <h5>GERENTE INGENIERÍA</h5>
                                    <p>Tel. Móvil : 55 - 3702 - 4799 <br> Email: <b>leonardobalderas@gcingenieria.com.mx</b><br>Email: <b>lbalderasl@live.com.mx</b></p>
                                </address>
                            </li>

                            <li class="col-sm-6" >
                                <address>  
                                    <h2>Dirección:</h2>
                                    <p>Calle Tonatico No. 287 <br> Colonia Las Fuentes<br> Municipio Nezahualcóyotl <br> Estado de México C.P. 57600</p>
                                    <p>Telefono : (55) 36 - 89 - 41 - 70 <br> Email : gc_ingenieria_aire@yahoo.com.mx</p>
                                </address>
                            </li>
                        </ul>
                    </div>
                </div><!--/.row-->
            </div><!--/.container-->
        </div><!--/.gmap_area -->
    </div>

<section id="contact-form">
    <div class="container">
        <div class="center wow fadeInDown">
            <hr>{{ HTML::image('images/titulos/escribenos.png','', array('class'=>'img-responsive center-block')) }}<hr>
        </div>

        <div class="row contact-wrap wow fadeInUp"> 
            <div class="status alert alert-success" style="display: none"></div>
            {!! Form::open(['url' => 'contact', 'method' => 'post', 'role' => 'form', 'class' => 'contact-form']) !!}	
            <div class="col-sm-5 col-sm-offset-1">
                <div>
                    <label>Nombre *</label>
                    <input type="text" name="name" class="form-control" required="required">
                </div>
                <div>
                    <label>Correo Electrónico *</label>
                    <input type="email" name="email" class="form-control" required="required">
                </div>
                <div>
                    <label>Teléfono</label>
                    <input type="tel" class="form-control">
                </div>
                <div>
                    <label>Empresa</label>
                    <input type="text" class="form-control">
                </div>                        
            </div>
            <div class="col-sm-5">
                <div>
                    <label>Mensaje *</label>
                    <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                </div>                        
                <div>
                    <input class="btn btn-primary" type="submit" value="Enviar Mensaje">
                </div>
            </div>
            {!! Form::close() !!}
        </div><!--/.row-->
    </div><!--/.container-->
</section>

@stop