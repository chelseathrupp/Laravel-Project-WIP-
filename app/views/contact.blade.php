

	@extends('includes.template')

	@section('content')

<!-- 		<img class="arrow" src="Images/arrow.png" alt=""> -->

		<div class="servicesinfo">
			<h1>Make A Referral</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, aut, accusantium consequuntur harum libero earum numquam aliquid quaerat ipsam labore! Architecto, quia distinctio temporibus voluptatum ullam natus veniam cupiditate ex.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, aut, accusantium consequuntur harum libero earum numquam aliquid quaerat ipsam labore! Architecto, quia distinctio temporibus voluptatum ullam natus veniam cupiditate ex.</p>
			<a class="primary" href=""><span>MAKE A REFERRAL</span></a> <a class="secondary2" href="">SEE OUR SERVICES</a> 
		</div>

		
		<div class="contactBrief">
			<h1 class="bigHeading">Get In Contact With Us</h1>
			<p>To send us an enquiry please fill in the following form, and we will endeavour to reply within 24 hours</p>

			<div class="form1">


				{{ Form::open() }}
		
				{{Form::text('title',null,array('placeholder'=>'Title'))}} <br>

				{{Form::text('firstname',null,array('placeholder'=>'First Name'))}} <br>

				{{Form::text('lastname',null,array('placeholder'=>'Last Name'))}} <br>

				{{Form::text('companyname',null,array('placeholder'=>'Company Name'))}} <br>

				{{Form::text('emailaddress',null,array('placeholder'=>'Email Address'))}} <br>

				{{Form::text('phone',null,array('placeholder'=>'Phone Number'))}} <br>

				{{Form::text('alternativephone',null,array('placeholder'=>'Alternative Phone Number'))}} <br>

				
			
			</div>

			<div class="form2">
					
					<textarea name="address" form="usrform" placeholder="Address"></textarea>
					
					{{Form::text('subjectline',null,array('placeholder'=>'Subject Line'))}} 
					
					<textarea name="comment" form="usrform" placeholder="Your Query"></textarea>
					<br>

					{{Form::submit('ENQUIRE')}} <br>
					

				{{ Form::close() }}
			</div>
		
				
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
	