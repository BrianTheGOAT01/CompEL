<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<title>Download</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	{{-- @include('csslink') --}}
	<link href="{{ asset('css/others/random.css') }}" rel="stylesheet">
	<link href="{{ asset('css/others/random.css') }}" rel="stylesheet">

	{{-- picture hover --}}
	<link href="{{ asset('css/picture_hover/normalize.css') }}" rel="stylesheet">
	<link href="{{ asset('css/picture_hover/set1.css') }}" rel="stylesheet">
	<link href="{{ asset('css/picture_hover/set2.css') }}" rel="stylesheet">
    <style>
    	.body_content{
    		margin: 3%;
    	}
    	.download-bg{
    		background: #E2E2E2;
    	}
    	
    	
    </style>
</head>

<body class="download-bg">
	

	<img src="img/thumbnail/logo1.png" class="download-logo" alt="">

    <div class="download_body_content">
		<div class="card shadow">
		  <div class="card-body download-grid">

		    <div class="download-grid-item1">
		    	<img class="hoverpic-img" src="img/pic1.jpeg" alt="img02"/>
		    </div>

		    <div class="download-grid-item2">

		    	<div class="download-header">
			    	<div class="col-xs-6">
						<h4>TO BUILD A FIRE</h4>
					</div>

					<div class="col-xs-6 right">
						<button class="clearbtn">Download <span class="glyphicon glyphicon-download-alt"></span></button>
					</div>
				</div>
				<br>
				<div class="download-details">
					<div class="col-lg-12">

					<p>
						To Build A Fire is one of Jack London’s most beloved short stories. A
						heart-breaking tale is set in the vast wintry landscape of the North. It endures as one of the greatest
						adventures ever written
					</p>
					</div>
				</div>
				
				<div class="download-info">
					<div class="col-xs-6">
						<p>Author :  JACK LONDON</p>
						<p>Genre : Short story, Adventure fiction</p>
					</div>

					<div class="col-xs-6">
						<p>Views : 000</p>
						<p>Date published :</p>
					</div>
				</div>

		    </div>

		  </div>
		</div>
	
		<br>
		<div class="card shadow">
		  <div class="card-body">
			<h3 class="left">Tutorial</h3>
			
			<div class="col-sm-4 col-sm-12">
			<video width="100%" height="240" controls>
			  <source src="video/mirai.mp4" type="video/mp4">
			  <source src="movie.ogg" type="video/ogg">
			  Your browser does not support the video tag.
			</video>
			</div>

			<div class="col-sm-4 col-sm-12">
			<video width="100%" height="240" controls>
			  <source src="video/mirai.mp4" type="video/mp4">
			  <source src="movie.ogg" type="video/ogg">
			  Your browser does not support the video tag.
			</video>
			</div>

			<div class="col-sm-4 col-sm-12">
			<video width="100%" height="240" controls>
			  <source src="video/mirai.mp4" type="video/mp4">
			  <source src="movie.ogg" type="video/ogg">
			  Your browser does not support the video tag.
			</video>
			</div>

		  </div>
		</div>
		
		<br>
		<div class="card shadow">
		  <div class="card-body">
		  	<h3 class="left">You may also like</h3>
		  	<div class="grid-hoverpic">

				@foreach($contents as $con)

				<figure class="effect-sadie">
					<img class="hoverpic-img" src="img/thumbnail/{{$con->thumbnail}}" alt="img02"/>
					<figcaption>
						<h2>{{$con->title}}</h2>
						<p class="">Author: {{$con->author}}</p>
						<a class="hoverpic-a" href="#">View more</a>
					</figcaption>			
				</figure>

				@endforeach

			</div>
		  </div>
		</div>

	{{-- for body_content --}}	
	</div>
	{{-- @include('srclink') --}}

	<script src="{{ asset('js/modernizr-custom.js') }}"></script>
	<script src="{{ asset('js/classie.js') }}"></script>
</body>

</html>

