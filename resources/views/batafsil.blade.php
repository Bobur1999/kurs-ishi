@extends('layouts.app',['title'=>'Batafsil'])
@section('content')
<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(image/3.jpg);">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center">
				<div class="display-t">
					<div class="display-tc animate-box" data-animate-effect="fadeIn">
						<h1>Batafsil</h1>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<div id="fh5co-product">
	<div class="container">
    <div class="about-content">
            <div class="row animate-box">
                <div class="col-md-6">
                    <div class="desc">
                        <h3>Kitob haqida</h3>
                        <p>{{$book->qisqacha}}</p> 
                    </div>
                </div>
                <div class="col-md-6 ">
                    <img class="img-responsive" src="/storage/{{$book->img}}" width = "400px" alt="about">
                    <div class="col-md-3 col-md-offset-3 text-center fh5co-heading">
                    <span class="price"><h2>{{$book->narx}} som</h2></span> 
                    <a text="center" href="{{route('order',$book->id)}}" class="btn btn-primary  ">sotib olish</a>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>


@endsection