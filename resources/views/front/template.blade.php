<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        
        <title>GC Ingeniería</title>
    
        <!-- core CSS -->
        
        <link rel="shortcut icon" href="{{ asset('images/ico/favicon.ico') }}">
        <link rel="apple-touch-icon-precomposed" href="{{ asset('images/ico/apple-touch-icon-144-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" href="{{ asset('images/ico/apple-touch-icon-114-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" href="{{ asset('images/ico/apple-touch-icon-72-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" href="{{ asset('images/ico/apple-touch-icon-57-precomposed.png') }}">
        
        {!! HTML::style('css/animate.min.css') !!}
        {!! HTML::style('css/bootstrap.min.css') !!}
        {!! HTML::style('css/font-awesome.min.css') !!}
        {!! HTML::style('css/font-awesome.css') !!}
        {!! HTML::style('css/main.css') !!}       
        {!! HTML::style('css/prettyPhoto.css') !!}
        {!! HTML::style('css/responsive.css') !!}
        {!! HTML::style('css/demo.css') !!}
        {!! HTML::style('css/footer-distributed-with-address-and-phones.css') !!}
        
        @yield('head')

        {!! HTML::style('http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800') !!}
	{!! HTML::style('http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic') !!}
    </head><!--/head-->
    
    <body class="homepage">
        <header id="header">
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-xs-4">
                            <div class="top-number"><p><i class="fa fa-phone"></i>      (55)36-89-41-70</p></div>
                        </div>
                        
                        <div class="col-sm-6 col-xs-8">
                            <div class="social">
                                <ul class="social-share">
                                    <li><a href="https://www.facebook.com/GCIngenieriaAire" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="mailto:gazpargloria@gcingenieria.com.mx"><i class="fa fa-envelope "></i></a></li>
                                    
                                    @if(session('statut') != 'admin')
                                    <li><a href="{{URL::to('auth/login')}}"><i class="fa fa-sign-in"></i></a></li>
                                    @else
                                    <li><a href="{{URL::to('auth/logout')}}"><i class="fa fa-sign-out"></i></a></li>
                                    @endif
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!--/.container-->
            </div><!--/.top-bar-->

            <nav class="navbar navbar-inverse" role="banner">
                <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="{{URL::to('/')}}">{{ HTML::image('images/logo.png') }}</a>
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Navegación</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>    
                    </div>
                    <div class="collapse navbar-collapse navbar-right">
                        <ul class="nav navbar-nav">
                            <li {!! classActivePath('/') !!}> {!! link_to('/','Inicio' ) !!} </li>
                            <li {!! classActivePath('acerca') !!}> {!! link_to('acerca', 'Acerca de Nosotros') !!} </li>
                            <li {!! classActivePath('servicios') !!}> {!! link_to('servicios', 'Servicios') !!} </li>
                            <li {!! classActivePath('galeria') !!}> {!! link_to('galeria', 'Galería') !!} </li>
                            <li {!! classActivePath('contact/create') !!}> {!! link_to('contact/create', 'Contacto') !!} </li>			
                            
                            @if(session('statut') == 'admin')
                            <li> {!! link_to_route('admin', 'Panel de Administrador') !!} </li>
                            @endif   
                        
                        </ul>
                    </div>
                </div><!--/.container-->    
            </nav><!--/nav-->
            
            @if(session()->has('ok'))
                @include('partials/error', ['type' => 'success', 'message' => session('ok')])
            @endif	
            
            @if(isset($info))
                @include('partials/error', ['type' => 'info', 'message' => $info])
            @endif            
            
            @yield('header')
        
        </header><!--/header-->
        
        @yield('main')        
        
        <footer class="footer-distributed">
            <div class="footer-left">
                <h3>{{ HTML::image('images/logocircle.png') }}</h3>
                <p class="footer-links">
                    {!! link_to('/','Inicio' ) !!}
                    ·
                    {!! link_to('acerca', 'Acerca de Nosotros') !!}
                    ·
                    {!! link_to('servicios', 'Servicios') !!}
                    ·
                    {!! link_to('galeria', 'Galería') !!}
                    ·
                    {!! link_to('contact/create', 'Contacto') !!}
                </p>
                <p class="footer-company-name">GC Ingeniería en Aire S.A de C.V.  &copy; <?php echo date('Y')?></p>
            </div>
            
            <div class="footer-center">
                <div>
                    <i class="fa fa-map-marker"></i>
                    <p><span>Tonatico 287 Colonia Las Fuentes Nezahualcóyotl</span>Estado de México 57600</p>
                </div>
                
                <div>
                    <i class="fa fa-phone"></i>
                    <p>(55)36-89-41-70</p>
                </div>

                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="mailto:gc_ingenieria_aire@yahoo.com.mx">gc_ingenieria_aire@yahoo.com.mx</a></p>
		</div>
            </div>
            
            <div class="footer-right">
                <p class="footer-company-about">
                    <span>
                        Acerca de Nosotros
                    </span>
                    Elaboración de Ingeniería, diseño y ejecución de sistemas de aire acondicionado, clasificado, filtrado y ventilación.
                </p>
                <div class="footer-icons">
                    <a href="https://www.facebook.com/GCIngenieriaAire" target="_blank"><i class="fa fa-facebook"></i></a>
                </div>
            </div>
        </footer>
        
        {!! HTML::script('js/jquery.js') !!}
        {!! HTML::script('js/bootstrap.min.js') !!}
        {!! HTML::script('js/jquery.prettyPhoto.js') !!}
        {!! HTML::script('js/jquery.isotope.min.js') !!}
        {!! HTML::script('js/main.js') !!}
        {!! HTML::script('js/wow.min.js') !!}       
            
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        
        {!! HTML::script('js/plugins.js') !!}
        
	<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-74165520-1', 'auto');
            ga('send', 'pageview');
        </script>
        
	@yield('scripts')
    
    </body>
</html>