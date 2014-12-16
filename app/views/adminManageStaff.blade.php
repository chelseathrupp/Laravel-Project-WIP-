
	@extends('includes.template')

	@section('content')

</div> <!-- end of container -->

		<div id="staffDashAside">
			<div class="staffAsideContent">
				<p>ADMIN DASHBOARD</p>
				<h4>{{Auth::user()->firstname}} {{Auth::user()->lastname}}</h4>
				<ul>
					<li><a href="{{URL::to('users/'.Auth::user()->id)}}">My Details</a></li>
					<li class="currentTab"><a href="{{URL::to('staff/manage')}}">Manage Staff</a></li>
					<li><a href="{{URL::to('users/'.Auth::user()->id.'/forms')}}">Forms</a></li>
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
					<h3>Add New Staff Member</h3>
				{{ Form::open(array("url"=>"staff")) }}
		
				{{Form::text('email',null,array('placeholder'=>'Email Address'))}} <br>

				{{Form::submit('Add')}} <br>

				{{ Form::close() }}

				</div>



				<div class="viewExistingStaff">
					<h3>Existing Staff Members</h3>
					<ul>

					@foreach($users as $user)


						@if ($user->firstname == NULL)
							<li><a href="{{URL::to('users/'.$user->id)}}">{{$user->email}}</a> <i class="fa fa-pencil editStaff"></i> <i class="fa fa-times deleteStaff"></i> </li>
						
						@else
							<li><a href="{{URL::to('users/'.$user->id)}}">{{$user->firstname}} {{$user->lastname}}</a> <i class="fa fa-pencil editStaff"></i> <i class="fa fa-times deleteStaff"></i> </li>				
	

						@endforelse

					@endforeach

					</ul>
				</div>
				
			</div>
		</div>

	@stop