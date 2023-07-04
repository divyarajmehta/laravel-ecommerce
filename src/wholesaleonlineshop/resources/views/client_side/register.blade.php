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
	<div class="contact py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			
			<!-- form -->
			<form method="POST" action="{{ route('register') }}">
				@csrf
				<div class="contact-grids1 w3agile-6">
					<div class="row">
						<div class="col-md-12 col-sm-12 contact-form1 form-group">
							<label class="col-form-label">Name</label>
							<input type="text" class="form-control" name="Name" placeholder="" required="">
							
						</div>
						
					</div>
                    <div class="row">
						<div class="col-md-12 col-sm-12 contact-form1 form-group">
							<label class="col-form-label">Date of Birth</label>
							<input type="text" class="form-control" name="Name" placeholder="" required="">
						</div>
                        
						
					</div>
                    <div class="row">
						<div class="col-md-12 col-sm-12 contact-form1 form-group">
							<label class="col-form-label">Mobile No.</label>
							<input type="text" class="form-control" name="Name" placeholder="" required="">
						</div>
                        
						
					</div>
                    <div class="row">
						<div class="col-md-12 col-sm-12 contact-form1 form-group">
							<label class="col-form-label">Email ID</label>
							<input type="text" class="form-control" name="Name" placeholder="" required="">
						</div>
                        
						
					</div>
                    <div class="row">
						<div class="col-md-12 col-sm-12 contact-form1 form-group">
							<label class="col-form-label">City</label>
							<input type="text" class="form-control" name="Name" placeholder="" required="">
						</div>
                        
						
					</div>
                    <div class="row">
						<div class="col-md-12 col-sm-12 contact-form1 form-group">
							<label class="col-form-label">Pin Code</label>
							<input type="text" class="form-control" name="Name" placeholder="" required="">
						</div>
                        
						
					</div>
                    <div class="row">
						<div class="col-md-12 col-sm-12 contact-form1 form-group">
							<label class="col-form-label">Address</label>
							<input type="text" class="form-control" name="Name" placeholder="" required="">
						</div>
                        
						
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12 contact-form1 form-group">
							<label class="col-form-label">Password</label>
							<input type="password" class="form-control" name="Name" placeholder="" required="">
						</div>
						
					</div>
                    <div class="row">
						<div class="col-md-12 col-sm-12 contact-form1 form-group">
							<label class="col-form-label">Confirm Password</label>
							<input type="password" class="form-control" name="Name" placeholder="" required="">
						</div>
						
					</div>
					<div class="contact-form">
						<input type="submit" value="register">
					</div>
				</div>
			</form>
			<!-- //form -->
		</div>
	</div>
	
        </body>
        </html>