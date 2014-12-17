
	@extends('includes.template')

	@section('content')

</div> <!-- end of container -->

		<div id="staffDashAside">
			<div class="staffAsideContent">
				<p>STAFF DASHBOARD</p>
				<h4>{{$user->firstname.' '.$user->lastname}}</h4>
				<ul>
					<li><a href="{{URL::to('users/'.Auth::user()->id)}}">My Details</a></li>
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
				<h3>MY DETAILS</h3>

				<h5>First Name:</h5>
				<p>{{$user->firstname}}</p>

				<h5>Last Name:</h5>
				<p>{{$user->lastname}}</p>

				<h5>Email:</h5>
				<p data-field="title" data-url="{{URL::to('users/'.$user->id)}}">{{$user->email}}<i class="fa fa-pencil"></i></p>

				<h5>Phone:</h5>
				<p  data-field="title" data-url="{{URL::to('users/'.$user->id)}}">{{$user->phone}}<i class="fa fa-pencil"></i></p>

				<h5>Address:</h5>
				<p  data-field="title" data-url="{{URL::to('users/'.$user->id)}}">{{$user->address}}<i class="fa fa-pencil"></i></p>
			</div>
		</div>

	@stop