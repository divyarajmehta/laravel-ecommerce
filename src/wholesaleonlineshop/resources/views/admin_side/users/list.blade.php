@extends('admin_side.layouts.main')

@section('main-container')
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/">Home</a><i class="fa fa-angle-right"></i>Users</li>
            </ol>
<div class="agile-grids">	
				<!-- tables -->
				
				<div class="agile-tables">
					<div class="w3l-table-info">
<table id="table">
						<thead>
						  <tr>
							<th>id</th>
							<th>name</th>
							<th>Date of Birth</th>
							<th>mobile no</th>
							<th>email id</th>
                            <th>city</th>
							<th>pin code</th>
							<th>address</th>
							<th>Update</th>
							<th>Delete</th>
						  </tr>
						</thead>
						<tbody>
                            @foreach($users as $user)
						  <tr>
							<td>{{$user->id}}</td>
							<td>{{$user->name}}</td>
							<td>{{$user->dob}}</td>
							<td>{{$user->contact}}</td>
							<td>{{$user->email}}</td>
							<td>{{$user->city}}</td>
							<td>{{$user->pincode}}</td>
                            <td>{{$user->address}}</td>
							<td><a class="btn btn-success" href="{{url('/admin/updateuser/'.$user->id)}}">Update</a></td>
							<td><a class="btn btn-md bg-danger dark text-white fw600 text-center" href="{{url('/admin/deleteuser/'.$user->id)}}">Delete</a></td>
						  </tr>
                          @endforeach
						</tbody>
					  </table>
					  
</div>
</div>
@endsection