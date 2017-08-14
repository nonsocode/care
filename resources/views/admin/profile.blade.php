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
						<hr>
						<div class="col-md-12">
							<h5>Change Password</h5>
							<form action="{{ route('profile.password') }}" method="POST">
								@if (session()->has('password_success'))
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
										<strong>Success</strong>{{session('passowrd_success','Password changed successfully')}}
									</div>
								@endif
								{{csrf_field()}}
								<div class="form-group {{$errors->has('password') ? "has-error" : ""}}">
									<input type="password" name="password" class="form-control" id="password" placeholder="New Password">
									@if($errors->has('password'))
										<div class="help-block">{{$errors->first('password')}}</div>
									@endif
								</div>
								<div class="form-group {{$errors->has('password') ? "has-error" : ""}}">
									<input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Re-type Password">
									@if ($errors->has('password_confirmation'))
										<div class="help-block">{{$errors->first('password_confirmation')}}</div>
									@endif
								</div>
								<div class="text-center"><button class="btn btn-success">Save</button></div>
							</form>
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
						<h4 class="title">Edit Profile</h4>
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
						<form action="{{ route('profile') }}" method="POST">
							{{csrf_field()}}
							<div class="row">
								<div class="col-md-6">
									<div class="form-group {{$errors->has('first_name')? "has-error":""}}">
										<label>First Name</label>
										<input type="text" name="first_name" class="form-control" placeholder="First Name" value="{{old('first_name',$user->first_name)}}">
										@if ($errors->has('first_name'))
											<div class="help-block">{{$errors->first("first_name")}}</div>
										@endif
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group {{$errors->has('last_name')? "has-error":""}}">
										<label>Last Name</label>
										<input type="text" class="form-control" name="last_name" placeholder="Last Name" value="{{old('last_name', $user->last_name)}}">
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
										<input type="text" class="form-control" name="username" placeholder="Username" value="{{old('username',$user->username)}}">
										@if ($errors->has('username'))
											<div class="help-block">{{$errors->first("username")}}</div>
										@endif
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group{{$errors->has('phone')? ' has-error':''}}">
										<label>Phone Number</label>
										<input type="text" class="form-control" name="phone" placeholder="Username" value="{{old('phone',$user->phone)}}">
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
										<input type="text" class="form-control" name="address" placeholder="Home Address" value="{{old('address', $user->address)}}">
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
										<textarea rows="5" class="form-control" name="bio" placeholder="Here can be your description">{{old('bio',$user->bio)}}</textarea>
									</div>
								</div>
							</div>

							<button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
							<div class="clearfix"></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection