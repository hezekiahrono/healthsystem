@extends('default')

@section('content')

	@if($errors->any())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				{{ $error }} <br>
			@endforeach
		</div>
	@endif
    
    <form action="{{ route('beneficiaries.search')}}" method="GET">
    <select name="contribution">
            <option value="">--Please choose an option--</option>
              @foreach($contributions as $item)
              <option value="{{$item->contribution}}">{{$item->contribution}}</option>
              @endforeach
              </select>
              </form>
              <button type="submit">Search</button>
              @if($contribution==200)
	<a href="{{ route('beneficiaries.create',['user_id'=>$user_id]) }}" class="btn btn-info">Add Beneficiary</a>
    @elseif($contribution==500)
   <h2>yesy</h2>
    @else
   <h2>No Records</h2>
        @endif
             
             
              

  
     
   
      



@stop