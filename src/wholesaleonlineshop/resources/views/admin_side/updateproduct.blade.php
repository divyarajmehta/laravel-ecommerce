@extends('admin_side.layouts.main')

@section('main-container')
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/">Home</a><i class="fa fa-angle-right"></i>Update Product</li>
            </ol>
<div class="agile-grids">	
				<!-- tables -->
				
				<div class="agile-tables">
					<div class="w3l-table-info">
                        <h2>Update Product</h2>
				</div>
				<!-- //tables -->
				<form class="form-horizontal" action="{{url('/admin/updateproduct/'.$product->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                            <div class="text-center">
                                <img src="{{asset('uploads/image/'.$product->image)}}" alt=""></div>
                                <div class="form-group">
                                    <label for="focusedinput" class="col-sm-2 control-label">Update Image</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="image" class="form-control1">
                                    </div>
                                </div>
                                
                            
                        
                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control1" id="focusedinput" name="name" value="{{$product->name}}">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Price</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control1" id="focusedinput" name="price" value="{{$product->price}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">stock</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control1" id="focusedinput" name="stock" value="{{$product->stock}}">
                                </div>
                            </div>
                            <div class="text-center">
                                
                                    <button type="submit" class="btn btn-primary">Update Product</button>
                                
                            
                        </div>
                        </form>
			</div>
		@endsection