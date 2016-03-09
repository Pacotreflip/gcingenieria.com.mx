@extends('back.template')

@section('head')

	<style type="text/css">
		.table { margin-bottom: 0; }
		.panel-heading { padding: 0 15px; }
	</style>

@stop

@section('main')

 <!-- Entête de page -->
  @include('back.partials.entete', ['title' => 'Gestión de Galería', 'icone' => 'picture-o', 'fil' => link_to('galeria', 'Ver Galería') . ' / ' . 'Elementos'])

  <a href="{{ route('post.create') }}"><button class="btn btn-primary">Nuevo Elemento</button></a>
<?php $i = 1; ?> 
@foreach($posts as $post)
  
  <div class="panel panel-default">
		  <div class="panel-heading">
				<table class="table">
					<thead>
						<tr>
							<th class="col-lg-1">#</th>
							<th class="col-lg-1">Título</th>
    				        <th class="col-lg-1">Imágen</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="text-primary"><strong>{{ $i }}</strong></td>
							<td>{{ $post->titulo}}</td>
                                                        <td>{{ HTML::image($post->imagens,'', array('class'=>'img-responsive', 'heigth' => '50', 'weigth' => '50')) }}</td>
							<td>
							{!! Form::open(['method' => 'DELETE', 'route' => ['post.destroy', $post->id_post]]) !!}
                                                        {!! Form::destroy('Eliminar', '¿Estás seguro que deseas eliminar el elemento de la galería?', 'btn-xs') !!}
                                                        {!! Form::close() !!}
							</td>
						</tr>
					</tbody>
				</table>	
			</div>
			<div class="panel-body">
				{{ $post->descripcion }}
			</div>
		</div>
<?php $i++; ?> 
  
  @endforeach
  

@stop

@section('scripts')

            

@stop