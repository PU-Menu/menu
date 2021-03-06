<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700|Merriweather:400italic,400' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="{{ URL::asset('/css/reset.css') }}"> <!-- CSS reset -->
	<link rel="stylesheet" href="{{ URL::asset('/css/style-sliding.css') }}"> <!-- Resource style -->
	<script src="{{ URL::asset('/js/modernizr.js') }}"></script> <!-- Modernizr -->
  	
	<title>Sliding Panels Template | CodyHouse</title>
</head>
<style>
	img{
		width: 100px;
		height: 100px;
	}
</style>
<body>
	<a class="cd-nav-trigger cd-text-replace" href="#primary-nav">Menu<span aria-hidden="true" class="cd-icon"></span></a>
	
	<div class="cd-projects-container">
		<ul class="cd-projects-previews">
			<li>
				<a href="#0">
					<div class="cd-project-title">
						<h2>活動</h2>
						<p>Brief description of the project here</p>
					</div>
				</a>
			</li>

			<li>
				<a href="#0">
					<div class="cd-project-title">
						<h2>菜單</h2>
						<p>Brief description of the project here</p>
					</div>
				</a>
			</li>
			
			<li>
				<a href="#0">
					<div class="cd-project-title">
						<h2>作者</h2>
						<p>Brief description of the project here</p>
					</div>
				</a>
			</li>
			
			<li>
				<a href="#0">
					<div class="cd-project-title">
						<h2>位置</h2>
						<p>Brief description of the project here</p>
					</div>
				</a>
			</li>
		</ul> <!-- .cd-projects-previews -->

		<ul class="cd-projects">
			<li>
				<div class="preview-image">
					<div class="cd-project-title">
						<h2>活動</h2>
						<p>Brief description of the project here</p>
					</div> 
				</div>

				<div class="cd-project-info">
					@yield('activity')
				</div> <!-- .cd-project-info -->
			</li>

			<li>
				<div class="preview-image">
					<div class="cd-project-title">
						<h2>菜單</h2>
						<p>Brief description of the project here</p>
					</div> 
				</div>

				<div class="cd-project-info">
				@yield('menu')
				</div> <!-- .cd-project-info -->
			</li>

			<li>
				<div class="preview-image">
					<div class="cd-project-title">
						<h2>作者</h2>
						<p>Brief description of the project here</p>
					</div> 
				</div>

				<div class="cd-project-info">
					@yield('author')
				</div> <!-- .cd-project-info -->
			</li>

			<li>
				<div class="preview-image">
					<div class="cd-project-title">
						<h2>位置</h2>
						<p>Brief description of the project here</p>
					</div> 
				</div>

				<div class="cd-project-info">
					@yield('location')
				</div> <!-- .cd-project-info -->
			</li>
		</ul> <!-- .cd-projects -->

		<button class="scroll cd-text-replace">Scroll</button>
	</div> <!-- .cd-project-container -->

	<nav class="cd-primary-nav" id="primary-nav">
		<ul>
			<li class="cd-label">Navigation</li>
			<li><a href="#0">The team</a></li>
			<li><a href="#0">Our services</a></li>
			<li><a href="#0">Our projects</a></li>
			<li><a href="#0">Contact us</a></li>
		</ul>
	</nav> <!-- .cd-primary-nav -->
<script src="{{ URL::asset('/js/jquery-2.1.1.js') }}"></script>
<script src="{{ URL::asset('/js/main-sliding.js') }}"></script> <!-- Resource jQuery -->
</body>
</html>