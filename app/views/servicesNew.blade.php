
	@extends('includes.template')

	@section('content')

	<div class="servicesBrief">
			<h1 class="bigHeading">Add New Service</h1>

		</div>

		<div class="addNewContent">

		{{ Form::open(array('url' => 'servicesNew')) }}

				
				{{Form::text('title',null,array('placeholder'=>'Service Title'))}} <br>
				{{$errors->first('title','<p class="error">:message</p>')}}<br>
				
				<!-- <textarea class="textAreaNewContent" name="content" form="content" placeholder="Service Content"></textarea> -->
				{{Form::textarea('content',null,array('placeholder'=>'Content', "class"=>"textAreaNewContent"))}} <br>
				 <br>{{$errors->first('content','<p class="error">:message</p>')}}<br>

				{{Form::submit('Add New Service')}} <br>

		{{ Form::close() }}
		{{Session::get("error")}}
		
		</div>



	</div> <!-- end of container -->
	
	<div id="footer">
		<div id="footerContainer">
			<ul>
				<h4>About Us</h4>
				<li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation.</li>
			</ul>

			<ul>
				<h4>Our Partners</h4>
				<li class="partner"><u>Unarmd Innovations</u></li>
				<li>Lor ipsum at ullam ad deseri earum cum eligendi ltes.</li>
				<li class="partner"><u>Portal</u></li>
				<li>Lorem ipsum dolor ident quia dicpellendus nam nihil veritatis accusamus.</li>
			</ul>

			<ul>
				<h4>Site Map</h4>
				<li><u>Home</u></li>
				<li><u>Services</u></li>
				<li><u>Success Stories</u></li>
				<li><u>Blog</u></li>
			</ul>

			<ul>
				<h4>Contact Us</h4>
				<li>0213995533</li>
				<li>51 Cavendish Drive Auckland</li>
				<li>info@renaissancegroup.co.nz</li>
			</ul>
		</div>

	</div>
	<div id="copyright">
		<div class="copyrightContainer">
			<p>© 2012 Renaissance 2001 Ltd. All rights reserved.</p>	
		</div>
			
	</div>

	@stop
	