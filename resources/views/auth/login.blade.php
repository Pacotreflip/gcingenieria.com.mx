@extends('front.template')

@section('main')
	
<div class="container">
    
    @if(session()->has('error'))
        @include('partials/error', ['type' => 'danger', 'message' => session('error')])
    @endif	
    
    <hr><h2 class="intro-text text-center">{{ trans('front/login.connection') }}</h2><hr>
    <p>{{ trans('front/login.text') }}</p>								
    
    {!! Form::open(['url' => 'auth/login', 'method' => 'post', 'role' => 'form']) !!}		
        {!! Form::control('text', 6, 'log', $errors, trans('front/login.log')) !!}
        {!! Form::control('password', 6, 'password', $errors, trans('front/login.password')) !!}
        {!! Form::check('memory', trans('front/login.remind')) !!}
        <input type="submit" class="btn btn-primary" value="Enviar">
    {!! Form::close() !!}
</div>
@stop

