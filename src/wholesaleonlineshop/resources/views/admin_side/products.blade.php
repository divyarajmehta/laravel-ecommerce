@extends('admin_side.layouts.main')

@section('main-container')
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/">Home</a><i class="fa fa-angle-right"></i>Products</li>
            </ol>
<div class="agile-grids">	
				<!-- tables -->
				
				<div class="agile-tables">
					<div class="w3l-table-info">
                        <h2>Products <button class="float-right btn btn-primary" onclick="window.location.href='/admin/addproduct'">Add New Product</button></h2>
                        <table id="table">
						<thead>
						  <tr>
							<th>ID</th>
							<th>Name</th>
							<th>Price</th>
							<th>Stock</th>
							<th>Image</th>
                            <th>Update</th>
                            <th>Delete</th>
						  </tr>
						</thead>
						<tbody>
                            @foreach($products as $product)
						  <tr>
							<td>{{$product->id}}</td>
							<td>{{$product->name}}</td>
							<td>{{$product->price}}</td>
							<td>{{$product->stock}}</td>
							<td><img src="{{asset('uploads/products/'.$product->image)}}" width="100px" alt=""></td>
							<td><a href="{{url('/admin/updateproduct/'.$product->id)}}" class="btn btn-success" onclick="window.location.href='/admin/updateproduct'">Update</a></td>
							<td><a href="{{url('/admin/deleteproduct/'.$product->id)}}" class="btn btn-md bg-danger dark text-white fw600 text-center">Delete</a></td>
						  </tr>
                          @endforeach
						</tbody>
					  </table>
				</div>
				<!-- //tables -->
			</div>
		@endsection