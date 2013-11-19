@extends('layouts.master')

@section('sidebar')
    @parent
@stop

@section('content')
    

<!-- Contact -->
<section id="contact" class="four">
	<div class="container">

		<header>
			<h2>Reporte de Mensajes</h2>
		</header>
		
		<?php $send = $notsend = 0;  ?>
		@foreach ($messages as $message)
			<div class="4u" style="margin-top: 10px">
				<article class="item">
					<header>
						<h2>{{ $message->contact->name }}</h2>
						<p> {{ $message->contact->phone }} </p>

						@if ( $message->send == true )
							<?php $send++;  ?>
							<p class="message-success">Enviado <span class="icon icon-ok success"></span> </p>
						@else
							<?php $notsend++;  ?>
							<p class="message-failed">No Enviado <span class="icon icon-remove error"></span> </p>
						@endif	
					</header>
				</article>								
			</div>	
		@endforeach	

		<div class="12u">
			<hr>
			<div class="6u" style="margin-top: 10px">
				<article class="item">
					<header>
						<h2>Enviados <span class="icon icon-ok success"></span> <strong>{{ $send }}</strong></h2>
					</header>
				</article>								
			</div>	

			<div class="6u" style="margin-top: 10px">
				<article class="item">
					<header>
						<h2>No enviados <span class="icon icon-remove error"></span> <strong>{{ $notsend }}</strong></h2>
					</header>
				</article>								
			</div>	
		</div>
	</div>

</section>

@stop


