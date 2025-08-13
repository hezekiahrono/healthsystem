<!DOCTYPE html>
<html lang="en">
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

<div class="p-5">
<div class="d-flex justify-content-end mb-3"><a href="{{ route('users.create') }}" class="btn btn-info" style="margin-top:25px;">Create new user</a></div>
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr >
               <th style="color:white;">Name</th>
				<th style="color:white;">Birthday</th>
				<th style="color:white;">Id number</th>
				<th style="color:white;">Email</th>
				<th style="color:white;">Address</th>
				<th style="color:white;">Residence</th>
				<th style="color:white;">Estate</th>
				<th style="color:white;">Town</th>
				<th style="color:white;">County</th>
				<th style="color:white;">Occupation</th>
				<th style="color:white;">Gender</th>
				<th style="color:white;">Marital status</th>
				<th style="color:white;">Registration fee</th>
				<th style="color:white;">Contribution</th>
				<th style="color:white;">Phone</th>
				<th style="color:white;">Action</th>
            </tr>
        </thead>
        <tbody>
		@foreach($users as $user)
            <tr style="color:black; background-color:white;">
               <td style="color:black; background-color:white;">{{ $user->name }}</td>
					<td style="color:black; background-color:white;" >{{ $user->birthday }}</td>
					<td style="color:black; background-color:white;">{{ $user->id_number }}</td>
					<td style="color:black; background-color:white;">{{ $user->email }}</td>
					<td style="color:black; background-color:white;">{{ $user->address }}</td>
					<td style="color:black; background-color:white;">{{ $user->residence }}</td>
					<td style="color:black; background-color:white;">{{ $user->estate }}</td>
					<td style="color:black; background-color:white;">{{ $user->town }}</td>
					<td style="color:black; background-color:white;">{{ $user->county }}</td>
					<td style="color:black; background-color:white;">{{ $user->occupation }}</td>
					<td style="color:black; background-color:white;">{{ $user->gender }}</td>
					<td style="color:black; background-color:white;">{{ $user->marital_status }}</td>
					<td style="color:black; background-color:white;">{{ $user->registration_fee }}</td>
					<td style="color:black; background-color:white;">{{ $user->contribution }}</td>
					<td style="color:black; background-color:white;">{{ $user->phone }}</td>
					
					

					<td>
					<div class="button-container" style="display: flex;">
						
                            <!-- <a href="{{ route('users.show', [$user->id]) }}" class="btn btn-info">Show</a> -->
                            <a href="{{ route('users.edit', [$user->id]) }}" class="material-icons">&#xE03B;</a>
							<!-- <a href="{{ route('users.destroy', [$user->id]) }}" class="material-icons">&#xE872;</a> -->
							<form action="{{ route('users.destroy', $user->id)}}" method="POST">
                          {{csrf_field()}}
                          {{ method_field('DELETE')}}
                            <button type="submit" class="material-icons">&#xE872;</button>
                      </form>
							<a href="{{ route('spouses.index')}}?user_id= {{$user->id}}" class="btn btn-info">View spouse</a>
							<a href="{{ route('beneficiaries.index')}}?user_id= {{$user->id}}" class="btn btn-danger" >View beneficiary</a>
                           
                        
</div>
					</td>
            </tr>
			@endforeach
            
        </tbody>
        <tfoot>
            <tr>
                 <th>Name</th>
				<th>Birthday</th>
				<th>Id number</th>
				<th>Email</th>
				<th>Address</th>
				<th>Residence</th>
				<th>Estate</th>
				<th>Town</th>
				<th>County</th>
				<th>Occupation</th>
				<th>Gender</th>
				<th>Marital status</th>
				<th>Registration fee</th>
				<th>Contribution</th>
				<th>Phone</th>
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

