@extends('admin_side.layouts.main')

@section('main-container')
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/">Home</a><i class="fa fa-angle-right"></i>Update User</li>
            </ol>
<div class="agile-grids">	
				<!-- tables -->
				
				<div class="agile-tables">
					<div class="w3l-table-info">
                        <h2>Update User</h2>
                        <form class="form-horizontal" action="{{url('/admin/updateuser/'.$user->id)}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control1" id="focusedinput" name="name" value="{{$user->name}}">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Date of Birth</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control1" id="focusedinput" name="dob" value="{{$user->dob}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Mobile No.</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control1" id="focusedinput" name="contact" value="{{$user->contact}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Email ID</label>
                                <div class="col-sm-10">
                                    <input type="email" name="email" class="form-control1" id="focusedinput" value="{{$user->email}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">City</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control1" id="focusedinput" name="city" value="{{$user->city}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">PIN Code</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control1" id="focusedinput" name="pincode" value="{{$user->pincode}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtarea1" class="col-sm-2 control-label">Address</label>
                                <div class="col-sm-10"><textarea name="address" id="txtarea1" rows="4" class="form-control">{{$user->address}}</textarea></div>
                            </div>
                            
                            
                            <div class="text-center">
                                
                                    <button type="submit" class="btn btn-primary">Update User</button>
                                
                            
                        </div>
                        </form>
				</div>
				<!-- //tables -->
			</div>
		@endsection