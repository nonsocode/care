@extends('layouts.admin')

@section('main')
	<div class="content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="header">
							<h4>All Clients</h4>
						</div>
						<div class="content">
							<div class="row">
								<div class="col-md-12">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>Client Id</th>
												<th>Name</th>
												<th>Phone</th>
												<th>Email</th>
												<th>Address</th>
												<th>No. of Requests</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($clients as $client)
												<tr class="clickable link" data-url="{{ route('clients.show',$client->id) }}">
													<td>{{$client->id}}</td>
													<td>{{$client->full_name}}</td>
													<td>{{$client->phone}}</td>
													<td>{{$client->email}}</td>
													<td>{{$client->address}}</td>
													<td>{{$client->driver_requests_count}}</td>
												</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="text-right">
							{!!$clients->links()!!}
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection