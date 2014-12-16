
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
					<h3>Staff Forms</h3>
				<ul class="forms">
					<li><a href="">Accessible Housing Contact Us</a> </li>
					<li><a href="">Application for Housing 2012 (word)</a> </li>
					<li><a href="">Application for Housing 2012 (PDF)</a> </li>	
					<li><a href="">Change of Personal Information (Excel)</a> </li>					
					<li><a href="">Change of Personal Information (PDF) </a> </li>	
					<li><a href="">Client Review Form - Version 1 </a> </li>	
					<li><a href="">Client Review Form - Version 2</a> </li>	
					<li><a href="">Exit Interview Questions</a> </li>
					<li><a href="">Expense Claim (Excel)</a> </li>
					<li><a href="">Expense Claim (PDF)</a> </li>
					<li><a href="">Hazard Identification Form</a> </li>
					<li><a href="">Incident Form</a> </li>
					<li><a href="">IR330</a> </li>
					<li><a href="">Leave Application (Excel)</a> </li>
					<li><a href="">Leave Application (PDF)</a> </li>
					<li><a href="">Travel Log</a> </li>
					



				</ul>

				<a class="addNew" href=""><span>ADD NEW FORM</span></a>
				</div>


				
			</div>
		</div>

	@stop