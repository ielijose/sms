@extends('layouts.master')

@section('sidebar')
    @parent
@stop

@section('content')
    

<!-- Contact -->
<section id="contact" class="four">
	<div class="container">

		<header>
			<h2>Enviar Mensajes</h2>
			<h5> {{ $list->name }} </h5>
		</header>
	

		<form method="post" action="/mensajes/{{ $list->id }}">			
			<div class="row half">
				<div class="12u">
					{{ Form::textarea('message', '', array('class' => 'text', 'placeholder' => 'Escribe tu mensaje aqui...') ); }}
    				{{ $errors->first('message') }}
				</div>
			</div>
			<div class="row">
				<div class="12u">
					<a href="#" class="button submit">Enviar</a>
				</div>
			</div>
		</form>

	</div>

	
</section>

@stop


