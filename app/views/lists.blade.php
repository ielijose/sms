@extends('layouts.master')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@stop

@section('content')
    

<!-- Contact -->
<section id="contact" class="four">
	<div class="container">

		<header>
			<h2>Listas de contactos</h2>
		</header>
		
		<div class="row">
			@if(count($lists) > 0)	

				@foreach ($lists as $list)

				<div class="4u" style="margin-top: 10px">
					<article class="item">
						<header>
							<h2>{{ $list->name }}</h2>
							<hr>
							<a href="/mensajes/{{ $list->id }}" title="Enviar Mensaje"> 
								<span class="icon icon-envelope"></span> 
							</a>
							<a href="/lista/{{ $list->id }}" title="Ver Contactos"> 
								<span class="icon icon-user"></span> 
							</a>
							
						</header>
					</article>								
				</div>	
				@endforeach

			@else
				<h3>No hay listas de contactos.</h3>
			@endif
		</div>
		<hr>
		<div class="row">

			<div class="12u" style="margin-top: 10px">
				<header>
					<h3>Nueva Lista</h3>
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


