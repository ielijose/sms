@extends('layouts.master')

@section('sidebar')
@parent
@stop

@section('content')


<!-- Contact -->
<section id="contact" class="four">
	<div class="container">

		

		<div class="12u" style="margin-top: 10px">
			<header>
				<h3>Editar Contacto</h3>
			</header>
			<article class="item">						
				{{ Form::open(array('url' => 'contact/'.$contact->id , 'method' => 'PUT')) }}

				<div class="row half">
					<div class="6u">
						{{ Form::text('name', $contact->name, array('class' => 'text', 'placeholder' => 'Fulanito de tal') ); }}
						{{ $errors->first('name') }}
					</div>
					<div class="6u">
						{{ Form::text('phone', $contact->phone, array('class' => 'text', 'placeholder' => '04246029989') ); }}
						{{ $errors->first('phone') }}
					</div>
				</div>


				<br>
				{{ Form::submit('Guardar', array('class' => 'button')); }}
				{{ Form::close() }}		
			</article>								
		</div>	
	</div>

</section>

@stop


