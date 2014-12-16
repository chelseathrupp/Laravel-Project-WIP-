
	@extends('includes.template')

	@section('content')
	

	</div> <!-- end of container -->

		<div id="staffDash">
			
		<div class="staffContent">
			<h3 class="bigHeading">Staff Login</h3>
			{{ Form::open(array('url' => 'login')) }}

				
				{{Form::text('email',null,array('placeholder'=>'Email'))}}


				{{Form::password('password',array('placeholder'=>'Password'))}}

				{{Form::submit('Login')}} <br>
				<a href="">Forgotten Password?</a>

				{{ Form::close() }}
				{{Session::get("error")}}
		</div>
			
		</div>

	@stop