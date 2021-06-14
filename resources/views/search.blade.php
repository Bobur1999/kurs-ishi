@extends('layouts.app',['title'=>'search'])
@section('content')
<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(image/3.jpg);">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center">
				<div class="display-t">
					<div class="display-tc animate-box" data-animate-effect="fadeIn">
						<h1>Qidiruv</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
@if(!count($books))
    <div class="col-lg-9 p-2 alert alert-primary">
        Sizning "{{ request()->get('key') }}" so'rovingiz bo'yicha hech nima topilmadi.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif  
@foreach($books as $book)
    <div id="fh5co-product">
        <div class="container">
        <div class="about-content">
                <div class="row animate-box">
                    <div class="col-md-6">
                        <div class="desc">
                            <h3>Nomi:</h3>            <h2>{{$book->nom}}</h2>
                            <h3>Avtori:</h3>          <h2>{{$book->avtor}}</h2>
                            <h3>Nashriyoti:</h3>      <h2>{{$book->nashriyot}}</h2>
                            <h3>Tili:</h3>            <h2>{{$book->til}}</h2>
                            <h3>Yili:</h3>            <h2>{{$book->yili}}</h2>
                            <h3>Varaqsoni:</h3>       <h2>{{$book->varaqsoni}}</h2>
                            <h3>Ko'rishlar soni:</h3> <h2>{{$book->views}}</h2>

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
@endforeach

@endsection