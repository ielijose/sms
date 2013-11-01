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
			<h2>Listas</h2>
		</header>
		
		<div id="sms-list">

			<div class="row quarter">
				<div class="8u"><p>Lista 1</p></div>
				<div class="4u"><a href="/mensajes/1"> <span class="icon icon-envelope"></span> </a></div>
			</div>
			<div class="row quarter">
				<div class="8u"><p>Lista 2</p></div>
				<div class="4u"><a href="/mensajes/1"> <span class="icon icon-envelope"></span> </a></div>
			</div>
			<div class="row quarter">
				<div class="8u"><p>Lista 3</p></div>
				<div class="4u"><a href="/mensajes/1"> <span class="icon icon-envelope"></span> </a></div>
			</div>
			<div class="row quarter">
				<div class="8u"><p>Lista 4</p></div>
				<div class="4u"><a href="/mensajes/1"> <span class="icon icon-envelope"></span> </a></div>
			</div>	
		</div>



	</div>
</section>

@stop


