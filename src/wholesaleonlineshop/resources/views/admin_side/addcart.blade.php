@extends('admin_side.layouts.main')

@section('main-container')
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/">Home</a><i class="fa fa-angle-right"></i>Add Cart</li>
            </ol>
<div class="agile-grids">	
				<!-- tables -->
				
				<div class="agile-tables">
					<div class="w3l-table-info">
                        <h2>Add Cart</h2>
				</div>
				<!-- //tables -->
                <form class="form-horizontal" action="{{url('/admin/addcart')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                            
                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">User ID</label>
                                <div class="col-sm-10">
                                    <input type="text" name="user_id" class="form-control1" id="focusedinput" value="">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Product ID</label>
                                <div class="col-sm-10">
                                    <input type="text" name="product_id" class="form-control1" id="focusedinput" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Quantity</label>
                                <div class="col-sm-10">
                                    <input type="text" name="qty" class="form-control1" id="focusedinput" value="">
                                </div>
                            </div>
                            <div class="text-center">
                                
                                    <button type="submit" class="btn btn-primary">Add Cart</button>
                        </div>
                        </form>
			</div>
		@endsection