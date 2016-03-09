@extends('back.template')

@section('head')

	{!! HTML::style('ckeditor/plugins/codesnippet/lib/highlight/styles/default.css') !!}

@stop

@section('main')
        @if(session()->has('ok'))
        @include('partials/error', ['type' => 'success', 'message' => session('ok')])
        @endif	
        @if(isset($info))
        @include('partials/error', ['type' => 'info', 'message' => $info])
        @endif  

	{!! Form::open(['route' => 'post.store', 'method' => 'POST', 'class' => 'form-horizontal panel', 'enctype' => 'multipart/form-data']) !!}	

	<!-- Entête de page -->
	@include('back.partials.entete', ['title' => 'Nuevo Elemento de Galería', 'icone' => 'picture-o', 'fil' => link_to('galeria', 'Ver Galería') . ' / ' . trans('back/blog.creation')])

	<div class="col-sm-12">
		@yield('form')

                
		{!! Form::control('text', 0, 'titulo', $errors, 'Título') !!}
		{!! Form::control('text', 0, 'descripcion', $errors, 'Descripción') !!}
                <input class="btn btn-successn-" name="imagen" type="file" />
                {!! Form::control('text', 0, 'tags', $errors, 'Etiquetas', isset($tags)? implode(',', $tags) : '') !!}

		{!! Form::submit('Enviar') !!}

		{!! Form::close() !!}
	</div>

@stop

@section('scripts')

	{!! HTML::script('ckeditor/ckeditor.js') !!}
	
	<script>

	var config = {
		codeSnippet_theme: 'Monokai',
		language: '{{ config('app.locale') }}',
		height: 100,
		toolbarGroups: [
			{ name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },
			{ name: 'editing',     groups: [ 'find', 'selection', 'spellchecker' ] },
			{ name: 'links' },
			{ name: 'insert' },
			{ name: 'forms' },
			{ name: 'tools' },
			{ name: 'document',	   groups: [ 'mode', 'document', 'doctools' ] },
			{ name: 'others' },
			//'/',
			{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
			{ name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
			{ name: 'styles' },
			{ name: 'colors' }
		]
	};

	CKEDITOR.replace( 'summary', config);

	config['height'] = 400;		

	CKEDITOR.replace( 'content', config);

	$("#title").keyup(function(){
			var str = sansAccent($(this).val());
			str = str.replace(/[^a-zA-Z0-9\s]/g,"");
			str = str.toLowerCase();
			str = str.replace(/\s/g,'-');
			$("#permalien").val(str);        
		});

  </script>

@stop