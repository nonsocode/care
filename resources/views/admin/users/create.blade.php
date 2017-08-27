@extends('layouts.admin')

@section('main')
<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="header">
						<h4>Create User</h4>
					</div>
					<div class="content">
						<div class="col-md-8">
							@if (session()->has('success'))
								<div class="alert alert-success">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
									<strong>Success</strong> The user was successfully created
								</div>
							@endif
							<h5>Basic Details</h5>
								<form action="{{ route('users.store') }}" id="new-user-form" method="POST">
								{{csrf_field()}}
								<div class="row">
									<div class="col-md-6">
										<div class="form-group {{$errors->has('first_name')? "has-error":""}}">
											<label>First Name</label>
											<input type="text" name="first_name" class="form-control" placeholder="First Name" value="{{old('first_name')}}">
											@if ($errors->has('first_name'))
												<div class="help-block">{{$errors->first("first_name")}}</div>
											@endif
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group {{$errors->has('last_name')? "has-error":""}}">
											<label>Last Name</label>
											<input type="text" class="form-control" name="last_name" placeholder="Last Name" value="{{old('last_name')}}">
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
											<input type="text" class="form-control" name="username" placeholder="Username" value="{{old('username')}}">
											@if ($errors->has('username'))
												<div class="help-block">{{$errors->first("username")}}</div>
											@endif
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group{{$errors->has('phone')? ' has-error':''}}">
											<label>Phone Number</label>
											<input type="text" class="form-control" name="phone" placeholder="Username" value="{{old('phone')}}">
											@if ($errors->has('phone'))
												<div class="help-block">{{$errors->first("phone")}}</div>
											@endif
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="exampleInputEmail1">Email address</label>
											<input name="email" type="email" class="form-control" value="{{old('email')}}" placeholder="Email">
										</div>
									</div>
								</div>


								<div class="row">
									<div class="col-md-12">
										<div class="form-group{{$errors->has('address'?' has-error':'')}}">
											<label>Address</label>
											<input type="text" class="form-control" name="address" placeholder="Home Address" value="{{old('address')}}">
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
											<textarea rows="5" class="form-control" name="bio" placeholder="Here can be your description">{{old('bio')}}</textarea>
										</div>
									</div>
								</div>

								<button type="submit" class="btn btn-info btn-fill pull-right">Save User</button>
								<div class="clearfix"></div>
							</form>
						</div>
						<div class="col-md-4">
							<h5>Roles &amp; Permissions</h5>
							<select class="form-control" name="roles[]" form="new-user-form">
								<option></option>
								@foreach ($roles as $role)
									<option value="{{$role->name}}">{{$role->name}}</option>
								@endforeach
							</select>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('links')
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
@endsection

@section('script-links')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
@endsection
@section('script')
	<script type="text/javascript">
		$('select').select2();
	</script>
@endsection