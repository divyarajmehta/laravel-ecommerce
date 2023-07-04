@extends('admin_side.layouts.main')

@section('main-container')
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/">Home</a><i class="fa fa-angle-right"></i>Add Product</li>
            </ol>
<div class="agile-grids">	
				<!-- tables -->
				
				<div class="agile-tables">
					<div class="w3l-table-info">
                        <h2>Add Product</h2>
				</div>
				<!-- //tables -->
                <form class="form-horizontal" action="{{url('/admin/addproduct')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Add Image</label>
                                <div class="col-sm-10">
                                    <input type="file" name="image" class="form-control1">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control1" id="focusedinput" value="">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Price</label>
                                <div class="col-sm-10">
                                    <input type="text" name="price" class="form-control1" id="focusedinput" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Stock</label>
                                <div class="col-sm-10">
                                    <input type="text" name="stock" class="form-control1" id="focusedinput" value="">
                                </div>
                            </div>
                            <div class="text-center">
                                
                                    <button type="submit" class="btn btn-primary">Add Product</button>
                                
                            
                        </div>
                        </form>
			</div>
		@endsection