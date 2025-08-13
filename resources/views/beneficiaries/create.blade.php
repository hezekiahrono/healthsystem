<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
</head>
<body>
@extends('default')

@section('content')

	@if($errors->any())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				{{ $error }} <br>
			@endforeach
		</div>
	@endif
	<form action="{{ route('beneficiaries.create',['user_id'=>$user_id]) }}" method="GET">
    <select name="contribution">
            <option value="">--Please choose an option--</option>
              @foreach($contributions as $item)
              <option value="{{$item->contribution}}">{{$item->contribution}}</option>
              @endforeach
              </select>
              <button type="submit">Search</button>
</form>
 
  @if($contribution==200)
	{!! Form::open(['route' => 'beneficiaries.store']) !!}

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
			{{ Form::label('image', 'Upload Image', ['class'=>'form-label']) }}
			{{ Form::file('image', null, array('class' => 'form-control')) }}
		</div>
		

		<div class="mb-3">
		<input class="search form-control" type="text" name ="user_id" 
		 placeholder="Search here...">
</div>   
<script type="text/javascript">
    var path = "{{ route('autocomplete') }}";
    $('input.create').typeahead({
        source:  function (str, process) 
        {
          return $.get(path, { str: str }, function (data) {
                return process(data);
            });
        }
    });
</script>   
		
</div>
		{{ Form::submit('Create', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}
	@elseif($contribution==300)
	<div class="mb-3">
			{{ Form::label('gender', 'Gender', ['class'=>'form-label']) }}
			{{ Form::text('gender', null, array('class' => 'form-control')) }}
		</div>
    @else
   <h2>No Records</h2>
        @endif
		
		

@stop
</body>
</htmL>