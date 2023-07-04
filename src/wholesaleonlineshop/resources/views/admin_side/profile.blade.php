@extends('admin_side.layouts.main')

@section('main-container')
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/">Home</a><i class="fa fa-angle-right"></i>Profile</li>
            </ol>
<div class="agile-grids">	
				<!-- tables -->
				
				<div class="agile-tables">
					<h3>Profile</h3>
  	         <div class="tab-content">
                <div class="text-center">
                <img src="{{url('admin_side/images/in4.jpg')}}" class="img-circle" width="100px" alt="">
                <h4>{{$admin->name}}</h4>
                <h5><b>Administrator</b></h5><br>
            </div>
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" action="/admin/updateprofile" method="POST">
								@csrf
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Name</label>
									<div class="col-sm-10">
										<input type="text" name="name" readonly class="form-control1" id="focusedinput" value="{{$admin->name}}">
									</div>
								</div>
                                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Email</label>
									<div class="col-sm-10">
										<input type="email" name="email" class="form-control1" id="focusedinput" value="{{$admin->email}}">
									</div>
								</div>
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">New Password</label>
									<div class="col-sm-10">
										<input type="password" class="form-control1" id="inputPassword" name="password" placeholder="Enter New Password here">
									</div>
								</div>
								
								
								
                                <div class="text-center">
                                    
                                        <button type="submit" class="btn btn-primary">Update Profile</button>
                                    
								
                            </div>
							</form>
						</div>
					</div>
			
				</div>
				<!-- //tables -->
			</div>
		@endsection