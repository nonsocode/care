@extends('layouts.admin')

@section('main')
	@can('manage driver requests')
		<div class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="header">
								<h4 class="title">Requests Overview</h4>
							</div>
							<div class="content">
								<canvas id="request-graph"></canvas>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="card">
							<div class="header">
								<h4 class="title">Latest Driver Requests</h4>
								<p class="category">Most recent requests for drivers</p>
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
												{{-- <th>Working Hours</th> --}}
												<th>Start Date</th>
												<th>Frequency</th>
												<th>Expected Pay</th>
												{{-- <th>Call Time</th> --}}
												<th>Notes</th>
												<th>Created At</th>
											</tr>
										</thead>
										<tbody>
											@forelse ($driverRequests as $dr)
												<tr class="clickable link" data-url="{{route("driver-requests.show",[$dr->id])}}">
													<td><div class="table-item">{{$dr->name}}</div></td>
													<td><div class="table-item">{{$dr->email}}</div></td>
													<td><div class="table-item">{{$dr->phone}}</div></td>
													<td><div class="table-item">{{$dr->address}}</div></td>
													<td><div class="table-item">{{$dr->job_description}}</div></td>
													<td><div class="table-item">{{$dr->lga->name}}</div></td>
													<td><div class="table-item">{{$dr->driverType->name}}</div></td>
													{{-- <td><div class="table-item">{{$dr->working_hours}}</div></td> --}}
													<td><div class="table-item">{{$dr->start_date}}</div></td>
													<td><div class="table-item">{{$dr->frequency}}</div></td>
													<td><div class="table-item">{{$dr->pay}}</div></td>
													{{-- <td><div class="table-item">{{$dr->call_time}}</div></td> --}}
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
	@endcan
@endsection

@section('script-links')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
@endsection
@section('script')
	@can('manage driver requests')
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$.get(laroute.route('driver-summary'), function(data) {
					console.log(data);
					initGraph(data);
				});
				function initGraph(data){
					var ctx = document.getElementById('request-graph').getContext('2d');
					var chart = new Chart(ctx, {
					    // The type of chart we want to create
					    type: 'line',

					    // The data for our dataset
					    data: {
				            borderColor: 'rgb( 99,255, 132)',
				            datasets:[{
					            label: "Requests for Drivers",
					            data:data,
							}]
				        },
					    // Configuration options go here
						options: {
							spanGaps: false,
					        scales: {
					            xAxes: [{
					            	type : 'time',
					                time: {
					                    unit: 'day',
					                    displayFormats: {
					                        day: 'MMM D'
					                    }
					                },
					                ticks:{
					                	stepSize :1
					                }
					            }],
					            yAxes:[{
					            	ticks : {
					            		beginAtZero : true
					            	}
					            }]
					        }
					    }
					});
				}
			});
		</script>
	@endcan
@endsection
