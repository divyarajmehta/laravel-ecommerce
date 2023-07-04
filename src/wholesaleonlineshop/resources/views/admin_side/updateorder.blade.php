@extends('admin_side.layouts.main')

@section('main-container')
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/">Home</a><i class="fa fa-angle-right"></i>Update Order</li>
            </ol>
<div class="agile-grids">	
				<!-- tables -->
				
				<div class="agile-tables">
					<div class="w3l-table-info">
                        <h2>Update Order</h2>
				</div>
				<!-- //tables -->
                <form class="form-horizontal">
                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">CUSTOMER ID</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control1" id="focusedinput" value="">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">PRODUCT ID</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control1" id="focusedinput" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">NUMBER OF PRODUCTS</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control1" id="focusedinput" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">TOTAL PRICE</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control1" id="focusedinput" value="">
                                </div>
                            </div>
                            <div class="text-center">
                                
                                    <button type="submit" class="btn btn-primary">Update Order</button>
                                
                            
                        </div>
                        </form>
			</div>
		@endsection