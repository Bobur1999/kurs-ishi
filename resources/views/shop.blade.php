    @extends('layouts/app', [ 'title' => 'shop'])
    @section('content')   
	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(image/2.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h2>Barcha kitoblar faqat siz uchun</h2>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<div id="fh5co-product">
		<div class="container">
			<div class="row">
				@foreach($books as $book)
					<div class="col-md-2 text-center animate-box">
						<div class="product">
							<div class="product-grid" style="background-image:url(/storage/{{$book->img}});">
								<div class="inner">
									<p>
										<a href="{{route('showBook',$book->id)}}" class="icon"><i class="icon-shopping-bag"></i></a>
										<a href="{{route('batafsil', $book->id)}}" class="icon"><i class="icon-eye"></i></a>
									</p>
								</div>
							</div>
							<div class="desc">
							<h3><a href="{{route('batafsil', $book->id)}}">{{$book->nom}}</a></h3>
								<span class="price">{{$book->narx}} so'm</span>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
    @endsection