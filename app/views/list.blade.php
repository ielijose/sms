@extends('layouts.master')

@section('sidebar')
    @parent
@stop

@section('content')
    

<!-- Contact -->
<section id="contact" class="four">
	<div class="container">

		<header>
			<h2>{{ $list->name }}</h2>
		</header>
		
		<div class="row">
			@foreach ($contacts as $contact)

			<div class="4u" style="margin-top: 10px">
				<article class="item">
					<header>
						<h2>{{ $contact->name }}</h2>
						<p> {{ $contact->phone }} </p>
						<hr>
						
						<a href="/contact/{{ $contact->id }}/delete" title="Eliminar"> 
							<span class="icon icon-trash"></span> 
						</a>
						<a href="/lista/{{ $contact->id }}" title="Ver Contactos"> 
							<span class="icon icon-user"></span> 
						</a>
					</header>
				</article>								
			</div>	
			@endforeach
		</div>
		<hr>
		<div class="row">

			<div class="12u" style="margin-top: 10px">
				<header>
					<h3>Nuevo Contacto</h3>
				</header>
				<article class="item">						
						{{ Form::open(array('url' => 'listas', 'method' => 'post')) }}
    						{{ Form::text('name', '', array('class' => 'text', 'placeholder' => 'Lista #2') ); }}
    						{{ $errors->first('name') }}
    						<br>
    						{{ Form::submit('Guardar', array('class' => 'button')); }}
						{{ Form::close() }}		
				</article>								
			</div>	
		</div>

	</div>
</section>

@stop


