@extends('default')

@section('content')

	<div class="d-flex justify-content-end mb-3">
	<a href="{{ route('users.index') }}" class="btn btn-warning">Back to Users</a>
	<a href="{{ route('spouses.create',['user_id'=>$user_id]) }}" class="btn btn-info">Add spouse</a>
		


</div>


	<table class="table table-bordered">
		<thead>
			<tr>
			<th>Name</th>
				<th>Birthday</th>
				<th>Id number</th>
				
				<th>Address</th>
				<th>Residence</th>
				<th>Estate</th>
				<th>Town</th>
				<th>County</th>
				<th>Occupation</th>
				<th>Gender</th>
				
				<th>Phone</th>
				<th>Spouse</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($spouse as $item)

				<tr>
					
				<td>{{ $item->name }}</td>

					<td>{{ $item->birthday }}</td>
					<td>{{ $item->idNumber }}</td>
					
					<td>{{ $item->address }}</td>
					<td>{{ $item->residence }}</td>
					<td>{{ $item->estate }}</td>
					<td>{{ $item->town }}</td>
					<td>{{ $item->county }}</td>
					<td>{{ $item->occupation }}</td>
					<td>{{ $item->gender }}</td>
					<td>{{ $item->phone }}</td>
					<td>{{ $item->user_id }}</td>
					
					
					

					<td>
						<div class="d-flex gap-2">
                            <a href="{{ route('spouses.show', [$item->id]) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('spouses.edit', [$item->id]) }}" class="btn btn-primary">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['spouses.destroy', $item->id]]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </div>
					</td>
				</tr>

			@endforeach
		</tbody>
	</table>

@stop
