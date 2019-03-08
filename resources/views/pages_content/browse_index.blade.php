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