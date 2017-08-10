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
										<th></th>
									</tr>
								</thead>
								<tbody>
									@foreach (driverRequests as $dr)
										<tr>
											<td>$tr->name</td>
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
@endsection

