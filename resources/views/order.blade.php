@extends('layouts.app',['title'=>'Order'])
@section('content')
<div id="fh5co-contact">
		<div class="container">
			<div class="">
				<div class="animate-box">
					<form action="{{route('orderStore')}}">
                            <h3>{{$book->nom}}</h3>
                            <p>{{$book->narx}} So'm</p>
                            <input type="hidden" name = "book_id" value = "{{$book->id}}">
						<div class="row form-group">
							<div class="col-md-6">
								<!-- <label for="fname">First Name</label> -->
								<input type="text" name="region" id="" class="form-control" placeholder="Region">
							</div>
							<div class="col-md-6">
								<!-- <label for="lname">Last Name</label> -->
								<input type="text" name="city" class="form-control" placeholder="City">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Email</label> -->
								<input type="text" name="street" class="form-control" placeholder="Street">
							</div>
						</div>

						

						<div class="form-group">
							<input type="submit" value="Order" class="btn btn-primary">
						</div>

					</form>		
				</div>
			</div>
			
		</div>
	</div>
@endsection