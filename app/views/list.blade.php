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
			<a href="/mensajes/{{ $list->id }}" title="Enviar Mensaje"> 
				<span class="icon icon-envelope"></span> 
			</a>
		</header>
		
		<div class="row">
			@if(count($contacts) > 0)
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
							<a href="/contact/{{ $contact->id }}/edit" title="Editar"> 
								<span class="icon icon-edit"></span> 
							</a>
						</header>
					</article>								
				</div>	
				@endforeach
			@else
				<h3>No hay contactos en esta lista.</h3>
			@endif
		</div>
		<hr>
		<div class="row">

			<div class="12u" style="margin-top: 10px">
				<header>
					<h3>Nuevo Contacto</h3>
				</header>
				<article class="item">						
						{{ Form::open(array('url' => 'contact/'.$list->id , 'method' => 'post')) }}

						<div class="row half">
							<div class="6u">
								{{ Form::text('name', '', array('class' => 'text', 'placeholder' => 'Fulanito de tal') ); }}
    							{{ $errors->first('name') }}
							</div>
							<div class="6u">
								{{ Form::text('phone', '', array('class' => 'text', 'placeholder' => '04246029989') ); }}
    							{{ $errors->first('phone') }}
							</div>
						</div>

    						
    						<br>
    						{{ Form::submit('Agregar', array('class' => 'button')); }}
						{{ Form::close() }}		
				</article>								
			</div>	
		</div>

	</div>
</section>

@stop


