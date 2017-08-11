@extends('layouts.admin')

@section('main')
	<div class="content">
		<div class="container-fluid">
			<div class="col-md-12">
				<div class="card">
					<div class="">
						<table id="driver-requests-table" class="table table-hover">
							<thead>
								<tr>
									<th>Request id</th>
									<th>name</th>
									<th>phone</th>
									<th>address</th>
									<th>lga_name</th>
									<th>call_time</th>
									<th>job_description</th>
									<th>driver_type_name</th>
									<th>working_hours</th>
									<th>start_date</th>
									<th>frequency</th>
									<th>pay</th>
									<th>notes</th>
									<th>created_at</th>
								</tr>
							</thead>
							<tbody></tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('links')
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
@endsection

@section('style')
	<style type="text/css">	
	#driver-requests-table_wrapper{
		overflow-x: auto;
		padding: 10px;
	}
	</style>
@endsection

@section('script-links')
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
@endsection

@section('script')
	<script type="text/javascript">
		// $.ajax({
		// 	url: '{{route("driver-requests.index")}}',
		// 	headers : {
		// 		'X-CSRF-TOKEN' : '{{csrf_token()}}'
		// 	},
		// 	success: function(data){
		// 		console.log(data);
		// 		$('#driver-requests-table').dynatable({
		// 			dataset: {
		// 				...data
		// 			},
		// 			table: {
		// 			    defaultColumnIdStyle: 'trimDash'
		// 			},
		// 			features: {
		// 			    paginate: true,
		// 			    search: true,
		// 			    recordCount: true,
		// 			    perPageSelect: true
		// 			}
		// 		});
		// 	}
		// });
		$(document).ready(function() {
		    $('#driver-requests-table').DataTable({
		    	"ajax": "{{route("driver-requests.index")}}",
		        "columns": [
		            { "data": "id" },
		            { "data": "name" },
		            { "data": "phone" },
		            { "data": "address" },
		            { "data": "lga.name" },
		            { "data": "call_time" },
		            { "data": "job_description" },
		            { "data": "driver_type.name" },
		            { "data": "working_hours" },
		            { "data": "start_date" },
		            { "data": "frequency" },
		            { "data": "pay" },
		            { "data": "notes" },
		            { "data": "created_at" }
		        ]
		    });
		});
  
	</script>
@endsection

