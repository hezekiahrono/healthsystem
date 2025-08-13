@extends('default')

@section('content')

	@if($errors->any())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				{{ $error }} <br>
			@endforeach
		</div>
	@endif

	{{ Form::model($beneficiary, array('route' => array('benefiaciries.update', $beneficiary->id), 'method' => 'PUT')) }}

	<div class="mb-3">
			{{ Form::label('name', 'Name', ['class'=>'form-label']) }}
			{{ Form::text('name', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('birthday', 'Birthday', ['class'=>'form-label']) }}
			{{ Form::date('birthday',null, array('class' => 'form-control','id'=>'datetimepicker')) }}
		</div>

<div class="mb-3">
			{{ Form::label('schooling', 'Schooling?', ['class'=>'form-label']) }}
			{{ Form::text('schooling', null, array('class' => 'form-control')) }}
		</div>
		

<div class="mb-3">
			{{ Form::label('education', 'Education Level', ['class'=>'form-label']) }}
			{{ Form::text('education', null, array('class' => 'form-control')) }}
		</div>
		
		<div class="mb-3">
			{{ Form::label('gender', 'Gender', ['class'=>'form-label']) }}
			{{ Form::text('gender', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('user_id', 'User_id', ['class'=>'form-label']) }}
			{{ Form::text('user_id', app('request')->input('user_id'), array('class' => 'form-control','readonly'=>true)) }}
		</div>


		


		{{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}
@stop