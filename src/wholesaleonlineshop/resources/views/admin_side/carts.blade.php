@extends('admin_side.layouts.main')

@section('main-container')
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/">Home</a><i class="fa fa-angle-right"></i>Carts </li>
            </ol>
<div class="agile-grids">	
				<!-- tables -->
				
				<div class="agile-tables">
					<div class="w3l-table-info">
                        <h2>Carts<a class="float-right btn btn-primary" onclick="window.location.href='/admin/addcart'">Add New Cart</a></h2>
                        <table id="table">
						<thead>
						  <tr>
							<th>id</th>
							<th>customer id</th>
							<th>product id</th>
							<th>number of products</th>
                            
                            <th>update</th>
                            <th>delete</th>
						  </tr>
						</thead>
						<tbody>
                            @foreach($carts as $cart)
						  <tr>
							<td>{{$cart->id}}</td>
							<td>{{$cart->user_id}}</td>
							<td>{{$cart->product_id}}</td>
							<td>{{$cart->qty}}</td>
                            
							<td><a href="{{url('/admin/updatecart/'.$cart->id)}}" class="btn btn-success">Update</a></td>
							<td><a href="{{url('/admin/deletecart/'.$cart->id)}}" class="btn btn-md bg-danger dark text-white fw600 text-center">Delete</a></td>
						  </tr>
                          @endforeach
						</tbody>
					  </table>
				</div>
				<!-- //tables -->
			</div>
		@endsection