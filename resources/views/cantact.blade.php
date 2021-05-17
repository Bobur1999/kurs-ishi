    @extends('layouts/app', [ 'title' => 'cantact'])
    @section('content')   
    <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/img_bg_2.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Biz bilan ALOQA</h1>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<div id="fh5co-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-md-push-1 animate-box">
					
					<div class="fh5co-contact-info">
						<h3>Bizning manzil:</h3>
						<ul>
							<li class="address">220100, Xorazm viloyati, Urganch shahri, <br>  Al-Xorazmiy ko'chasi, 110-uy</li>
							<li class="phone"><a href="tel://904333699">+99890 433 36 99, <br> </a><a href="tel://937462676">+99893 746 26 76</a></li>
							<li class="email"><a href="mailto:murodbek.0338@gmail.com">murodbek.0338@gmail.com <br></a><a href="mailto:boburbekrustamov1999@gmail.com">boburbekrustamov1999@gmail.com</a></li>
							
						</ul>
					</div>

				</div>
				<div class="col-md-6 animate-box">
					<h3>Aloqa qiling</h3>
					<form action="#">
						<div class="row form-group">
							<div class="col-md-6">
								<!-- <label for="fname">First Name</label> -->
								<input type="text" id="fname" class="form-control" placeholder="Isminggiz">
							</div>
							<div class="col-md-6">
								<!-- <label for="lname">Last Name</label> -->
								<input type="text" id="lname" class="form-control" placeholder="Familiyangiz">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Email</label> -->
								<input type="text" id="email" class="form-control" placeholder="Pochta manzilinggiz">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="subject">Subject</label> -->
								<input type="text" id="subject" class="form-control" placeholder="Xabaringgizning mavzusi">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="message">Message</label> -->
								<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Xabaringgizni kiriting"></textarea>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="Xabarni jo'natish" class="btn btn-primary">
						</div>

					</form>		
				</div>
			</div>
			
		</div>
	</div>

	<div id="map" class="animate-box" data-animate-effect="fadeIn"></div>
    @endsection