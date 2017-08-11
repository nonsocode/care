@extends('layouts.admin')

@section('main')
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="header">
						<h4 class="title">Latest Driver Requests</h4>
						<p class="category">Most recent 10 requests</p>
					</div>
					<div class="content">
						<div class="recent-requests scroll-x">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>Name</th>
										<th>Email</th>
										<th>Phone</th>
										<th>Address</th>
										<th>Job Description</th>
										<th>LGA</th>
										<th>Driver Type</th>
										<th>Working Hours</th>
										<th>Start Date</th>
										<th>Frequency</th>
										<th>Expected Pay</th>
										<th>Call Time</th>
										<th>Notes</th>
										<th>Created At</th>
									</tr>
								</thead>
								<tbody>
									@forelse ($driverRequests as $dr)
										<tr>
											<td><div class="table-item">{{$dr->name}}</div></td>
											<td><div class="table-item">{{$dr->email}}</div></td>
											<td><div class="table-item">{{$dr->phone}}</div></td>
											<td><div class="table-item">{{$dr->address}}</div></td>
											<td><div class="table-item">{{$dr->job_description}}</div></td>
											<td><div class="table-item">{{$dr->lga->name}}</div></td>
											<td><div class="table-item">{{$dr->driverType->name}}</div></td>
											<td><div class="table-item">{{$dr->working_hours}}</div></td>
											<td><div class="table-item">{{$dr->start_date}}</div></td>
											<td><div class="table-item">{{$dr->frequency}}</div></td>
											<td><div class="table-item">{{$dr->pay}}</div></td>
											<td><div class="table-item">{{$dr->call_time}}</div></td>
											<td><span title="{{$dr->notes}}" data-toggle="tooltip"></span>{{str_limit($dr->notes,20)}}</td>
											<td><div class="table-item">{{$dr->created_at}}</div></td>
										</tr>
									@empty 
									    <tr>
									    	<td colspan="14" class="text-center"><h5>No Data Yet</h5></td>
									    </tr>
									@endforelse
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

