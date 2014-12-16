
	@extends('includes.template')

	@section('content')


<div class="headerImage">
			<img src="Images/headerimage.jpg" alt="">
		</div>
<!-- 		<img class="arrow" src="Images/arrow.png" alt=""> -->

		<div class="info">
			<span class="arrow"></span>
			<h1>How Do You Get The Service You Need?</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, aut, accusantium consequuntur harum libero earum numquam aliquid quaerat ipsam labore! Architecto, quia distinctio temporibus voluptatum ullam natus veniam cupiditate ex.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, aut, accusantium consequuntur harum libero earum numquam aliquid quaerat ipsam labore! Architecto, quia distinctio temporibus voluptatum ullam natus veniam cupiditate ex.</p>
			<a class="primary" href="{{URL::to('services')}}"><span>FIND OUT MORE</span></a>
		</div>

		<div class="whatWeOfferDesktop">
			<div class="secondaryService">
				<img src="Images/exampleimage1.jpg" alt="">
				<a class="secondary" href="{{URL::to('services')}}"><span>CHOICES IN COMMUNITY</span></a>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, dicta, odio, sed aut nostrum maiores incidunt repellat ullam similique accusantium doloribus neque laborum hic iure perspiciatis dignissimos debitis dolores vel?</p>
			</div>
			<div class="primaryService">
				<img src="Images/exampleimage2.jpg" alt="">
				<a class="primary" href="{{URL::to('services')}}"><span>SUPPORTED LIVING</span></a>
				<ul>
					<li>Not having to share with thirty other people.</li>
					<li>Doing things when you feel like it – eating, sleeping, cooking.</li>
					<li>Having the skills to look after yourself and stay safe.</li>
					<li>Having friends over to visit.</li>
					<li>Having a real job.</li>
					<li>Getting better at things like speaking up for yourself.</li>
					<li>Choosing what TV channel to watch.</li>
					<li>Being in charge of your own money.</li>
				</ul> 
			</div>
			<div class="secondaryService">
				<img src="Images/exampleimage3.jpg" alt="">
				<a class="secondary" href="{{URL::to('services')}}"><span>CONSULTANCY</span></a>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, dicta, odio, sed aut nostrum maiores incidunt repellat ullam similique accusantium doloribus neque laborum hic iure perspiciatis dignissimos debitis dolores vel?</p>
			</div>
		</div>

		<div class="whatWeOffer">
			<h1>WHAT WE OFFER</h1>

			<h3 class="servicesMain">SUPPORTED LIVING</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, aut, accusantium consequuntur harum libero earum numquam aliquid quaerat ipsam labore! Architecto, quia distinctio temporibus voluptatum ullam natus veniam cupiditate ex.Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
			<h3 class="servicesSecond">CHOICES IN COMMUNITY</h3>
			<h3 class="servicesSecond">CONSULTANCY</h3>
		</div>

		<div class="whyRenaissance">
			<h1 class="bigHeading">Why Renaissance</h1>
		
		<div class="flexcontent1">
			<div class="whyRenaissanceText">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, aut, accusantium consequuntur harum libero earum numquam aliquid quaerat ipsam labore! Architecto, quia distinctio temporibus voluptatum ullam natus veniam cupiditate ex.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, aut, accusantium consequuntur harum libero earum numquam aliquid quaerat ipsam labore! Architecto, quia distinctio temporibus voluptatum ullam natus veniam cupiditate ex.</p>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, aut, accusantium consequuntur harum libero earum numquam aliquid quaerat ipsam labore! Architecto, quia distinctio temporibus voluptatum ullam natus veniam cupiditate ex.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, aut, accusantium consequuntur harum libero earum numquam aliquid quaerat ipsam labore! Architecto, quia distinctio temporibus voluptatum ullam natus veniam cupiditate ex.</p>
			</div>

			<div class="whyRenaissanceTestimonials">
				<div class="Reliable">
					<i class="reliableicon" class="fa fa-thumbs-up"></i>
					<h4>RELIABLE</h4>
					<p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, vel, eveniet, ipsum recusandae"</p>
					<a href=""><span>READ MORE</span></a>
				</div>
				<div class="Organized">
					<i class="organizedicon" class="fa fa-line-chart"></i>
					<h4>ORGANINZED</h4>
					<p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, vel, eveniet, ipsum recusandae"</p>
					<a href=""><span>READ MORE</span></a>
				</div>
			</div>
		</div>
		</div>

	<div class="latestBlogPost">
			<h1 class="bigHeading">Latest News</h1>
			<div class="mobileBlogText">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, aut, accusantium consequuntur harum libero earum numquam aliquid quaerat ipsam labore! Architecto, quia distinctio temporibus voluptatum ullam natus veniam cupiditate ex.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, aut, accusantium consequuntur harum libero earum numquam aliquid quaerat ipsam labore! Architecto, quia distinctio temporibus voluptatum ullam natus veniam cupiditate ex.</p></div>
			<div class="desktopBlogText">
			<h3>Rachel's Story</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, aut, accusantium consequuntur harum libero earum numquam aliquid quaerat ipsam labore! Architectum dolor sit amet, consectetur adipisicing elit. Aliquam, aut, accusantium consequuntur harum libero eum dolor sit amet, consectetur adipisicing elit. Aliquam, aut, accusantium consequuntur harum libero eum dolor sit amet, consectetur adipisicing elit. Aliquam, aut, accusantium consequuntur harum libero eum dolor sit amet, consectetur adipisicing elit. Aliquam, aut, accusantium consequuntur harum libero eo,</p>
			</div>
			<a href=""><span>READ MORE</span></a>

			<div class="desktopBlogText">
			<h3>Choices In The Community</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, aut, accusantium consequuntur harum libero earum numquam aliquid quaerat ipsam labore! Architectum dolor sit amet, consectetur adipisicing elit. Aliquam, aut, accusantium consequuntur harum libero eum dolor sit amet, consectetur adipisicing elit. Aliquam, aut, accusantium consequuntur harum libero eum dolor sit amet, consectetur adipisicing elit. Aliquam, aut, accusantium consequuntur harum libero eum dolor sit amet, consectetur adipisicing elit. Aliquam, aut, accusantium consequuntur harum libero eo,</p>
			</div>
			<a href="" class="hide"><span>READ MORE</span></a>

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