@extends('layouts.admin')

@section('main')
<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-push-8">
				<div class="card card-user">
					<div class="image">
						<img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
					</div>
					<div class="content">
						<div class="author">
							<a href="#">
								<img class="avatar border-gray" src="{{$user->avatar or asset('img/faces/face-0.jpg')}}" alt="..."/>

								<h4 class="title">{{$user->full_name}}<br />
									<small>{{"@".$user->username}}</small>
								</h4>
							</a>
						</div>
						<p class="description text-center">
							{!!$user->bio!!}
						</p>
						<div class="text-center">
							<input type="hidden" name="blocked" value="0" form="user-form">
							<input type="checkbox" name="blocked" form="user-form" id="blocked" data-onstyle="warning" data-on="Blocked" data-off="Active" {{$user->blocked ? "checked":""}} value="1">
						</div>
					</div>
					<hr>
					<div class="text-center">
						<button href="#" class="btn btn-simple"><i class="fa fa-circle"></i></button>
						<button href="#" class="btn btn-simple"><i class="fa fa-circle"></i></button>
						<button href="#" class="btn btn-simple"><i class="fa fa-circle"></i></button>

					</div>
				</div>
			</div>
			<div class="col-md-8 col-md-pull-4">
				<div class="card">
					<div class="header">
						<h4 class="title">Basic Info</h4>
					</div>
					<div class="content">
						@if (session()->has('success'))
							<div class="alert alert-success">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<strong>Success</strong> Your profile was updated successfully
							</div>
						@endif
						@if ($errors->count())
							<div class="alert alert-danger">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<strong>Oops</strong> There was an error in the form. Pleas check the form and try again.
							</div>
						@endif
						<form action="{{route('users.update',[$user->id])}}" method="POST" id="user-form">
							{{csrf_field()}}
							{{method_field('PUT')}}
							<div class="row">
								<div class="col-md-6">
									<div class="form-group {{$errors->has('first_name')? "has-error":""}}">
										<label>First Name</label>
										<input type="text" name="first_name" class="form-control" disabled placeholder="First Name" value="{{old('first_name',$user->first_name)}}">
										@if ($errors->has('first_name'))
											<div class="help-block">{{$errors->first("first_name")}}</div>
										@endif
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group {{$errors->has('last_name')? "has-error":""}}">
										<label>Last Name</label>
										<input type="text" class="form-control" disabled name="last_name" placeholder="Last Name" value="{{old('last_name', $user->last_name)}}">
										@if ($errors->has('last_name'))
											<div class="help-block">{{$errors->first("last_name")}}</div>
										@endif
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-5">
									<div class="form-group {{$errors->has('username')? 'has-error':''}}">
										<label>Username</label>
										<input type="text" class="form-control" name="username" placeholder="Username" value="{{old('username',$user->username)}}" disabled>
										@if ($errors->has('username'))
											<div class="help-block">{{$errors->first("username")}}</div>
										@endif
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group{{$errors->has('phone')? ' has-error':''}}">
										<label>Phone Number</label>
										<input type="text" class="form-control" name="phone" placeholder="Username" value="{{old('phone',$user->phone)}}" disabled>
										@if ($errors->has('phone'))
											<div class="help-block">{{$errors->first("phone")}}</div>
										@endif
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="exampleInputEmail1">Email address</label>
										<input disabled type="email" class="form-control" value="{{$user->email}}" placeholder="Email">
									</div>
								</div>
							</div>


							<div class="row">
								<div class="col-md-12">
									<div class="form-group{{$errors->has('address'?' has-error':'')}}">
										<label>Address</label>
										<input type="text" class="form-control" name="address" placeholder="Home Address" value="{{old('address', $user->address)}}" disabled>
										@if ($errors->has('address'))
											<div class="help-block">
												{{$errors->first('address')}}
											</div>
										@endif
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>About Me</label>
										<textarea rows="5" class="form-control" disabled name="bio" placeholder="Here can be your description">{{$user->bio}}</textarea>
									</div>
								</div>
							</div>

							<hr>

							<div class="row">
								<div class="col-md-4">
									<div class="form-group{{$errors->has('roles'?' has-error':'')}}">
										<label for="">Roles</label>
										<select name="roles[]" id="roles" multiple class="form-control" required >
											@foreach ($roles as $role)
												<option {{in_array($role, $user->roles->pluck('name')->all()) ? "selected":""}} value="{{$role}}">{{$role}}</option>
											@endforeach
										</select>
										@if ($errors->has('roles'))
											<div class="help-block">{{$errors->first("roles")}}</div>
										@endif

									</div>
								</div>
								<div class="col-md-8">
									<div class="form-group{{$errors->has('permissions'?' has-error':'')}}">
										<label for="">Permissions</label>
										<select name="permissions[]" id="permissions" multiple class="form-control">
											@foreach ($permissions as $permission)
												<option {{in_array($permission,$user->permissions->pluck('name')->all()) ? "selected":""}} value="{{$permission}}">{{$permission}}</option>
											@endforeach
										</select>
										@if ($errors->has('permissions'))
											<div class="help-block">{{$errors->first("permissions")}}</div>
										@endif

									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-8">
									<div class="form-group">
										<label for="">Inherited Permissions</label>
										<p>
											@forelse ($user->getPermissionsViaRoles() as $permission)
												<span class="label label-info">{{$permission->name}}</span>
											@empty
												<span class="label label-default">none</span>
											@endforelse
										</p>
									</div>
								</div>

							</div>							

							<button type="submit" class="btn btn-info btn-fill pull-right">Save</button>
							<div class="clearfix"></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('links')
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
	<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@endsection

@section('script-links')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
	<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
@endsection
@section('script')
	<script type="text/javascript">
		$('select').select2();
		$('input:checkbox').bootstrapToggle();
	</script>
@endsection