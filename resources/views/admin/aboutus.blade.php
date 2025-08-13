
@extends('layouts.master')
@section('title')
About Us
@endsection

@section('content')

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">About Us</h1>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
       
      </div>
      <form action="/save-aboutus" method="POST">
        {{csrf_field()}}
      <div class="modal-body">
       
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Title:</label>
            <input type="text" name="title" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Subtitle:</label>
            <input type="text" name="subtitle" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Description:</label>
            <textarea class="form-control" name="description" id="message-text"></textarea>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Post</button>
      </div>
      </form>
    </div>
  </div>
</div>
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">About Us
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal" >Add</button>
                </h4>
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
              </div>
              <style>
                /* .w-10p{
                  width: 10% !important;
                  class="w-10p"
                } */
                </style>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="datatable" class="table table table-stripped" style="width:100%">
                    <thead class=" text-primary">
                      <!-- <th class="w-10p">Title</th> -->
                      <th>Title</th>
                      <th>Subtitle</th>
                      <th>Description</th>
                      <th col2="2">Action</th>
                    </thead>
                    <tbody>
                        @foreach($aboutus as $data)
                      <tr>
                        <td>{{$data->title}}</td>
                        <td>{{$data->subtitle}}</td>
                        <!-- <div style="height:10px; overflow:hidden;"> -->
                        <td>{{$data->description}}</td>
                       <!-- </div> -->
                        <td>
                            <a href="/aboutus-edit/{{$data->id}}" class="btn btn-success">Edit</a> 
                        </td>
                        <td>
                          <form action="{{url('aboutus-delete/'.$data->id)}}" method="POST">
                          {{csrf_field()}}
                          {{ method_field('DELETE')}}
                            <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection

@section('scripts')
@endsection
