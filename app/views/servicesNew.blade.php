
	@extends('includes.template')

	@section('content')

	<div class="servicesBrief">
			<h1>ADD A NEW SERVICE</h1>

		</div>

		<div class="addNew">

		{{ Form::open(array('url' => 'servicesNew')) }}

				{{Form::label('title', 'Title')}}
				{{Form::text('title')}} <br>

				{{Form::label('content', 'Content')}}
				{{Form::text('content')}} <br>

				{{Form::submit('Add New Service')}} <br>

		{{ Form::close() }}
		{{Session::get("error")}}
		
		</div>



	</div> <!-- end of container -->
	
	@stop