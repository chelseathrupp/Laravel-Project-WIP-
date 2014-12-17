
	@extends('includes.template')

	@section('content')

</div> <!-- end of container -->

		<div id="staffDashAside">
			<div class="staffAsideContent">
				<p>ADMIN DASHBOARD</p>
				<h4>{{Auth::user()->firstname}} {{Auth::user()->lastname}}</h4>
				<ul>
					<li><a href="{{URL::to('users/'.Auth::user()->id)}}">My Details</a></li>
					<li><a href="{{URL::to('staff/manage')}}">Manage Staff</a></li>
					<li class="currentTab"><a href="{{URL::to('users/'.Auth::user()->id.'/forms')}}">Forms</a></li>
					<li>Applications</li>
					<li>Information</li>
					<li>Policies and Procedures</li>
					<li>Event Calendar</li>
					<li>Online Training</li>
		</ul>
			</div>


		</div>

		<div id="staffDash2">
			<div class="staffContent">

				<div class="addNewStaff">
					<h3>New Staff Form</h3>

					{{ Form::open(array('url' => 'formNew','files'=>true)) }}

					
					{{Form::text('title',null,array('placeholder'=>'Form Title'))}} <br>
					{{Form::text('type',null,array('placeholder'=>'Form Category'))}} <br>

					
					{{Form::label('form','Form')}}
					 {{Form::file('form')}}<br>

					{{Form::submit('Add New Form')}} <br>

					{{ Form::close() }}
					{{Session::get("error")}}


				
			</div>
		</div>

	@stop