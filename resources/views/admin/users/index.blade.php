@extends('layouts.admin')

@section('main')
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="header">
							<h3>All Users
								<span class="pull-right"><a class="btn btn-info"><i  class="fa fa-plus"></i> Create User</a></span>
							</h3>
						</div>
						<div class="content">
							<table class="table table-hover users-table">
								<thead>
									<tr>
										<th>Id</th>
										<th>Name</th>
										<th>Email</th>
										<th>Blocked Status</th>
										<th>Roles</th>
										<th>Created</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
								@foreach ($users as $user)
									<tr id="user-{{$user->id}}">
										<td>{{$user->id}}</td>
										<td>{{$user->full_name}}</td>
										<td>{{$user->email}}</td>
										<td align="center">
											<span class="label label-md label-{{$user->blocked? "warning":"success"}}">
												{{$user->blocked  ? "Blocked":"Active"}}
											</span>
										</td>
										<td>{{$user->roles->implode('name',', ')}}</td>
										<td>{{$user->created_at}}</td>
										<td>
											<a class="btn btn-xs btn-warning {{$user->blocked ? "btn-fill" : ""}}">{{$user->blocked  ? "Unblock":"Block"}}</a>
											<a class="btn btn-xs btn-danger">Delete</a>
											<a href="{{ route('users.edit',[$user->id]) }}" class="btn btn-xs btn-info">Edit</a>
										</td>
									</tr>
								@endforeach
								</tbody>
							</table>
							<div class="text-right">
								{{$users->appends(['blocked'=> request()->blocked])->links()}}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection