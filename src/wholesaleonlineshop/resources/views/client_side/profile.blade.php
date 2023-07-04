<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Wholesale Online Shop</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Electro Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link href="{{url('client_side/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!-- Bootstrap css -->
	<link href="{{url('client_side/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!-- Main css -->
	<link rel="stylesheet" href="{{url('client_side/css/fontawesome-all.css')}}">
	<!-- Font-Awesome-Icons-CSS -->
	<link href="{{url('client_side/css/popuo-box.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!-- pop-up-box -->
	<link href="{{url('client_side/css/menu.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!-- menu style -->
	<!-- //Custom-Files -->

	<!-- web fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //web fonts -->

</head>

<body>
    <div class="container-fluid pt-3 pl-5">
        <!-- logo -->
        <div class="col-md-12 logo_agile">
            <h1 class="text-center pl-5">
                <a href="/" class="font-weight-bold font-italic">
                    <img src="{{url('client_side/images/logo2.png')}}" alt=" " class="img-fluid">DV LED STORE
                </a>
            </h1>
        </div>
        <!-- //logo -->
    </div>

	<!-- banner-2 -->
\
	<!-- //banner-2 -->
	<!-- page -->
	
	<!-- //page -->

	<!-- contact -->
	<div class="contact py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			
			<!-- form -->
			<form action="/updateprofile" method="POST">
				@csrf
				<div class="contact-grids1 w3agile-6">
					<div class="row">
						<div class="col-md-12 col-sm-12 contact-form1 form-group">
							<label class="col-form-label">Name</label>
							<input type="text" class="form-control" name="name" placeholder="" value="{{$user->name}}">
						</div>
						
					</div>
                    <div class="row">
						<div class="col-md-12 col-sm-12 contact-form1 form-group">
							<label class="col-form-label">Date of Birth</label>
							<input type="text" class="form-control" name="dob" placeholder="" required="" value="{{$user->dob}}">
						</div>
                        
						
					</div>
                    <div class="row">
						<div class="col-md-12 col-sm-12 contact-form1 form-group">
							<label class="col-form-label">Mobile No.</label>
							<input type="text" class="form-control" name="contact" placeholder="" required="" value="{{$user->contact}}">
						</div>
                        
						
					</div>
                    <div class="row">
						<div class="col-md-12 col-sm-12 contact-form1 form-group">
							<label class="col-form-label">Email ID</label>
							<input type="email" class="form-control" name="email" placeholder="" required="" value="{{$user->email}}">
						</div>
                        
						
					</div>
                    <div class="row">
						<div class="col-md-12 col-sm-12 contact-form1 form-group">
							<label class="col-form-label">City</label>
							<input type="text" class="form-control" name="city" placeholder="" required="" value="{{$user->city}}">
						</div>
                        
						
					</div>
                    <div class="row">
						<div class="col-md-12 col-sm-12 contact-form1 form-group">
							<label class="col-form-label">Pin Code</label>
							<input type="text" class="form-control" name="pincode" placeholder="" required="" value="{{$user->pincode}}">
						</div>
                        
						
					</div>
                    <div class="row">
						<div class="col-md-12 col-sm-12 contact-form1 form-group">
							<label class="col-form-label">Address</label>
							<input type="text" class="form-control" name="address" placeholder="" required="" value="{{$user->address}}">
						</div>
                        
						
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12 contact-form1 form-group">
							<label class="col-form-label">New Password</label>
							<input type="password" class="form-control" name="password" placeholder="">
						</div>
						
					</div>
					<div class="contact-form">
						<input type="submit" value="Update Profile">
					</div>
				</div>
			</form>
			<!-- //form -->
		</div>
	</div>
	<!-- //contact -->

	<!-- map -->
	<!-- <div class="map mt-sm-0 mt-4">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d805196.5077734194!2d144.49270863101745!3d-37.97015423820711!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne+VIC%2C+Australia!5e0!3m2!1sen!2sin!4v1474020956974"
		    allowfullscreen></iframe>
	</div> -->
	<!-- //map -->

	<!-- middle section -->
	<!-- <div class="join-w3l1 py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<div class="row">
				<div class="col-lg-6">
					<div class="join-agile text-left p-4">
						<div class="row">
							<div class="col-sm-7 offer-name">
								<h6>Smooth, Rich & Loud Audio</h6>
								<h4 class="mt-2 mb-3">Branded Headphones</h4>
								<p>Sale up to 25% off all in store</p>
							</div>
							<div class="col-sm-5 offerimg-w3l">
								<img src="{{url('client_side/images/off1.png')}}" alt="" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 mt-lg-0 mt-5">
					<div class="join-agile text-left p-4">
						<div class="row ">
							<div class="col-sm-7 offer-name">
								<h6>A Bigger Phone</h6>
								<h4 class="mt-2 mb-3">Smart Phones 5</h4>
								<p>Free shipping order over $100</p>
							</div>
							<div class="col-sm-5 offerimg-w3l">
								<img src="{{url('client_side/images/off2.png')}}" alt="" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- middle section -->

        </body>
        </html>