
	@extends('includes.template')

	@section('content')

</div> <!-- end of container -->

		<div id="staffDashAside">
			<div class="staffAsideContent">
				<p>ADMIN DASHBOARD</p>
				<h4>{{$user->firstname.' '.$user->lastname}}</h4>
				<ul>
					<li class="currentTab"><a href="{{URL::to('users/'.Auth::user()->id)}}">My Details</a></li>
					<li><a href="{{URL::to('staff/manage')}}">Manage Staff</a></li>
					<li><a href="{{URL::to('users/'.Auth::user()->id.'/forms')}}">Forms</a></li>
					<li>Applications</li>
					<li>Information</li>
					<li>Policies and Procedures</li>
					<li>Event Calendar</li>
					<li>Jobs</li>
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
				<p><a href="">{{$user->email}}</a><i class="fa fa-pencil"></i></p>

				<h5>Phone:</h5>
				<p><a href="">{{$user->phone}}</a><i class="fa fa-pencil"></i></p>

				<h5>Address:</h5>
				<p><a href="">{{$user->address}}</a><i class="fa fa-pencil"></i></p>
			</div>
		</div>

	@stop