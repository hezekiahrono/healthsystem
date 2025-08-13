@extends('layouts.master')

@section('title')
Edit
@endsection

@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Update</h4>
                <form action="{{url('aboutus-update/'.$aboutus->id)}}" method="POST">
        {{csrf_field()}}
        {{ method_field('PUT')}}
      <div class="modal-body">
       
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Title:</label>
            <input type="text" name="title" class="form-control" value="{{$aboutus->title}}">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Subtitle:</label>
            <input type="text" name="subtitle" class="form-control" value="{{$aboutus->subtitle}}">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Description:</label>
            <textarea class="form-control" name="description" rows="6" cols="5">{{$aboutus->description}}</textarea>
          </div>
      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary">Update</button>
      <!-- <a href="/aboutus" class="btn btn-danger">Cancel</a> -->
       <a href="{{url('aboutus')}}" class="btn btn-danger">Cancel</a>
      </div>
      </form>
</div>
</div>
</div>
</div>

@endsection