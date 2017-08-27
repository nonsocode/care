<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h4 class="modal-title">Select A User</h4>
		</div>
		<div class="modal-body">
			@if ($users->count() > 1)
				<p>Some users with similar details were found in the database</p>
			@else
				<p>A user with similar details was found in the database</p>
			@endif
			<p>Select a User you would like to attach the request to.</p>
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Client Id</th>
						<th>Name</th>
						<th>Phone</th>
						<th>email</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($users as $user)
						<tr class="clickable user-selector" data-url='{{route("clients.attachRequest",["user" => $user->id, 'dr'=>$dr->id])}}'>
							<td>{{$user->id}}</td>
							<td>{{$user->full_name}}</td>
							<td>{{$user->phone}}</td>
							<td>{{$user->email}}</td>
						</tr>
					@endforeach
				</tbody>
			</table>	
		</div>
	</div>
</div>
