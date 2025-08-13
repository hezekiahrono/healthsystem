<html>
<head>
<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.bootstrap.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.5.0/css/rowReorder.bootstrap.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
@extends('layouts.main')
@section('content')
	
<div class="p-5" style="margin-top:25px;">

<div class="d-flex justify-content-end mb-3">
	<a href="{{ route('users.index') }}" class="btn btn-warning">Back to Users</a>
</div>
	<table id="example" class="table table-striped table-bordered" style="width:100%">
		<thead>
			<tr>
			<th style="color:white;">Name</th>
				<th style="color:white;">Birthday</th>
				<th style="color:white;">Gender</th>
				<th style="color:white;">Schooling</th>
				<th style="color:white;">Education Level</th>
				<th style="color:white;">Sponsor</th>
				<th style="color:white;">Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($beneficiaries as $item)

				<tr style="background-color:white;">
					
				<td>{{ $item->name }}</td>

					<td>{{ $item->birthday }}</td>
					<td>{{ $item->gender }}</td>
					<td>{{ $item->schooling }}</td>
					<td>{{ $item->education }}</td>
					
					<td>{{ $item->user_id }}</td>
					
					
				<td>	

					<div class="button-container" style="display: flex;">
						
                           
                            <a href="{{ route('beneficiaries.edit', [$item->id]) }}" class="material-icons">&#xE03B;</a>
							
							<form action="{{ route('beneficiaries.destroy', $item->id)}}" method="POST">
                          {{csrf_field()}}
                          {{ method_field('DELETE')}}
                            <button type="submit" class="material-icons">&#xE872;</button>
                      </form>
							
							<a href="{{ route('beneficiaries.index')}}?user_id= {{$item->id}}" class="btn btn-info" >View sponsor</a>
                           
                        
</div>
</td>
				</tr>

			@endforeach
		</tbody>
        <tfoot>
            <tr style="background-color:white;">
            <th>Name</th>
				<th>Birthday</th>
				<th>Gender</th>
				<th>Schooling</th>
				<th>Education Level</th>
				<th>Sponsor</th>
				<th>Action</th>
            </tr>
        </tfoot>
	</table>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
		<script src="https://cdn.datatables.net/rowreorder/1.5.0/js/dataTables.rowReorder.js"></script>
		<script src="https://cdn.datatables.net/rowreorder/1.5.0/js/rowReorder.bootstrap.js"></script>
		<script>
new DataTable('#example', {
    rowReorder: true
});
			</script>
</body>
    </html>

    @endsection
