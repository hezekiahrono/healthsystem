@extends('default')

@section('content')

	<div class="d-flex justify-content-end mb-3">
	<a href="{{ route('users.index') }}" class="btn btn-warning">Back to Users</a>
	<a href="{{ route('beneficiaries.create',['user_id'=>$user_id]) }}" class="btn btn-info">Add Beneficiary</a>
		


</div>


	<table class="table table-bordered">
		<thead>
			<tr>
			<th>Name</th>
				<th>Birthday</th>
				<th>Gender</th>
				<th>Schooling</th>
				<th>Education Level</th>
				<th>Sponsor</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($beneficiary as $item)

				<tr>
					
				<td>{{ $item->name }}</td>

					<td>{{ $item->birthday }}</td>
					<td>{{ $item->gender }}</td>
					<td>{{ $item->schooling }}</td>
					<td>{{ $item->education }}</td>
					
					<td>{{ $item->user_id }}</td>
					
					
					

					<td>
						<div class="d-flex gap-2">
                            <a href="{{ route('beneficiaries.show', [$item->id]) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('beneficiaries.edit', [$item->id]) }}" class="btn btn-primary">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['beneficiaries.destroy', $item->id]]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </div>
					</td>
				</tr>

			@endforeach
		</tbody>
	</table>

@stop
