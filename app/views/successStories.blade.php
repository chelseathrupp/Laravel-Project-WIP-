
	@extends('includes.template')

	@section('content')

	<div class="headerImage">
			<img src="Images/headerimage.jpg" alt="">
		</div>


		<div class="successinfo">
			<h1 class="bigHeading">Hear Their Stories</h1>
		
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, aut, accusantium consequuntur harum libero earum numquam aliquid quaerat ipsam labore! Architecto, quia distinctio temporibus voluptatum ullam natus veniam cupiditate ex.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, aut, accusantium consequuntur harum libero earum numquam aliquid quaerat ipsam labore! Architecto, quia distinctio temporibus voluptatum ullam natus veniam cupiditate ex.</p>

		</div>


		@foreach($successstories as $successstory)
		<div class="successHolder">
			<h2>{{$successstory->title}}</h2>
			<img src="{{URL::to('Images/'.$successstory->photopath)}}" alt="">
			<p><span>"{{$successstory->quote}}"</span></p>
			<p>{{substr($successstory->content,0,500)}}...</p>

			<a class="primary" href="{{URL::to('successstories/'.$successstory->id)}}"><span>READ MORE</span></a>
			</div>
		@endforeach



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

