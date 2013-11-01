@extends('layouts.master')

@section('content')
<!-- Contact -->
<section id="contact" class="four">
	<div class="container">

		<header>
			<h2>Mensajes</h2>
		</header>
	

		<form method="post" action="#">
			<div class="row half">
				<div class="6u"><input type="text" class="text" name="name" placeholder="Name" /></div>
				<div class="6u"><input type="text" class="text" name="email" placeholder="Email" /></div>
			</div>
			<div class="row half">
				<div class="12u">
					<textarea name="message" placeholder="Message"></textarea>
				</div>
			</div>
			<div class="row">
				<div class="12u">
					<a href="#" class="button submit">Send Message</a>
				</div>
			</div>
		</form>

	</div>
</section>
@stop