@extends('back.template')

@section('main')

	@include('back.partials.entete', ['title' => trans('back/admin.dashboard'), 'icone' => 'dashboard', 'fil' => trans('back/admin.dashboard')])

	<div class="row">

		@include('back/partials/pannel', ['color' => 'primary', 'icone' => 'envelope', 'nbr' => $nbrMessages, 'name' => trans('back/admin.new-messages'), 'url' => 'contact', 'total' => 'Mensajes en total'])

		@include('back/partials/pannel', ['color' => 'red', 'icone' => 'image', 'nbr' => $nbrPosts, 'name' => 'Imágenes en Galería', 'url' => 'posts', 'total' => 'Editar Galería'])
	</div>

@stop


