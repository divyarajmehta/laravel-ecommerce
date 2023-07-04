@extends('admin_side.layouts.main')

@section('main-container')
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/">Home</a><i class="fa fa-angle-right"></i>Invoices</li>
            </ol>
<div class="agile-grids">	
				<!-- tables -->
				
				<div class="agile-tables">
					<div class="w3l-table-info">
                        <h2>Invoices</h2>
						<table id="table">
						<thead>
						  <tr>
							<th>ID</th>
							<th>Customer ID</th>
							<th>Order ID</th>
                            <th>delete</th>
						  </tr>
						</thead>
						<tbody>
                            @foreach($invoices as $product)
						  <tr>
							<td>{{$product['id']}}</td>
							<td>{{$product['customer_id']}}</td>
							<td>{{$product['order_id']}}</td>
							<td><button type="button" class="btn btn-md bg-danger dark text-white fw600 text-center">Delete</button></td>
						  </tr>
                          @endforeach
						</tbody>
					  </table>
				</div>
				<!-- //tables -->
			</div>
		@endsection