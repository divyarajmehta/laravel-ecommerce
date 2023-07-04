@extends('admin_side.layouts.main')

@section('main-container')
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/">Home</a><i class="fa fa-angle-right"></i>Orders</li>
            </ol>
<div class="agile-grids">	
				<!-- tables -->
				
				<div class="agile-tables">
					<div class="w3l-table-info">
                        <h2>Orders</h2>
                        <table id="table">
						<thead>
						  <tr>
							<th>id</th>
							<th>customer id</th>
							<th>product id</th>
							<th>number of products</th>
                            <th>total price</th>
                            <th>update</th>
                            <th>delete</th>
						  </tr>
						</thead>
						<tbody>
                            @foreach($orders as $order)
						  <tr>
							<td>{{$order['id']}}</td>
							<td>{{$order['customer_id']}}</td>
							<td>{{$order['product_id']}}</td>
							<td>{{$order['qty']}}</td>
                            <td>{{$order['totalprice']}}</td>
							<td><button type="button" class="btn btn-success" onclick="window.location.href='/admin/updateorder'">Update</button></td>
							<td><button type="button" class="btn btn-md bg-danger dark text-white fw600 text-center">Delete</button></td>
						  </tr>
                          @endforeach
						</tbody>
					  </table>
				</div>
				<!-- //tables -->
			</div>
		@endsection