<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<?php
		if(!isset($title)){
			$title = "Home";
		}

	?>
	<title>Renaissance | {{$title}}</title>

	<script src="//use.typekit.net/rim2dsp.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>

	<!-- <link rel="stylesheet" href="Assets/CSS/styles.css"> -->

	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'>
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	{{HTML::style('stylesheets/CSS/styles.css')}}


</head>
<body>
	<div id="container">
		
		<div id="header">
		
			<nav id="secondaryNav" class="clear">
				
				<div class="mainSearch">
		      <span class="searchicon"><i class="fa fa-search"></i></span>
		      <input type="search" id="search" placeholder="Search..." />
		      	</div>

					<ul>
						<li><a href="{{URL::to('about')}}">ABOUT</a></li>
						<li><a href="{{URL::to('contact')}}">CONTACT</a></li>
						<li><a href="{{URL::to('login')}}">STAFF LOGIN</a></li>
					</ul>

					
				</nav> <!-- end of secondaryNav -->

			<div class="mobileNavHandle">
				<i class="fa fa-bars navHandle"></i>
				<!-- <i class="fa fa-search"></i> -->
			</div>


			<div id="mobileNav">
				<ul>
					<li><a href="">ABOUT US</a></li>
					<li><a href="">GET IN CONTACT</a></li>
					<li><a href="">OUR SERVICES</a></li>
					<li><a href="">SUCCESS STORIES</a></li>
					<li><a href="">BLOG</a></li>
					<li><a href="">CLIENT AREA</a></li>
					<li><a href="">STAFF LOGIN</a></li>

				</ul>
			</div>

			
			<nav id="mainNav">
					<ul>

						<?php $current = isset($current) ? $current : ""?>
						<li @if($current =="home") class="current" @endif ><a href="{{URL::to('home')}}">HOME</a></li>
						<li @if($current =="services") class="current" @endif ><a href="{{URL::to('services')}}">SERVICES</a></li>
						<li @if($current =="successstories") class="current" @endif ><a href="{{URL::to('successstories')}}">SUCCESS STORIES</a></li>
						<li @if($current=="blog") class="current" @endif ><a href="{{URL::to('blog')}}">BLOG</a></li>
						<li @if($current=="clientarea") class="current" @endif ><a href="{{URL::to('clientarea')}}">CLIENT AREA</a></li>
					</ul>

					<img class="logo" src="{{URL::to('Images/logo.png')}}" alt="">
				</nav> <!-- end of mainNav -->


		

		</div> <!-- end of header -->

		<nav id="fixedNav">
					<ul>

						<?php $current = isset($current) ? $current : ""?>
						<li @if($current =="home") class="current" @endif ><a href="{{URL::to('home')}}">HOME</a></li>
						<li @if($current =="services") class="current" @endif ><a href="{{URL::to('services')}}">SERVICES</a></li>
						<li @if($current =="successstories") class="current" @endif ><a href="{{URL::to('successstories')}}">SUCCESS STORIES</a></li>
						<li @if($current=="blog") class="current" @endif ><a href="{{URL::to('blog')}}">BLOG</a></li>
						<li @if($current=="clientarea") class="current" @endif ><a href="{{URL::to('clientarea')}}">CLIENT AREA</a></li>
					</ul>

					<img class="logo" src="{{URL::to('Images/logo.png')}}" alt="">
				</nav> <!-- end of mainNav -->


	
		@yield('content')
	
		
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<!-- // <script src="jquery.js"></script> -->
	{{HTML::script('js/jquery.jeditable.js')}}
	<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
	{{HTML::script('js/main.js')}}




	
</body>
	
	

</html>