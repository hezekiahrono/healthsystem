@extends('default')

@section('content')

	@if($errors->any())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				{{ $error }} <br>
			@endforeach
		</div>
	@endif

	{{ Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT')) }}

		<div class="mb-3">
			{{ Form::label('name', 'Name', ['class'=>'form-label']) }}
			{{ Form::text('name', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('birthday', 'Birthday', ['class'=>'form-label']) }}
			{{ Form::text('birthday', null, array('class' => 'form-control')) }}
		</div>

<div class="mb-3">
			{{ Form::label('id_number', 'Id', ['class'=>'form-label']) }}
			{{ Form::text('id_number', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('email', 'Email', ['class'=>'form-label']) }}
			{{ Form::text('email', null, array('class' => 'form-control')) }}
		</div>

<div class="mb-3">
			{{ Form::label('address', 'Address', ['class'=>'form-label']) }}
			{{ Form::text('address', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('residence', 'Residence', ['class'=>'form-label']) }}
			{{ Form::text('residence', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('estate', 'Estate', ['class'=>'form-label']) }}
			{{ Form::text('estate', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('town', 'Town', ['class'=>'form-label']) }}
			{{ Form::text('town', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('county', 'County', ['class'=>'form-label']) }}
			{{ Form::text('county', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('occupation', 'Occupation', ['class'=>'form-label']) }}
			{{ Form::text('occupation', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('gender', 'Gender', ['class'=>'form-label']) }}
			{{ Form::text('gender', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('marital_status', 'marital status', ['class'=>'form-label']) }}
			{{ Form::text('marital_status', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('contribution', 'Contribution', ['class'=>'form-label']) }}
			{{ Form::text('contribution', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('phone', 'Phone', ['class'=>'form-label']) }}
			{{ Form::text('phone', null, array('class' => 'form-control')) }}
		</div>
		


		{{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}
@stop
