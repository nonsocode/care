@extends('layouts.admin')

@section('main')
<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="card">
					<div class="header">
						<h4 class="pull-left">Client Details</h4>
					</div>
					<div class="clearfix"></div>
					<div class="content">
						<div class="row">
							<div class="col-md-4">
								<div class="dr">
									<div class="small-title">Client ID</div>
									<div class="dr-data">{{$client->id}}</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="dr">
									<div class="small-title">Name</div>
									<div class="dr-data">{{$client->full_name}}</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="dr">
									<div class="small-title">Phone</div>
									<div class="dr-data">{{$client->phone}}</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8">
								<div class="dr">
									<div class="small-title">Address</div>
									<div class="dr-data">{{$client->address}}</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="dr">
									<div class="small-title">Email</div>
									<div class="dr-data">{{$client->email}}</div>
								</div>
							</div>
						</div>
					</div>
					<div class="content">
						<div class="row">
							<div class="col-md-12">
								<h5>Requests</h5>
							</div>
							<div class="col-md-12">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>Request Date</th>
											<th>Driver Type</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($client->driverRequests as $dr)
											<tr class="clickable link" data-url="{{route("driver-requests.show",[$dr->id])}}">
												<td>{{$dr->created_at}}</td>
												<td>{{$dr->driverTypeName}}</td>
											</tr>
										@endforeach
									</tbody>
								</table>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('script-links')
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
	@if(env('APP_ENV') == 'development')
		<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
	@endif
@endsection

@section('script')
<script type="text/javascript">
	jQuery(document).ready(function($) {
	});
</script>
@endsection