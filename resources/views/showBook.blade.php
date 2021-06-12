@extends('layouts.app',['title'=>'Show Book'])
@section('content')
<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(image/3.jpg);">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center">
				<div class="display-t">
					<div class="display-tc animate-box" data-animate-effect="fadeIn">
						<h1>Ajoyib tanlov</h1>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	</header>

<div id="fh5co-product">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1 animate-box">
			<div class="item">
						<div class="active text-center">
							<figure>
								<img src="/storage/{{$book->img}}" width = "400px" alt="user">
							</figure>
						</div>
					</div>
				
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<h2>{{$book->nom}}</h2>
						<div class="col-md-10 col-md-offset-1">
							<span class="price"><h3>{{$book->narx}} So'm</h3></span>	
						</div>
						<p>
							<a href="{{route('order',$book->id)}}" class="btn btn-primary btn-outline btn-lg">Buy</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection