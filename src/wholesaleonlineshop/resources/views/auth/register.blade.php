<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Register</title>
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
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						</div>
						
					</div>
                    <div class="row">
						<div class="col-md-12 col-sm-12 contact-form1 form-group">
							<label class="col-form-label">Date of Birth</label>
							<input type="text" class="form-control" @error('dob') is-invalid @enderror" name="dob" value="{{ old('dob') }}" required>

							@error('dob')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
                        
						
					</div>
                    <div class="row">
						<div class="col-md-12 col-sm-12 contact-form1 form-group">
							<label class="col-form-label">Mobile No.</label>
							<input type="text" class="form-control" @error('contact') is-invalid @enderror" name="contact" value="{{ old('contact') }}" required>

							@error('contact')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
                        
						
					</div>
                    <div class="row">
						<div class="col-md-12 col-sm-12 contact-form1 form-group">
							<label class="col-form-label">Email ID</label>
							
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						</div>
                        
						
					</div>
                    <div class="row">
						<div class="col-md-12 col-sm-12 contact-form1 form-group">
							<label class="col-form-label">City</label>
							<input type="text" class="form-control" @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required>

							@error('city')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
                        
						
					</div>
                    <div class="row">
						<div class="col-md-12 col-sm-12 contact-form1 form-group">
							<label class="col-form-label">Pin Code</label>
							<input type="text" class="form-control" @error('pincode') is-invalid @enderror" name="pincode" value="{{ old('pincode') }}" required>

							@error('pincode')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
                        
						
					</div>
                    <div class="row">
						<div class="col-md-12 col-sm-12 contact-form1 form-group">
							<label class="col-form-label">Address</label>
							<input type="text" class="form-control" @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required>

							@error('address')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
                        
						
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12 contact-form1 form-group">
							<label class="col-form-label">Password</label>
							<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						</div>
						
					</div>
                    <div class="row">
						<div class="col-md-12 col-sm-12 contact-form1 form-group">
							<label class="col-form-label">Confirm Password</label>
							<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
						</div>
						
					</div>
					
						<input type="submit" value="Register">
					
				</div>
			</form>
			<!-- //form -->
		</div>
	</div>
	
        </body>
        </html>