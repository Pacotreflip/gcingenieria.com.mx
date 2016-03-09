@extends('front.template')
@section('main')
<br><br>
<div class="container">
    <div class="center wow fadeInDown">
        <hr>{{ HTML::image('images/titulos/galeria.png','', array('class'=>'img-responsive center-block')) }}<hr>
    </div>
    <section id="portfolio">

        <div class="center wow fadeInUp">

            <ul class="portfolio-filter text-center">
                <li><a class="btn btn-default active" href="#" data-filter="*">Todo</a></li>
                @foreach($tt as $t)
                <li><a class="btn btn-default" href="#" data-filter=".{{$t}}">{{strtoupper($t)}}</a></li>
                @endforeach
            </ul><!--/#portfolio-filter-->


            <div class="row">
                <div class="portfolio-items">

                    @foreach($posts as $post)
                    
                    
                    <div class="portfolio-item 
                         @foreach($post->tags as $tag) 
                         {{$tag->clave}} 
                         @endforeach 
                         col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            {{ HTML::image($post->imagens,'', array('class'=>'img-responsive')) }}
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">{{$post->titulo}}</a></h3>
                                    <p>{{$post->descripcion}}</p>
                                    <a class="preview" href="{{ asset($post->imagenl) }}" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver Completa</a>
                                </div> 
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->
                    @endforeach

                </div>
            </div>
        </div>
    </section>
</div>
@stop
